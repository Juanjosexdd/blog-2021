@props(['post'])
<article class="mb-8 bg-white shadow-lg rounded-lg overflow-hidden">
    @if ($post->image)       
        <img class="w-full h-80 object-cover object-center" src="{{Storage::url($post->image->url)}}" alt="">
    @else
        <img class="w-full h-80 object-cover object-center" src="https://cdn.pixabay.com/photo/2016/11/19/18/57/godafoss-1840758_960_720.jpg" alt="">
    @endif
    <div class="px-6 py-4">
        <h1 class="font-bold text-xl mb-2">
            <a href="{{route('posts.show', $post)}}">{{$post->name}}</a>
        </h1>
        <div class="text-gray-700 text-base">
            {!!$post->extract!!}
        </div>
        <div class="px-6 pt-4 pb-2">
            @foreach ($post->tags as $tag)
                <a href="{{route('posts.tag', $tag)}}" class="inline-block text-sm text-grey-700 mr-2 bg-gray-200 rounded-full py-1 px-3">{{$tag->name}}</a>
            @endforeach
        </div>
    </div>
</article>