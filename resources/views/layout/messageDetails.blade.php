
@extends('layouts.master')
 

@section('title', 'Mini Twitter')
 

@section('content')
 
<h2>Message Details:</h2>
<h3>{{$message->title}}</h3>
<p>{{$message->content}}</p>
 
<form action="/message/{{$message->id}}" method="post">
   @csrf
   @method('delete')
   <button type="submit">Delete</button>
</form>
 
@endsection