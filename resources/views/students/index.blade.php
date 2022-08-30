@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Student List</div>
                    <div class="card-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">S.I</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->deleted_at ? 'Inactive' : 'Active' }}</td>
                                        <td>
                                            <a href="{{ route('students.edit', $student->id) }}">Edit</a>

                                            <form
                                                action="{{ route('students.destroy', ['student' => $student->id]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button title="Delete" id="delete" class="  btn btn-danger btn-sm ">
                                                    <i class="fa fa-trash "> Delete</i>
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <a class="btn btn-success btn-sm" href="{{ route('students.create') }}">Create Student</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
