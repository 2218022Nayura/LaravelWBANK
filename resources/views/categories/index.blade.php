@extends('layouts.app')

@section('title', 'Categories | WBANK')

@section('content')
    <h3>Halaman Kategori WBANK</h3>
    <div class="button-container">
        <a href="{{ url('/category/tambah') }}" class="btn btn-primary">Tambah Data</a>
        <a href="{{ route('category.print') }}" class="btn btn-success">Cetak PDF</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Jenis Kartu</th>
                <th>Kategori</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Harga</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($categories as $category)
                <tr>
                    <td><img src="{{ asset('img_categories/' . $category->gambar) }}" alt="" width="100"></td>
                    <td>{{ $category->kategori }}</td>
                    <td>{{ $category->deskripsi }}</td>
                    <td>Rp. {{ number_format($category->harga) }}</td>
                    <td>
                        <a class='btn btn-warning' href="{{ url('/category/edit/' . $category->id) }}">Edit</a>
                        <a class='btn btn-danger' href="{{ url('/category/hapus/' . $category->id) }}">Hapus</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" align="center">Tidak ada data</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
