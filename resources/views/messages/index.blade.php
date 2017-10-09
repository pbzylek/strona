
@extends('layout')

@section('content')

    <a class="btn btn-primary" href="{{route('admin.messages.create')}}">Nowa wiadomość</a>
    <br>
    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>DATA</th>
            <th>TYTUŁ</th>
            <th>WIĘCEJ</th>
            <th>EDYCJA</th>
            <th>USUWANIE</th>
        </tr>
        @foreach($messages as $message)
            <tr>
                <td>{{ $message->id }}</td>
                <td>{{ $message->created_at }}</td>
                <td>{{ $message->temat }}</td>
                <td><a class="btn btn-info" href="{{route('admin.messages.edit', $message)}}">Więcej</a></td>
                <td><a class="btn btn-info" href="{{route('admin.messages.edit', $message)}}">Edytuj</a></td>
                <td>
                    {!! Form::model($message, ['route' => ['admin.messages.delete', $message], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger">Usuń</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>

    {{ $messages->links() }}


@endsection