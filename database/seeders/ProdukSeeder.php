<?php


namespace Database\Seeders;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        $sourceImage = storage_path('app/public/foto/melon.jpg');
        $destination = 'fotoproduk/' . Str::random(10) . '.jpg';

        // Simpan file ke disk 'public'
        Storage::disk('public')->put($destination, file_get_contents($sourceImage));

        // Simpan data produk ke database
        Product::create([
            'name' => 'Anggur Hijau',
            'price'=> '12000',
            'image' => 'storage/'.$destination,  // Simpan path relatif
            'deskripsi' => 'Buah Anggur segar dari kebun Holili Farm.'
        ]);
    }
}
