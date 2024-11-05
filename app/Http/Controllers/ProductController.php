<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\product;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $isAdmin = Auth::user()->role == 'admin';
        $produk = $isAdmin ? product::all() : product::where('user_id', Auth::user()->id)->gert();
        return view('component.produk',['produk' => $produk]);
    }

    //Menampilkan Laman Laporan
    public function ViewLaporan()
    {
        $produk = product::all();
        return view('component.laporan', ['produk' => $produk]);
    }

    //Print PDF
    public function print()
    {
        $produk = product::all();

        $pdf = Pdf::loadView('component.report', compact('produk'));

        return $pdf->stream('laporan-produk.pdf');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('component.inputProduk');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|integer',
            'jumlah_produk' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk gambar
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $imageName);
            $imagePath = 'img/' . $imageName; // Menyimpan path gambar
        } else {
            $imagePath = null;
        }

        // Menyimpan data produk baru ke database
        Product::create([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'jumlah_produk' => $request->jumlah_produk,
            'image' => $imagePath, // Menyimpan path gambar ke database
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route(Auth::user()->role. 'produk.index')->with('success', 'Produk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $kode_produk)
    {
        $produk = Product::where('kode_produk', $kode_produk)->first();
        return view('component.editProduk', ['produk' => $produk]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $kode_produk)
    {
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|integer',
            'jumlah_produk' => 'required|integer',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $produk = Product::where('kode_produk', $kode_produk)->first();

        // Update gambar jika ada gambar baru
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('img'), $imageName);
            $imagePath = 'img/' . $imageName;
            $produk->image = $imagePath; // Update path gambar
        }

        // Update data produk
        $produk->nama_produk = $request->nama_produk;
        $produk->deskripsi = $request->deskripsi;
        $produk->harga = $request->harga;
        $produk->jumlah_produk = $request->jumlah_produk;

        $produk->save();

        return redirect()->route(Auth::user()->role. 'produk.index')->with('success', 'Produk berhasil diupdate');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($kode_produk)
    {
        Product::where('kode_produk', $kode_produk)->delete();

        return redirect()->route(Auth::user()->role. 'produk.index')->with('success', 'Produk berhasil dihapus');
    }

}
