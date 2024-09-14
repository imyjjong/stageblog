<x-app-layout>
    <section class="flex flex-col justify-center items-center p-4 gap-4">
    @foreach($posts as $post)
        <article class="bg-stone-950 p-4 text-white">
            <h2>{{$post->title}}</h2>
            <h3>{{$post->intro}}</h3>
            <p>{{$post->description}}</p>
            <h3>{{$post->author}}</h3>
            <h2>{{$post->published}}</h2>
        </article>
    @endforeach
    </section>

</x-app-layout>