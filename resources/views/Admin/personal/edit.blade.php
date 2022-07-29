@php
    $title = "personal Info"
@endphp

@extends('Admin.layouts.page')

@section('section')

<section class="title">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-11 Center">
                <h4 class="glitch text-capitalize" data-text="personal info">
                    <a href="{{ route('home') }}">{{ __('Admin') }} &#8827;</a> {{ __('personal info') }}
                </h4>
            </div>
        </div>
    </div>
</section>


<section class="content">
    <div class="row">
        <div class="col-xl-4 profilePic">
            <div class="section-content profile-pic">
                <div class="row">
                    <div class="head pic-head">
                        <h5>{{ __('Update Profile Picture') }}</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="picture">
                        <img src="{{ asset('storage/users/'.$user->profileImage) }}" alt="{{ $user->username }}">
                    </div>
                </div>

                <div class="row">
                    <div class="form">
                        <form action="{{ route('updateProfileImage') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <input type="hidden" name="id" value="{{ $user->id }}">
                                <input type="file" class="form-control" style="width: 85% !important" id="profile_pic" name="profile_pic">
                                <input type="hidden" name="oldPic" value="{{ $user->profileImage }}">
                            </div>
                            <div class="row">
                                <button type="submit" class="btn btn-block btn-primary" style="width: 85%;margin: auto 24px;">{{ __('Update Picture') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="row">
                <div class="section-content profile-info">
                    <div class="row">
                        <div class="col-8 head info-head">
                            <h5><i class="fa-solid fa-id-card"></i> <span>{{ __('User Profile') }}</span></h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form">
                            <form action="{{ route('updateInfo') }}" method="post">
                                @csrf
                                <div class="row">
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <div class="col-xl-6 " style="">
                                        <div class="input-group">
                                            <input type="text" name="FullName" id="FullName" class="form-control" value="{{ $user->fullName }}">
                                            <label for="FullName">{{ __('Full Name') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-6" style="">
                                        <div class="input-group">
                                            <input type="text" name="Username" id="Username" class="form-control" value="{{ $user->username }}">
                                            <label for="Username">{{ __('Username') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="input-group">
                                            <input type="text" name="Title" id="Title" class="form-control" value="{{ $user->title }}">
                                            <label for="Title">{{ __('Title') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="input-group">
                                            <input type="email" name="Email" id="Email" class="form-control" value="{{ $user->email }}">
                                            <label for="Email">{{ __('Email') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-group">
                                            <input type="text" name="Address" id="Address" class="form-control" value="{{ $user->address }}">
                                            <label for="Address">{{ __('Address') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="input-group">
                                            <input type="tel" name="Phone" id="Phone" class="form-control" value="{{ $user->phone }}">
                                            <label for="Phone">{{ __('Phone') }}</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="input-group">
                                            <input type="number" name="ExpYear" id="ExpYear" class="form-control" value="{{ $user->expYear }}">
                                            <label for="ExpYear">{{ __('Exp Year') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="input-group">
                                            <textarea name="profile" class="form-control" id="profile" cols="10" rows="2">
                                                {{ $user->profile }}
                                            </textarea>
                                            <label for="profile">{{ __('Profile') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="input-group">
                                            <button type="submit" class="btn btn-primary">{{ __('Update Info') }}</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
