@extends('layout.app')
@section('content')

<div class="container">
	<div class="row justify-content-md-center">		
		<div class="col-md-auto">
			<center><h1>Sócio fundador</h1></center>	
			<a href="{{ url('fernando-mocelin-moraes') }}">
				<img src="{{asset('public/img/user.png')}}" alt="FERNANDO HENRIQUE PIRES MOCELIN MORAES" class="mx-auto d-block">
			</a>
			<br>
			<h4><kbd>Fernando Henrique Pires Mocelin Moraes</kbd></h4>
		</div>		
	</div>	
	<div class="row justify-content-md-center">		
		<div class="col-md-auto">
			<center><h1>Estagiário</h1></center>	
			<a href="{{ url('fernando-mocelin-moraes') }}">
				<img src="{{asset('public/img/user.png')}}" alt="RODRIGO CORREA NUNES" class="mx-auto d-block">
			</a>
			<br>
			<h4><kbd>Rodrigo Correa Nunes</kbd></h4>
		</div>		
	</div>	
</div>
@endsection
