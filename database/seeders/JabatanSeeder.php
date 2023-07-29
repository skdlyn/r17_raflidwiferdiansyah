<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jabatan = [
            [
                'nama_jabatan' => 'Web Dev',
            ],
            [
                'nama_jabatan' => 'Mobile Dev',
            ],
            [
                'nama_jabatan' => 'Fullstack',
            ],
            [
                'nama_jabatan' => 'Frontend',
            ],
            [
                'nama_jabatan' => 'Backend',
            ],
        ];
        Jabatan::insert($jabatan);   
    }
}
