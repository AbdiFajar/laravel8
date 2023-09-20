

@extends('layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

          <h2>{{$post->title}}</h2>
          <P>By. <a href="/authors/{{$post->author->username}}"class="text-decoration-none">{{$post->author->name}}</a> in <a href="/categories/{{$post->category->slug}}"class="text-decoration-none">{{$post->category->name}}</a></P>
            
          <img src="https://source.unsplash.com/1200x500? {{$post->category->name}}" alt="{{$post->category->name}}" class="img-fluid">

          <article class="my-3 ">        
            {!! $post->body !!}
          </article>
        

<a href="/posts"class="d-block">Back To Posts</a>
        </div>
    </div>
</div>




@endsection