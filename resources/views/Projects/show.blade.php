@extends('layout')

@section('title', $project->title)

@section('content')
<div class="container">
	<div class="bg-white rounded p-5 shadow">
		<h1> {{ $project->title }} </h1>
		<p class="text-secondary">	 {{ $project->description }} </p>
		<p class="text-black-50">	 {{ $project->created_at->diffForHumans() }} </p>
			<div class="d-flex justify-content-between align-items-center">
				<a href="{{ route('project.index' , $project) }}">Atras</a>
				@auth 
				<div class="btn-group btn-group-sm">
					<a class="btn btn-info" href="{{ route('project.edit' , $project) }}">Editar</a>
					<a class="btn btn-danger" href="#" onclick="document.getElementById('delete-project').submit()">Eliminar</a>
				</div>
						<form class="d-none" id="delete-project" method="POST" action="{{ route('project.destroy', $project) }}">
							@csrf @method('DELETE')
						</form>
				@endauth
			</div>		
	</div>
</div>
@endsection