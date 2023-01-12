@extends('layouts.main')
@section('title', $title)
@section('content')
    <h1 class="text-center mb-2 mt-3">Profil Mahasiswa</h1>
    <table class="table table-bordered">
        @foreach ($profilMhs as $item)
            <tr>
                <th scope="col" class="text-center">NIM : </th>
                <td>{{ $item['nim'] }}</td>
            </tr>
            <tr>
                <th scope="col" class="text-center">Nama : </th>
                <td>{{ $item['nama'] }}</td>
            </tr>
            <tr>
                <th scope="col" class="text-center">Prodi : </th>
                <td>{{ $item['prodi'] }}</td>
            </tr>
            <tr>
                <th scope="col" class="text-center">Kelas : </th>
                <td>{{ $item['kelas'] }}</td>
            </tr>
            <br>
        @endforeach
    </table>
@endsection
