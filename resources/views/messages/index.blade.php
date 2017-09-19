
@extends('layout')

@section('content')
    <a class="btn btn-primary" href="{{route('messages.create')}}">Dodaj stronę</a>

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
                <td><a class="btn btn-info" href="{{route('messages.edit', $message)}}">Edit</a></td>
                <td>
                    {!! Form::model($message, ['route' => ['messages.delete', $message], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger">Delete</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>

    {{ $messages->links() }}


@endsection