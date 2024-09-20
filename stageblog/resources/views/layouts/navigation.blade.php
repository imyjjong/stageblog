<nav class="header__navigation">
    <ul class="header__navigation--list">
        <li class="@if(Route::currentRouteName() == 'blog.index') header__navigation--list-active @else header__navigation--list-item @endif">
            <a href="{{ route('blog.index') }}">Blog</a>
    </li>
        <li class="@if(Route::currentRouteName() == 'about') header__navigation--list-active @else header__navigation--list-item @endif">
            <a href="{{ route('about') }}">About</a>
    </li>
        <li class="@if(Route::currentRouteName() == 'contact.form') header__navigation--list-active @else header__navigation--list-item @endif">
            <a href="{{ route('contact.form') }}">Contact</a>
    </li>
    </ul>
</nav>