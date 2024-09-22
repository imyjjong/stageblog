<x-app-layout>
    <p class="form__title">form</p>
    <form class="form" action="{{route('posts.store')}}" method="POST">
        @csrf
        <input type="text" placeholder="Title" name="title" class="form__input">
        <textarea placeholder="Intro" name="intro" class="form__input"></textarea>
        <textarea placeholder="Description" name="description" class="form__input"></textarea>
        <input type="text" placeholder="Image" name="image" class="form__input">
        <input type="text" placeholder="Author" name="author" class="form__input">
        <span class="form__wrapper">
            <label for="published">Published</label>
            <input type="checkbox" name="published" class="form__wrapper--checkbox">
        </span>

        <input type="submit" class="form__submit">
    </form>
</x-app-layout>