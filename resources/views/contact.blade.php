@extends('layout')

@section('title')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-12 col-sm-10 col-lg-6 mx-auto">
			
			<form class="bg-white shadow rounded py-3 px-4" method="POST" action="{{ route('message.store') }}">
				<h1 class="display-6">Envianos un mensaje </h1>
				<hr>
			@csrf
				<div class="form-group">
					<label for="name">Nombre</label>
					<input class="form-control bg-light shadow-sm @error('name') is-invalid @else border-0 @enderror" type="text" name="name" placeholder="Escribe aqui su Nombre" value="{{ old('name') }}">
					@error('name')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
					
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input class="form-control bg-light shadow-sm @error('email') is-invalid @else border-0 @enderror" type="email" name="email" placeholder="Escribe aqui su Email" value="{{ old('email') }}">
					@error('email')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>

				<div class="form-group">
					<label for="subject">Asunto</label>
					<input class="form-control bg-light shadow-sm @error('subject') is-invalid @else border-0 @enderror" name="subject" placeholder="Escribe aqui el Asunto" value="{{ old('subject') }}">
					@error('subject')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>

				<div class="form-group">
					<label for="content">Mensaje</label>
					<textarea class="form-control bg-light shadow-sm @error('content') is-invalid @else border-0 @enderror" name="content" placeholder="Escribe aqui su mensaje">{{ old('content') }}</textarea>
					@error('subject')
						<span class="invalid-feedback" role="alert">
							<strong>{{ $message }}</strong>
						</span>
					@enderror
				</div>
				<button class="btn btn-primary btn-lg btn-block">Enviar</button>
			</form>
		</div>
	</div>
</div>
@endsection