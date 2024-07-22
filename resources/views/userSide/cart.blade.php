<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Section</title>

    <link rel="icon" href="{{URL('images/logo.png')}}" type="image/png">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="h-auto">
    <section class="container-fluid vh-100">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb fs-4 fw-bold">
                <li class="breadcrumb-item"><a href="#" class="text-dark">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
        </nav>

        <div class="row justify-content-between align-items-start h-100 pt-5">
            <div class="col-lg-8 col-md-8">
                <h2 class="fw-bold">Cart History</h2>

                <div class="card rounded shadow bg-dark p-3">
                    <table class="table table-dark text-center">
                        <thead>
                            <tr class="fs-5">
                                <th></th>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody class="fs-5">
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                </td>
                                <td>1</td>
                                <td>Coffee</td>
                                <td>100</td>
                                <td>2</td>
                                <td>200</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-lg-4 col-md-4">
                <h2 class="fw-bold">Cart History</h2>

                <div class="card shadow rounded bg-dark">
                    Menu
                </div>
            </div>
        </div>
    </section>

    <section class="container vh-100">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-md-12">
                <h1 class="fw-bold">Purchase History</h1>
                <div class="card rounded shadow bg-dark p-3">
                    <table class="table table-dark text-center">
                        <thead>
                            <tr class="fs-5">
                                <th></th>
                                <th>ID</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody class="fs-5">
                            <tr>
                                <td>
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                </td>
                                <td>1</td>
                                <td>Coffee</td>
                                <td>100</td>
                                <td>2</td>
                                <td>200</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </section>
</body>

</html>