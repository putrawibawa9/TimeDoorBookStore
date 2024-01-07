@extends('layout.main')

@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-5">{{$post->title}}</h2>
            <a href="/dashboard/posts" class="btn btn-primary">Back to Books</a>
            <a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-success">Edit</a>
            <form class="d-inline" action="/dashboard/posts/{{$post->slug}}" method="post">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('sure, mate?')">
                  Delete
                </button>
                </form>
        <br>
                author. {{$post->author->name}}
                <br>
                category. {{$post->category->name}}
                <br>
                Synopsis.
                <br>
                <br>
            {!! $post->body !!}
        
        </div>
    </div>
</div>
@endsection