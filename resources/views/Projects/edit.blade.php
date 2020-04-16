@extends('layout')

@section('title', 'Editar Proyecto')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
		
			@include('partials.validation_errors')
			<form class="bg-white rounded py-3 px-4 shadow"  method="POST" action="{{ route('project.update', $project) }}">
				<h1>Editar Proyecto </h1>
				@method('PATCH')
				@include('Projects._form', ['btnText' => 'Actualizar'])
			</form>
	
@endsection

