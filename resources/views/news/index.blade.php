@extends('layouts.template')

@section('content')
<div class="row px-0 mt-5">
    <div class="col-md-4">
        <div class="justify-content-center">
            <label class="fs-4 text-white">Form Berita</label>
            <div class="card ">
                <form action="{{ route('berita.store')}}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="card-body card">
                        <p>Isi Berita</p>
                    </div>
                    ceecedc
                    <div class="col-md-7 ms-3 mt-4 me-2">
                        <label for="nama">Judul Berita</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="judul_berita" placeholder="Judul Berita">
                        </div>
                    </div>
                    <div class="col-md-7 ms-3">
                        <label for="nama">Deskripsi</label>
                        <div class="input-group mb-3">
                            <textarea name="berita" rows="3" class="form-control" placeholder="deskripsi"></textarea>
                        </div>
                    </div>
                    <div class="col-md-7 ms-3 mb-4 me-2">
                        <label for="nama">Sumber</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="sumber" placeholder="Sumber">
                        </div>
                    </div>
                    <div class="col-md-7 ms-3 mb-4 me-2">
                        <label for="nama">tanggal</label>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control" name="tanggal_berita" placeholder="tanggal">
                        </div>
                    </div>
                    <div class="col-md-12 ms-3">
                        <button type="submit" class="btn btn-primary float-right">Buat</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @if(!$data->isEmpty())
    <div class="col-md-8">
        <label class="fs-4 text-white">Berita</label>
        <div class="card ">
            <div class="row my-2 mx-2 gap-3">
                @foreach($data as $news)
                <div class="card m-2 col-md-4 p-2 h-50 ms-4" style="width: 270px;">
                    <div class="dropdown">
                        <button class="btn bg-light" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                <path
                                    d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                            </svg>
                        </button>
                        <ul class="dropdown-menu">
                            <form action="{{route('berita.destroy', $news->id)}}" method="post">
                                @csrf
                                {{ method_field('DELETE') }}
                                <div class="row">
                                    <a href="{{route('berita.edit', $news->id)}}" class="btn w-75 ms-4 mt-3">
                                        <li>Edit</li>
                                    </a>
                                    <button type="submit" class="btn w-75 ms-4">
                                        <li>Hapus</li>
                                    </button>
                                </div>
                            </form>
                        </ul>
                    </div>
                    <a href="{{route('berita.show', $news->id)}}">
                        <img src="{{ asset('storage/images/'.$news->photo )}}" alt="..." class="img-fluid card-img"
                            style="height: 250px; object-fit: cover;">
                        <div class="card-body p-3">
                            <h5 class="card-title">{{ $news->judul_berita }}</h5>
                            <div class="card-text pt-2">
                                <p style="font-size: 15px;" class="text-muted">
                                    {{ implode(' ', array_slice(explode(' ', $news->berita), 0, 12)) . (strlen($news->berita) > 12 ? '...' : '') }}
                                </p>
                                <div class="d-flex justify-content-between pt-2">
                                    <p>
                                        {{ $news->sumber }}
                                    </p>
                                    <p>
                                        {{ \Carbon\Carbon::parse($news->tanggal_berita)->format('M d, Y') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    @endif
</div>
@endsection

@section('css')
<style>
    .card {
        transition: .3s;
        cursor: pointer;
        text-decoration: none;
        color: black;
    }

</style>
@endsection

@section('js')
<script>
    document.getElementById('image-input').addEventListener('change', (ev) => {
        let reader = new FileReader()
        reader.readAsDataURL(ev.target.files[0])
        reader.onload = () => {
            document.getElementById('imagePreview').setAttribute('src', reader.result)
        }
    })

</script>
@endsection
