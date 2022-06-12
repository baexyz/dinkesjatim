@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Balas Pertanyaan</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <div class="form-group">
                                    <label for="disableinput">Nama</label>
                                    <input type="text" class="form-control" id="disableinput" placeholder="Nama" disabled="">
                                </div>
                                <div class="form-group">
                                    <label for="disableinput">Email</label>
                                    <input type="text" class="form-control" id="disableinput" placeholder="Nama" disabled="">
                                </div>
                                <div class="form-group">
                                    <label for="disableinput">No. Telepon</label>
                                    <input type="text" class="form-control" id="disableinput" placeholder="Nama" disabled="">
                                </div>
                                <div class="form-group">
                                    <label for="disableinput">Pertanyaan</label>
                                    <input type="text" class="form-control" id="disableinput" placeholder="Nama" disabled="">
                                </div>
                                <div class="form-group">
                                    <label for="email2">Jawaban</label>
                                    <form>
                                        <input id="x" type="hidden" name="content">
                                        <trix-editor input="x"></trix-editor>
                                    </form>
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
