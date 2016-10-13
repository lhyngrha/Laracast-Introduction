@extends('layout')

@section('content')
    <h1>All cards</h1>
    @foreach ($cards as $card)
      <a href='cards/{{$card->id}}'><h2>{{$card->title}} - {{$card->created_at}}</h2></a>
    @endforeach
@stop
