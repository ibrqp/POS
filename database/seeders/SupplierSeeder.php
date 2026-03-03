<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void

    {
        $data = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 'SUP001',
                'supplier_nama' => 'PT Sumber Minuman',
                'supplier_alamat' => 'Malang'
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'SUP002',
                'supplier_nama' => 'CV Segar Abadi',
                'supplier_alamat' => 'Surabaya'
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'SUP003',
                'supplier_nama' => 'PT Nusantara Beverage',
                'supplier_alamat' => 'Jakarta'
            ],
            [
                'supplier_id' => 4,
                'supplier_kode' => 'SUP004',
                'supplier_nama' => 'UD Minuman Sejahtera',
                'supplier_alamat' => 'Bandung'
            ],
            [
                'supplier_id' => 5,
                'supplier_kode' => 'SUP005',
                'supplier_nama' => 'CV Herbal Indonesia',
                'supplier_alamat' => 'Yogyakarta'
            ],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
