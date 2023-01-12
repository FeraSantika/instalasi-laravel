<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class resprofilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "WebSaya.com";
        $slug = "profil";
        $mhs = "Fera";
        $dataMhs = DB::table('profil')->get();
        return view('resprofil.index',
                compact('mhs', 'title', 'slug', 'dataMhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        DB::table('profil')
                ->insert([
                    'nim' => 22030001,
                    'nama' => 'Nadia',
                    'prodi' => 'D3 Teknik Informatika',
                    'jurusan' => 'Teknik Informatika',
                    'angkatan' => 2022
                ]);
        echo "Data profil berhasil ditambahkan";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        DB::table('profil')
                ->where('nim', 22030001)
                ->update([
                    'nim' => 22030002,
                    'nama' => 'zahra',
                    'prodi' => 'D4 Rekayasa Perangkat Lunak',
                    'jurusan' => 'Teknik Informatika',
                    'angkatan' => 2022
                ]);
        echo "Data profil berhasil diperbaharui";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        DB::table('profil')
                ->where('nim', 22030002)
                ->delete();
        echo "Data profil nim 22030002 berhasil dihapus";
    }
}
