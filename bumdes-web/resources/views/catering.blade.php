@extends('frontend.layouts.app')

@section('title', 'Catering')

@section('content')
<div style="max-width: 1200px; margin: 0 auto; padding: 16px;">
    <h1 style="font-size: 2.5rem; font-weight: bold; color: #1a202c; margin-bottom: 16px; text-align: center;">Catering</h1>
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 16px;">
        <!-- Paket A -->
        <div style="background: white; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 8px; overflow: hidden; text-align: center;">
            <img src="/frontend/images/paket-a.jpg" alt="Paket A" 
                style="width: 100%; height: 150px; object-fit: cover;">
            <div style="padding: 12px;">
                <h2 style="font-size: 1rem; font-weight: bold; margin-bottom: 8px;">Paket A</h2>
                <p style="color: #4a5568; font-size: 0.875rem;">Detail tentang Paket A.</p>
            </div>
        </div>        
        <!-- Paket B -->
        <div style="background: white; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 8px; overflow: hidden; text-align: center;">
            <img src="/frontend/images/paket-b.jpg" alt="Paket B" 
                style="width: 100%; height: 150px; object-fit: cover;">
            <div style="padding: 12px;">
                <h2 style="font-size: 1rem; font-weight: bold; margin-bottom: 8px;">Paket B</h2>
                <p style="color: #4a5568; font-size: 0.875rem;">Detail tentang Paket B.</p>
            </div>
        </div>   
        <!-- Paket C -->
        <div style="background: white; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 8px; overflow: hidden; text-align: center;">
            <img src="/frontend/images/paket-c.jpg" alt="Paket C" 
                style="width: 100%; height: 150px; object-fit: cover;">
            <div style="padding: 12px;">
                <h2 style="font-size: 1rem; font-weight: bold; margin-bottom: 8px;">Paket C</h2>
                <p style="color: #4a5568; font-size: 0.875rem;">Detail tentang Paket C.</p>
            </div>
        </div>   
        <!-- Paket D -->
        <div style="background: white; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); border-radius: 8px; overflow: hidden; text-align: center;">
            <img src="/frontend/images/paket-d.jpg" alt="Paket D" 
                style="width: 100%; height: 150px; object-fit: cover;">
            <div style="padding: 12px;">
                <h2 style="font-size: 1rem; font-weight: bold; margin-bottom: 8px;">Paket D</h2>
                <p style="color: #4a5568; font-size: 0.875rem;">Detail tentang Paket D.</p>
            </div>
        </div>   
    </div>
</div>
@endsection
