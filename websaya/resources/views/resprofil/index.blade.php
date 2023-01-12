@extends('layouts.main')
@section('title', $title)
@section('content')
    <div class="row mt-5 mb-5 ">
        @foreach ($dataMhs as $item)
            <div class="col-sm-4">
                <div class="card" style="max-width: 18rem;">
                    <div class="card-header">
                        <h5>{{ $item->nama }}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text"> Nim : {{ $item->nim }}</p>
                        <p class="card-text"> Prodi : {{ $item->prodi }}</p>
                        <p class="card-text"> Jurusan : {{ $item->jurusan }}</p>
                        <p class="card-text"> Angkatan : {{ $item->angkatan }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
