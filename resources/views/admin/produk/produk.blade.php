@extends('admin.layout.app')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Produk</li>
    </ol>
    <div class="card mb-4">
        <div class="card-header">
            <a href="{{url('admin/produk/create')}}"class="btn btn-primary">tambah data</a>
        </div>
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data Produk
        </div>
    </div>
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            DataTable Example
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Harga Jual</th>
                        <th>Harga Beli</th>
                        <th>stok</th>
                        <th>minimal stok</th>
                        <th>Deskripsi</th>
                        <th>Kategori Produk</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>

                    </tr>
                </tfoot>
                <tbody>
                    @php
                     $no = 1;
                    @endphp
                    @foreach ($produk as $item)
                    <tr>
                        <td>{{$no}}</td>
                        <td>{{$item->kode}}</td>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->harga_jual}}</td>
                        <td>{{$item->harga_beli}}</td>
                        <td>{{$item->stok}}</td>
                        <td>{{$item->min_stok}}</td>
                        <td>{{$item->deskripsi}}</td>
                        <td>{{$item->nama_kategori}}</td>
                    </tr>
                    @php
                     $no++
                    @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

