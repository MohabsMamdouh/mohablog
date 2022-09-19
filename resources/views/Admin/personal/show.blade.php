@php
    $title = "Personal Info"
@endphp

@extends('Admin.layouts.page')

@section('section')



<section class="title">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-11 Center">
                <h4 class="glitch text-capitalize" data-text="personal info">
                    <a href="{{ route('home') }}">{{ __('Dashboard') }} &#8827;</a> {{ __('personal info') }}
                </h4>
            </div>
        </div>
    </div>
</section>

<style>
    .card {
        width: 80%;
        margin: auto;
        height: auto;
        display: flex;
        background-color: #fff;
        border: 1px solid rgba(59, 58, 58, 0.46);
        border-radius: 20px;
        box-shadow: -10px 5px 10px gray;
        position: relative;
        top: 0;
        transition: top ease 0.5s;
        cursor: pointer;
        padding: 10px
    }

    .card:hover {
        top: -50px;
    }

    .card img {
        width: 100%;
        height: 100%;
        border-radius: 20px;
    }

    .card .row .col-xl-8 .row {
        margin-bottom: 5px
    }
</style>

<div class="buttons">
    <div class="row">
        <div class="col">
            <a href="{{ route('info.edit') }}" class="btn btn-success"><i class="fa-solid fa-edit"></i> {{ __('Edit Info') }}</a>
        </div>
    </div>
</div>

<section class="content">
    <div class="container">
        <div class="card">
            <div class="row">
                <div class="col-xl-4">
                    <img src="{{ URL('storage/users/'. $user->profileImage) }}" alt="{{ $user->username }}">
                </div>
                <div class="col-xl-8">
                    <div class="row">
                        <div class="row"><h2>{{ $user->fullName }}</h2></div>
                        <div class="row"><h5>{{ $user->title }}</h5></div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3"<b>Email: </b></div>
                        <div class="col-xl-9">{{ $user->email }}</div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3"><b>Phone: </b></div>
                        <div class="col-xl-9">{{ $user->phone }}</div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3"><b>Address: </b></div>
                        <div class="col-xl-9">{{ $user->address }}</div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3"><b>No. Exp. Years: </b></div>
                        <div class="col-xl-9">{{ $user->expYear }}</div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3"><b>LINKED-IN: </b></div>
                        <div class="col-xl-9"><a href="{{ $user->linked_in }}">{{ $user->linked_in }}</a></div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3"><b>GITHUB: </b></div>
                        <div class="col-xl-9"><a href="{{ $user->github }}">{{ $user->github }}</a></div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3"><b>MY SITE: </b></div>
                        <div class="col-xl-9"><a href="{{ $user->my_site }}">{{ $user->my_site }}</a></div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3"><b>Profile: </b></div>
                        <div class="col-xl-9">
                            {{ $user->profile }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
</section>

@endsection
