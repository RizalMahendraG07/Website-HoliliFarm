<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\Product;

class DashboardController extends Controller

    {
        public function index()
        {
            $products = Product::all();
            return view('admin/dashboard', compact('products'));
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'name' => 'required',
                'price' => 'required|numeric',
                'deskripsi' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048'
            ]);
        
            $path = $request->file('image')->store('fotoproduk', 'public');
            
        
            Product::create([
                'name' => $request->name,
                'price' => $request->price,
                'deskripsi' => $request->deskripsi,
                'image' =>  'storage/' .$path,
            ]);
        
            return redirect()->route('dashboard')->with('success', 'Produk berhasil ditambahkan');
        }
    
        public function update(Request $request, $id)
        
            {
                $request->validate([
                    'name' => 'required|string|max:255',
                    'price' => 'required|numeric',
                    'deskripsi' => 'required|string',
                    'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
                ]);
            
                $product = Product::findOrFail($id);
            
                $product->name = $request->name;
                $product->price = $request->price;
                $product->deskripsi = $request->deskripsi;
            
                if ($request->hasFile('image')) {
                    // Hapus gambar lama jika ada
                    if ($product->image && file_exists(public_path($product->image))) {
                        unlink(public_path($product->image));
                    }
            
                    $path = $request->file('image')->store('fotoproduk', 'public'); // Simpan ke public/fotoproduk
                    $product->image = 'storage/' . $path; // Simpan path dengan prefix 'storage/'
                }
            
                $product->save();
            
                return redirect()->route('dashboard')->with('success', 'Produk berhasil diperbarui.');
        }
    
        public function destroy($id)
        {
            Product::findOrFail($id)->delete();
            return redirect()->route('dashboard')->with('success', 'Produk dihapus!');
        }
        
        public function create()
        {
              return view('admin.tambah');
        }
        
        public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('admin.editproduk', compact('product'));
}

}
