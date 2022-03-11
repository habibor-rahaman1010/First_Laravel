@extends('base')
@section('content')
<div class="post-preview container">
    <h3>{{$post->title}}</h3>
    <p>{!!$post->details!!}</p>
    <p class="post-meta">
        Posted by
        <a href="#!">{{$post->author}}</a>
        on {{$post->created_at}}
    </p>
</div>
@endsection