@extends('layouts.institusi')

@section('container')
    <div class="row g-5" style="column-gap: 5.9rem">
        <div class="col-lg-7" style="min-height: 400px;">
        @if($institusi_kebijakan->count() > 0)
            <div class="dateupdate" style="margin-bottom: 1rem;">Diperbarui Pada
                {{ \Carbon\Carbon::parse($institusi_kebijakan[0]->updated_at)->diffForHumans()  }}</div>
            <div class="position-relative h-150">
                <img class="w-100 h-200 mb-4 rounded wow zoomIn" data-wow-delay="0.9s"
                    src="/storage/post-images/{{ $institusi_kebijakan[0]->image }}" style="object-fit: cover;">
                    <p>{!! $institusi_kebijakan[0]->body !!}</p>
            </div>
        @endif
        </div>
        @include('partials.sidebar')
    </div>
@endsection
