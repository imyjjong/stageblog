<x-app-layout>
    <a href="{{route('posts.create')}}" class="bg-accent text-white px-4 py-2">new post</a>
    <section class="flex flex-col justify-center items-center p-4 gap-4 w-5/12">
        <p class="text-stone-400">There are {{$posts->total()}} results</p>
    @foreach($posts as $post)
        <article class="bg-stone-950 p-4 text-white w-full flex flex-col justify-center items-center gap-4">
            <span class="flex justify-center items-center gap-8">
                <h2 class="text-3xl font-semibold">{{$post->title}}</h2>
                @if($post->published == true)
                    <h2 class="bg-accent rounded px-2 py-1">published</h2>
                @else     
                    <h2 class="bg-blue-300 rounded px-2 py-1">draft</h2>
                @endif
            </span>
            <h3>{{$post->author}}</h3>
            <img class="w-full h-80 object-cover" src="{{$post->image}}" alt="">
            <h3 class="text-xl">{{$post->intro}}
                <a class="text-purple-200" href="/blog/{{$post->id}}">read more...</a>
            </h3>
        </article>
    @endforeach

    {{$posts->links()}}
    </section>

</x-app-layout>