@extends('layout.app')
@section('content')

<div class="container mt-4 mb-4">
    <div class="row">
        <div class="col">
        <a href="{{asset('public/files/A crise brasileira e a atuação do Estado sob o enfoque do Estado.docx')}}">
        <img src="{{asset('public/img/artigos/crise_brasileira.jpg')}}" class="rounded mx-auto d-block" alt="A crise brasileira e a atuação do Estado sob o enfoque do Estado">
            <span>A crise brasileira e a atuação do Estado sob o enfoque do Estado</span>
        </div>
        </a>
        <div class="col">
        <a href="{{asset('public/files/O entrelace entre o Direito do Consumidor e os contratos de planos de saude.docx')}}">
        <img src="{{asset('public/img/artigos/defesa_consumidor.jpg')}}" class="rounded mx-auto d-block" alt="O entrelace entre o Direito do Consumidor e os contratos de planos de saude">
            <span>O entrelace entre o Direito do Consumidor e os contratos de planos de saúde</span>
        </div>
        </a>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"></div>
        
    </div>
</div>
@endsection
