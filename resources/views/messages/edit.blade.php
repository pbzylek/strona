@extends('layout')

@section('content')

    {!! Form::model($message, ['route' => ['admin.messages.update', $message], 'method' => 'PUT']) !!}

        @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
        @endif

        <div class="form-group">
            {!! Form::label('temat', "Temat:") !!}
            {!! Form::text('temat', $message->temat, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('tresc', "Treść:") !!}
            {!! Form::textarea('tresc', $message->tresc, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Zapisz', ['class'=>'btn btn-primary ']) !!}
            {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
        </div>

    {!! Form::close() !!}
@endsection