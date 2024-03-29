@extends('admin.layout.main')

@section('page-header')
    <div class="page-inner">
        <div class="page-header">
            <h4 class="page-title">Data</h4>
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
                    <a href="#">Data</a>
                </li>
                <li class="separator">
                    <i class="flaticon-right-arrow"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Artikel</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/tambahberita" class="d-flex align-items-center">
                            <h4 class="card-title">Artikel</h4>

                            <button class="btn btn-primary btn-round ml-auto">
                                <i class="fa fa-plus"></i>
                                Tambah Artikel
                            </button>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="multi-filter-select_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="multi-filter-select_length"><label>Show <select
                                                    name="multi-filter-select_length" aria-controls="multi-filter-select"
                                                    class="form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label></div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="multi-filter-select_filter" class="dataTables_filter"><label>Search:<input
                                                    type="search" class="form-control form-control-sm" placeholder=""
                                                    aria-controls="multi-filter-select"></label></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="multi-filter-select"
                                            class="display table table-striped table-hover dataTable" role="grid"
                                            aria-describedby="multi-filter-select_info">
                                            <thead>
                                                <tr role="row">
                                                    <th>No.</th>
                                                    <th class="sorting_asc" tabindex="0"
                                                        aria-controls="multi-filter-select" rowspan="1" colspan="1"
                                                        aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending"
                                                        style="width: 195px;">Judul</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="multi-filter-select" rowspan="1" colspan="1"
                                                        aria-label="Position: activate to sort column ascending"
                                                        style="width: 82.4062px;">Tanggal Publikasi</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="multi-filter-select" rowspan="1" colspan="1"
                                                        aria-label="Office: activate to sort column ascending"
                                                        style="width: 70px;">Status</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="multi-filter-select" rowspan="1" colspan="1"
                                                        aria-label="Age: activate to sort column ascending"
                                                        style="width: 70px;">Headline</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="multi-filter-select" rowspan="1" colspan="1"
                                                        aria-label="Start date: activate to sort column ascending"
                                                        style="width: 70px;">Bidang</th>
                                                    <th class="sorting" tabindex="0"
                                                        aria-controls="multi-filter-select" rowspan="1" colspan="1"
                                                        aria-label="Salary: activate to sort column ascending"
                                                        style="width: 82.4531px;">Action</th>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th>
                                                        <div class="col-sm-12 p-0">
                                                            <div class="dataTables_length" id="multi-filter-select_length">
                                                                <select name="multi-filter-select_length"
                                                                    aria-controls="multi-filter-select"
                                                                    class="form-control form-control-sm">
                                                                    <option value="">All</option>
                                                                    <option value="">All</option>
                                                                    <option value="">All</option>
                                                                    <option value="">All</option>

                                                                </select></div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="col-sm-12 p-0">
                                                            <div class="dataTables_length" id="multi-filter-select_length">
                                                                <select name="multi-filter-select_length"
                                                                    aria-controls="multi-filter-select"
                                                                    class="form-control form-control-sm">
                                                                    <option value="">All</option>
                                                                    <option value="">All</option>
                                                                    <option value="">All</option>
                                                                    <option value="">All</option>
                                                                </select></div>
                                                        </div>
                                                    </th>
                                                    <th>
                                                        <div class="col-sm-12 p-0">
                                                            <div class="dataTables_length" id="multi-filter-select_length">
                                                                <select name="multi-filter-select_length"
                                                                    aria-controls="multi-filter-select"
                                                                    class="form-control form-control-sm">
                                                                    <option value="">All</option>
                                                                    <option value="">All</option>
                                                                    <option value="">All</option>
                                                                    <option value="">All</option>
                                                                </select></div>
                                                        </div>
                                                    </th>


                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td>#</td>
                                                    <td class="sorting_1">Airi Satou</td>
                                                    <td>2008/11/28</td>
                                                    <td>Tampil</td>
                                                    <td>Berita</td>
                                                    <td>Sekretariat</td>
                                                    <td>
                                                        <button class="btn btn-primary btn-sm"><i
                                                                class="fas fa-edit"></i></button>
                                                        <button class="btn btn-danger btn-sm"><i
                                                                class="fas fa-trash"></i></button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="multi-filter-select_info" role="status"
                                            aria-live="polite">Showing 1 to 5 of 57 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="multi-filter-select_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="multi-filter-select_previous"><a href="#"
                                                        aria-controls="multi-filter-select" data-dt-idx="0" tabindex="0"
                                                        class="page-link">Previous</a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="multi-filter-select" data-dt-idx="1" tabindex="0"
                                                        class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="multi-filter-select" data-dt-idx="2" tabindex="0"
                                                        class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="multi-filter-select" data-dt-idx="3" tabindex="0"
                                                        class="page-link">3</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="multi-filter-select" data-dt-idx="4" tabindex="0"
                                                        class="page-link">4</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="multi-filter-select" data-dt-idx="5" tabindex="0"
                                                        class="page-link">5</a></li>
                                                <li class="paginate_button page-item disabled"
                                                    id="multi-filter-select_ellipsis"><a href="#"
                                                        aria-controls="multi-filter-select" data-dt-idx="6" tabindex="0"
                                                        class="page-link">…</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="multi-filter-select" data-dt-idx="7" tabindex="0"
                                                        class="page-link">12</a></li>
                                                <li class="paginate_button page-item next" id="multi-filter-select_next"><a
                                                        href="#" aria-controls="multi-filter-select" data-dt-idx="8"
                                                        tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
