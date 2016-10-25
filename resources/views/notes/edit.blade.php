@extends('layout')

@section('content')
    <h1>Edit the Note</h1>


    <form method="POST" action="/notes/{{ $note->id }}">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <div id="form-group">
            <textarea name="body" class="form-control">{{$note->body }}</textarea>
        </div>
        <div id="form-group">
            <button type="submit" class="btn btn-primary">Edit Note</button>
        </div>
    </form>

@stop