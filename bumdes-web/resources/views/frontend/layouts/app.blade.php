<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'BUMDes')</title>
    <link rel="stylesheet" href="{{URL::asset('frontend/css/style.css')}}"> <!-- Link ke file CSS biasa -->
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <div class="container">
                <!-- Logo -->
                <div class="logo">
                    BUMDes
                </div>
        
                <!-- Navbar Items -->
                <div class="navbar-items">
                    <!-- Links -->
                    <a href="/playground" class="nav-link">Playground</a>
                    <a href="{{ route('catering') }}" class="nav-link">Catering</a>
                    <a href="/all-product" class="nav-link">All Product</a>
                    
                    <!-- Cart Icon -->
                    <div class="cart">
                        <img src="/img/cart-icon.svg" alt="Cart" class="cart-icon">
                        <span class="cart-text">Cart</span>
                    </div>
                </div>
            </div>
        </nav>        
    </header>
    <main class="main-content">
        @yield('content')
    </main>
</body>
</html>
