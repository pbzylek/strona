
@extends('layout')

@section('content')
    <a class="btn btn-primary" href="{{route('users.create')}}">Dodaj stronę</a>

    <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td><a href="{{route('users.show', $user)}}">{{ $user->imie }} {{ $user->nazwisko }}</a></td>
                <td><a class="btn btn-info" href="{{route('users.edit', $user)}}">Edit</a></td>
                <td>
                    {!! Form::model($user, ['route' => ['users.delete', $user], 'method' => 'DELETE']) !!}
                    <button class="btn btn-danger">Delete</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>

    {{ $users->links() }}


@endsection