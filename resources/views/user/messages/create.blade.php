@extends('layout')

@section('content')
	{!! Form::open(['route'=>'messages.store']) !!}

	@if ($errors->any())
		<ul class="alert alert-danger">
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

		<input type="hidden" name="od_id" value="{{ Auth::user()->id }}">

		<div class="form-group">
			{!! Form::label('temat', "Temat:") !!}
			{!! Form::text('temat', null, ['class'=>'form-control']) !!}
		</div>

		<input type="hidden" name="do_id" value="1">

		<div class="form-group">
			{!! Form::label('tresc', "Treść:") !!}
			{!! Form::textarea('tresc', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Wyślij', ['class'=>'btn btn-primary']) !!}
			{!! link_to(URL::previous(), 'Powrót', ['class'=>'btn btn-default']) !!}
		</div>	

	{!! Form::close() !!}

@endsection