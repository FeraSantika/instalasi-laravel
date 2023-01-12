<?php

namespace App\Http\Controllers;
use App\Models\mhs;
use Illuminate\Http\Request;

class mahasiswaController extends Controller
{
    public function index(){
        $mhs = "Nadia";
        $title = "Mahasiswa WebSaya.com";
        $slug = "mahasiswa";
        $dataMhs = $this->dataMahasiswa();
        return view('konten.mahasiswa' , compact('mhs', 'title', 'slug', 'dataMhs'));
    }

    public function dataMahasiswa() {
        $dataMhs = array(
            [
                'nim' =>  '202203001',
                'nama' => 'Adeeva',
                'prodi' => 'TI'
            ],
            [
                'nim' =>  '202203002',
                'nama' => 'Nadia',
                'prodi' => 'TI'
            ],
            [
                'nim' =>  '202203003',
                'nama' => 'Zahra',
                'prodi' => 'TI'
            ],
        );
        return $dataMhs;
        }
}

