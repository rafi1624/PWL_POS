<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    public function run(): void
    {
        $data = [];
        $detail_id = 1;
        
        // Looping untuk 10 transaksi (penjualan_id 1 sampai 10)
        for ($i = 1; $i <= 10; $i++) {
            // Setiap transaksi membeli 3 barang yang berbeda
            $data[] = [
                'detail_id' => $detail_id++, 
                'penjualan_id' => $i, 
                'barang_id' => 1, // Beli Roti
                'harga' => 12000, 
                'jumlah' => 2
            ];
            $data[] = [
                'detail_id' => $detail_id++, 
                'penjualan_id' => $i, 
                'barang_id' => 2, // Beli Mie
                'harga' => 3000, 
                'jumlah' => 5
            ];
            $data[] = [
                'detail_id' => $detail_id++, 
                'penjualan_id' => $i, 
                'barang_id' => 3, // Beli Air
                'harga' => 4000, 
                'jumlah' => 1
            ];
        }
        
        DB::table('t_penjualan_detail')->insert($data);
    }
}