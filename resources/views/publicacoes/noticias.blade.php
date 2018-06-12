@extends('layout.app')
@section('content')

<div class="container mt-4 mb-4">
    <div class="row">
        <div class="col">
            <a href="https://economia.uol.com.br/noticias/redacao/2018/06/07/oit-analisa-hoje-se-brasil-preserva-acordos-coletivos-com-trabalhador.htm">
            <img src="{{asset('public/img/artigos/noticia.jpg')}}" class="rounded mx-auto d-block">
            <span>OIT analisa hoje se Brasil preserva acordos coletivos com trabalhador</span>
            </a>
        </div>
        
        <div class="col">
            <a href="{{asset('public/files/O entrelace entre o Direito do Consumidor e os contratos de planos de saude.docx')}}https://economia.estadao.com.br/blogs/o-seguro-morreu-de-velho/doencas-do-trabalho-devem-ser-indenizadas-pelo-empregador/">
            <img src="{{asset('public/img/artigos/artigo2.jpg')}}" class="rounded mx-auto d-block" alt="">
            <span>Doenças do Trabalho devem ser indenizadas pelo empregador</span>
            </a>
        </div>
        
        
        
    </div>
</div>
@endsection
