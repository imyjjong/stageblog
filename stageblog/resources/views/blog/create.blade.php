<x-app-layout>
    <p class="form__title">form</p>
    <form class="form" action="{{route('posts.store')}}" method="POST">
        @csrf
        <span class="form__wrapper">
            <input type="text" placeholder="Title" value="{{ old('title') }}" name="title" class="form__input">
            @error('title')
                <p class="form__error">{{$message}}</p>
            @enderror
        </span>
        <span class="form__wrapper">
            <textarea placeholder="Intro" name="intro" class="form__input">{{ old('intro') }}</textarea>
            @error('intro')
                <p class="form__error">{{$message}}</p>
            @enderror
        </span>
        <span class="form__wrapper">
            <textarea placeholder="Description" name="description" class="form__input">{{ old('description') }}</textarea>
            @error('description')
                <p class="form__error">{{$message}}</p>
            @enderror
        </span>
        <span class="form__wrapper">
            <input type="text" placeholder="Image" value="{{ old('image') }}" name="image" class="form__input">
        </span>
        <span class="form__wrapper">
            <input type="text" placeholder="Author" value="{{ old('author') }}" name="author" class="form__input">
            @error('author')
                <p class="form__error">{{$message}}</p>
            @enderror
        </span>
        <span class="form__stage">
            <label for="stage">Stage 1</label>
            <input type="checkbox" name="stage" value="1" checked="" class="form__stage--checkbox">
        </span>
        <span class="form__published">
            <label for="published">Published</label>
            <input type="checkbox" name="published" value="1" checked="" class="form__published--checkbox">
        </span>

        <input type="submit" class="form__submit">
    </form>
</x-app-layout>