@extends ('layout.main')


@section('container')
<article>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="mb-5">{{$post->title}}</h2>
                <p>By. {{$post->author->name}}
                    <br>
                     in. category
                    {{$post->category->name}}

                </p>
                Synopsis
                <br>
                {!! $post->body !!}


                  <div class="container mt-5">
                    <h2>How would you rate the book?</h2>
                    <form action="/posts" method="">
                        <div class="form-group">
                            <label for="rating">Rating:</label>
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
            
                <a href="/" class="d-block">Back</a>
            </div>
        </div>
    </div>


  
    @endsection

</article>






    