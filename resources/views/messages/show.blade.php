@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
    <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>

    <p>タイトル: {{ $message->title }}</p>
    <p>メッセージ:　{{ $message->content }}</p>

    {!! link_to_route('messages.edit', 'このメッセージ編集', ['id' => $message->id]) !!}
    
    {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
    c
@endsection