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

<div class="container">
    <div class=" mt-4 mb-4 row">
        <div class="col-12">Areas de atuacao</div>
        <div class="col-3">Trabalhista</div>
        <div class="col-3">Healthcare</div>
        <div class="col-3">Direito do consumidor</div>
        <div class="col-3">Civel</div>
    </div>    
</div>
<div class="container">
    <div class="mt-4 mb-4 row-6">
        <h2>Artigos</h2>
        <div class="row">
            <div class="col-2">
                <a href="{{asset('public/files/A crise brasileira e a atuação do Estado sob o enfoque do Estado.docx')}}">
                <img src="{{asset('public/img/artigos/artigo2.jpg')}}" class="rounded d-block" style="width:125px;" alt="A crise brasileira e a atuação do Estado sob o enfoque do Estado">
                    <span>A crise brasileira e a atuação do Estado sob o enfoque do Estado</span>
                </a>
            </div>
            <div class="col-2">
                <a href="{{asset('public/files/A crise brasileira e a atuação do Estado sob o enfoque do Estado.docx')}}">
                <img src="{{asset('public/img/artigos/artigo2.jpg')}}" class="rounded d-block" style="width:125px;" alt="A crise brasileira e a atuação do Estado sob o enfoque do Estado">
                <span>A crise brasileira e a atuação do Estado sob o enfoque do Estado</span>
                </a> 
            </div>
        </div>
    </div>
</div>


@endsection