@extends('layouts.template')

@section('content')
<div class="d-flex justify-content-between align-items-center">
    <a class="btn btn-secondary py-2 px-3" href="/berita">Kembali</a>
</div>
<div class="justify-content-center">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <p>Hallo, <span class="text-bold">{{Auth::user()->name}}</span></p>
            </div>
            <form action="{{route('berita.update', $news->id)}}" enctype="multipart/form-data" method="post">
                @csrf
                {{ method_field ('PUT') }}
                <div class="card-body card">
                    <p class="fs-3 fw-bold">Edit</p>
                    <div class="col">
                        <div class="col-md-3">
                            <img src="{{ asset('storage/images/'.$news->photo)}}" alt="" class="card-img img-crop" id="imagePreview">
                            <p class="custom-file-label"></p>
                            <label for="formFile" class="form-label">Default file input example</label>
                            <input class="form-control" type="file" name="photo" id="image-input">
                        </div>
                        <div class="col-md-6 mt-4">
                            <label for="bidang">Judul Berita</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="judul_berita" value="{{$news->judul_berita}}" placeholder="Judul Berita">
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <label for="bidang">Deskripsi</label>
                            <div class="input-group mb-3">
                                <textarea type="text" class="form-control" name="berita" placeholder="Deskripsi" rows="10">{{$news->berita}}</textarea>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <label for="bidang">Sumber</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="sumber" value="{{$news->sumber}}"placeholder="Sumber">
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 me-2">
                            <label for="nama">tanggal</label>
                            <div class="input-group mb-3">
                                <input type="date" class="form-control" name="tanggal_berita" value="{{$news->tanggal_berita}}"placeholder="tanggal">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <button type="submit" class="btn btn-primary float-right">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
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