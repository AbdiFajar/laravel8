@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">List user</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success" role="alert">
 {{session('success')}}
</div>
@endif

<div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Number</th>
              <th scope="col">Name User</th>
              <th scope="col">Email</th>
              <th scope="col">Role</th>                       
              <th scope="col">Action</th>             
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
              <td>{{$loop->iteration}}</td>
              <td>{{$user->name}}</td> 
              <td>{{$user->email}}</td>            
              <td>@if($user->is_admin == '1') Admin @elseif($user->is_admin == '2') Super Admin @else user @endif</td> 
              <td> <a href="/dashboard/users/{{$user->id}}/edit" class="badge bg-warning"><i data-feather="edit"></i></a></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>


@endsection