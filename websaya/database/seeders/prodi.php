<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class prodi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prodi')->insert(array(
            ['kode' => 'D3TI',
            'prodi' => 'D3 Teknik Informatika'
            ],
            ['kode' => 'D4RPL',
            'prodi' => 'D4 Rekayasa Perangkat Lunak'],
            ['kode' => 'D3KP',
            'prodi' => 'D3 Keperawatan'],
            ['kode' => 'D3TM',
            'prodi' => 'D3 Teknik Mesin'],
            ['kode' => 'D4PM',
            'prodi' => 'D4 Perancangan Manufaktur'],
            ['kode' => 'D3TPTU',
            'prodi' => 'D3 Teknik Pendingin dan Tata Udara'],
        ));
    }
}
