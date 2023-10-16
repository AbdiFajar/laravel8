@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">

          <h2>{{$category->category}}</h2>
          
          <a href="/dashboard/categories" class="btn btn-success"><span data-feather="arrow-left"></span>Back to categories</a>
          <a href="/dashboard/categories/{{$category->slug}}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
          <form action="/dashboard/posts/{{$category->slug}}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')"><span data-feather="x-circle"></span> Delete</button>
          </form>
        </div>
    </div>
</div>

@endsection