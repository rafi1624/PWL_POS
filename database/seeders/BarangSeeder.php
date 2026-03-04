<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'B01', 'barang_nama' => 'Roti Tawar', 'harga_beli' => 10000, 'harga_jual' => 12000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'B02', 'barang_nama' => 'Mie Instan', 'harga_beli' => 2500, 'harga_jual' => 3000],
            ['barang_id' => 3, 'kategori_id' => 2, 'barang_kode' => 'B03', 'barang_nama' => 'Air Mineral', 'harga_beli' => 3000, 'harga_jual' => 4000],
            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'B04', 'barang_nama' => 'Kopi Botol', 'harga_beli' => 5000, 'harga_jual' => 6500],
            ['barang_id' => 5, 'kategori_id' => 3, 'barang_kode' => 'B05', 'barang_nama' => 'Kaos Polos', 'harga_beli' => 30000, 'harga_jual' => 45000],
            ['barang_id' => 6, 'kategori_id' => 3, 'barang_kode' => 'B06', 'barang_nama' => 'Kemeja', 'harga_beli' => 70000, 'harga_jual' => 100000],
            ['barang_id' => 7, 'kategori_id' => 4, 'barang_kode' => 'B07', 'barang_nama' => 'Mouse USB', 'harga_beli' => 35000, 'harga_jual' => 50000],
            ['barang_id' => 8, 'kategori_id' => 4, 'barang_kode' => 'B08', 'barang_nama' => 'Flashdisk', 'harga_beli' => 45000, 'harga_jual' => 60000],
            ['barang_id' => 9, 'kategori_id' => 5, 'barang_kode' => 'B09', 'barang_nama' => 'Buku Tulis', 'harga_beli' => 4000, 'harga_jual' => 5000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'B10', 'barang_nama' => 'Bolpoin', 'harga_beli' => 2000, 'harga_jual' => 3000],
        ];
        DB::table('m_barang')->insert($data);
    }
}