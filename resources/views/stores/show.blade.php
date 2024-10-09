@extends('layouts.app')

@section('content')
<h1>Store: {{ $store->store_name }}</h1>
<p>Email: {{ $store->email }}</p>
<p>Description: {{ $store->description }}</p>
@endsection