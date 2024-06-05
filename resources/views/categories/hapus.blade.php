@extends('layouts.app')

@section('title', 'Hapus Category | Wbank Admin')

@section('content')
<h3>Hapus Categories</h3>
<div class="form-login">
  <h4>Ingin Menghapus Data ?</h4>
  <form action="{{ url('/category/destroy/' . $category->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin: 20px auto;">
      Yes
    </button>
  </form>
  <button class="btn btn-simpan" style="width: 40%; margin: 20px auto;">
    <a href="{{ url('/category') }}">
      No
    </a>
  </button>
</div>
@endsection
