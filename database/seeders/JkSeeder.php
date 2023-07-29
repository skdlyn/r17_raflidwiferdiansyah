<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JenisKelamin;

class JkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jenis_kelamin = [
            [
                'jenis_kelamin' => 'Laki-Laki',
            ],
            [
                'jenis_kelamin' => 'Perempuan',
            ],
        ];
        JenisKelamin::insert($jenis_kelamin);
    }
}
