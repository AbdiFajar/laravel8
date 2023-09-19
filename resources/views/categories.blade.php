@extends('layouts.main')

@section('container')
<h1 class="mb-5">Posts Categories</h1>
  
@foreach ($categories  as $category)
<ul>
    <li>
        <h2><a href="/categories/{{$cateogry->slug}}"class="text-decoration-none">{{$category->name}}</a></h2>
    </li>
</ul>
    
@endforeach
@endsection