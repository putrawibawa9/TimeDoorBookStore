@extends('layout.main')
@section('container')


    <h1 class="text-center">{{$title}}</h1>
    
<div class="row justify-content-center">
    <div class="col-md-6">
    <form action="/">
        @if (request('category'))
            <input type="hidden" name="category" value="{{request('category')}}">
        @endif
        @if (request('author'))
        <input type="hidden" name="author" value="{{request('author')}}">
    @endif
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Search" name="search" value="{{request('search')}}">
            <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Search</button>
       
          </div>
    </form>    
    </div>
</div>  

    @if ($posts->count())
        
   

    


    <div class="container">
        <div class="row">
            @foreach ($posts as $post)

           
            <div class="card mb-3">
                <div class="card-body text-center">
                    <h3 class="card-title">{{$post->title}}</h3>
                    <p class="card-text">{{$post->excerpt}}</p>
                    <p>
                        <small class="text-muted">
                        By.  {{$post->author->name}}
                        <br>
                         in Category. 
                      {{$post->category->name}}
                    </small>
                    <br>
                        Rating for this book : {{$ratings}}  <i class="bi bi-star-fill bi-lg"></i>
                        <br>
                        Created on {{$post->created_at->diffForHumans()}}
                </p>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn-primary">Read more</a>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn-primary">Give Ratings</a>
                
                
            </div>
            <br>
        
            @endforeach
        </div>
    </div>
    @else 
     <p class="text-center fs-4">no post found.</p>
     @endif
    
 

    @endsection



   