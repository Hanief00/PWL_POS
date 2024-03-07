<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
                'user_id' => 1,
                'pembeli' => 'udin',
                'penjualan_kode' => 'TF01',
                'penjualan_tanggal' => Carbon::parse("2024-02-01")
            ],
            [
                'user_id' => 1,
                'pembeli' => 'ahmad',
                'penjualan_kode' => 'TF02',
                'penjualan_tanggal' => Carbon::parse("2024-02-01")
            ],
            [
                'user_id' => 1,
                'pembeli' => 'shidiq',
                'penjualan_kode' => 'TF03',
                'penjualan_tanggal' => Carbon::parse("2024-02-01")
            ],
            [
                'user_id' => 1,
                'pembeli' => 'rofiq',
                'penjualan_kode' => 'TF04',
                'penjualan_tanggal' => Carbon::parse("2024-02-01")
            ],
            [
                'user_id' => 2,
                'pembeli' => 'maulana',
                'penjualan_kode' => 'TF05',
                'penjualan_tanggal' => Carbon::parse("2024-02-01")
            ],
            [
                'user_id' => 2,
                'pembeli' => 'robi',
                'penjualan_kode' => 'TF06',
                'penjualan_tanggal' => Carbon::parse("2024-02-01")
            ],
            [
                'user_id' => 2,
                'pembeli' => 'fikri',
                'penjualan_kode' => 'TF07',
                'penjualan_tanggal' => Carbon::parse("2024-02-01")
            ],
            [
                'user_id' => 3,
                'pembeli' => 'dini',
                'penjualan_kode' => 'TF08',
                'penjualan_tanggal' => Carbon::parse("2024-02-01")
            ],
            [
                'user_id' => 3,
                'pembeli' => 'delya',
                'penjualan_kode' => 'TF09',
                'penjualan_tanggal' => Carbon::parse("2024-02-01")
            ],
            [
                'user_id' => 3,
                'pembeli' => 'falya',
                'penjualan_kode' => 'TF10',
                'penjualan_tanggal' => Carbon::parse("2024-02-01")
            ],
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
