<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class profil extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profil')->insert (array(
            ['nim' => 2103068,
             'nama' => 'Fera Santika',
             'prodi' => 'D3 Teknik Informatika',
             'jurusan' => 'Teknik Informatika',
             'angkatan' => 2021
            ]
        ));
    }
}
