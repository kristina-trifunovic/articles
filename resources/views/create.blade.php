@extends('layouts.app')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
  <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    <div class="grid grid-cols-1">
      <div class="p-6">
        <div class="flex items-center">
          <div class="ml-4 text-lg leading-7 font-semibold">
            <div class="wrapper create-article">
              <h1>Create a New Article</h1>
              <form action="/articles" method="POST">
                @csrf
                <div class="form"><label for="name">Title:</label>
                <input type="text" name="title" id="title" required></div>
                <div class="form"><label for="text">Text:</label>
                <input type="text" name="text" id="text" required></div>
                <div class="form"><label for="author">Author</label>
                <input type="text" name="author" id="author"></div>
                <div class="form"><label for="date">Publish date</label>
                <input type="date" id="published_at" name="published_at"></div>
                
                <input type="submit" value="Add The Article">
              </form>
              <a href="/" class="link-dark">Homepage</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection