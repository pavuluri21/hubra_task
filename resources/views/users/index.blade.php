@extends('layouts.app')

@section('content')
<h1>Users</h1>
<ul>
    @foreach($users as $user)
    <li>{{ $user->name }} - <a href="{{ route('users.show', $user->id) }}">View</a></li>
    @endforeach
</ul>
@endsection