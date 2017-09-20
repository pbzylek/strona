
@extends('layout')

@section('content')
    <a class="btn btn-primary" href="{{route('messages.create')}}">Dodaj stronę</a>

    <table class="table table-hover">
        <tr>
            Odebrane
        </tr>
        <tr>
            <th>Data</th>
            <th>Tytuł</th>
            <th>Treść</th>
            <th>Więcej</th>
        </tr>
        @foreach($messages as $message)
            <tr>
                <td>{{ $message->created_at }}</td>
                <td>{{ $message->temat }}</td>
                <td>{{ $message->tresc }}</td>
                <td><a class="btn btn-info" href="{{route('messages.show', $message)}}">Edit</a></td>
            </tr>
        @endforeach
    </table>

    {{ $messages->links() }}


    <table class="table table-hover">
        <tr>
            Wysłane
        </tr>
        <tr>
            <th>Data</th>
            <th>Tytuł</th>
            <th>Treść</th>
            <th>Więcej</th>
        </tr>
        @foreach($messages2 as $message2)
            <tr>
                <td>{{ $message2->created_at }}</td>
                <td>{{ $message2->temat }}</td>
                <td>{{ $message2->tresc }}</td>
                <td><a class="btn btn-info" href="{{route('messages.show', $message2)}}">Edit</a></td>
            </tr>
        @endforeach
    </table>

    {{ $messages2->links() }}


@endsection