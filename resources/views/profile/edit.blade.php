@extends('layouts.dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Profile</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            {{-- image Upload --}}
                            <div class="form-group text-center mb-4">
                                <img src="{{ auth()->user()->image ? Storage::url(auth()->user()->image) : asset('homepage/img/profil.png') }}"
                                    class="rounded-circle" style="width: 150px; height: 150px; object-fit: cover;">
                                <div class="mt-2">
                                    <input type="file" name="image" class="form-control-file" id="image">
                                </div>
                            </div>

                            {{-- Name Field --}}
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ old('name', $user->name) }}" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Email Field --}}
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control"
                                    value="{{ old('email', $user->email) }}" required>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Phone Field --}}
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" name="phone" class="form-control"
                                    value="{{ old('phone', $user->phone) }}">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            {{-- Bio Field --}}
                            <div class="form-group">
                                <label for="bio">Bio</label>
                                <textarea name="bio" class="form-control" rows="4">{{ old('bio', $user->bio) }}</textarea>
                                @error('bio')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </form>
                    </div>
                </div>

                {{-- Account Deletion Section --}}
                <div class="card mt-4 border-danger">
                    <div class="card-header bg-danger text-white">
                        <h3 class="card-title">Delete Account</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('profile.destroy') }}">
                            @csrf
                            @method('DELETE')

                            <div class="form-group">
                                <label for="password">Confirm Password to Delete Account</label>
                                <input type="password" name="password" class="form-control" required>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Are you sure you want to delete your account? This action cannot be undone.')">
                                Delete Account
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
