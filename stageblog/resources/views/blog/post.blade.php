<x-app-layout>
    <section class="blog">
        <div class="blog__media">
            <figure class="blog__media--figure">
                <img src="{{$post->image}}" alt="" class="blog__media--image">
            </figure>
        </div>
        <div class="blog__wrapper">
            <article class="blog__info">
                <span class="blog__info--details">
                    <h2 class="blog__info--details-author">{{$post->author}}</h2>
                    <h3 class="blog__info--details-date">{{$post->created_at->format('d-m-y')}}</h3>
                </span>
                <p class="blog__info--description">{{$post->description}}</p>
                <span class="blog__info--wrapper">
                    <h3 class="blog__info--wrappper-stage">{{$post->stage}}</h3>
                    <h3 class="blog__info--wrapper-published">{{$post->published}}</h3>
                </span>
            </article>
            <div class="blog__comments">
                @if($post->comments->isEmpty())
                    <p class="blog__comments--empty">There are no comments yet</p>
                @else
                    @foreach($comments as $comment)
                        <article class="blog__comment">
                            <span class="blog__comment--wrapper">
                                <h3 class="blog__comment--wrapper-author">{{$comment->author}}</h3>
                                <h3 class="blog__comment-wrapper-date">{{$comment->created_at->format('d-m-y')}}</h3>
                            </span>
                            <p class="blog__comment--text">{{$comment->comment}}</p>
                        </article>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
</x-app-layout>