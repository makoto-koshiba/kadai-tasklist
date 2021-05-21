@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>

    @if (count($messages) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>タスク</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($messages as $message)
                <tr>
                   <td>{!! link_to_route('messages.show', $message->id, ['message' => $message->id]) !!}</td>
                    <td>{{ $message->content }}</td>
                     <td>{{ $message->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
{!! link_to_route('messages.create', '新規タスクの投稿', [], ['class' => 'btn btn-primary']) !!}
@endsection