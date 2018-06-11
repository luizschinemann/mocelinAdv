@extends('layout.app')
@section('content')
<img  src="{{asset('public/img/equipe.png')}}" class="img-fluid" alt="Equipe">
<div class="container">
	<a href="{{ url('page') }}">
		<img src="{{asset('public/img/user.png')}}" alt="FERNANDO HENRIQUE PIRES MOCELIN MORAES" class="rounded-circle">
	</a>
</div>
@endsection