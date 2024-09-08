<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\UpvoteDownvote;
use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;
use App\Models\Comment;
use function Pest\Laravel\get;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ["title", "slug", "thumbnail", "body", "active", "published_at", "user_id", "meta_title", "meta_description"];
    protected $casts = [
        "published_at" => "datetime"
    ];
    public function user(): BelongsTo
    {
        return  $this->belongsTo(User::class);
    }
    public function categories(): BelongsToMany
    {
        return  $this->belongsToMany(Category::class);
    }
    public function shortBody($words=30): string
    {
        return Str::words(strip_tags($this->body), $words);
    }
    public function getFormattedDate()
    {

        return $this->published_at->format("f jS y");
    }
    public function getThumbnail()
    {
        if (Str::startsWith($this->thumbnail, 'http')) {
            return $this->thumbnail;
        }
        return "/storage/$this->thumbnail";
    }
    public function humanReadTime():Attribute{
        return new Attribute(
            get:function($value,$attributes){
                $words=Str::wordCount(strip_tags($attributes['body']));
                $minutes = ceil($words/200);

                return $minutes. ' '.str('min')->plural($minutes) . ', '. $words.' '.str('word')->plural($words);
            }
        );

    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
