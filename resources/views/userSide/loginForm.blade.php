<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form Section</title>

    <link rel="icon" href="{{URL('images/logo.png')}}" type="image/png">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- SweetJsAlert2 CDN -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="h-auto py-3" style="background-color:#E4C59E;">
    <div class="container vh-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-lg-5 col-md-6">
                <form action="{{ route('login.db') }}" method="post">
                    @csrf
                    @method('post')

                    <div class="card text-light shadow rounded" style="background-color:#AF8260;">
                        <div class="card-body">
                            <div class="text-center my-4">
                                <img src="{{URL('images/logo.png')}}" alt="Logo" class="object-fit-contain mb-3"
                                    style="width:100px;height:100px;">

                                <h1>Brew Haven</h1>
                            </div>

                            <label for="username" class="form-label fs-5">Username</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill fs-5"></i></span>
                                <input type="text" class="form-control" placeholder="e.g Johntzy" id="username"
                                    name="username" value="{{ old('username') }}" required>
                            </div>

                            <label for="password" class="form-label fs-5">Password</label>
                            <div class="input-group mb-3">
                                <span class="input-group-text"><i class="bi bi-person-fill-lock fs-5"></i></span>
                                <input type="password" class="form-control" placeholder="e.g John12345" id="password"
                                    name="password" value="{{ old('password') }}" required>
                            </div>

                            <div class="form-check mb-4">
                                <input class="form-check-input" type="checkbox" value="{{ old('remember') }}"
                                    id="flexCheckDefault" name="remember">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember Me
                                </label>
                            </div>

                            <div class="d-grid">
                                <input type="submit" class="btn text-light" value="Login"
                                    style="background-color:#803D3B;font-size:20px;">
                            </div>

                            <div class="text-center my-3">
                                <p class="fs-5">Not have an account? <a href="{{ route('register.userSide') }}"
                                        class="text-dark">Sign Up Here</a></p>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>


    @if($errors->has('loginFailed'))
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        Swal.fire({
            icon: 'error',
            title: 'Incorrect Username or Password!',
        });
    });
    </script>
    @endif

</body>

</html>