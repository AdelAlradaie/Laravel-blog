<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\View\View;
use App\Models\Category;
use App\Models\PostView;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PostController
{
    /**
     * Display a listing of the resource.
     */
    public function home(): View
    {
        //LatestPosts
        $latestPost = Post::where("active", "=", 1)
            ->where("published_at", "<", Carbon::now())
            ->orderBy("published_at", "desc")
            ->limit(1)
            ->first();


        //Show the most popular 3 posts based on upvotes
        $popularPosts = Post::query()->leftJoin("upvote_downvotes", "posts.id", "=", "upvote_downvotes.post_id")
            ->select("posts.*", DB::raw("COUNT(upvote_downvotes.id) as upvote_count"))
            ->where(function ($query) {
                $query->whereNull("upvote_downvotes.is_upvote")->orwhere("upvote_downvotes.is_upvote", "=", 1);
            })
            ->where('active', '=', 1)
            ->where("published_at", "<", Carbon::now())
            ->orderByDesc("upvote_count")
            ->groupBy("posts.id")
            ->limit(5)
            ->get();


        //if authorized - Show recomended posts based on user ipvotes
        $user = auth()->user();

        if ($user) {
            $leftJoin = "(SELECT category_post.category_id,category_post.post_id FROM upvote_downvotes JOIN
            category_post ON upvote_downvotes.post_id =
            category_post.post_id WHERE upvote_downvotes.is_upvote = 1 and upvote_downvotes.user_id = ?) as t";
            $recomendedPosts = Post::query()->leftJoin("category_post", "posts.id", "=", "category_post.post_id")
                ->leftJoin(DB::raw($leftJoin), function ($join) {
                    $join->on("t.category_id", "=", "category_post.category_id")
                        ->on("t.post_id", "<>", "category_post.post_id");
                })
                ->select("posts.*")
                ->where("posts.id", "<>", DB::raw("t.post_id"))
                ->setBindings([$user->id])
                ->limit(3)
                ->get();
        }
        //Not authorized - popular posts based on user views
        else {
            $recomendedPosts = Post::query()->leftJoin("post_views", "posts.id", "=", "post_views.post_id")
                ->select("posts.*", DB::raw("COUNT(post_views.id) as view_count"))
                ->where('active', '=', 1)
                ->where("published_at", "<", Carbon::now())
                ->orderByDesc("view_count")
                ->groupBy("posts.id")
                ->limit(3)
                ->get();
        }



        //Show recent categories with their latest posts
        $categories = Category::query()
            // ->with(["posts" => function ($query) {
            //     $query->orderByDesc("published_at")->limit(3);
            // }])
            ->whereHas("posts", function ($query) {
                $query->where("active", "=", 1)->whereDate("published_at", "<", Carbon::now());
            })
            ->select("categories.*")
            ->selectRaw('MAX(posts.published_at) as max_date')
            ->leftJoin("category_post", "categories.id", "=", "category_post.category_id")
            ->leftJoin("posts", "posts.id", "=", "category_post.post_id")
            ->orderByDesc("max_date")
            ->groupBy("categories.id")
            ->limit(5)
            ->get();
        return view("home", ["latestPost" => $latestPost, "popularPosts" => $popularPosts, "recomendedPosts" => $recomendedPosts, "categories" => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }



    /**
     * Display the specified resource.
     */
    public function show(Post $post, Request $request)
    {

        //

        if (!$post->active || $post->published_at > Carbon::now()) {
            throw new NotFoundHttpException();
        }
        $next = Post::query()->where("active", "=", true)
            ->whereDate("published_at", "<", Carbon::now())
            ->whereDate("published_at", "<", $post->published_at)
            ->orderBy("published_at", "desc")
            ->limit(1)
            ->first();
        $prev = Post::query()->where("active", "=", true)
            ->whereDate("published_at", "<", Carbon::now())
            ->whereDate("published_at", ">", $post->published_at)
            ->orderBy("published_at", "asc")
            ->limit(1)
            ->first();

        $user = $request->user();
        $token = Cookie::get("view_token");
        if (!$token) {
            $token = Str::random(50);
            Cookie::queue("view_token", $token, 180);
        }
        $recentView = PostView::where('post_id', "=", $post->id)
            ->where('token', $token)
            ->where('created_at', '>=', now()->subHours(3))
            ->first();
        if (!$recentView) {
            PostView::create([
                "ip_address" => $request->ip(),
                "user_agent" => $request->userAgent(),
                "post_id" => $post->id,
                "user_id" => $user?->id,
                "token" => $token
            ]);
        }


        return view("post.view", ["post" => $post, "next" => $next, "prev" => $prev]);
    }

    public function byCategory(Category $category)
    {
        $posts = Post::query()
            ->join('category_post', 'posts.id', '=', 'category_post.post_id')
            ->where('category_post.category_id', '=', $category->id)
            ->where('active', '=', true)
            ->whereDate('published_at', '<', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->paginate(10);

        return view("post.index", ["posts" => $posts, "category" => $category]);
    }
    public function search(Request $request)
    {
        $q = $request->get('q');

        $posts = Post::query()
            ->where('active', '=', true)
            ->whereDate('published_at', '<=', Carbon::now())
            ->orderBy('published_at', 'desc')
            ->where(function ($query) use ($q) {
                $query->where('title', 'like', "%$q%")
                    ->orWhere('body', 'like', "%$q%");
            })
            ->paginate(10);

        return view('post.search', ["posts"=>$posts]);
    }
}
