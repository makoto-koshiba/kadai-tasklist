@extends('layouts.app')

@section('content')

    <h1>id = {{ $message->id }} のタスク詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $message->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $message->content }}</td>
        </tr>
    </table>
{!! link_to_route('messages.edit', 'このタスクを編集', ['message' => $message->id], ['class' => 'btn btn-light']) !!}
{!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@endsection