@extends('layout')

@section('title')

@section('content')
	<div class="container">
		<h1 class="display-6">Proyectos </h1>
		<h1 class="display-6">Lista de Proyectos</h1>
		@auth
			<a class="btn btn-primary" href="{{ route('project.create') }}">Agregar Proyecto</a><br>
		@endauth
			<ul class="list-group">
				@forelse($portafolio as $item)
					<li class="list-group-item border-0 mb-3 shadow-sm"> 
						<a class="d-flex justify-content-between align-items-center" href="{{ route('project.show', $item) }}">
							<span class="text-secondary font-weight-bold">{{ $item->title}} </span>
							<span class="text-black-50">{{ $item->created_at->format('d/m/Y')}}</span>
						</a>
					</li>
				@empty
					<li>No hay Proyectos para mostrar</li>
				@endforelse
				{{ $portafolio->links() }}
			</ul>
	</div>
@endsection

