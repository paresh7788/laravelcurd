@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
    <div class="container mt-4">
        <h2>Edit User</h2>

        <form action="{{ route('about.update', $user->id) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="contact_no">Contact Number:</label>
                <input type="text" name="contact_no" id="contact_no" class="form-control" required>
            </div>
            <button type="submit">Update User</button>
        </form>
    </div>
@endsection
