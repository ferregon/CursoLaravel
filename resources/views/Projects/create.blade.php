

@section('title', 'Crear Proyecto')
@extends('layout')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
			
				@include('partials.validation_errors')

				<form class="bg-white rounded py-3 px-4 shadow" method="POST" action="{{ route('project.store') }}">
					<h1 class="display-6">Crear Nuevo Proyecto</h1>
					<hr>
					@include('Projects._form', ['btnText' => 'Guardar'])
				</form>
		</div>
	</div>
</div>
@endsection

