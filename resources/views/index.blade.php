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
        <th scope="col">Edit button</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($users as $user)
      <tr>
        <th scope="row">
            {{ $user->id}}
        </th>
        <td colspan="2">
            <a href="{{ route('users.show', $user) }}" >
                {{ $user->name}}
            </a>
        </td>
        <td>
            <a href="{{ route('users.show', $user) }}" >
                {{ $user->email}}
            </a>
        </td>
        <td>
            <form method="POST" action="{{ route('users.destroy', $user) }}" class="mt-3">
                @csrf
                @method('DELETE')
                <a href="{{ route('users.edit', $user) }}" class="btn btn-warning">Edit</a>
                <button class="btn btn-danger" type="submit">Delete</button>
            </form>

        </td>
      </tr>
      @endforeach


    </tbody>
  </table>


    {{ $users->links() }}
@endsection
