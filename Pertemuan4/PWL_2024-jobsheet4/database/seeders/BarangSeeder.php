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
        $data = 
        [
            [
                'barang_id' => 1,
                'kategori_id' => 1,
                'barang_kode' => 'B1',
                'barang_nama' => 'Mie Instan',
                'harga_beli' => 2500,
                'harga_jual' => 3000,
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 1,
                'barang_kode' => 'B2',
                'barang_nama' => 'Kapal Api',
                'harga_beli' => 13000,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 2,
                'barang_kode' => 'B3',
                'barang_nama' => 'Lip Balm',
                'harga_beli' => 23000,
                'harga_jual' => 27000,
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 2,
                'barang_kode' => 'B4',
                'barang_nama' => 'Parfum',
                'harga_beli' => 24000,
                'harga_jual' => 28000,
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 3,
                'barang_kode' => 'B5',
                'barang_nama' => 'Stop Kontak',
                'harga_beli' => 12500,
                'harga_jual' => 15000,
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 3,
                'barang_kode' => 'B6',
                'barang_nama' => 'Wipol',
                'harga_beli' => 10000,
                'harga_jual' => 13000,
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'B7',
                'barang_nama' => 'Susu Dancow',
                'harga_beli' => 38000,
                'harga_jual' => 42000,
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 4,
                'barang_kode' => 'B8',
                'barang_nama' => 'Pampers',
                'harga_beli' => 35000,
                'harga_jual' => 40000,
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 5,
                'barang_kode' => 'B9',
                'barang_nama' => 'Whiskas',
                'harga_beli' => 35000,
                'harga_jual' => 38000,
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 5,
                'barang_kode' => 'B10',
                'barang_nama' => 'Cat Teaser',
                'harga_beli' => 15000,
                'harga_jual' => 20000,
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
