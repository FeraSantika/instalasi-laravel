<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mhsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('mhs')->insert(array(
            ['nim' => '22030001',
            'nama' => 'Nadia',
            'prodi' => 'D3TI',
            'angkatan' => '2022'],
            ['nim' => '22030002',
            'nama' => 'Zahra',
            'prodi' => 'D3TI',
            'angkatan' => '2022'],
            ['nim' => '22030003',
            'nama' => 'Putri',
            'prodi' => 'D3TI',
            'angkatan' => '2022'],
            ['nim' => '22030004',
            'nama' => 'Rangga',
            'prodi' => 'D3TI',
            'angkatan' => '2022'],
            ['nim' => '22030005',
            'nama' => 'Nisa',
            'prodi' => 'D3TI',
            'angkatan' => '2022'],
            ['nim' => '22030006',
            'nama' => 'Mytha',
            'prodi' => 'D3TI',
            'angkatan' => '2022']
        ));
    }
}
