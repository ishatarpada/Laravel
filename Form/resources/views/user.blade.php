<!-- resources/views/users/index.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>List of Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5">
        <h1 class="mb-3 fw-bold">User Details</h1>
        <ul class="list-group">
            @foreach ($data as $id => $user)
                <li class="list-group-item"><b>ID</b> :- {{ $user->id }} </li>
                <li class="list-group-item"><b> Name</b> :- {{ $user->name }} </li>
                <li class="list-group-item"><b>Email</b> :- {{ $user->email }}</li>
                <li class="list-group-item"><b>Age</b> :- {{ $user->age }}</li>
                <li class="list-group-item"><b>City</b> :- {{ $user->city }}</li>
            @endforeach
        </ul>

    </div>
</body>

</html>
