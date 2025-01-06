@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="mb-0">Create New User</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="name" class="form-label fw-bold">Name</label>
                            <input 
                                type="text" 
                                name="name" 
                                id="name" 
                                class="form-control @error('name') is-invalid @enderror" 
                                value="{{ old('name') }}" 
                                placeholder="Enter full name" 
                                required
                            >
                            @error('name') 
                                <div class="invalid-feedback">{{ $message }}</div> 
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="email" class="form-label fw-bold">Email</label>
                            <input 
                                type="email" 
                                name="email" 
                                id="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                value="{{ old('email') }}" 
                                placeholder="Enter email address" 
                                required
                            >
                            @error('email') 
                                <div class="invalid-feedback">{{ $message }}</div> 
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label fw-bold">Password</label>
                            <input 
                                type="password" 
                                name="password" 
                                id="password" 
                                class="form-control @error('password') is-invalid @enderror" 
                                placeholder="Enter password" 
                                required
                            >
                            @error('password') 
                                <div class="invalid-feedback">{{ $message }}</div> 
                            @enderror
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg">Create User</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
