@extends('layout.main')
@section('container')


    <h1 class="text-center">{{$title}}</h1>
    
<div class="row justify-content-center">
    <div class="col-md-6">
    <form action="/posts">
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
                        Created on {{$post->created_at->diffForHumans()}}
                </p>
                <div>

               
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none btn-primary">Read more</a>
                    <div class="container mt-5 ">
                        <h2>How would you rate the book?</h2>
                        <form action="/posts" method="">
                            <div class="form-group">
                                <label for="rating">Rating: <i class="bi bi-star-fill bi-lg"></i></label>
                                <select class="form-control" id="rating" >
                                    <option value="1">1 </option>
                                    <option value="2">2 </option>
                                    <option value="3">3 </option>
                                    <option value="4">4 </option>
                                    <option value="5">5 </option>
                                    <option value="6">6 </option>
                                    <option value="7">7 </option>
                                    <option value="8">8 </option>
                                    <option value="9">9 </option>
                                    <option value="10">10 </option>
                                </select>
                            </div>
                            <a href="/" class="btn btn-primary"> Submit</a>
                        </form>
                    </div>
                </div>
            </div>
            <br>
        
            @endforeach
        </div>
    </div>
    @else 
     <p class="text-center fs-4">no post found.</p>
     @endif
    
 

    @endsection



   