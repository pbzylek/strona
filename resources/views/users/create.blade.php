@extends('layout')

@section('content')

	{!! Form::open(['route'=>'users.store']) !!}

	@if ($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif


		<div class="form-group">
			{!! Form::label('login', "Login:") !!}
			{!! Form::text('login', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', "E-Mail:") !!}
			{!! Form::text('email', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('imie', "Imię:") !!}
			{!! Form::text('imie', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('nazwisko', "Nazwisko:") !!}
			{!! Form::text('nazwisko', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', "Hasło:") !!}
			{!! Form::text('password', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('firma', "Firma:") !!}
			{!! Form::text('firma', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('nip', "NIP:") !!}
			{!! Form::text('nip', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('adres', "Adres:") !!}
			{!! Form::text('adres', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('miejscowosc', "Miejscowość:") !!}
			{!! Form::text('miejscowosc', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('kod', "Kod Pocztowy:") !!}
			{!! Form::text('kod', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('telefon', "Telefon:") !!}
			{!! Form::text('telefon', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
			{!! link_to(URL::previous(), 'Powrót', ['class'=>'btn btn-default']) !!}
		</div>	

	{!! Form::close() !!}

@endsection