<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class DetailTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $detail_transaksi = DetailTransaksi::with('produk', 'transaksi')
    ->get();

    return view('admin.detail_transaksi.index', compact('detail_transaksi'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produk = Produk::get();
        $transaksi = Transaksi::get();
        return view('admin.detail_transaksi.create', compact('produk', 'transaksi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validasi input
    $request->validate([
        'produk_id' => 'required|exists:produk,id',
        'transaksi_id' => 'required|exists:transaksi,id',
        'jumlah' => 'required|integer|min:1',
    ]);

    // Cari data produk untuk mendapatkan harga
    $produk = Produk::findOrFail($request->produk_id);

    // Hitung subtotal
    $subtotal = $produk->harga * $request->jumlah;

    // Simpan data detail transaksi
    DetailTransaksi::create([
        'produk_id' => $request->produk_id,
        'transaksi_id' => $request->transaksi_id,
        'jumlah' => $request->jumlah,
        'subtotal' => $subtotal,
    ]);

    // Redirect dengan pesan sukses
    return redirect('admin/detail_transaksi/index');
}

    /**
     * Display the specified resource.
     */
    public function show(DetailTransaksi $detailTransaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $produk = Produk::get();
        $transaksi = Transaksi::get();
        $detail_transaksi = DetailTransaksi::get()->where('id', $id);
        return view('admin.detail_transaksi.edit', compact('detail_transaksi', 'produk', 'transaksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $id)
{
    // Validasi input
    $request->validate([
        'produk_id' => 'required|exists:produk,id',
        'jumlah' => 'required|integer|min:1',
    ]);

    // Cari detail transaksi berdasarkan ID
    $detailTransaksi = DetailTransaksi::findOrFail($id);

    // Cari harga produk
    $produk = Produk::findOrFail($request->produk_id);

    // Hitung subtotal
    $subtotal = $produk->harga * $request->jumlah;

    // Update data detail transaksi
    $detailTransaksi->update([
        'produk_id' => $request->produk_id,
        'jumlah' => $request->jumlah,
        'subtotal' => $subtotal,
    ]);

    // Redirect dengan pesan sukses
    return redirect('admin.detail_transaksi.index');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DetailTransaksi $detailTransaksi)
    {
        //
    }
}
