@extends('layout')

@section('content')

    {!! Form::model($user, ['route' => ['users.update', $user], 'method' => 'PUT']) !!}

        @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{ $error }}</div>
                @endforeach
        @endif
    
        <div class="form-group">
            {!! Form::label('login', "Login:") !!}
            {!! Form::text('login', $user->login, ['class'=>'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::label('imie', "Imię:") !!}
            {!! Form::text('imie', $user->imie, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('nazwisko', "Nazwisko:") !!}
            {!! Form::text('nazwisko', $user->nazwisko, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', "E-Mmail:") !!}
            {!! Form::text('email', $user->email, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('new_password', "Hasło:") !!}
            {!! Form::text('new_password', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('firma', "Firma:") !!}
            {!! Form::text('firma', $user->firma, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('nip', "NIP:") !!}
            {!! Form::text('nip', $user->nip, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('adres', "Adres:") !!}
            {!! Form::text('adres', $user->adres, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('miejscowosc', "Miejscowość:") !!}
            {!! Form::text('miejscowosc', $user->miejscowosc, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('kod', "Kod:") !!}
            {!! Form::text('kod', $user->kod, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('telefon', "Telefon:") !!}
            {!! Form::text('telefon', $user->telefon, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Zapisz', ['class'=>'btn btn-primary ']) !!}
            {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
        </div>

    {!! Form::close() !!}
@endsection