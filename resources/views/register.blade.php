@extends('layouts.master')
@section('title', 'Register User')

@section('content')
<nav class="navbar-light bg-info">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4 border p-4 rounded bg-light" >
            <h1 class="h3 mb-3 fw-normal text-center">Halaman Register User</h1>
    
            <!-- error message -->
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
    
            <!-- success message -->
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
    
            <form action="{{ route('register_user') }}" method="POST">
                @csrf
    
                <div class="form-group mb-3">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Masukan Nama Lengkap Kamu" required>
                    @error('name')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group mb-3">
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Masukan Email Kamu" required>
                    @error('email')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control" placeholder="Masukan Password Kamu" required>
                    @error('password')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group mb-3">
                    <label for="password_confirmation">Konfirmasi Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="Masukan Konfirmasi Password Kamu" required>
                    @error('password_confirmation')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
    
                <div class="form-group mb-3">
                    <label for="gender">Role</label>
                    <select name="gender" class="form-select" required>
                        <option value="">Pilih Jenis Role</option>
                        <option value="male">admin</option>
                        <option value="female">superadmin</option>
                    </select>
                    @error('gender')
                        <div class="text-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
    
                <button type="submit" class="w-100 btn btn-lg btn-primary">Register</button>
            </form>
        </div>
    </div>
</nav>
@endsection