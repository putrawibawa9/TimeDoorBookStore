@extends('layout.main')
@section('container')

<div>

    <img src="img/{{ $image }}" alt="" width="200" class="img-thumbnail rounded-circle mx-auto d-block">



    
    <div class="container text-center mt-4">
        <div class="row align-items-stretch">
            <div class="col border d-flex flex-column">
                <h5 class="font-weight-bold">About Me</h5>
                <div class="row">
                    "Hello, I'm Putra, a 22-year-old, System Information on ITB Stikom Bali, started from 2022. With a passion for Web Development for the past 2 months, I thrive on Web Development, which includes HTML, CSS, and PHP."
                </div>
            </div>
            <div class="col border d-flex flex-column">
                <h5 class="font-weight-bold">Why I wanted to join the bootcamp</h5>
                <div class="row">
                    "I wanted to learn from the industry because on my University, I only learn the basic, also I heard that Time Door is a good company for students like me to join and learn something new with you guys"
                </div>
            </div>
            <div class="col border d-flex flex-column">
                <h5 class="font-weight-bold">About this project</h5>
                <div class="row">
                    "I can't make the ratings features because I don't know the logic, so I made it only from the front end, but for the compliment, I have add a dashboard features that the owner of the website can add, delete, or edit the books. Codes and logics are made from the tutorial that I had from YouTube, and I implement it into the project that has been given to me"
                </div>
            </div>
        </div>
    </div>
    
 
 @endsection

