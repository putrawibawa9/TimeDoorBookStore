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
        
    <div class="card mb-3">
        <div class="card-body text-center">
            <h3 class="card-title">{{$posts[0]->title}}</h3>
            <p class="card-text">{{$posts[0]->excerpt}}</p>
            <p>
                <small class="text-muted">
                By.  {{$posts[0]->author->name}}
                <br>
                 in Category. 
              {{$posts[0]->category->name}}
          
               
                
            </small>
            <br>
                Rating for this book : {{$ratings}}  <i class="bi bi-star-fill bi-lg"></i>
                <br>
                Created on {{$posts[0]->created_at->diffForHumans()}}
        </p>
        <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn-primary">Read more</a>
    
        
        
    </div>

    </div>


    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)

           
            <div class="col-md-4 mb-3">
                <div class="card" >
                    <div class="card-body">
                      <h5 class="card-title">{{$post->title}}</h5>
                      <p>
                        <small>
                            By.  {{$post->author->name}}</a>  
                            <br>
                            In Category {{$post->category->name}}</a>
                            <br>
                           
                        </small>
                        <br>
                        Rating for this book : {{$ratings2}} <i class="bi bi-star-fill bi-lg"></i>
                        <br>
                        {{$post->created_at->diffForHumans()}}
                    </p>
                      <p class="card-text">{{$post->excerpt}}</p>
                      <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>

                      
                    </div>
                  </div>
            </div>
        
            @endforeach
        </div>
    </div>

    {{$posts->onEachSide(20)->links()}}

    @else 
     <p class="text-center fs-4">no post found.</p>
     @endif
    
 

    @endsection



   