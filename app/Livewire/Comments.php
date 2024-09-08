<?php

namespace App\Livewire;

use App\Models\Comment;
use App\Models\Post;
use Livewire\Component;
use Illuminate\Database\Eloquent\Collection;

class Comments extends Component
{
    public Post $post;

    protected $listeners = [
        'commentCreated' => '$refresh',
        'commentDeleted' => '$refresh'
    ];
    public function mount(Post $post)
    {
        $this->post = $post;
    }
    public function render()
    {
        $comments = $this->selectComments();
        return view(
            'livewire.comments',
            ["comments" => $comments]
        );
    }


    public function selectComments()
    {
        return  Comment::query()->where("post_id", "=", $this->post->id)
            ->with(["post", "user", "comments"])
            ->whereNull("parent_id")
            ->orderBy("created_at", "desc")
            ->get();
    }
}
