<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 31,
                'user_id' => 1,
                'stok_tanggal' => Carbon::parse("2003-02-01"),
                'stok__jumlah' => 10 
            ],
            [
                'barang_id' => 32,
                'user_id' => 1,
                'stok_tanggal' => Carbon::parse("2003-02-01"),
                'stok__jumlah' => 10 
            ],
            [
                'barang_id' => 33,
                'user_id' => 1,
                'stok_tanggal' => Carbon::parse("2003-02-01"),
                'stok__jumlah' => 10 
            ],
            [
                'barang_id' => 34,
                'user_id' => 1,
                'stok_tanggal' => Carbon::parse("2003-02-01"),
                'stok__jumlah' => 10 
            ],
            [
                'barang_id' => 35,
                'user_id' => 2,
                'stok_tanggal' => Carbon::parse("2003-02-01"),
                'stok__jumlah' => 10 
            ],
            [
                'barang_id' => 36,
                'user_id' => 2,
                'stok_tanggal' => Carbon::parse("2003-02-01"),
                'stok__jumlah' => 10 
            ],
            [
                'barang_id' => 37,
                'user_id' => 2,
                'stok_tanggal' => Carbon::parse("2003-02-01"),
                'stok__jumlah' => 10 
            ],
            [
                'barang_id' => 38,
                'user_id' => 2,
                'stok_tanggal' => Carbon::parse("2003-02-01"),
                'stok__jumlah' => 10 
            ],
            [
                'barang_id' => 39,
                'user_id' => 3,
                'stok_tanggal' => Carbon::parse("2003-02-01"),
                'stok__jumlah' => 10 
            ],
            [
                'barang_id' => 40,
                'user_id' => 3,
                'stok_tanggal' => Carbon::parse("2003-02-01"),
                'stok__jumlah' => 10 
            ],
        ];
        DB::table('t_stok')->insert($data);
    }
}
