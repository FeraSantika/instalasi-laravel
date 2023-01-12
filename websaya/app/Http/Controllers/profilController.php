<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profilController extends Controller
{
    public function index(){
        $mhs = "Fera";
        $title = "Profil Mahasiswa WebSaya.com";
        $slug = "profil";
        $profilMhs = $this->dataMahasiswa();
        return view('konten.profil', compact('title', 'slug', 'mhs', 'profilMhs'));
    }

    public function dataMahasiswa() {
        $dataMhs = array(
            [
                'nim' =>  '2103068',
                'nama' => 'Fera Santika',
                'prodi' => 'Teknik Informatika',
                'kelas' => 'D3TI2C'
        ]);
        return $dataMhs;
        }
}
