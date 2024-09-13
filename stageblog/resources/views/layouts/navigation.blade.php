<nav class="p-4 bg-stone-950/[0.4]">
    <ul class="flex justify-center items-center gap-12 text-white text-lg font-semibold">
        <li class="@if(Route::currenRouteName() == 'blog.index') text-voilet-400 @else text-white @endif"><a href="{{ route('blog.index') }}">Blog</a></li>
        <li class="@if(Route::currenRouteName() == 'about.about') text-voilet-400 @else text-white @endif"><a href="{{ route('about.about') }}">About</a></li>
        <li class="@if(Route::currenRouteName() == 'contact.form') text-voilet-400 @else text-white @endif"><a href="{{ route('contact.form') }}">Contact</a></li>
    </ul>
</nav>