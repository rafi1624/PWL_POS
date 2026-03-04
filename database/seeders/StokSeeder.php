<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        // Menggunakan perulangan untuk mempercepat pembuatan 10 data stok
        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'stok_id' => $i,
                'barang_id' => $i,
                'user_id' => 1, // Diinput oleh admin
                'stok_tanggal' => '2024-03-01 10:00:00',
                'stok_jumlah' => 50, // Anggap semua barang stok awalnya 50
            ];
        }
        DB::table('t_stok')->insert($data);
    }
}