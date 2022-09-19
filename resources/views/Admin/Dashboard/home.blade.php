@php
    $title = "Home"
@endphp

@extends('Admin.layouts.page')

@section('section')

<style>
    .box {
        display: flex;
        justify-content: center;
        align-items: center;
        font-weight: bold;
        font-size: 3rem;
        position: relative;
        width: 300px;
        height: 150px;
        background-color: #fff;
        border: 1px solid rgba(59, 58, 58, 0.46);
        border-radius: 20px;
        box-shadow: -10px 5px 10px gray;
        top: 0;
        transition: top ease 0.5s;
        margin-left: 60px;
        margin-bottom: 60px;
    }

    .box:hover {
        top: -50px;
    }

</style>

<section class="content content-home">
    <div class="container">
        <div class="row">
            <div class="box">
                <a href="{{ route('info.show') }}" class="col-xl-3 text-bold text-uppercase" style="min-width: 30%"><h5>{{ __('personal Info') }}</h5></a>
            </div>
            <div class="box">
                <a href="{{ route('skills.show') }}" class="col-xl-3 text-bold text-uppercase" style="min-width: 30%"><h5>{{ __('Skills') }}</h5></a>
            </div>
            <div class="box">
                <a href="{{ route('projects.show') }}" class="col-xl-3 text-bold text-uppercase" style="min-width: 30%"><h5>{{ __('Projects') }}</h5></a>
            </div>
        </div>
        <div class="row">
            <div class="box">
                <a href="{{ route('works.show') }}" class="col-xl-3 text-bold text-uppercase" style="min-width: 30%"><h5>{{ __('Work Experience') }}</h5></a>
            </div>
            <div class="box">
                <a href="{{ route('langs.show') }}" class="col-xl-3 text-bold text-uppercase" style="min-width: 30%"><h5>{{ __('Speaking Language') }}</h5></a>
            </div>
        </div>
    </div>
</section>

@endsection
