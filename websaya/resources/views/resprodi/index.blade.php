@extends('layouts.main')
@section('title', $title)
@section('content')
    <h3>Nama : {{ $mhs }}</h3>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th scope="col" class="text-center">KODE</th>
                <th scope="col" class="text-center">PRODI</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataMhs as $item)
                <tr>
                    <td>{{ $item->kode }}</td>
                    <td>{{ $item->prodi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
