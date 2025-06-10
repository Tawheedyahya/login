<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($details) ? 'Update User' : 'Create User' }}</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">

    <h2 class="mb-4 text-center">{{ isset($details) ? 'Update User' : 'Create New User' }}</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ isset($details) ? url('/admin/edit') : url('/admin/create') }}" method="POST">
        @csrf

        @if (isset($details))
            <input type="hidden" name="id" value="{{ $details['id'] }}">
        @endif

        <!-- Full Name -->
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter full name"
                   value="{{ old('name', $details['name'] ?? '') }}" required>
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Email (Create only) -->
        @if (!isset($details))
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email"
                       value="{{ old('email') }}" required>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        @endif

        <!-- Password (Create only) -->
        @if (!isset($details))
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password" required>
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        @endif

        <!-- Place -->
        <div class="mb-3">
            <label for="place" class="form-label">Place</label>
            <input type="text" name="place" class="form-control" placeholder="Enter place"
                   value="{{ old('place', $details['place'] ?? '') }}" required>
            @error('place')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Work -->
        <div class="mb-3">
            <label for="work" class="form-label">Work</label>
            <input type="text" name="work" class="form-control" placeholder="Enter work/profession"
                   value="{{ old('work', $details['work'] ?? '') }}" required>
            @error('work')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success">
            {{ isset($details) ? 'Update User' : 'Create User' }}
        </button>

        <a href="{{ route('home') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>
