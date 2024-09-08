<div>
    <div class="flex mb-4 gap-4">
        <div class="w-12 h-12 items-center flex justify-center bg-gray-200 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="size-6">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
            </svg>

        </div>
        <div>
            <div>
                <a class="text-indigo-600 font-semibold" href="">
                    {{ $comment->user?->name }}
                </a>-
                <span class="text-gray-500">{{ $comment->created_at?->diffForHumans() }}
                </span>
            </div>
            @if($editing)
            <livewire:comment-create :commentModel="$comment" />
            @else
            <div class="text-gray-700">
                {{ $comment->comment }}

            </div>
            @endif
            <div class="space-x-2">
                <a wire:click.prevent="startReply" href="" class="text-sm text-indigo-600 ">reply</a>

                @if(\Illuminate\Support\Facades\Auth::user()?->id == $comment->user_id )
                <a href="" wire:click.prevent="startCommentEdit" class="text-sm text-blue-600 ">edit</a>
                <a href="" wire:click.prevent="deleteComment" class="text-sm text-red-600 ">delete</a>
                @endif
            </div>
            @if($replying)
            <livewire:comment-create :post="$comment->post" :parentComment="$comment" />
            @endif

          @if($comment->comments->count())
          <div class="mt-4">
            @foreach($comment->comments as $childComment)
            <livewire:comment-item :comment="$childComment" wire:key="comment-{{$childComment->id}}" />
            @endforeach
          </div>

          @endif
        </div>

    </div>

</div>
