@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2"> Edit User</h1>
</div>
@if(session()->has('error'))
<div class="alert alert-danger" role="alert">
 {{session('error')}}
</div>
@endif
@if(session()->has('success'))
<div class="alert alert-success" role="alert">
 {{session('success')}}
</div>
@endif
<div class="col-lg-8">
    <form method="post" action="/dashboard/profils/{{$user->id ?? ''}}" class="mb-5" enctype="multipart/form-data">
        @method('put')
        @csrf
      <div class="mb-3">
        <label for="name_user" class="form-label">Name User</label>
        <input type="text" class="form-control @error('name_user') is-invalid @enderror" id="name_user" name="name" required autofocus required value="{{$user->name ?? ''}}">
        @error('name_user')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{$user->email ?? ''}}">
        @error('email')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" >
        @error('password')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="password_confirmation" class="form-label">Password confirmation</label>
        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password" name="password_confirmation" >
        @error('password_confirmation')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<script>
document.addEventListener('trix-file-accept', function(e) {
  e.preventDefault();
})
</script>
@endsection