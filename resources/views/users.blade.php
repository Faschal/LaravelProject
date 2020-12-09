@extends('layouts.master')

@section('title', 'Users')
@section('content')
<div class="container mt-5">
  <table class="table table-bordered mb-5">
      <thead>
          <tr class="table-success">
              <th scope="col">Id</th>
              <th scope="col">Name</th>
              <th scope="col">Email</th>              
          </tr>
      </thead>
      <tbody>
          @foreach($users as $user)
          <tr>
              <th scope="row">{{ $user->id }}</th>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>              
          </tr>
          @endforeach
      </tbody>
  </table>

  {{-- Pagination --}}
  <div class="d-flex justify-content-center">
    {{ $users->links() }}
  </div>
  </div>    
@endsection
