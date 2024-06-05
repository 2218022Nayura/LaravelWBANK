@extends('layouts.app')

@section('title', 'Edit Category | WBANK ADMIN')

@section('content')
<h3>Edit Category</h3>
<div class="form-login">
  <form action="{{ url('/category/' . $category->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?')">Hapus</button>

    <label for="jenis_kartu">Jenis Kartu</label>
    <input class="input" type="text" name="jenis_kartu" id="jenis_kartu" placeholder="Jenis Kartu" value="{{ old('jenis_kartu', $category->jenis_kartu) }}" />
    @error('jenis_kartu')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="kategori">Kategori</label>
    <input class="input" type="text" name="kategori" id="kategori" placeholder="Kategori" value="{{ old('kategori', $category->kategori) }}" />
    @error('kategori')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="harga">Harga</label>
    <input class="input" type="text" name="harga" id="harga" placeholder="Harga" value="{{ old('harga', $category->harga) }}" />
    @error('harga')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <label for="deskripsi">Deskripsi</label>
    <textarea class="input" name="deskripsi" id="deskripsi" placeholder="Deskripsi">{{ old('deskripsi', $category->deskripsi) }}</textarea>
    @error('deskripsi')
    <p style="font-size: 10px; color: red">{{ $message }}</p>
    @enderror

    <button type="submit" class="btn btn-simpan" name="simpan" style="margin-top: 50px">
      Simpan
    </button>
  </form>
</div>
@endsection
