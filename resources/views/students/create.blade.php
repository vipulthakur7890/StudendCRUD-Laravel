@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">Add New Student</h1>
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" name="subject" id="subject" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="marks">Marks:</label>
                <input type="number" name="marks" id="marks" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Student</button>
        </form>
        <a href="{{ route('students.index') }}" class="btn btn-secondary mt-3">Back to Student List</a>
    </div>
@endsection
