@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Course List</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Course Code</th>
                <th>Description</th>
                <th>Year Level</th>
            </tr>
        </thead>
        <tbody>
            @forelse($courses as $course)
            <tr>
                <td>{{ $course->course_code }}</td>
                <td>{{ $course->description }}</td>
                <td>{{ $course->year_level }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center">No courses found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection