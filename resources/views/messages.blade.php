@extends('layouts.master')


@section('title', 'Mini Twitter')


@section('content')


<h2>Create new message: </h2>

<form action="/create" method="post">
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="content" placeholder="Content">

    @csrf
    <button type="submit">Send</button>

</form>

<h2>Recent messages:</h2>

<ul>

    @foreach ($messages as $message)
    <li>
        <b>

            <a href="/message/{{$message->id}}">{{$message->title}}:</a></b><br>
        {{$message->content}}<br>
        {{$message->created_at->diffForHumans()}}
    </li>
    @endforeach
</ul>

@endsection