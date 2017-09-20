@extends('layout')

@section('content')


        {!! $messages->temat !!} <br>
        {!! $messages->tresc !!} <br>
        {!! link_to(URL::previous(), 'Powrót', ['class'=>'btn btn-default']) !!}
@endsection