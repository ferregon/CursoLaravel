@extends('layout')

@section('title','Home')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6">
				<h1 class="display-4 text-primary">Desarrollo Web - Laravel</h1>
				<p class="text-secondary">ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
				<a class="btn btn-lg btn-block btn-primary" href="{{ route('contact') }}">Contactame</a>
				<a class="btn btn-lg btn-block btn-outline-primary" href="{{ route('project.index') }}">Lista de Proyectos</a>
			</div>
			<div class="col-12 col-lg-6">
				<img class="img-fluid" src="/img/laravel.svg" alt="Desarrollo Web">
			</div>
		</div>
	</div>
@endsection