@extends('layouts.template')
@section('content')
<div class="justify-content-center mt-5">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <p>Hallo, <span class="text-bold">{{Auth::user()->name}}</span></p>
            </div>
            <div class="card-body card">
                <p>Mohon Lengkapi data di bawah</p>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Pelapor</label>
                            <span class="input-group-text bg-light" id="basic-addon2">{{Auth::user()->name}}</span>
                            <input type="text" name="id_user" value="{{Auth::user()->id}}" hidden>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="">
                            <label for="formFile" class="form-label">Photo</label>
                            <input class="form-control" type="file" name="photo" id="image-input">
                        </div>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <label for="bidang">Nama Departemen</label>
                        <div class="input-group">
                            <select name="nama" id="" class="form-control">
                                <option value="Departemen">Nama Departemen</option>
                                <option value="Keamanan">Keamanan</option>
                                <option value="Pelayanan Publik">Pelayanan Publik</option>
                                <option value="Pendidikan">Pendidikan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="bidang">Status</label>
                        <div class="input-group">
                            <select name="nama" id="" class="form-control">
                                <option value="Departemen">Nama Departemen</option>
                                <option value="Keamanan">Keamanan</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <label for="bidang">Departemen</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="departemen">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="nama">tanggal</label>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control" name="tanggal_berita" placeholder="tanggal">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="bidang">Pengaduan</label>
                    <textarea name="" id="konten" cols="30" rows="10"></textarea>
                </div>
                <div class="col-md-12 mt-2 rounded-2">
                    <button type="submit" class="btn btn-primary float-right">Kirim</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
