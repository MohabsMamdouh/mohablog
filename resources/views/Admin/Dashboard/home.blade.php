@php
    $title = "Home"
@endphp

@extends('Admin.layouts.page')

@section('section')

<section class="content content-home">
    <div class="container">
        <div class="row">
            <a href="{{ route('editInfo') }}" class="col-xl-3 text-bold text-uppercase" style="min-width: 30%"><h5>{{ __('personal Info') }}</h5></a>
            <a href="{{ route('skills') }}" class="col-xl-3 text-bold text-uppercase" style="min-width: 30%"><h5>{{ __('Skills') }}</h5></a>
            <a href="{{ route('showProjects') }}" class="col-xl-3 text-bold text-uppercase" style="min-width: 30%"><h5>{{ __('Projects') }}</h5></a>
        </div>
        <div class="row">
            <a href="{{ route('showWorks') }}" class="col-xl-3 text-bold text-uppercase" style="min-width: 30%"><h5>{{ __('Work Experience') }}</h5></a>
            <a href="{{ route('showLangs') }}" class="col-xl-3 text-bold text-uppercase" style="min-width: 30%"><h5>{{ __('Speaking Language') }}</h5></a>
            <a href="{{ route('showExtensions') }}" class="col-xl-3 text-bold text-uppercase" style="min-width: 30%"><h5>{{ __('Extenions') }}</h5></a>
        </div>
    </div>
</section>

@endsection
