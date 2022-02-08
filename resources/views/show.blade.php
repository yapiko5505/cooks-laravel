@extends('layouts')
@section('content')
    <h1>{{ $shop->name }}</h1>
    <div>
        <p>{{ $shop->category->name }}</p>
        <p>{{ $shop->address }}</p>
    </div>   
    <div>
        <a href={{ route('shop.list') }}>一覧に戻る</a>
        <a href={{ route('shop.edit', ['id' => $shop->id]) }}>編集</a>
        <p></p>
        {{ Form::open(['method' => 'delete', 'route' => ['shop.destory', $shop->id]]) }}
            {{ Form::submit('削除')}}
        {{ Form::close() }}
    </div>    
@endsection