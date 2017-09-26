@extends('layout')

@section('content')

        <h1>{!! $user->imie !!} {!! $user->nazwisko !!}</h1>

        {!! $user->login !!} <br>
        {!! $user->email !!} <br>
        {!! $user->firma !!} <br>
        {!! $user->miejscowosc !!} <br>
        <a class="btn btn-info" href="{{route('admin.users.edit', $user)}}">Edit</a>
        {!! link_to(URL::previous(), 'Powrót', ['class'=>'btn btn-default']) !!}
@endsection