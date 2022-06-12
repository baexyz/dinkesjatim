@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Institusi</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Halaman Visi Misi</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Sertakan Gambar untuk Headline
                                            Berita</label>
                                        <input class="form-control" type="file" id="formFile">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email2">Judul</label>
                                    <input class="form-control" type="text" placeholder="Judul"
                                        aria-label="default input example">
                                </div>
                                <div class="form-group">
                                    <label for="email2">Slug</label>
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
                                    <select class="form-control form-control-sm" name="bidang_id">
                                        @foreach ($bidang as $b)
                                            <option value="{{ $b->id }}">{{ $b->nama_bidang }}</option>
                                        @endforeach
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
        </div>
    </div>
@endsection
