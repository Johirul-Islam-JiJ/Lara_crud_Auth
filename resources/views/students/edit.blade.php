@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Update Student
                        <a class="btn btn-success btn-sm float-end" href="{{ route('students.index') }}">Back</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('students.update', $student->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" class="form-control mb-3 @error('name') is-invalid @enderror" value="{{ $student->name }}"
                                    id="name" name="name" placeholder="Enter Name">
                                @error('name')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control mb-3 @error('email') is-invalid @enderror" value="{{ $student->email }}"
                                    id="email" name="email" aria-describedby="email" placeholder="Enter email">
                                @error('email')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
