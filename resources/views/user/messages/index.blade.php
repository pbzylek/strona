
@extends('layout')

@section('content')
    <a class="btn btn-primary" href="{{route('messages.create')}}">Nowa wiadomość</a><br>

    <table class="table table-hover">
        <tr>
            <th>Odebrane</th>
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
                <td><a class="btn btn-outline-info my-2 my-sm-0" href="{{route('messages.show', $message)}}">Więcej</a></td>
            </tr>
        @endforeach
    </table>

    {{ $messages->links() }}


    <table class="table table-hover">
        <tr>
            <th>Wysłane</th>
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
                <td><a class="btn btn-outline-info my-2 my-sm-0" href="{{route('messages.show', $message2)}}">Więcej</a></td>
            </tr>
        @endforeach
    </table>
    {{ $messages2->links() }}

@endsection