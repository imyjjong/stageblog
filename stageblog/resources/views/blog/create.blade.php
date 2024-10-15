<x-app-layout>
    <form class="form" action="{{route('posts.store')}}" method="POST">
        <p class="form__title">Create post</p>
        @csrf
        <div class="form__inputs">
            <span class="form__wrapper">
                <label for="title" class="form__label">Post name</label>
                <input type="text" value="{{ old('title') }}" name="title" class="form__input">
                @error('title')
                    <p class="form__error">{{$message}}</p>
                @enderror
            </span>
            <span class="form__wrapper">
                <label for="intro" class="form__label">Post intro</label>
                <textarea name="intro" class="form__input">{{ old('intro') }}</textarea>
                @error('intro')
                    <p class="form__error">{{$message}}</p>
                @enderror
            </span>
            <span class="form__wrapper">
                <label for="description" class="form__label">Post text</label>
                <textarea name="description" class="form__input--text">{{ old('description') }}</textarea>
                @error('description')
                    <p class="form__error">{{$message}}</p>
                @enderror
            </span>
            <span class="form__wrapper">
                <label for="image" class="form__label">Media</label>
                <input type="text" value="{{ old('image') }}" name="image" class="form__input">
            </span>
            <input type="hidden" value="{{ Auth::user()->name }}" name="author">
        </div>
        <div class="form__details">
            <span class="form__stage">
                <label for="stage">Stage 1</label>
                <input type="checkbox" name="stage" value="1" checked="" class="form__stage--checkbox">
            </span>
            <span class="form__details--publish">
                <span class="form__published">
                    <label for="published" class="form__published--label">Published</label>
                    <input type="checkbox" name="published" value="1" checked="" class="form__published--checkbox">
                </span>
                <input type="submit" class="form__submit" value="Publish">
            </span>
        </div>
    </form>
</x-app-layout>