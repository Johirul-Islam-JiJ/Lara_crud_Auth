@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Student Create
                        <a class="btn btn-success btn-sm float-end" href="{{ route('students.index') }}">Back</a>
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('students.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="name" class="form-control mb-3 @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                    id="name" name="name" placeholder="Enter Name">
                                @error('name')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input type="email" class="form-control mb-3 @error('email') is-invalid @enderror" value="{{ old('email') }}"
                                    id="email" name="email" aria-describedby="email" placeholder="Enter email">
                                @error('email')
                                    <span class="text-danger">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
