@extends('frontend.layouts.app')
@section('content')

<section class="py-5" style="background-color: #f7f7f7;">
    <div class="container">
        <div class="row">
            <!-- Bagian Gambar Produk -->
            <div class="col-md-6 text-center">
                <img src="{{ asset('frontend/images/catering.jpg') }}" class="img-fluid shadow" alt="Produk"
                    style="max-width: 100%; height: auto; border-radius: 8px;">
            </div>

            <!-- Bagian Deskripsi Produk -->
            @foreach ($produk as $item)
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <h3 class="fw-bold">{{$item->nm_produk}}</h3>
                <p class="text-muted">8oz / Half-Pound Whole Bean Coffee</p>
                <h4 class="text-primary fw-bold mb-4">Rp 395.000,00</h4>

                <p>
                    <strong>Medium Roast</strong><br>
                    First Taste: Milk Chocolate, Hazelnut, Pecan<br>
                    Last Sip: Figs, Caramel, Nectarine
                </p>
                <p>
                    Our new, incredible, everyday blend to power you through all the seasons of your life.
                    The first coffee human beings ever tasted were single-origin coffees from Yemen, exported from the
                    historic Port of Mokha.
                </p>
                @endforeach
                <!-- Tombol Add to Cart -->
                <div class="mt-4">
                    <button class="btn btn-lg btn-primary text-white px-4 py-2" style="border-radius: 30px;">
                        ADD TO CART
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
body {
    font-family: Arial, sans-serif;
}

h3 {
    font-size: 2rem;
    margin-bottom: 0.5rem;
}

h4 {
    font-size: 1.8rem;
    margin-bottom: 1rem;
}

p {
    font-size: 1rem;
    line-height: 1.6;
}

button {
    background-color: #f96363;
    border: none;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #e75252;
}
</style>

@endsection