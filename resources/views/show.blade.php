@extends('layout')
@section('title', $user->name)

@section('content')

  <a href="{{ route('users.index') }}" class="btn btn-info mt-3">Turn back</a>
  <div class="card" style="width: 18rem;" >
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Id: {{ $user->id }}</li>
        <li class="list-group-item">Name: {{ $user->name }}</li>
        <li class="list-group-item">Email: {{ $user->email }}</li>
        <li class="list-group-item">Created_at: {{ $user->created_at->format('d/m/y H:i:s') }}</li>
        <li class="list-group-item">Updated_at: {{ $user->updated_at->format('d/m/y H:i:s') }}</li>
    </ul>
  </div>

  <a href="{{ route('users.edit', $user) }}" class="btn btn-warning mt-3">Edit</a>
@endsection
