<nav class="header__navigation">
    <ul class="header__navigation--list">
        <li class="@if(Route::currentRouteName() == 'blog.index') header__navigation--list-active @else header__navigation--list-item @endif">
            <a href="{{ route('blog.index') }}">Blog</a>
        </li>
            <li class="@if(Route::currentRouteName() == 'about.about') header__navigation--list-active @else header__navigation--list-item @endif">
                <a href="{{ route('about') }}">About</a>
        </li>
            <li class="@if(Route::currentRouteName() == 'contact.form') header__navigation--list-active @else header__navigation--list-item @endif">
                <a href="{{ route('contact.form') }}">Contact</a>
        </li>
        <li class="@if(Route::currentRouteName() == 'blog.stageone') header__navigation--list-active @else header__navigation--list-item @endif header__navigation--list-button">
            Stage
            <div class="header__navigation--list-wrapper">
                <a href="{{ route('blog.stageone') }}">Stage 1</a>
                <a href="{{ route('blog.stagetwo') }}">Stage 2</a>
            </div>
        </li>
    </ul>
    <span class="header__navigation--item">
        @guest
        <p class="header__navigation--auth">ur a guest babes</p>
        @endguest
        @auth
        <p class="header__navigation--auth">{{Auth::user()->name}}</p>
        @endauth
    </span>
</nav>