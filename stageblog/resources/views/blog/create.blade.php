<x-app-layout>
    <p class="form__title">form</p>
    <form class="form" action="{{route('posts.store')}}" method="POST">
        @csrf
        <input type="text" placeholder="title" name="title" class="form__input">
        <input type="text" placeholder="intro" name="intro" class="form__input">
        <input type="text" placeholder="description" name="description" class="form__input">
        <input type="text" placeholder="image" name="image" class="form__input">
        <input type="text" placeholder="author" name="author" class="form__input">
        <span class="form__wrapper">
            <label for="published">published</label>
            <input type="checkbox" name="published" class="form__wrapper--checkbox">
        </span>

        <input type="submit" class="form__submit">
    </form>
</x-app-layout>