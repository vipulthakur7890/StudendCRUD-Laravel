@extends('layout')

@section('content')
    <div class="container">
        <h1 class="my-4">Edit Student</h1>
        <form action="{{ route('students.update', $student->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $student->name }}" required>
            </div>
            <div class="mb-3">
                <label for="subject" class="form-label">Subject:</label>
                <input type="text" name="subject" id="subject" class="form-control" value="{{ $student->subject }}" required>
            </div>
            <div class="mb-3">
                <label for="marks" class="form-label">Marks:</label>
                <input type="number" name="marks" id="marks" class="form-control" value="{{ $student->marks }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Student</button>
        </form>
        <a href="{{ route('students.index') }}" class="btn btn-secondary mt-3">Back to Student List</a>
    </div>
@endsection
