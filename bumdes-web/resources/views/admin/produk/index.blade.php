@extends('admin.layout.app')
@section('content')
<main>
    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div>
                    <i class="fas fa-table me-1"></i>
                    DataTable Produk
                </div>
                <a href="{{ url('/admin/produk/create') }}" class="btn bg-primary d-flex align-items-center"
                   style="width: fit-content;">
                    <i class="fas fa-plus text-white mr-2"></i>
                    <span class="text-white font-weight-bold">Tambah Produk</span>
                </a>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Harga Produk</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Jenis Produk</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Harga Produk</th>
                            <th>Deskripsi</th>
                            <th>Foto</th>
                            <th>Jenis Produk</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($produk as $p)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$p->nm_produk}}</td>
                            <td>{{$p->harga}}</td>
                            <td>{{$p->deskripsi}}</td>
                            <td>{{$p->foto}}</td>
                            <td>{{$p->jenis_produk}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

@endsection
