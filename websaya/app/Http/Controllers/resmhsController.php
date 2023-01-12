<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class resmhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $title = "Mahasiswa WebSaya.com";
            $slug = "mahasiswa";
            $mhs = "Nadia";
            $dataMhs = DB::table('mhs')
                        -> join('prodi', 'mhs.prodi','=','prodi.kode')
                        -> get();
            return view('resmhs.index' ,
                    compact('mhs', 'title', 'slug', 'dataMhs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        DB::table('mhs')
                ->insert([
                    'nim' => 22030007,
                    'nama' => 'Suzana',
                    'prodi' => 'D3TI',
                    'angkatan' => 2022]);
        echo "Data mhs berhasil ditambahkan";
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
    public function show($id=" ")
    {
       $id = array(
        [
            'nim' => '202203001',
            'nama' => 'Adeeva',
            'prodi' => 'TI'
        ],
        [
            'nim' => '202203002',
            'nama' => 'Nadia',
            'prodi' => 'TI'
        ],
        [
            'nim' => '202203003',
            'nama' => 'Zahra',
            'prodi' => 'TI'
        ]
        );
        return $id;
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
        DB::table('mhs')
            -> where('nim', 22030007)
            -> update([
                'nama' => 'Bokir',
                'prodi' => 'D3TI',
                'angkatan' => 2022
            ]);
        echo "Data mhs 22030007 berhasil di perbaharui";
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        DB::table('mhs')
            -> where('nim', 22030007)
            -> delete();
    echo "Data mhs 22030007 berhasil di hapus";
    }
}
