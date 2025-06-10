<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 900px;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Admin Dashboard</h2>
        <a href="{{ route('logout') }}" class="btn btn-warning" onclick="return confirm('Are you sure you want to logout?')">Logout</a>
        <a href="/admin/create" class="btn btn-success">create</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @elseif(session('danger'))
        <div class="alert alert-danger">{{ session('danger') }}</div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <h5 class="card-title mb-3">User List</h5>

            <table class="table table-bordered table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Work</th>
                        <th>Place</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($user as $u)
                        <tr>
                            <td>{{ $u['id'] }}</td>
                            <td>{{ $u['name'] }}</td>
                            <td>{{ $u['email'] }}</td>
                            <td>{{$u['work']}}</td>
                            <td>{{$u['place']}}</td>
                            <td>{{ $u['role'] == 1 ? 'User' : 'Admin' }}</td>

                            <td>
                                <a href="{{ url('/admin/edit/'.$u['id']) }}" class="btn btn-sm btn-primary">Edit</a>
                                <a href="{{ url('/admin/delete/'.$u['id']) }}"
                                   class="btn btn-sm btn-danger"
                                   onclick="return confirm('Are you sure you want to delete this user?')">
                                   Delete
                                </a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center">No users found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        setTimeout(() => {
            $('.alert').hide()
        }, 2000);
    })
</script>
</body>
</html>
