<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>

    <link rel="icon" href="{{URL('images/logo.png')}}" type="image/png">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="h-auto py-5" style="background-color:#E4C59E;">
    <section class="container h-auto">
        <div class="row justify-content-evenly align-items-center h-auto">
            <div class="col-lg-5 col-md-6">
                <div class="text-center mb-4">
                    <img src="{{URL('images/logo.png')}}" alt="Logo" class="object-fit-contain"
                        style="width:200px;height:200px;">
                </div>

                <div class="text-center">
                    <h1>Brew Haven</h1>
                    <p class="fs-5">"A cozy sanctuary where coffee enthusiasts gather to enjoy expertly brewed coffees
                        in a serene atmosphere."</p>
                </div>
            </div>

            <div class="col-lg-5 col-md-6">
                <div class="card rounded shadow text-light" style="background-color:#AF8260;">
                    <div class="card-body">

                        <form action="{{route('register.db')}}" method="post">
                            @csrf

                            <h2 class="mb-3">Create Account</h2>
                            <label for="firstname" class="form-label fs-5">Firstname</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill fs-5"></i></span>
                                <input type="text" class="form-control" placeholder="e.g John Ford" id="firstname"
                                    name="firstname" value="{{ old('firstname') }}" required>
                            </div>

                            <label for="lastname" class="form-label fs-5">Lastname</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill fs-5"></i></span>
                                <input type="text" class="form-control" placeholder="e.g Buliag" id="lastname"
                                    name="lastname" value="{{ old('lastname') }}" required>
                            </div>

                            <label for="gender" class="form-label fs-5">Gender</label>
                            <div class="input-group mb-3">
                                <select class="form-select" id="gender" name="gender" value="{{ old('gender') }}">
                                    <option value="Male" selected>Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>

                            <label for="email" class="form-label fs-5">Email</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text">@</span>
                                <input type="email" class="form-control" placeholder="e.g john@gmail.com" id="email"
                                    name="email" value="{{ old('email') }}" required>
                            </div>

                            <label for="username" class="form-label fs-5">Username</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill fs-5"></i></span>
                                <input type="text" class="form-control" placeholder="e.g Johntzy" id="username"
                                    name="username" value="{{ old('username') }}" required>
                            </div>

                            <label for="password" class="form-label fs-5">Password</label>
                            <div class="input-group mb-4">
                                <span class="input-group-text"><i class="bi bi-person-fill-lock fs-5"></i></span>
                                <input type="password" class="form-control" placeholder="e.g John12345" id="password"
                                    name="password" value="{{ old('password') }}" required>
                            </div>

                            <div class="d-grid">
                                <input type="submit" class="btn text-light" value="Register"
                                    style="background-color:#803D3B;font-size:20px;">
                            </div>

                            <div class="text-center my-3">
                                <p class="fs-5">Already have an account? <a href="{{ route('login.userSide') }}"
                                        class="text-dark">Login Here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>