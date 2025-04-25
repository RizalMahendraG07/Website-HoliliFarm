<?php

namespace App\Http\Controllers;

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
                'price' => 'required|integer',
            ]);
    
            Product::create($request->only('name', 'price'));
            return redirect()->route('dashboard')->with('success', 'Produk ditambahkan!');
        }
    
        public function update(Request $request, $id)
        {
            $request->validate([
                'name' => 'required',
                'price' => 'required|integer',
            ]);
    
            $product = Product::findOrFail($id);
            $product->update($request->only('name', 'price'));
            return redirect()->route('dashboard')->with('success', 'Produk diupdate!');
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

}
