@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h1 class="text-center text-white">Create New Teacher</h1>
    <form action="{{ route('teachers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <!-- Add more fields as needed -->

        <button type="submit" class="btn btn-primary">Create Teacher</button>
    </form>
</div>
@endsection
