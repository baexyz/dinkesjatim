@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Ubah Password</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <div class="form-group">
                                    <label for="email2">Username</label>
                                    <input class="form-control" type="text" placeholder="Username"
                                        aria-label="default input example" disabled>
                                </div>
                                <div class="form-group">
                                    <label for="email2">Password Lama</label>
                                    <input class="form-control" type="text" placeholder="Password Lama"
                                        aria-label="default input example">
                                </div>
                                <div class="form-group">
                                    <label for="email2">Password Baru</label>
                                    <input class="form-control" type="text" placeholder="Password Baru"
                                        aria-label="default input example">
                                </div>
                                <div class="form-group">
                                    <label for="email2">Konfirmasi Password Baru</label>
                                    <input class="form-control" type="text" placeholder="Konfirmasi Password Baru"
                                        aria-label="default input example">
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
