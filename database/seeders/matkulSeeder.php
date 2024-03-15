<?php

// database/seeders/MatkulSeeder.php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Matkul;
class MatkulSeeder extends Seeder
{
    public function run()
    {
        Matkul::create([
            'kode' => 'MK1',
            'nama' => 'Pemrograman API',
            'sks' => 3
        ]);
        Matkul::create([
            'kode' => 'MK2',
            'nama' => 'Sistem Informasi Manajemen',
            'sks' => 4
        ]);
        // Tambahkan data lainnya sesuai kebutuhan
    }
}
