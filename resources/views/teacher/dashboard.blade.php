@extends('layout')

@section('content')
    <div class="container">
        <h1 class="mb-4">Teacher Dashboard</h1>
        <p>Welcome, {{ Auth::guard('teacher')->user()->name }}!</p>
        <a href="{{ route('students.index') }}" class="btn btn-primary mb-3">Go to Student CRUD</a>
    </div>
@endsection
