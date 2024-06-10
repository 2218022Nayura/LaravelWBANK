<?php

namespace App\Http\Controllers;


use App\Models\Category;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class CategoryController extends Controller
{
    /**
     * Menampilkan daftar kategori.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Menampilkan form untuk membuat kategori baru.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Menyimpan kategori baru ke dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis_kartu' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
        ]);

        Category::create($validatedData);

        return redirect('/category')->with('success', 'Kategori berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail kategori.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Menampilkan form untuk mengedit kategori.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));
    }

    /**
     * Mengupdate kategori di dalam database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'jenis_kartu' => 'required',
            'kategori' => 'required',
            'deskripsi' => 'required',
            'harga' => 'required|numeric',
        ]);

        $category = Category::findOrFail($id);
        $category->update($validatedData);

        return redirect('/category')->with('success', 'Kategori berhasil diperbarui.');
    }

    /**
     * Menghapus kategori dari database.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect('/category')->with('success', 'Kategori berhasil dihapus.');
    }

    /**
     * Mengenerate file PDF yang berisi daftar semua kategori.
     *
     * @return \Illuminate\Http\Response
     */
    public function cetakPdf()
    {
        $categories = Category::all();
        $pdf = PDF::loadView('categories.categories-cetak', compact('categories'));
        return $pdf->download('categories.pdf');
    }
}
