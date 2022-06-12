@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambah File SPM</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <div class="form-group">
                                    <label for="smallSelect">Kabupaten/Kota</label>
                                    <select class="form-control form-control-sm" id="smallSelect">
                                        <option>Nama Kabkota</option>
                                        <option>Nama Kabkota</option>
                                        <option>Nama Kabkota</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Unggah File SPM</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                <div class="form-group">
                                    <label for="smallSelect">Tahun</label>
                                    <select class="form-control form-control-sm" id="smallSelect">
                                        <option>Tahun</option>
                                        <option>Tahun</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="smallSelect">Triwulan</label>
                                    <select class="form-control form-control-sm" id="smallSelect">
                                        <option>Triwulan</option>
                                        <option>Triwulan</option>
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
