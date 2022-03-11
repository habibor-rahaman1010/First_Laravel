@extends('base')
@section('content')
<div class="post-preview container">
    <h3>{{$post->title}}</h3>
    <p>{{$post->details}}</p>
    <p class="post-meta">
        Posted by
        <a href="#!">{{$post->author}}</a>
        on September 24, 2021
    </p>
</div>
@endsection