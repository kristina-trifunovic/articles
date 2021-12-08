@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
        <img src="/img/book.png" class="book" alt="">
    </div>

    <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
        <div class="text-center text-sm text-gray-500">
            <div class="flex items-center">
                <a href="/articles" class="link-dark">See All Articles</a>
            </div>
            <div class="flex items-center">
                <a href="/articles/create" class="link-dark">Create Article</a>
            </div>
        </div>
    </div>
</div>
@endsection
