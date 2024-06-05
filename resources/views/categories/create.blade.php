@extends('layouts.app')

@section('title', 'Tambah Category | WBANK ADMIN')

@section('content')
<h3>Input Categories</h3>
<div class="form-login">
  <form action="{{ url('/category/store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <label for="jenis_kartu">Jenis Kartu</label>
    <input class="input" type="text" name="jenis_kartu" id="jenis_kartu" placeholder="Jenis Kartu" value="{{ old('jenis_kartu') }}" />
    @error('jenis_kartu')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="kategori">Kategori</label>
    <input class="input" type="text" name="kategori" id="kategori" placeholder="Kategori" value="{{ old('kategori') }}" />
    @error('kategori')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="harga">Harga</label>
    <input class="input" type="text" name="harga" id="harga" placeholder="Harga" value="{{ old('harga') }}" />
    @error('harga')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="deskripsi">Deskripsi</label>
    <textarea class="input" name="deskripsi" id="deskripsi" placeholder="Deskripsi">{{ old('deskripsi') }}</textarea>
    @error('deskripsi')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
      Simpan
    </button>
  </form>
</div>
@endsection
