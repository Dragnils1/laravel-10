@extends('layout')
@section('title', 'users')

@section('content')

<form action="{{ route('users.store') }}" method="POST" >
    @csrf
    <div class="row g-3">
        <div class="col">
          <input name="name" type="text" class="form-control" placeholder="name" aria-label="name">
        </div>
        <div class="col">
          <input name="email" type="text" class="form-control" placeholder="email" aria-label="email">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Primary</button>
</form>

@endsection
