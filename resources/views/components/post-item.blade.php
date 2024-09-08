<article class="flex flex-col shadow my-4 bg-white">
    <!-- Article Image -->
    <a href="{{route('view',$post)}}" class="hover:opacity-75">
        <img src="{{$post->getThumbnail()}}" alt="{{ $post->title }}" class="aspect-[4/3] object-contain">
    </a>

    <div class="bg-white flex flex-col justify-start p-6">
        <div class="flex  gap-4">
            @foreach($post->categories as $category)
            <a  href="{{ route('by-category',$category->slug) }}" class="text-blue-700 text-sm font-bold uppercase pb-4">{{ $category->title }}</a>
            @endforeach
        </div>


        <a href="{{route('view',$post)}}" class="text-2xl font-bold hover:text-gray-700 pb-4">
            {{ $post->title }}
        </a>
        @if($showAuthor)
        <p href="#" class="text-sm  ">
            By <a href="#" class="font-semibold hover:text-gray-800">
                {{ $post->user?->name }}
            </a>, Published on {{ $post->getFormattedDate() }} | {{ $post->human_read_time }}
        </p>
        @endif
        <a href="{{route('view',$post)}}" class="">{{ $post->shortBody() }}</a>

    </div>
    <div class="mt-auto p-4">
        <a href="{{route('view',$post)}}" class="uppercase  text-gray-800 hover:text-black">Continue Reading <i
            class="fas fa-arrow-right"></i></a>
    </div>
</article>
