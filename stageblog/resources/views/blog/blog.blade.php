<x-app-layout>
    <a href="{{route('posts.create')}}" class="blog__new">New post</a>
    <section class="blog">
        <p class="blog__results">There are {{$posts->total()}} results</p>
    @foreach($posts as $post)
        <article class="post">
            <span class="post__wrapper">
                <h2 class="post__wrapper--title">{{$post->title}}</h2>
                @if($post->published == true)
                    <h2 class="post__wrapper--published">published</h2>
                @else     
                    <h2 class="post__wrapper--draft">draft</h2>
                @endif
            </span>
            <h3 class="post__author">{{$post->author}}</h3>
            <img class="post__image" src="{{$post->image}}" alt="">
            @if($post->stage == true)
                <h3 class="post__stage--one">Stage 2</h3>
            @else
                <h3 class="post__stage--two">Stage 1</h3>
            @endif
            <h3 class="post__intro">{{$post->intro}}
                <a class="post__readLink" href="/blog/{{$post->id}}">read more...</a>
            </h3>
        </article>
    @endforeach

    <div class="pagination">
        {{$posts->links()}}
    </div>
        
    </section>

</x-app-layout>