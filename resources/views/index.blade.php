@extends('layout')
@section('title', 'users')

@section('content')

<a class="btn btn-primary" role="button" href="{{ route('users.create') }}">Create user</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <th scope="row">{{ $user->id}}</th>
        <td colspan="2">{{ $user->name}}</td>
        <td>{{ $user->email}}</td>
    </tr>
      @endforeach


    </tbody>
  </table>

@endsection
