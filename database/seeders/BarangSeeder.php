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
            [
                'kategori_id' => 1,
                'barang_kode' => 'B001',
                'barang_nama' => 'barang1',
                'harga_beli' => 10000,
                'harga_jual' => 12000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'B002',
                'barang_nama' => 'barang2',
                'harga_beli' => 11000,
                'harga_jual' => 13000,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'B003',
                'barang_nama' => 'barang3',
                'harga_beli' => 12000,
                'harga_jual' => 14000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'B004',
                'barang_nama' => 'barang4',
                'harga_beli' => 13000,
                'harga_jual' => 15000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'B005',
                'barang_nama' => 'barang5',
                'harga_beli' => 14000,
                'harga_jual' => 16000,
            ],
            [
                'kategori_id' => 1,
                'barang_kode' => 'B006',
                'barang_nama' => 'barang6',
                'harga_beli' => 15000,
                'harga_jual' => 17000,
            ],
            [
                'kategori_id' => 2,
                'barang_kode' => 'B007',
                'barang_nama' => 'barang7',
                'harga_beli' => 16000,
                'harga_jual' => 18000,
            ],
            [
                'kategori_id' => 3,
                'barang_kode' => 'B008',
                'barang_nama' => 'barang8',
                'harga_beli' => 17000,
                'harga_jual' => 19000,
            ],
            [
                'kategori_id' => 4,
                'barang_kode' => 'B009',
                'barang_nama' => 'barang9',
                'harga_beli' => 18000,
                'harga_jual' => 20000,
            ],
            [
                'kategori_id' => 5,
                'barang_kode' => 'B010',
                'barang_nama' => 'barang10',
                'harga_beli' => 19000,
                'harga_jual' => 21000,
            ],
        ];

        // Masukkan data ke tabel m_barang.
        DB::table('m_barang')->insert($data);
    }
}
