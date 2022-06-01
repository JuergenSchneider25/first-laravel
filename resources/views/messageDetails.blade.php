@extends('layouts.master')


@section('title', 'Mini Twitter')


@section('content')

<form action="/update/{{$message->id}}" method="post">
   <input type="text" name="title" value="{{$message->title}}">
   <input type="text" name="content" value="{{$message->content}}">
   @csrf
   <button type="submit">Update</button>
</form>


<form action="/message/{{$message->id}}" method="post">
   @csrf
   @method('delete')
   <button type="submit">Delete</button>
</form>

@endsection