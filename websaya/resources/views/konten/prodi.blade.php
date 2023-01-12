@extends('layouts.main')
@section('title', $title)
@section('content')
    <h1 class="text-center mb-5 mt-3">Prodi Polindra</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" class="text-center"> NO </th>
                <th scope="col" class="text-center">PRODI</th>
                <th scope="col" class="text-center">JURUSAN</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0; ?>
            @foreach ($dataProdi as $item)
                <?php $no++; ?>
                <tr>
                    <td class="text-center">{{ $no }}</td>
                    <td class="text-center">{{ $item['prodi'] }}</td>
                    <td class="text-center"> {{ $item['jurusan'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
