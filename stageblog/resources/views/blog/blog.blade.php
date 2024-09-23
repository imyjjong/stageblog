<x-app-layout>
    <a href="{{route('posts.create')}}" class="blog__new">New post</a>
    <section class="blog">
        <p class="blog__results">There are {{$posts->total()}} results</p>
    @foreach($posts as $post)
        <article class="post">
            <h2 class="post__title">{{$post->title}}</h2>
            <span class="post__wrapper">
                @if($post->stage == true)
                    <h3 class="post__stage--one">Stage 2</h3>
                @else
                    <h3 class="post__stage--two">Stage 1</h3>
                @endif
                @if($post->published == true)
                    <h2 class="post__wrapper--published">published</h2>
                @else     
                    <h2 class="post__wrapper--draft">draft</h2>
                @endif
            </span>
            <img class="post__image" src="{{$post->image}}" alt="">
            <span class="post__details">
                <h3 class="post__details--author">{{$post->author}}</h3>
                <p class="post__details--date">{{$post->created_at->format('d-m-y')}}</p>
            </span>
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