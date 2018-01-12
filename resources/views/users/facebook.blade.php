@extends('layouts.app')

@section('content')
	<form action="/auth/facebook/register" method="post">
		{{ csrf_field() }}
		<div class="card">
			<div class="card-block">
				<img src="{{ $user->avatar }}" class="img-thumbnail">
			</div>
			<div class="card-block">
				<div class="form-group">
					<label for="name" class="form-control-label">Nombre</label>
					<input class="form-control" type="text" name="name" value="{{ $user->name }}" readonly="readonly">
				</div>
			</div>
			<div class="card-block">
				<div class="form-group">
					<label for="email" class="form-control-label">Email</label>
					<input class="form-control" type="text" name="email" value="{{ $user->email }}" readonly="readonly">
				</div>
			</div>
			<div class="card-block">
				<div class="form-group">
					<label for="username" class="form-control-label">Nombre de Usuario</label>
					<input class="form-control" type="text" name="username" value="{{ old('username') }}" >
				</div>
			</div>
			<div class="card-footer">
				<button class="btn btn-primary">
					Registrarse
				</button>
			</div>
		</div>
	</form>
@endsection