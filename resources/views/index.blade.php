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
    <div class="mt-4 row-6">
        <h2>Artigos</h2>
        <div class="row">
            <div class="col-2">
                <a href="{{asset('public/files/A crise brasileira e a atuação do Estado sob o enfoque do Estado.docx')}}">
                <img src="{{asset('public/img/artigos/artigo2.jpg')}}" class="rounded d-block" style="width:125px;" alt="A crise brasileira e a atuação do Estado sob o enfoque do Estado">
                    <span>A crise brasileira e a atuação do Estado sob o enfoque do Estado</span>
                </a>
            </div>
            <div class="col-2">
                <a href="{{asset('public/files/O entrelace entre o Direito do Consumidor e os contratos de planos de saude.docx')}}">
                <img src="{{asset('public/img/artigos/artigo2.jpg')}}" class="rounded d-block" style="width:125px;" alt="A crise brasileira e a atuação do Estado sob o enfoque do Estado">
                <span>O entrelace entre o Direito do Consumidor e os contratos de planos de saúde</span>
                </a> 
            </div>
        </div>
    </div>
    <div class="row mb-4">
        <div class="col text-center">
            <a href="http://mocelinmoraes.com.br/mocelinAdv/publicacoes/artigos" class="btn btn-primary btn-lg" role="button" >Acessar todos os artigos</a>
        </div>
    </div>
    
</div>

<div class="container">
    <div class="mt-4 row-6">
        <h2>Notícias</h2>
        <div class="row">
            <div class="col-2">
                <a href="https://economia.uol.com.br/noticias/redacao/2018/06/07/oit-analisa-hoje-se-brasil-preserva-acordos-coletivos-com-trabalhador.htm">
                <img src="{{asset('public/img/artigos/noticia.jpg')}}" class="rounded d-block" style="width:125px;">
                <span>OIT analisa hoje se Brasil preserva acordos coletivos com trabalhador</span>
                </a>
            </div>
            <div class="col-2">
                <a href="https://economia.estadao.com.br/blogs/o-seguro-morreu-de-velho/doencas-do-trabalho-devem-ser-indenizadas-pelo-empregador/">
                <img src="{{asset('public/img/artigos/noticia.jpg')}}" class="rounded d-block" alt="" style="width:125px;">
                <span>Doenças do Trabalho devem ser indenizadas pelo empregador</span>
                </a>
            </div>
            <div class="col-2">
                <a href="https://www12.senado.leg.br/noticias/materias/2018/06/06/aprovada-isencao-de-carencia-para-atendimento-de-urgencia-por-planos-de-saude">
                <img src="{{asset('public/img/artigos/noticia.jpg')}}" class="rounded d-block" alt="" style="width:125px;">
                <span>Aprovada isenção de carência para atendimento de urgência por planos de saúde</span>
                </a>
            </div>                   
        </div>
    </div>
    <div class="row mb-4">
        <div class="col text-center">
            <a href="http://mocelinmoraes.com.br/mocelinAdv/publicacoes/noticias" class="btn btn-primary btn-lg" role="button" >Acessar todas as notícias</a>
        </div>
    </div>
    
</div>


@endsection