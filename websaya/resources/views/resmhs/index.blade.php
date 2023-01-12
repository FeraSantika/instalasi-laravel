@extends('layouts.main')
@section('title', $title)
@section('content')
    <h2>Nama : {{ $mhs }}</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" class="text-center">NIM</th>
                <th scope="col" class="text-center">NAMA</th>
                <th scope="col" class="text-center">PRODI</th>
                <th scope="col" class="text-center">ANGKATAN</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataMhs as $item)
                <tr>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->prodi }}</td>
                    <td>{{ $item->angkatan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
