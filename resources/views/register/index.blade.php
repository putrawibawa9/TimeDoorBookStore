@extends('layout.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-registration w-100 m-auto">
            <form action="/register" method="post"> 
                @csrf
              <h1 class="h3 mb-3 fw-normal justify-content-center">Registration form</h1>
              <div class="form-floating">
                <input type="text" name="name"  class="form-control @error('name') is_invalid @enderror" id="name" placeholder="name" >
                <label for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">
                  Please choose a username.
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text"  class="form-control" id="username" placeholder="username" name="user_name">
                <label for="name">UserName</label>
              </div>
              <div class="form-floating">
                <input type="email"  class="form-control" id="email" placeholder="email@gmail.com" name="email">
                <label for="name">Email</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                <label for="password">Password</label>
              </div>
          
              <div class="form-check text-start my-3">
              </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
              <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
            </form>
            <small class="d-block text-center"> Already register?<a href="/login">Login</a></small>
          </main>
    </div>
</div>


@endsection