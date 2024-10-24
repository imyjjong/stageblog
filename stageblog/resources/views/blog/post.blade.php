<x-app-layout>
    <section class="blog">
        <div class="blog__media">
        @if(isset($post->image))
            <figure class="blog__media--figure">
                <img src="{{$post->image}}" alt="" class="blog__media--image">
            </figure>
        @else
            <figure class="blog__media--figure">
                <h3 class="blog__media--empty">
                    No photo
                </h3>
            </figure>
        @endif
        </div>
        <div class="blog__wrapper">
            <article class="blog__info">
                <span class="blog__info--details">
                    <img src="{{$post->authorimage}}" alt="" class="blog__info--details-image">
                    <h2 class="blog__info--details-author">{{$post->author}}</h2>
                    <h3 class="blog__info--details-date">{{$post->created_at->format('d-m-y')}}</h3>
                </span>
                <p class="blog__info--description">{{$post->description}}</p>
                <span class="blog__info--wrapper">
                    @if($post->stage == true)
                        <h3 class="blog__info--wrapper-one">Stage 2</h3>
                    @else
                        <h3 class="blog__info--wrapper-two">Stage 1</h3>
                    @endif
                    @if($post->published == true)
                        <h3 class="blog__info--wrapper-published">published</h3>
                    @else     
                        <h3 class="blog__info--wrapper-draft">draft</h3>
                    @endif
                </span>
            </article>
            <div class="blog__comments">
                @if($post->comments->isEmpty())
                    <p class="blog__comments--empty">There are no comments yet</p>
                @else
                    @foreach($comments as $comment)
                        <article class="blog__comment">
                            <span class="blog__comment--wrapper">
                                <img src="{{$comment->image}}" alt="" class="blog__comment--image">
                                <h3 class="blog__comment--wrapper-author">{{$comment->author}}</h3>
                            </span>
                            <p class="blog__comment--text">{{$comment->comment}}</p>
                            <h3 class="blog__comment--date">{{$comment->created_at->format('d-m-y')}}</h3>
                        </article>
                    @endforeach
                @endif
            </div>
            <div class="blog__commentForm">
                <form action="{{route('comments.store', $post)}}" method="POST" class="blog__commentForm--form">
                    @csrf
                    <input name="author" type="hidden" value="{{Auth::user()->name}}">
                    <input name="image" type="hidden" value="{{Auth::user()->image}}">
                    <input class="blog__commentForm--input" type="text" name="comment">
                    <input class="blog__commentForm--submit" type="submit" value="Send">
                </form>
            </div>
        </article>
        </div>
    </section>
</x-app-layout>