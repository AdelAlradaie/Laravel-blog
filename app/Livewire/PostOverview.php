<?php

namespace App\Livewire;



use App\Models\PostView;
use App\Models\UpvoteDownvote;
use Filament\Widgets\Widget;
use Illuminate\Database\Eloquent\Model;
class PostOverview extends Widget
{
    protected int | string | array $columnSpan = 3;
    public ?Model $record = null;
    protected function getViewData(): array
    {
        return [
            'viewCount'=>PostView::where('post_id',"=",$this->record->id)->count(),
            'upvotes'=>UpvoteDownvote::where("post_id","=",$this->record->id)->where("is_upvote","=",true)->count(),
            'downvotes'=>UpvoteDownvote::where("post_id","=",$this->record->id)->where("is_upvote","=",false)->count()
        ];
    }
    protected static string $view = 'livewire.post-overview';
}
