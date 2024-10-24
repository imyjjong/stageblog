<x-app-layout>
    <a href="{{route('posts.create')}}" class="blogs__new">New post</a>
    <section class="blogs">
        <p class="blogs__results">There are {{$posts->total()}} results</p>
    @foreach($posts as $post)
        <article class="post">
            <a href="{{ route('posts.show', $post)}}" class="post__link">
                <div class="post__blog">
                    <span class="post__details">
                        <img src="{{ $post->authorimage }}" alt="" class="post__details--image">
                        <h3 class="post__details--author">{{$post->author}}</h3>
                        <p class="post__details--date">{{$post->created_at->format('d-m-y')}}</p>
                    </span>
                    <h3 class="post__intro">{{$post->intro}}</h3>
                    <span class="post__wrapper">
                        @if($post->stage == true)
                            <h3 class="post__stage--one">Stage 2</h3>
                        @else
                            <h3 class="post__stage--two">Stage 1</h3>
                        @endif
                        @if($post->published == true)
                            <h3 class="post__wrapper--published">published</h3>
                        @else     
                            <h3 class="post__wrapper--draft">draft</h3>
                        @endif
                    </span>
                    @if(isset($post->image))
                        <img class="post__image" src="{{$post->image}}" alt="">
                    @endif
                </div>
            </a>
            <div class="post__comments">
                <form action="{{route('comments.store', $post)}}" method="POST" class="post__comments--form">
                    @csrf
                    <input name="author" type="hidden" value="{{Auth::user()->name}}">
                    <input name="image" type="hidden" value="{{Auth::user()->image}}">
                    <input class="post__comments--input" type="text" name="comment">
                    <input class="post__comments--submit" type="submit" value="Send">
                </form>
            </div>
        </article>
    @endforeach
    <div class="pagination">
        {{$posts->links()}}
    </div>
        
    </section>

</x-app-layout>