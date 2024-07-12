<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="container-fluid m-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h1 class="card-header font-bold text-2xl text-danger text-center">Register</h1>
                    <div class="card-body">
                        <form action="{{ route('addUser') }}" method="POST" class="row g-3">
                            @csrf
                            <div class="col-md-12 mb-3">
                                <label for="name" class="form-label font-bold text-2xl">Name</label>
                                <input type="text" value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                    name="name">
                                @error('name')
                                    <span class="alert alert-danger mt-2 d-flex align-items-center" role="alert">
                                        <i class="bi bi-exclamation-triangle-fill me-3 text-danger"></i>
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="age" class="form-label font-bold text-2xl">Age</label>
                                <input type="text" value="{{ old('age') }}"
                                    class="form-control @error('age') is-invalid @enderror" id="age"
                                    name="age">
                                @error('age')
                                    <span class="alert alert-danger mt-2 d-flex align-items-center" role="alert">
                                        <i class="bi bi-exclamation-triangle-fill me-3 text-danger"></i>
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="email" class="form-label font-bold text-2xl">Email</label>
                                <input type="text" value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    name="email">
                                @error('email')
                                    <span class="alert alert-danger mt-2 d-flex align-items-center" role="alert">
                                        <i class="bi bi-exclamation-triangle-fill me-3 text-danger"></i>
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="password" class="form-label font-bold text-2xl">Password</label>
                                <input type="password" value="{{ old('password') }}"
                                    class="form-control @error('password') is-invalid @enderror" id="password"
                                    name="password">
                                @error('password')
                                    <span class="alert alert-danger mt-2 d-flex align-items-center" role="alert">
                                        <i class="bi bi-exclamation-triangle-fill me-3 text-danger"></i>
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="city" class="form-label font-bold text-2xl">City</label>
                                <br>
                                <select id="city" class="form-select w-100 p-2 rounded border border-gray-700 @error('city') is-invalid @enderror"
                                    name="city">
                                    <option value="" selected>Choose...</option>
                                    <option value="Ahemdabad" {{ old('city') == 'Ahemdabad' ? 'selected' : '' }}>
                                        Ahemdabad</option>
                                    <option value="Rajkot" {{ old('city') == 'Rajkot' ? 'selected' : '' }}>Rajkot
                                    </option>
                                    <option value="Vadodara" {{ old('city') == 'Vadodara' ? 'selected' : '' }}>Vadodara
                                    </option>
                                    <option value="Surat" {{ old('city') == 'Surat' ? 'selected' : '' }}>Surat
                                    </option>
                                    <option value="Gandhinagar" {{ old('city') == 'Gandhinagar' ? 'selected' : '' }}>
                                        Gandhinagar</option>
                                </select>
                                @error('city')
                                    <span class="alert alert-danger mt-2 d-flex align-items-center" role="alert">
                                        <i class="bi bi-exclamation-triangle-fill me-3 text-danger"></i>
                                        <span>{{ $message }}</span>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-danger m-3 btn-lg">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>

</html>
