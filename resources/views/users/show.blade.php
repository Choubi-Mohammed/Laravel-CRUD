@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow border-0">
                <div class="card-header bg-info text-white text-center">
                    <h3 class="mb-0">User Details</h3>
                </div>
                <div class="card-body">
                    <div class="mb-4">
                        <p class="fs-5"><strong>ID:</strong> {{ $user->id }}</p>
                        <p class="fs-5"><strong>Name:</strong> {{ $user->name }}</p>
                        <p class="fs-5"><strong>Email:</strong> {{ $user->email }}</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('users.index') }}" class="btn btn-secondary btn-lg">
                            <i class="bi bi-arrow-left"></i> Back
                        </a>
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-warning btn-lg">
                            <i class="bi bi-pencil"></i> Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
