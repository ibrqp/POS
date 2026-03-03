<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'SD001' , 'barang_nama' => 'Cola Spark', 'harga_beli' => 4000, 'harga_jual' => 6000],
            ['barang_id' => 2, 'kategori_id' => 1, 'barang_kode' => 'SD002' , 'barang_nama' => 'Lemon Soda', 'harga_beli' => 4500, 'harga_jual' => 6500],
            ['barang_id' => 3, 'kategori_id' => 1, 'barang_kode' => 'SD003' , 'barang_nama' => 'Orange Soda', 'harga_beli' => 4500, 'harga_jual' => 6500],

            ['barang_id' => 4, 'kategori_id' => 2, 'barang_kode' => 'SS001' , 'barang_nama' => 'Susu Coklat', 'harga_beli' => 5000, 'harga_jual' => 7000],
            ['barang_id' => 5, 'kategori_id' => 2, 'barang_kode' => 'SS002' , 'barang_nama' => 'Susu Stroberi', 'harga_beli' => 5000, 'harga_jual' => 7000],
            ['barang_id' => 6, 'kategori_id' => 2, 'barang_kode' => 'SS003' , 'barang_nama' => 'Susu Vanilla', 'harga_beli' => 5000, 'harga_jual' => 7000],

            ['barang_id' => 7, 'kategori_id' => 3, 'barang_kode' => 'EN001' , 'barang_nama' => 'Energi Max', 'harga_beli' => 6000, 'harga_jual' => 8500],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'EN002' , 'barang_nama' => 'Power Boost', 'harga_beli' => 6000, 'harga_jual' => 8500],
            ['barang_id' => 9, 'kategori_id' => 3, 'barang_kode' => 'EN003' , 'barang_nama' => 'Stamina Plus', 'harga_beli' => 6000, 'harga_jual' => 8500],

            ['barang_id' => 10, 'kategori_id' => 4, 'barang_kode' => 'KP002' , 'barang_nama' => 'Kopi Hitam', 'harga_beli' => 4000, 'harga_jual' => 6000],
            ['barang_id' => 11, 'kategori_id' => 4, 'barang_kode' => 'KP003' , 'barang_nama' => 'Kopi Latte', 'harga_beli' => 6000, 'harga_jual' => 9000],
            ['barang_id' => 12, 'kategori_id' => 4, 'barang_kode' => 'KP001' , 'barang_nama' => 'Kopi Cappuccino', 'harga_beli' => 6000, 'harga_jual' => 9000],

            ['barang_id' => 13, 'kategori_id' => 5, 'barang_kode' => 'HB001' , 'barang_nama' => 'Wedang Jahe', 'harga_beli' => 3500, 'harga_jual' => 5500],
            ['barang_id' => 14, 'kategori_id' => 5, 'barang_kode' => 'HB002' , 'barang_nama' => 'Kunyit Asam', 'harga_beli' => 3500, 'harga_jual' => 5500],
            ['barang_id' => 15, 'kategori_id' => 5, 'barang_kode' => 'HB003' , 'barang_nama' => 'Teh Herbal', 'harga_beli' => 3500, 'harga_jual' => 5500],
        ];
        DB::table('m_barang')->insert($data);
    }
}
