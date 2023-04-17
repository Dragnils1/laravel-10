@extends('layout')
@section('title', isset($user) ? 'Update'.$user->name : 'Create user')

@section('content')
<a href="{{ route('users.index') }}" class="btn btn-info">Turn back</a>
<form method="POST"

    @if (isset($user))
    action="{{ route('users.update', $user) }}"
    @else
    action="{{ route('users.store') }}"
    @endif

    class="mt-3">

    @isset($user)
        @method('PUT')
    @endisset
    @csrf
    <div class="row g-3">
        <div class="col">
          <input name="name"
            value="{{ isset($user) ? $user->name : null }}"
            type="text" class="form-control" placeholder="name" aria-label="name">
        </div>
        <div class="col">
          <input name="email"
            value="{{ isset($user) ? $user->email : null }}"
            type="text" class="form-control" placeholder="email" aria-label="email">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Primary</button>
</form>

@endsection
