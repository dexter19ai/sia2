@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-4">Student List</h2>
    <table class="table table-bordered table-striped">
        <thead class="table-primary">
            <tr>
                <th>Student No.</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @forelse($students as $student)
            <tr>
                <td>{{ $student->student_no }}</td>
                <td>{{ $student->first_name }}</td>
                <td>{{ $student->last_name }}</td>
                <td>{{ $student->email }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center">No students found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection