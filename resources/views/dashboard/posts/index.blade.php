@extends('layout.main')
@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Books</h1>
</div>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
 {{session('success')}}
</div>
@endif
<div class="table-responsive col ">
  <a href="/dashboard/posts/create" class="btn btn-primary">Add More Books</a>
    <table class="table table-striped table-lg">
      <thead>
        <tr>
          <th scope="col ">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Author</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($posts as $post)
            
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->Category->name}}</td>
            <td>{{$post->Author->name}}</td>
            <td>
                <a href="/dashboard/posts/{{$post->slug}}" class="btn btn-primary btn-sm" >Detail</a>
                <a href="/dashboard/posts/{{$post->slug}}/edit" class="btn btn-success btn-sm">Edit</a>
                <form class="d-inline" action="/dashboard/posts/{{$post->slug}}" method="post">
                @method('delete')
                @csrf
                <button class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure?')">
                  Hapus
                </button>
                </form>
            </td>
        </tr>
        
        @endforeach
      </tbody>
    </table>
    {{$posts->onEachSide(20)->links()}}

  </div>
@endsection