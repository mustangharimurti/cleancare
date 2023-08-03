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

    DB::table('barangs')->insert([
        [
            'namaBarang' => 'daun',
            'hargaBarang' => 20,
            'jumlah' => 5,
            'position_id' => 1,
        ],
        [
            'namaBarang' => 'batang',
            'hargaBarang' => 20,
            'jumlah' => 5,
            'position_id' => 2,
        ],
        [
            'namaBarang' => 'ranting',
            'hargaBarang' => 20,
            'jumlah' => 5,
            'position_id' => 3,
        ],
    ]);
    }
}
