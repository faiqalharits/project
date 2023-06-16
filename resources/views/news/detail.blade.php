@extends('layouts.template')
@section('content')
<div class="d-flex justify-content-between align-items-center">
    <a class="btn btn-secondary py-2 px-3" href="/berita">Kembali</a>
</div>
<div class="justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="row mx-5 p-5 mt-1 justify-content-between">
                <div class="col-md-12">
                    <img src="{{ asset('storage/images/'.$news->photo)}}" alt="Gambar Berita"
                        style="max-width: 30%; object-fit: cover;" >
                </div>
                <div class="mt-3">
                    <h1>
                        {{ $news->judul_berita }}
                    </h1>
                    <div class="d-flex align-items-center gap-3">
                        <p class="text-muted">{{ \Carbon\Carbon::parse($news->tanggal_berita)->format('M d, Y') }}</p>
                        <p>
                            |
                        </p>
                        <p class="text-muted">{{$news->sumber}}</p>
                    </div>
                    <p class="mt-2">
                        {{$news->berita}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
