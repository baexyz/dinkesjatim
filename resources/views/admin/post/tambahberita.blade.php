@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Data</h4>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Tambah Berita</div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 col-lg-12">
                                <form action="/data/createberita" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <input type="text" name="kategori_post" id="kategori_post" value="berita"
                                                hidden>
                                            <label for="judul" class="form-label">Judul</label>
                                            <input class="form-control" type="text" id="judul" name="judul"
                                                placeholder="Judul">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="slug" class="form-label">Slug</label>
                                            <input class="form-control" type="text" id="slug" name="slug"
                                                placeholder="slug">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="mb-3">
                                            <label for="image" class="form-label">Sertakan Gambar untuk Headline</label>
                                            <img class="img-preview img-fluid mb-3 col-sm-5">
                                            <input class="form-control" type="file" id="image" name="image"
                                                onchange="previewImage()">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="body">Isi</label>
                                        <input id="body" type="hidden" name="body">
                                        <trix-editor input="body"></trix-editor>
                                    </div>

                                    <div class="form-group">
                                        <label for="tampil_headline">Pilih Untuk Dijadikan Headline </label>
                                        <select class="form-control form-control-sm" name="tampil_headline" id="tampil_headline">
                                                <option value="1">Berita</option>
                                                <option value="2">Headline</option>
                                        </select>
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
                                        <button class="btn btn-primary" type="submit">Unggah</button>
                                        <button class="btn btn-danger">Batal</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function previewImage() {
            const image = document.querySelector('#image');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
