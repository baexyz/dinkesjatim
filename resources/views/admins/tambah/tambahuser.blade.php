@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambah User</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <div class="form-group">
                                    <label for="email2">Username</label>
                                    <input class="form-control" type="text" placeholder="Username"
                                        aria-label="default input example">
                                </div>
                                <div class="form-group">
                                    <label for="email2">Password</label>
                                    <input class="form-control" type="text" placeholder="Password"
                                        aria-label="default input example">
                                </div>
                                <div class="form-group">
                                    <label for="smallSelect">Level</label>
                                    <select class="form-control form-control-md" id="smallSelect">
                                        <option>Level</option>
                                        <option>Nama Kabkota</option>
                                        <option>Nama Kabkota</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="smallSelect">SC Bidang</label>
                                    <select class="form-control form-control-md" id="smallSelect">
                                        <option>SC Bidang</option>
                                        <option>Nama Kabkota</option>
                                        <option>Nama Kabkota</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="smallSelect">Kabupaten/Kota</label>
                                    <select class="form-control form-control-md" id="smallSelect">
                                        <option>Nama Kabkota</option>
                                        <option>Nama Kabkota</option>
                                        <option>Nama Kabkota</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="smallSelect">Status</label>
                                    <select class="form-control form-control-md" id="smallSelect">
                                        <option>Status</option>
                                        <option>Nama Kabkota</option>
                                        <option>Nama Kabkota</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary">Simpan</button>
                                    <button class="btn btn-danger">Batal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
