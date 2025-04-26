<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InformasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('informasis')->insert([
            [
                'JUDUL' => 'Harga Melon',
                'Deskripsi' => ' Harga melon mengalami sedikit kenaikan karena musim panen sudah berakhir di beberapa daerah, sehingga pasokan berkurang sementara permintaan tetap tinggi',
                'Tanggal' => '2025-06-19',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'JUDUL' => 'Harga Anggur',
                'Deskripsi' => 'Harga anggur naik akibat cuaca buruk di negara penghasil seperti Australia dan Chile, yang menyebabkan produksi berkurang. Selain itu, permintaan anggur lokal meningkat untuk keperluan acara dan konsumsi harian.',
                'Tanggal' => '2025-06-13',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'JUDUL' => 'Harga Brokoli',
                'Deskripsi' => 'Harga brokoli turun karena pasokan melimpah dari hasil panen lokal, sedangkan permintaan pasar cenderung stabil bahkan sedikit menurun akibat musim panas yang membuat konsumsi sayur segar berkurang',
                'Tanggal' => '2025-06-11',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'JUDUL' => ' Harga Cabai',
                'Deskripsi' => 'Harga cabai melonjak karena faktor cuaca ekstrem (hujan lebat) yang menyebabkan banyak tanaman gagal panen. Ditambah lagi, ada permintaan tinggi menjelang musim perayaan (seperti Lebaran atau Natal).',
                'Tanggal' => '2025-06-12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'JUDUL' => ' Harga Sawi',
                'Deskripsi' => 'Harga sawi cenderung stabil, bahkan sedikit turun, karena masa panen melimpah dan tidak ada gangguan cuaca berarti. Konsumsi rumah tangga terhadap sawi tetap normal.',
                'Tanggal' => '2025-06-13',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
