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
                        <label for="nama">Nama Department</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Nama Departmen">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="bidang">bidang</label>
                        <div class="input-group">
                            <select name="bidang" id="" class="form-control">
                                <option value="Instansi negara">Instansi Negara</option>
                                <option value="Keamanan">Keamanan</option>
                                <option value="Pelayanan Publik">Pelayanan Publik</option>
                                <option value="Pendidikan">Pendidikan</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <label for="nama">Nama Pimpinan</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Nama Pimpinan">
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
                <div class="row mt-4">
                    <div class="col-md-6">
                        <label for="bidang">Nama Pimpinan</label>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control px-2" placeholder="Nama">
                        </div>
                    </div>
                    <div class="col-md-6">
                            <label for="floatingTextarea">Alamat</label>
                            <input type="text" class="form-control px-2" placeholder="Alamat">
                    </div>
                </div>
                <div class="col-md-12 mt-2">
                    <form action=""></form>
                    <button type="submit" class="btn btn-primary float-right">Kirim</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
