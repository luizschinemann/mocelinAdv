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
            <div class="col-2">
                <a href="http://www.femipa.org.br/noticias/juizes-negam-pedidos-de-medicamentos-para-evitar-impacto-nos-cofres-publicos/">
                <img src="{{asset('public/img/artigos/noticia.jpg')}}" class="rounded d-block" alt="" style="width:125px;">
                <span>Juízes negam pedidos de medicamentos para evitar impacto nos cofres públicos</span>
                </a>
            </div>
            <div class="col-2">
                <a href="http://www.stj.jus.br/sites/STJ/default/pt_BR/Comunica%C3%A7%C3%A3o/noticias/Not%C3%ADcias/M%C3%A9dico-que-fez-vasectomia-em-vez-de-cirurgia-de-fimose-ter%C3%A1-de-indenizar-paciente">
                <img src="{{asset('public/img/artigos/noticia.jpg')}}" class="rounded d-block" alt="" style="width:125px;">
                <span>Médico que fez vasectomia em vez de cirurgia de fimose terá de indenizar paciente</span>
                </a>
            </div>
            <div class="col-2">
                <a href="http://www.stj.jus.br/sites/STJ/default/pt_BR/Comunica%C3%A7%C3%A3o/noticias/Not%C3%ADcias/Herdeiro-pode-pleitear-usucapi%C3%A3o-extraordin%C3%A1ria-de-im%C3%B3vel-objeto-de-heran%C3%A7a">
                <img src="{{asset('public/img/artigos/noticia.jpg')}}" class="rounded d-block" alt="" style="width:125px;">
                <span>Herdeiro pode pleitear usucapião extraordinária de imóvel objeto de herança</span>
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