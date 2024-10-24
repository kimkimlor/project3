<?php
namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;
class ProdukController
{
    public function create()
    {
        return view('produk.create'); // Mengembalikan view untuk form
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
        ]);

        // Menyimpan produk baru
        Produk::create($request->all());

        // Redirect ke halaman index setelah sukses
        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    public function index()
    {
        // Mengambil semua produk dari database
        $produks = Produk::all();

        // Mengembalikan view dengan data produk
        return view('produk.index', compact('produks'));
    }
}