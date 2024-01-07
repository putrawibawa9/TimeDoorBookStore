@extends('layout.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-5">
        <main class="form-registration w-100 m-auto">
            <form action="/form" method="post"> 
                @csrf
              <h1 class="h3 mb-3 fw-normal justify-content-center">{{$title}}</h1>
              <div class="form-floating">
                <input type="text" name="name"  class="form-control" id="name" placeholder="name" >
                <label for="name">Name</label>
              </div>
              <div class="form-floating">
                <input type="text"  class="form-control" id="nationality" placeholder="nationality" name="nationality">
                <label for="name">Nationality</label>
              </div>
              <div class="form-floating">
                <input type="text"  class="form-control" id="volunteering_history" placeholder="Volunteer History" name="volunteering_history">
                <label for="volunteering_history">Volunteer History</label>
              </div>
              <div class="form-floating">
                <input type="text"  class="form-control" id="volunteering_start" placeholder="Volunteer Start" name="volunteering_start">
                <label for="volunteering_start">Volunteer Start</label>
              </div>
              <div class="form-floating">
                <input type="text"  class="form-control" id="volunteering_period" placeholder="Volunteer Start" name="volunteering_period">
                <label for="volunteering_period">Volunteer Period</label>
              </div>
          
              <div class="form-check text-start my-3">
              </div>
              <button class="btn btn-primary w-100 py-2" type="submit">Submit</button>
          </main>
    </div>
</div>


@endsection