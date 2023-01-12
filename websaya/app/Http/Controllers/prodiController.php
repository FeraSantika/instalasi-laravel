<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class prodiController extends Controller
{
    public function index(){
        $title = "Prodi WebSaya.com";
        $slug = "prodi";
        $dataProdi = $this->dataProdi();
        return view('konten.prodi', compact('title', 'slug', 'dataProdi'));
    }

    public function dataProdi(){
        $prodi = array(
            [
                'prodi' => 'D3 Teknik Informatika',
                'jurusan' => 'Teknik Informatika'
            ],
            [
                'prodi' => 'D4 Rekayasa Perangkat Lunak',
                'jurusan' => 'Teknik Informatika'
            ],
            [
                'prodi' => 'D3 Keperawatan',
                'jurusan' => 'Teknik Informatika'
            ],
            [
                'prodi' => 'D3 Teknik Mesin',
                'jurusan' => 'Teknik Mesin'
            ],
            [
                'prodi' => 'D4 Perancangan Manufaktur',
                'jurusan' => 'Teknik Mesin'
            ],
            [
                'prodi' => 'D3 Teknik Pendingin dan Tata Udara',
                'jurusan' => 'Teknik Pendingin dan Tata Udara'
            ],
            [
                'prodi' => 'D4 Sistem Informasi Kota  Cerdas',
                'jurusan' => 'Teknik Informatika'
            ]
        );
        return $prodi;
    }
}
