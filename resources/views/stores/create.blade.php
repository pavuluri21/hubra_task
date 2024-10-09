<!-- resources/views/stores/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create New Store</h1>

    <form action="{{ route('stores.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="store_name" class="form-label">Store Name</label>
            <input type="text" class="form-control" id="store_name" name="store_name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="phone_number" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phone_number" name="phone_number">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>

        <input type="hidden" name="user_id" value="{{ auth()->id() }}">

        <button type="submit" class="btn btn-primary">Create Store</button>
    </form>
</div>
@endsection