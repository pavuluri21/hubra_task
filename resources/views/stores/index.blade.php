@extends('layouts.app')

@section('content')
<h1>Stores</h1>
<ul>
    @foreach($stores as $store)
    <li>{{ $store->store_name }} - <a href="{{ route('stores.show', $store->id) }}">View</a></li>
    @endforeach
</ul>
@endsection