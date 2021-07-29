@extends('frontend/layouts.app')
@section('content')
@include('frontend/layouts.header')
<link rel="stylesheet" href="{{ asset("css/frontend/home.css") }}">
<section class="slider">
    <div class="container-fluid">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100 slide" src="{{ asset("img/frontend/slider_1.jpg") }}" alt="First slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 slide" src="{{ asset("img/frontend/slider_2.jpg") }}" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100 slide" src="{{ asset("img/frontend/slider_3.jpg") }}" alt="Third slide">
              </div>
            </div>
          </div>
    </div>
    <div class="title-block">
        <h1>Permutar</h1>
        <p class="desc">Permute una amplia variedad de objetos en simples pasos.</p>
    </div>
</section>

@endsection