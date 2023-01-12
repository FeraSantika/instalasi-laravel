<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mahasiswa2Controller extends Controller
{
    public function index(){
        $mhs = "Nadia";
        $title = "Mhasiswa WebSaya.com";
        $slug = "mahasiswa";
        return view('konten.mahasiswa', cmpact('mhs', 'title'))
    }
}
