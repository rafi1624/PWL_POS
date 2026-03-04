<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'penjualan_id' => $i,
                'user_id' => 3, // Dilayani oleh kasir
                'pembeli' => 'Pelanggan ' . $i,
                'penjualan_kode' => 'TRX00' . $i,
                'penjualan_tanggal' => '2024-03-02 14:00:00',
            ];
        }
        DB::table('t_penjualan')->insert($data);
    }
}