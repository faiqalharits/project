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
                        <div class="">
                            <label for="formFile" class="form-label">Photo</label>
                            <input class="form-control" type="file" name="photo" id="image-input">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="nama">Nama </label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Nama Departemen">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="nama">Nik</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="nik">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="bidang">No.telp</label>
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-light" id="basic-addon2">+62</span>
                            <input type="text" class="form-control px-1" placeholder="">
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="bidang">Alamat</label>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control px-1" placeholder="">
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <button type="submit" class="btn btn-primary float-right">Kirim</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
