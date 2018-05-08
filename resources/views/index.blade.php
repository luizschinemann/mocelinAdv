@extends('layout.app')
@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{asset('public/img/slider/slide-1.jpg')}}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
            <h2>Transparência, senso crítico, capacidade técnica e objetividade</h2>
            
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{asset('public/img/slider/slide-2.jpg')}}" alt="Second slide">
        </div>
    </div>
</div>
<div class="clearfix"></div>
<div class="container">
    <div class="row">
        <div class="col-sm">a</div>
        <div class="col-sm">a</div>
        <div class="col-sm">a</div>
    </div>
</div>
<div class="clearfix"></div>

@endsection