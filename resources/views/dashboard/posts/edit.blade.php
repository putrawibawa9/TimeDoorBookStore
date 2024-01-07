@extends('layout.main')


@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Book</h1>
  </div>

  <div class="col-lg-8">

      <form method="post" action="/dashboard/posts/{{$post->slug}}">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror"  id="title" name="title" value="{{old('title', $post->title)}}">
          @error('title')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="slug" class="form-label  @error('slug') is-invalid @enderror">Slug</label>
          <input type="text" class="form-control" id="slug" name="slug" value="{{old('slug', $post->slug)}}" >
          @error('slug')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-select" name="category_id">
            @foreach ($categories as $category)
            @if (old('category_id', $post->category_id)==$category->id)
            
            <option value="{{$category->id}}" selected>{{$category->name}}</option>  
            @else
            <option value="{{$category->id}}" >{{$category->name}}</option>  
            @endif
            @endforeach
          </select>
        </div>
        <div class="mb-3">
          <label for="body" class="form-label @error('body') is-invalid @enderror">Body</label>
          <input type="text" class="form-control" id="body" name="body" value="{{old('body', $post->body)}}">
          @error('body')
          <div class="invalid-feedback">
            {{$message}}
          </div>
          @enderror
        </div>

        <div class="mb-3">
          <label for="author" class="form-label">Author</label>
          <select class="form-select" name="user_id">
            @foreach ($authors as $author)
            <option value="{{$author->id}}" selected>{{$author->name}}</option>  
            @endforeach
          </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Book</button>
      </form>

  </div>
@endsection