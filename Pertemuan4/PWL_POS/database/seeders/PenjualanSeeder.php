<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'user_id' => 3,
                'pembeli' => 'Shani',
                'penjualan_kode' => 'P001',
                'penjualan_tanggal' => now()
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Yessica',
                'penjualan_kode' => 'P002',
                'penjualan_tanggal' => now()
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Ashel',
                'penjualan_kode' => 'P003',
                'penjualan_tanggal' => now()
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Adel',
                'penjualan_kode' => 'P004',
                'penjualan_tanggal' => now()
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Olla',
                'penjualan_kode' => 'P005',
                'penjualan_tanggal' => now()
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Oniel',
                'penjualan_kode' => 'P006',
                'penjualan_tanggal' => now()
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Greesel',
                'penjualan_kode' => 'P007',
                'penjualan_tanggal' => now()
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Michie',
                'penjualan_kode' => 'P008',
                'penjualan_tanggal' => now()
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Ella',
                'penjualan_kode' => 'P009',
                'penjualan_tanggal' => now()
            ],
            [
                'user_id' => 3,
                'pembeli' => 'Manda',
                'penjualan_kode' => 'P010',
                'penjualan_tanggal' => now()
            ],
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
