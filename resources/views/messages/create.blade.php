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

		<input type="text" name="od_id" value="{{ Auth::user()->id }}" hidden="hidden">
		<div class="form-group">
			{!! Form::label('temat', "Temat:") !!}
			{!! Form::text('temat', null, ['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('do_id', "do_id:") !!}
			<select name='do_id'>
				@foreach($users as $user)
			  <option value="{!! $user->id !!}">{!! $user->imie !!} {!! $user->nazwisko !!}</option>
			  	@endforeach
			</select>
		</div>

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