@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambah File Baru</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <div class="form-group">
                                    <label for="email2">Dokumen & Publikasi</label>
                                    <input class="form-control" type="text" placeholder="Judul"
                                        aria-label="default input example">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Unggah File</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                <div class="form-group">
                                    <label for="smallSelect">Kategori File</label>
                                    <select class="form-control form-control-sm" id="smallSelect">
                                        <option>Dokumen & Publikasi</option>
                                        <option>Laporan Kinerja</option>
                                        <option>Peraturan & Aturan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="smallSelect">Status</label>
                                    <select class="form-control form-control-sm" id="smallSelect">
                                        <option>Tampil</option>
                                        <option>Tidak Tampil</option>
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
