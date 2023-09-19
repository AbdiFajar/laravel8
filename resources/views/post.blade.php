

@extends('layouts.main')

@section('container')
<article>
<h2>{{$post->title}}</h2>

<P>By. <a href="/authors/{{$post->author->username}}"class="text-decoration-none">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}"class="text-decoration-none">{{$post->category->name}}</a></P>

{!! $post->body !!}
</article>

<a href="/posts"class="d-block">Back To Posts</a>
@endsection