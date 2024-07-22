<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="icon" href="{{URL('images/logo.png')}}" type="image/png">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0px;
    }

    swiper-container {
        width: 100%;
        height: 100%;
    }

    swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #AF8260;
        border-radius: 20px;
    }

    swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    </style>
</head>

<body class="h-auto" style="background-color:#E4C59E;">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#AF8260;">
        <div class="container-fluid">
            <a class="navbar-brand fw-bold fs-3 text-light" href="#">
                <img src="{{URL('images/logo.png')}}" alt="logo.png" class="object-fit-contain"
                    style="width:50px;height:50px;"> Brew Haven</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 gap-3">
                    <li class="nav-item">
                        <a class="nav-link text-light fw-bold fs-4" href="#home">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light fw-bold fs-4" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#hot">Hot Coffees</a></li>
                            <li><a class="dropdown-item" href="#cold">Cold Coffees</a></li>
                            <li><a class="dropdown-item" href="#food">Foods</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fw-bold fs-4" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fw-bold fs-4" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light fw-bold fs-4" href="{{ route('cart.userSide') }}">Cart</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light fw-bold fs-4" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Setting
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#hot">Profile</a></li>
                            <li><a class="dropdown-item" href="{{ route('login.userSide') }}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="container-fluid vh-100 py-5 px-4" id="home">
        <swiper-container class="mySwiper" pagination="true" pagination-dynamic-bullets="true" autoplay="true"
            delay="5000" loop="true">
            <swiper-slide>
                <div class="container-fluid">
                    <div class="row justify-content-center align-items-center text-light">
                        <div class="col-lg-5 col-md-6">
                            <img src="{{ URL('images/Brewed.png') }}" alt="Brewed.png" class="object-fit-contain"
                                style="width:400px;height:400px;">
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="text-start">
                                <h2 class="fw-bold" style="font-size:50px;">BREWED</h2>
                                <p class="fs-4">Each cup is expertly prepared with care and precision, ensuring the
                                    perfect extraction of flavors and aromas. Our baristas meticulously craft every brew
                                    to deliver a consistently exceptional coffee experience.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </swiper-slide>

            <swiper-slide>
                <div class="container-fluid">
                    <div class="row justify-content-center align-items-center text-light">
                        <div class="col-lg-5 col-md-6">
                            <img src="{{ URL('images/Energizing.png') }}" alt="Energizing.png"
                                class="object-fit-contain" style="width:500px;height:500px;">
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="text-start">
                                <h2 class="fw-bold" style="font-size:50px;">ENERGIZING</h2>
                                <p class="fs-4">Our coffee is a natural pick-me-up, boosting your energy levels and
                                    keeping you alert throughout the day. Whether you need a morning kickstart or an
                                    afternoon lift, our expertly crafted brews provide the perfect dose of revitalizing
                                    energy.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </swiper-slide>

            <swiper-slide>
                <div class="container-fluid">
                    <div class="row justify-content-center align-items-center text-light">
                        <div class="col-lg-5 col-md-6">
                            <img src="{{ URL('images/Social.png') }}" alt="Social.png" class="object-fit-contain"
                                style="width:500px;height:500px;">
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="text-start">
                                <h2 class="fw-bold" style="font-size:50px;">SOCIAL</h2>
                                <p class="fs-4">Our coffee is the ideal companion for social gatherings, creating a warm
                                    and inviting atmosphere for connections. Share a cup with friends or enjoy a lively
                                    conversation over a freshly brewed pot, making every moment memorable.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </swiper-slide>

            <swiper-slide>
                <div class="container-fluid">
                    <div class="row justify-content-center align-items-center text-light">
                        <div class="col-lg-5 col-md-6">
                            <img src="{{ URL('images/Community.png') }}" alt="Community.png" class="object-fit-contain"
                                style="width:450px;height:450px;">
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="text-start">
                                <h2 class="fw-bold" style="font-size:50px;">COMMUNITY</h2>
                                <p class="fs-4">Our coffee fosters a sense of belonging, bringing people together in
                                    vibrant coffee communities where friendships flourish and stories are shared over
                                    steaming cups. Join our inclusive community and experience the joy of connecting
                                    with fellow coffee enthusiasts, united by a love for exceptional brews and
                                    meaningful conversations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </swiper-slide>
        </swiper-container>
    </section>

    <section class="container-fluid vh-100 py-5" id="hot">
        <!-- Hot Coffee Section -->
        <div class="row justify-content-center align-items-center">
            <h1 class="text-center fw-bold mb-4" style="color:#AF8260;"><i class="bi bi-stars"></i> Hot Coffees</h1>
            <div class="col-lg-3 col-md-3">
                <input id="price-americano" type="hidden" value="200">

                @foreach ($products as $product)
                @if($product->product_name == 'Caffè Americano')

                <div class="card rounded shadow">
                    <div class="card-header text-center" style="background-color:#AF8260;">
                        <img id="img-americano" src="{{URL('images/Caffè Americano.png')}}" alt="Caffè Americano.png"
                            class="object-fit-contain" style="width:200px;height:200px;">
                    </div>

                    <div class="card-body text-light" style="background-color:#322C2B;">
                        <h3 id="name-americano">{{$product->product_name}}</h3>
                        <h4>₱{{$product->price}}</h4>
                        <h5 class="mb-3">Remaining Stock : {{$product->qty}}</h5>

                        <div class="d-grid">
                            <input type="submit" id="hotcoffee1" class="btn fs-5 fw-bold text-light" value="Order"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                style="background-color:#803D3B;">
                        </div>
                    </div>
                </div>

                @endif
                @endforeach
            </div>

            <div class="col-lg-3 col-md-3">
                <input id="price-misto" type="hidden" value="180">

                @foreach ($products as $product)
                @if($product->product_name == 'Caffè Misto')

                <div class="card rounded shadow">
                    <div class="card-header text-center" style="background-color:#AF8260;">
                        <img id="img-misto" src="{{URL('images/Caffè Misto.png')}}" alt="Caffè Misto.png"
                            class="object-fit-contain" style="width:200px;height:200px;">
                    </div>

                    <div class="card-body text-light" style="background-color:#322C2B;">
                        <h3 id="name-misto">{{$product->product_name}}</h3>
                        <h4>₱{{$product->price}}</h4>
                        <h5 class="mb-3">Remaining Stock : {{$product->qty}}</h5>

                        <div class="d-grid">
                            <input id="hotcoffee2" type="submit" class="btn fs-5 fw-bold text-light" value="Order"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                style="background-color:#803D3B;">
                        </div>
                    </div>
                </div>

                @endif
                @endforeach
            </div>

            <div class="col-lg-3 col-md-3">
                <input id="price-flatwhite" type="hidden" value="170">

                @foreach ($products as $product)
                @if($product->product_name == 'Flat White')

                <div class="card rounded shadow">
                    <div class="card-header text-center" style="background-color:#AF8260;">
                        <img id="img-flatwhite" src="{{URL('images/Flat White.png')}}" alt="Flat White.png"
                            class="object-fit-contain" style="width:200px;height:200px;">
                    </div>

                    <div class="card-body text-light" style="background-color:#322C2B;">
                        <h3 id="name-flatwhite">{{$product->product_name}}</h3>
                        <h4>₱{{$product->price}}</h4>
                        <h5 class="mb-3">Remaining Stock : {{$product->qty}}</h5>

                        <div class="d-grid">
                            <input id="hotcoffee3" type="submit" class="btn fs-5 fw-bold text-light" value="Order"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                style="background-color:#803D3B;">
                        </div>
                    </div>
                </div>

                @endif
                @endforeach
            </div>

            <div class="col-lg-3 col-md-3">
                <input id="price-cinnamon" type="hidden" value="160">

                @foreach ($products as $product)
                @if($product->product_name == 'Cinnamon Dolce Latte')

                <div class="card rounded shadow">
                    <div class="card-header text-center" style="background-color:#AF8260;">
                        <img id="img-cinnamon" src="{{URL('images/Cinnamon Dolce Latte.png')}}"
                            alt="Cinnamon Dolce Latte.png" class="object-fit-contain" style="width:200px;height:200px;">
                    </div>

                    <div class="card-body text-light" style="background-color:#322C2B;">
                        <h3 id="name-cinnamon">{{$product->product_name}}</h3>
                        <h4>₱{{$product->price}}</h4>
                        <h5 class="mb-3">Remaining Stock : {{$product->qty}}</h5>

                        <div class="d-grid">
                            <input id="hotcoffee4" type="submit" class="btn fs-5 fw-bold text-light" value="Order"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                style="background-color:#803D3B;">
                        </div>
                    </div>
                </div>

                @endif
                @endforeach
            </div>
        </div>
    </section>

    <section class="container-fluid vh-100 py-5" id="cold">
        <!-- Cold Coffee Section -->
        <div class="row justify-content-center align-items-center">
            <h1 class="text-center fw-bold mb-4" style="color:#AF8260;"><i class="bi bi-stars"></i> Cold Coffees</h1>
            <div class="col-lg-3 col-md-3">
                <input id="price-chocolateCream" type="hidden" value="200">

                @foreach ($products as $product)
                @if($product->product_name == 'Chocolate Cream Brew')

                <div class="card rounded shadow">
                    <div class="card-header text-center" style="background-color:#AF8260;">
                        <img id="img-chocolateCream" src="{{URL('images/Chocolate Cream Cold Brew.png')}}"
                            alt="Chocolate Cream Cold Brew.png" class="object-fit-contain"
                            style="width:200px;height:200px;">
                    </div>

                    <div class="card-body text-light" style="background-color:#322C2B;">
                        <h3 id="name-chocolateCream">{{$product->product_name}}</h3>
                        <h4>₱{{$product->price}}</h4>
                        <h5 class="mb-3">Remaining Stock : {{$product->qty}}</h5>

                        <div class="d-grid">
                            <input id="coldcoffee1" type="submit" class="btn fs-5 fw-bold text-light" value="Order"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                style="background-color:#803D3B;">
                        </div>
                    </div>
                </div>

                @endif
                @endforeach
            </div>

            <div class="col-lg-3 col-md-3">
                <input id="price-espresso" type="hidden" value="180">

                @foreach ($products as $product)
                @if($product->product_name == 'Iced Espresso')

                <div class="card rounded shadow">
                    <div class="card-header text-center" style="background-color:#AF8260;">
                        <img id="img-espresso" src="{{URL('images/Iced Espresso.png')}}" alt="Iced Espresso.png"
                            class="object-fit-contain" style="width:200px;height:200px;">
                    </div>

                    <div class="card-body text-light" style="background-color:#322C2B;">
                        <h3 id="name-espresso">{{$product->product_name}}</h3>
                        <h4>₱{{$product->price}}</h4>
                        <h5 class="mb-3">Remaining Stock : {{$product->qty}}</h5>

                        <div class="d-grid">
                            <input id="coldcoffee2" type="submit" class="btn fs-5 fw-bold text-light" value="Order"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                style="background-color:#803D3B;">
                        </div>
                    </div>
                </div>

                @endif
                @endforeach
            </div>

            <div class="col-lg-3 col-md-3">
                <input id="price-nitro" type="hidden" value="170">

                @foreach ($products as $product)
                @if($product->product_name == 'Nitro Cold Brew')

                <div class="card rounded shadow">
                    <div class="card-header text-center" style="background-color:#AF8260;">
                        <img id="img-nitro" src="{{URL('images/Nitro Cold Brew.png')}}" alt="Nitro Cold Brew.png"
                            class="object-fit-contain" style="width:200px;height:200px;">
                    </div>

                    <div class="card-body text-light" style="background-color:#322C2B;">
                        <h3 id="name-nitro">{{$product->product_name}}</h3>
                        <h4>₱{{$product->price}}</h4>
                        <h5 class="mb-3">Remaining Stock : {{$product->qty}}</h5>

                        <div class="d-grid">
                            <input id="coldcoffee3" type="submit" class="btn fs-5 fw-bold text-light" value="Order"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                style="background-color:#803D3B;">
                        </div>
                    </div>
                </div>

                @endif
                @endforeach
            </div>

            <div class="col-lg-3 col-md-3">
                <input id="price-icedflat" type="hidden" value="160">

                @foreach ($products as $product)
                @if($product->product_name == 'Iced Flat White')

                <div class="card rounded shadow">
                    <div class="card-header text-center" style="background-color:#AF8260;">
                        <img id="img-icedflat" src="{{URL('images/Iced Flat White.png')}}" alt="Iced Flat White.png"
                            class="object-fit-contain" style="width:200px;height:200px;">
                    </div>

                    <div class="card-body text-light" style="background-color:#322C2B;">
                        <h3 id="name-icedflat">{{$product->product_name}}</h3>
                        <h4>₱{{$product->price}}</h4>
                        <h5 class="mb-3">Remaining Stock : {{$product->qty}}</h5>

                        <div class="d-grid">
                            <input id="coldcoffee4" type="submit" class="btn fs-5 fw-bold text-light" value="Order"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                style="background-color:#803D3B;">
                        </div>
                    </div>
                </div>

                @endif
                @endforeach
            </div>
        </div>
    </section>

    <section class="container-fluid vh-100 py-5" id="food">
        <!-- Foods Section -->
        <div class="row justify-content-center align-items-center">
            <h1 class="text-center fw-bold mb-4" style="color:#AF8260;"><i class="bi bi-stars"></i> Foods</h1>
            <div class="col-lg-3 col-md-3">
                <input id="price-mozzarella" type="hidden" value="120">

                @foreach ($products as $product)
                @if($product->product_name == 'Mozzarella on Focaccia')

                <div class="card rounded shadow">
                    <div class="card-header text-center" style="background-color:#AF8260;">
                        <img id="img-mozzarella" src="{{URL('images/Mozzarella on Focaccia.png')}}"
                            alt="Mozzarella on Focaccia.png" class="object-fit-contain"
                            style="width:200px;height:200px;">
                    </div>

                    <div class="card-body text-light" style="background-color:#322C2B;">
                        <h3 id="name-mozzarella">{{$product->product_name}}</h3>
                        <h4>₱{{$product->price}}</h4>
                        <h5 class="mb-3">Remaining Stock : {{$product->qty}}</h5>

                        <div class="d-grid">
                            <input id="food1" type="submit" class="btn fs-5 fw-bold text-light" value="Order"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                style="background-color:#803D3B;">
                        </div>
                    </div>
                </div>

                @endif
                @endforeach
            </div>

            <div class="col-lg-3 col-md-3">
                <input id="price-pineapple" type="hidden" value="110">

                @foreach ($products as $product)
                @if($product->product_name == 'Pineapple Cloud Cake')

                <div class="card rounded shadow">
                    <div class="card-header text-center" style="background-color:#AF8260;">
                        <img id="img-pineapple" src="{{URL('images/Pineapple Cloud Cake.png')}}"
                            alt="Pineapple Cloud Cake.png" class="object-fit-contain" style="width:200px;height:200px;">
                    </div>

                    <div class="card-body text-light" style="background-color:#322C2B;">
                        <h3 id="name-pineapple">{{$product->product_name}}</h3>
                        <h4>₱{{$product->price}}</h4>
                        <h5 class="mb-3">Remaining Stock : {{$product->qty}}</h5>

                        <div class="d-grid">
                            <input id="food2" type="submit" class="btn fs-5 fw-bold text-light" value="Order"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                style="background-color:#803D3B;">
                        </div>
                    </div>
                </div>

                @endif
                @endforeach
            </div>

            <div class="col-lg-3 col-md-3">
                <input id="price-everything" type="hidden" value="100">

                @foreach ($products as $product)
                @if($product->product_name == 'Everything Bagel')

                <div class="card rounded shadow">
                    <div class="card-header text-center" style="background-color:#AF8260;">
                        <img id="img-everything" src="{{URL('images/Everything Bagel.png')}}" alt="Everything Bagel.png"
                            class="object-fit-contain" style="width:200px;height:200px;">
                    </div>

                    <div class="card-body text-light" style="background-color:#322C2B;">
                        <h3 id="name-everything">{{$product->product_name}}</h3>
                        <h4>₱{{$product->price}}</h4>
                        <h5 class="mb-3">Remaining Stock : {{$product->qty}}</h5>

                        <div class="d-grid">
                            <input id="food3" type="submit" class="btn fs-5 fw-bold text-light" value="Order"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                style="background-color:#803D3B;">
                        </div>
                    </div>
                </div>

                @endif
                @endforeach
            </div>

            <div class="col-lg-3 col-md-3">
                <input id="price-cinnamonCake" type="hidden" value="90">

                @foreach ($products as $product)
                @if($product->product_name == 'Cinnamon Cake')

                <div class="card rounded shadow">
                    <div class="card-header text-center" style="background-color:#AF8260;">
                        <img id="img-cinnamonCake" src="{{URL('images/Cinnamon Cake.png')}}" alt="Cinnamon Cake.png"
                            class="object-fit-contain" style="width:200px;height:200px;">
                    </div>

                    <div class="card-body text-light" style="background-color:#322C2B;">
                        <h3 id="name-cinnamonCake">{{$product->product_name}}</h3>
                        <h4>₱{{$product->price}}</h4>
                        <h5 class="mb-3">Remaining Stock : {{$product->qty}}</h5>

                        <div class="d-grid">
                            <input id="food4" type="submit" class="btn fs-5 fw-bold text-light" value="Order"
                                data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                                style="background-color:#803D3B;">
                        </div>
                    </div>
                </div>

                @endif
                @endforeach
            </div>
        </div>
    </section>


    <!-- Modal -->
    <div class="modal fade p-3" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true" style="color:#AF8260;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body rounded" style="background-color:#E4C59E;">
                    <div class="text-end mb-3">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="row justify-content-between align-items-start mb-3">
                        <div class="col-lg-4 col-md-4 text-center">
                            <img id="img-src" src="{{ URL('images/Cinnamon Cake.png') }}" alt=""
                                class="object-fit-contain rounded shadow"
                                style="width:200px;height:200px;background-color:#AF8260;">
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h3 id="product_name" class="mb-3 fw-bold title">Unknown</h3>
                            <h4 id="product_price" class="mb-3 fw-bold price">Price: 0</h5>
                                <div class="mb-3">
                                    <label for="quantity" class="form-label">
                                        <h4 class="fw-bold">Quantity</h4>
                                    </label>
                                    <input type="number" class="form-control" id="quantity" name="quantity" min="1"
                                        max="100">
                                </div>
                                <h4 class="fw-bold">Total: 0</h4>
                        </div>
                    </div>


                    <div class="row justify-content-center align-items-center">
                        <div class="col-lg-12 col-md-12 text-start">
                            <div class="row justify-content-center align-items-center">
                                <div class="col-lg-6 col-md-6">
                                    <div class="d-grid">
                                        <button type="button" class="btn btn-secondary fs-5" data-bs-dismiss="modal"><i
                                                class="bi bi-box-arrow-left"></i> Close</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="d-grid">
                                        <button type="button" class="btn text-light fs-5"
                                            style="background-color:#803D3B;"><i class="bi bi-cart3"></i> Add To
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    // Product 1 - Hot Coffee
    let hot1_btn = document.getElementById("hotcoffee1");
    let hot1_img = document.getElementById("img-americano");
    let hot1_name = document.getElementById("name-americano");
    let hot1_price = document.getElementById("price-americano");

    hot1_btn.addEventListener('click', function() {
        let current_img = hot1_img.getAttribute('src');
        let current_name = hot1_name.textContent;
        let current_price = hot1_price.getAttribute('value');

        // Change the 'src' attribute of the image element
        let change_img = document.getElementById('img-src');
        change_img.setAttribute('src', current_img);

        let change_name = document.getElementById('product_name');
        change_name.textContent = current_name;

        let change_price = document.getElementById('product_price');
        change_price.textContent = "Price : " + current_price;
    });


    // Product 2 - Hot Coffee
    let hot2_btn = document.getElementById("hotcoffee2");
    let hot2_img = document.getElementById("img-misto");
    let hot2_name = document.getElementById("name-misto");
    let hot2_price = document.getElementById("price-misto");

    hot2_btn.addEventListener('click', function() {
        let current_img = hot2_img.getAttribute('src');
        let current_name = hot2_name.textContent;
        let current_price = hot2_price.getAttribute('value');

        // Change the 'src' attribute of the image element
        let change_img = document.getElementById('img-src');
        change_img.setAttribute('src', current_img);

        let change_name = document.getElementById('product_name');
        change_name.textContent = current_name;

        let change_price = document.getElementById('product_price');
        change_price.textContent = "Price : " + current_price;
    });


    // Product 3 - Hot Coffee
    let hot3_btn = document.getElementById("hotcoffee3");
    let hot3_img = document.getElementById("img-flatwhite");
    let hot3_name = document.getElementById("name-flatwhite");
    let hot3_price = document.getElementById("price-flatwhite");

    hot3_btn.addEventListener('click', function() {
        let current_img = hot3_img.getAttribute('src');
        let current_name = hot3_name.textContent;
        let current_price = hot3_price.getAttribute('value');

        // Change the 'src' attribute of the image element
        let change_img = document.getElementById('img-src');
        change_img.setAttribute('src', current_img);

        let change_name = document.getElementById('product_name');
        change_name.textContent = current_name;

        let change_price = document.getElementById('product_price');
        change_price.textContent = "Price : " + current_price;
    });


    // Product 4 - Hot Coffee
    let hot4_btn = document.getElementById("hotcoffee4");
    let hot4_img = document.getElementById("img-cinnamon");
    let hot4_name = document.getElementById("name-cinnamon");
    let hot4_price = document.getElementById("price-cinnamon");

    hot4_btn.addEventListener('click', function() {
        let current_img = hot4_img.getAttribute('src');
        let current_name = hot4_name.textContent;
        let current_price = hot4_price.getAttribute('value');

        // Change the 'src' attribute of the image element
        let change_img = document.getElementById('img-src');
        change_img.setAttribute('src', current_img);

        let change_name = document.getElementById('product_name');
        change_name.textContent = current_name;

        let change_price = document.getElementById('product_price');
        change_price.textContent = "Price : " + current_price;
    });


    // Product 1 - Cold Coffee
    let cold1_btn = document.getElementById("coldcoffee1");
    let cold1_img = document.getElementById("img-chocolateCream");
    let cold1_name = document.getElementById("name-chocolateCream");
    let cold1_price = document.getElementById("price-chocolateCream");

    cold1_btn.addEventListener('click', function() {
        let current_img = cold1_img.getAttribute('src');
        let current_name = cold1_name.textContent;
        let current_price = cold1_price.getAttribute('value');

        // Change the 'src' attribute of the image element
        let change_img = document.getElementById('img-src');
        change_img.setAttribute('src', current_img);

        let change_name = document.getElementById('product_name');
        change_name.textContent = current_name;

        let change_price = document.getElementById('product_price');
        change_price.textContent = "Price : " + current_price;
    });


    // Product 2 - Cold Coffee
    let cold2_btn = document.getElementById("coldcoffee2");
    let cold2_img = document.getElementById("img-espresso");
    let cold2_name = document.getElementById("name-espresso");
    let cold2_price = document.getElementById("price-espresso");

    cold2_btn.addEventListener('click', function() {
        let current_img = cold2_img.getAttribute('src');
        let current_name = cold2_name.textContent;
        let current_price = cold2_price.getAttribute('value');

        // Change the 'src' attribute of the image element
        let change_img = document.getElementById('img-src');
        change_img.setAttribute('src', current_img);

        let change_name = document.getElementById('product_name');
        change_name.textContent = current_name;

        let change_price = document.getElementById('product_price');
        change_price.textContent = "Price : " + current_price;
    });


    // Product 3 - Cold Coffee
    let cold3_btn = document.getElementById("coldcoffee3");
    let cold3_img = document.getElementById("img-nitro");
    let cold3_name = document.getElementById("name-nitro");
    let cold3_price = document.getElementById("price-nitro");

    cold3_btn.addEventListener('click', function() {
        let current_img = cold3_img.getAttribute('src');
        let current_name = cold3_name.textContent;
        let current_price = cold3_price.getAttribute('value');

        // Change the 'src' attribute of the image element
        let change_img = document.getElementById('img-src');
        change_img.setAttribute('src', current_img);

        let change_name = document.getElementById('product_name');
        change_name.textContent = current_name;

        let change_price = document.getElementById('product_price');
        change_price.textContent = "Price : " + current_price;
    });


    // Product 4 - Cold Coffee
    let cold4_btn = document.getElementById("coldcoffee4");
    let cold4_img = document.getElementById("img-icedflat");
    let cold4_name = document.getElementById("name-icedflat");
    let cold4_price = document.getElementById("price-icedflat");

    cold4_btn.addEventListener('click', function() {
        let current_img = cold4_img.getAttribute('src');
        let current_name = cold4_name.textContent;
        let current_price = cold4_price.getAttribute('value');

        // Change the 'src' attribute of the image element
        let change_img = document.getElementById('img-src');
        change_img.setAttribute('src', current_img);

        let change_name = document.getElementById('product_name');
        change_name.textContent = current_name;

        let change_price = document.getElementById('product_price');
        change_price.textContent = "Price : " + current_price;
    });


    // Product 1 - Food
    let food1_btn = document.getElementById("food1");
    let food1_img = document.getElementById("img-mozzarella");
    let food1_name = document.getElementById("name-mozzarella");
    let food1_price = document.getElementById("price-mozzarella");

    food1_btn.addEventListener('click', function() {
        let current_img = food1_img.getAttribute('src');
        let current_name = food1_name.textContent;
        let current_price = food1_price.getAttribute('value');

        // Change the 'src' attribute of the image element
        let change_img = document.getElementById('img-src');
        change_img.setAttribute('src', current_img);

        let change_name = document.getElementById('product_name');
        change_name.textContent = current_name;

        let change_price = document.getElementById('product_price');
        change_price.textContent = "Price : " + current_price;
    });


    // Product 2 - Food
    let food2_btn = document.getElementById("food2");
    let food2_img = document.getElementById("img-pineapple");
    let food2_name = document.getElementById("name-pineapple");
    let food2_price = document.getElementById("price-pineapple");

    food2_btn.addEventListener('click', function() {
        let current_img = food2_img.getAttribute('src');
        let current_name = food2_name.textContent;
        let current_price = food2_price.getAttribute('value');

        // Change the 'src' attribute of the image element
        let change_img = document.getElementById('img-src');
        change_img.setAttribute('src', current_img);

        let change_name = document.getElementById('product_name');
        change_name.textContent = current_name;

        let change_price = document.getElementById('product_price');
        change_price.textContent = "Price : " + current_price;
    });


    // Product 3 - Food
    let food3_btn = document.getElementById("food3");
    let food3_img = document.getElementById("img-everything");
    let food3_name = document.getElementById("name-everything");
    let food3_price = document.getElementById("price-everything");

    food3_btn.addEventListener('click', function() {
        let current_img = food3_img.getAttribute('src');
        let current_name = food3_name.textContent;
        let current_price = food3_price.getAttribute('value');

        // Change the 'src' attribute of the image element
        let change_img = document.getElementById('img-src');
        change_img.setAttribute('src', current_img);

        let change_name = document.getElementById('product_name');
        change_name.textContent = current_name;

        let change_price = document.getElementById('product_price');
        change_price.textContent = "Price : " + current_price;
    });


    // Product 4 - Food
    let food4_btn = document.getElementById("food4");
    let food4_img = document.getElementById("img-cinnamonCake");
    let food4_name = document.getElementById("name-cinnamonCake");
    let food4_price = document.getElementById("price-cinnamonCake");

    food4_btn.addEventListener('click', function() {
        let current_img = food4_img.getAttribute('src');
        let current_name = food4_name.textContent;
        let current_price = food4_price.getAttribute('value');

        // Change the 'src' attribute of the image element
        let change_img = document.getElementById('img-src');
        change_img.setAttribute('src', current_img);

        let change_name = document.getElementById('product_name');
        change_name.textContent = current_name;

        let change_price = document.getElementById('product_price');
        change_price.textContent = "Price : " + current_price;
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>

</html>