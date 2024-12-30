@extends('admin.layout.app')
@section('content')
<main>
    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                    <i class="fas fa-table me-1"></i>
                    DataTable Transaksi
                </div>
                <a href="{{ url('/admin/detail_transaksi/create') }}" class="btn bg-primary d-flex align-items-center"
                    style="width: fit-content;">
                    <i class="fas fa-plus text-white mr-2"></i>
                    <span class="text-white font-weight-bold">Tambah Transaksi Baru</span>
                </a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Transaksi</th>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>No Transaksi</th>
                            <th>Nama Produk</th>
                            <th>Jumlah</th>
                            <th>Subtotal</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($detail_transaksi as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->transaksi->no_transaksi}}</td>
                            <td>{{$item->produk->nm_produk}}</td>
                            <td>{{$item->jumlah}}</td>
                            <td>{{$item->subtotal}}</td>
                        </tr>
                        @endforeach
</tbody>

                </table>
            </div>
        </div>
    </div>
</main>
@endsection
