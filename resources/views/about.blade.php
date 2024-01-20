@extends('layouts.app')

@section('title', 'About')

@section('content')
    <div class="container mt-4">
        <h2>manage</h2>
        <p>This page shows details of registered students:</p>

        @if($users->count() > 0)
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }} -- </td>
                            <td>{{ $user->email }} -- </td>
                            <td>{{ $user->contact_no }}</td>
                            <td>
                                <a href="{{ route('about.edit', $user->id) }}">Edit</a>
                                <form action="{{ route('about.destroy', $user->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No registered students yet.</p>
        @endif
    </div>
@endsection
