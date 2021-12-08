@extends('layouts.app')

@section('content')
@foreach($articles as $article)
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $article->title }}</div>
                        <div class="card-body">
                            <div class="row mb-3">{{ $article->text }}</div>
                            <div class="row mb-3">Author: {{ $article->author }}</div>
                            <div class="row mb-3">Published At: {{ $article->published_at }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach  
    <div class="centered-button">
        <form action="/articles/create" method="post">
            @csrf
            <input type="submit" value="Create Article" class="floated">
        </form>
        <form action="/export" method="get">
            <input type="submit" value="Export to CSV file" class="floated">
        </form>
    </div>

@endsection