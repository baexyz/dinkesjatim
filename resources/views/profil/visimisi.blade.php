@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
            <div class="dateupdate" style="margin-bottom: 1rem;">Diperbarui Pada 19 April 2022</div>
            <div class="position-relative h-150">
                <img class="w-100 h-200 mb-4 rounded wow zoomIn" data-wow-delay="0.9s" src="img/VisiMisi.jpg"
                    style="object-fit: cover;">
            </div>
        </div>
        @include('partials.sidebar')
    </div>
@endsection
