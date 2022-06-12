@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Institusi</h4>
            <ul class="breadcrumbs">
                <li class="nav-home">
                    <a href="/dashboard">
                        <i class="flaticon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Institusi</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Tujuan</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Halaman Tujuan</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <div class="form-group">
                                    <label for="exampleFormControlFile1">Sertakan Gambar untuk Headline Berita</label>
                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                </div>
                                <div class="form-group">
                                    <label for="email2">Judul</label>
                                    <input class="form-control" type="text" placeholder="Judul"
                                        aria-label="default input example">
                                </div>

                                <div class="form-group">
                                    <label for="email2">Isi</label>

                                    <form>
                                        <input id="x" type="hidden" name="content">
                                        <trix-editor input="x"></trix-editor>
                                    </form>
                                </div>
                                <div class="form-group">
                                    <label for="smallSelect">Bidang</label>
                                    <select class="form-control form-control-sm" id="smallSelect">
                                        <option>Sekretariat</option>
                                        <option>Bidang Kesehatan Masyarakat</option>
                                        <option>Bidang Pencegahan dan Pengendalian Penyakit</option>
                                        <option>Bidang Pelayanan Kesehatan</option>
                                        <option>Bidang Sumber Daya Kesehatan</option>
                                        <option>PPID</option>
                                        <option>Dinas</option>
                                        <option>Barang dan Jasa</option>
                                        <option>UPT Dinas Kesehatan</option>
                                        <option>Dinkes Kabupaten</option>
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
            </div>
            @endsection
