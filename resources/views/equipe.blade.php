@extends('layout.app')
@section('content')

<div class="container mt-4 mb-4">
	<div class="col-md-auto">
		<center><h1 class="border-bottom">Sócio fundador</h1></center>	
	</div>
	<div class="row justify-content-md-center mt-4 mb-4 ">		
		<div class="col-md-auto">				
			<a href="{{ url('fernando-mocelin-moraes') }}">
				<img src="{{asset('public/img/user.png')}}" alt="FERNANDO HENRIQUE PIRES MOCELIN MORAES" class="mx-auto d-block">
			</a>
			<br>
			<h4>Fernando Henrique Pires Mocelin Moraes</h4>
		</div>		
	</div>	
	<div class="col-md-auto">
		<center><h1 class="border-bottom">Estagiário</h1></center>
	</div>
	<div class="row justify-content-md-center mt-4 mb-4">					
		<div class="col-md-auto">
			<a href="{{ url('rodrigo-correa-nunes') }}">
				a<img src="{{asset('public/img/user.png')}}" alt="RODRIGO CORREA NUNES" class="mx-auto d-block">
			</a>
			<br>
			<h4>Rodrigo Correa Nunes</h4>
		</div>		
	</div>	
</div>
@endsection
