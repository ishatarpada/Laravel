<!-- resources/views/users/index.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>List of Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="container">
        <h1 class="my-5 text-center fw-bold">All Users List</h1>
        <hr>
        <div class="d-flex justify-content-end align-items-center my-3">
            <button class="btn btn-lg btn-success"><i class="bi bi-cloud-plus me-3 text-white"></i><a href="/newUser"
                    class="text-white text-decoration-none">Add User</a></button>
        </div>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>age</th>
                    <th>city</th>
                    <th>view</th>
                    <th>Delete</th>
                    <th>Upadte</th>
                </tr>
            </thead>
            @foreach ($data as $id => $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->age }}</td>
                    <td>{{ $user->city }}</td>
                    <td><a href="{{ route('view.user', $user->id) }}" class="btn btn-sm btn-primary">View</a></td>
                    <td><a href="{{ route('delete.user', $user->id) }}" class="btn btn-sm btn-danger">Delete</a></td>
                    <td><a href="{{ route('update.user', $user->id) }}" class="btn btn-sm btn-success">Update</a></td>
                </tr>
            @endforeach
        </table>
        <div class="d-flex justify-content-end align-items-center my-3">
            <button class="btn btn-lg btn-danger"><i class="bi bi-person-x me-3 text-white"></i><a href="{{route('delete.allUser')}}"
                    class="text-white text-decoration-none">Delete All User</a></button>
        </div>
    </div>
    {{-- <div class="container">

        <ul class="list-group">
            @foreach ($data as $id => $user)
                <li class="list-group-item"> | {{ $user->email }} | {{ $user->age }} |{{ $user->city }} |</li>
            @endforeach
        </ul>

    </div> --}}
</body>

</html>
