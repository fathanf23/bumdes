<!DOCTYPE html>
<html lang="en">
  <head>
    <title>FoodMart - Free eCommerce Grocery Store HTML Website Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('frontend/css/vendor.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('frontend/style.css')}}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
  </head>
  <body>

    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <!-- Logo replaced with text -->
        <a class="navbar-brand fw-bold fs-4" href="#">BUMDes</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('beranda') }}">Beranda</a>
            </li>                     
            <li class="nav-item">
              <a class="nav-link" href="#">Playground</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Catering</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Semua Produk</a>
            </li>
          </ul>
          <div style="display: flex; align-items: center; gap: 8px; margin-left: 8px">
            <img src="/frontend/images/cart-bumdes.png" alt="Cart" style="width: 16px; height: 16px;">
            <span style="color: #4B5563; font-weight: 500;"></span>
        </div>                   
        </div>
      </div>
    </nav>

    <!-- Other content here -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoA6wXx2MnfMNUTMBn4ckj4W9HGloG9E3JGQGkvsg+p" crossorigin="anonymous"></script>
  </body>
</html>

