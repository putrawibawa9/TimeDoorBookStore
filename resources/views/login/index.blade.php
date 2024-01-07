@extends('layout.main')

@section('container')



<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-signin w-100 m-auto">
          @if (session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('loginError')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close">
            </button>
          </div>
          @endif
            <form action="/login" method="post">
              @csrf
              <h1 class="h3 mb-3 fw-normal justify-content-center">Please sign in</h1>
              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" autofocus required value="{{old('email')}}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
          
              <div class="form-check text-start my-3">
              </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
              <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
            </form>
            <small class="d-block text-center"> <a href="/register">Register Now!</a></small>
          </main>
    </div>
</div>


@endsection