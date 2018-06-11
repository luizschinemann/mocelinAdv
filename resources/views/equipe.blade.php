@extends('layout.app')
@section('content')
<div class="container">
<div class="row">
		<div class="d-flex justify-content-center">
			<h1>Sócio fundador</h1>
		</div>
		<div class="">	
		<a href="{{ url('fernando-mocelin-moraes') }}">
			<img src="{{asset('public/img/user.png')}}" alt="FERNANDO HENRIQUE PIRES MOCELIN MORAES" class="mx-auto d-block">
		</a>
		<br>
		<h4>Fernando Henrique Pires Mocelin Moraes</h4>
		</div>
	
</div>
</div>
@endsection
