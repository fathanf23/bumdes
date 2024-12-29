@extends('frontend.layouts.app')

@section('title', 'Catering')

@section('content')
<div style="max-width: 1200px; margin: 0 auto; padding: 16px;">
    <h1 style="font-size: 2.5rem; font-weight: bold; color: #1a202c; margin-bottom: 16px; text-align: center;">Catering</h1>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px;">
        <!-- Paket A -->
        @foreach($produk as $item)
        <div style="background: white; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 8px; overflow: hidden; text-align: center;">
            <img src="{{ URL::asset('img_produk/' . $item->foto) }}" alt="Paket A" 
                style="width: 100%; height: 150px; object-fit: cover;">
            <div style="padding: 12px;">
                <h2 style="font-size: 1rem; font-weight: bold; margin-bottom: 8px;">{{$item->nm_produk}}</h2>
                <p style="color: #4a5568; font-size: 0.875rem;">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
            </div>
        </div>        
        @endforeach
       
    </div>
</div>
@endsection
