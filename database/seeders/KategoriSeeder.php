<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' => 1, 'kategori_nama' => 'Minuman Soda'],
            ['kategori_id' => 2, 'kategori_kode' => 2, 'kategori_nama' => 'Susu'],
            ['kategori_id' => 3, 'kategori_kode' => 3, 'kategori_nama' => 'Minuman Energi'],
            ['kategori_id' => 4, 'kategori_kode' => 4, 'kategori_nama' => 'Kopi'],
            ['kategori_id' => 5, 'kategori_kode' => 5, 'kategori_nama' => 'Minuman Herbal'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
