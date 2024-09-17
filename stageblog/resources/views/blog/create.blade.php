<x-app-layout>
    <p class="text-color">form</p>
    <form class="text-color flex flex-col justify-center items-center gap-4 w-96" action="{{route('posts.store')}}" method="POST">
        @csrf
        <input type="text" placeholder="title" name="title" class="w-full bg-transparent border-0 border-b-2 focus:shadow- focus:outline-none">
        <input type="text" placeholder="intro" name="intro" class="w-full bg-transparent border-0 border-b-2 focus:shadow- focus:outline-none">
        <input type="text" placeholder="description" name="description" class="w-full bg-transparent border-0 border-b-2 focus:shadow- focus:outline-none">
        <input type="text" placeholder="image" name="image" class="w-full bg-transparent border-0 border-b-2 focus:shadow- focus:outline-none">
        <input type="text" placeholder="author" name="author" class="w-full bg-transparent border-0 border-b-2 focus:shadow- focus:outline-none">
        <span class="flex justify-center items-center gap-4">
            <label for="published">published</label>
            <input type="checkbox" name="published" class="appearance-transparent text-accent border-none rounded-sm">
        </span>

        <input type="submit" class="bg-accent px-4 py-2 rounded-sm">
    </form>
</x-app-layout>