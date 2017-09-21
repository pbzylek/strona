
@extends('layout')

@section('content')

@if (Session::has('success'))
    <div class="alert alert-primary" role="alert">
        {{ Session::get('success') }}
    </div>
@endif
    <a class="btn btn-primary" href="{{route('admin.messages.create')}}">Dodaj stronę</a>

    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($messages as $message)
            <tr>
                <td>{{ $message->id }}</td>
                <td>{{ $message->temat }}</td>
                <td><a class="btn btn-info" href="{{route('admin.messages.edit', $message)}}">Edit</a></td>
                <td>
                    {!! Form::model($message, ['route' => ['admin.messages.delete', $message], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger">Delete</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>

    {{ $messages->links() }}


@endsection