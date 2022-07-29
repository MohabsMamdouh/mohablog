@php
    $title = "Show Skills"
@endphp

@extends('Admin.layouts.page')

@section('section')

<section class="title">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-11 Center">
                <h4 class="glitch text-capitalize" data-text="Skills">
                    <a href="{{ route('home') }}">{{ __('Admin') }} &#8827;</a> {{ __('Skills') }}
                </h4>
            </div>
        </div>
    </div>
</section>

<div class="buttons">
    <div class="row">
        <div class="col">
            <a href="{{ route('createSkills') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> {{ __('Add Skill') }}</a>
        </div>
    </div>
</div>

<div class="show_skill">
    <div class="row">
        <div class="col-xl-6 skill_progress">
            @for ($i = 0; $i < count($skills); $i++)
                @if ($i == round(count($skills) / 2))
                    </div>
                    <div class="col-xl-6 skill_progress">
                @endif
                <div class="col-xl-12 skill_info">
                    <div class="row">
                        <div class="col col-9 text-uppercase
                        @if ($skills[$i]->main == 'primary')
                            text-primary
                        @endif
                        ">
                            {{ $skills[$i]->languageName }}
                            @if ($skills[$i]->main == 'primary')
                                <i class="fa-regular fa-file-code" title="Primary Language"></i>
                            @endif
                        </div>
                        <div class="col text-end update">
                            <a class="text-success edit" href="#" title="Update Skill"><i class="fa-solid fa-edit"></i></a>
                        </div>
                        <div class="col text-end remove">
                            <a class="text-danger delete" id="delete-2" href="#" title="Delete Skill"><i class="fa-solid fa-trash"></i></a>
                        </div>
                    </div>
                    <section class="row confirm confirmation-update d-none">
                        <div class="card" style="padding: 0px;margin-bottom: 15px;">
                            <h5 class="card-header alert alert-success alert-dismissible fade show" style="color: rgb(62, 185, 62);font-weight: bold;">{{ __('Update Skill') }}</h5>
                            <div class="card-body" style="margin: 0;" role="alert">
                                <h5 class="card-title" style="color: #888">{{ __('Update ') . $skills[$i]->languageName }}</h5>
                                <p class="card-text">
                                    <form class="row" action="{{ route('updateSkills', ['id' => $skills[$i]->id]) }}" method="post">
                                        @csrf
                                        <div class="row">
                                            <div class="col">
                                                <div class="input-group">
                                                    <input type="text" style="width: 100%" name="languageName" id="languageName" class="form-control" value="{{ $skills[$i]->languageName }}">
                                                    <label for="languageName">{{ __('language Name') }}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="input-group">
                                                    <input type="number" style="width: 100%" name="percentage" id="percentage" class="form-control" value="{{ $skills[$i]->percentage }}">
                                                    <label for="percentage">{{ __('percentage') }}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <div class="input-group">
                                                    <div>
                                                        <input style="width: 20%" type="checkbox" value="primary" name="main" id="main"
                                                        @if ($skills[$i]->main == 'primary')
                                                            checked
                                                        @endif
                                                        >
                                                        <label for="main" class="text-muted">{{ __('Primary Language') }}</label>
                                                    </div>
                                                    <label>{{ __('Main') }}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <button type="submit" class="btn btn-primary text-uppercase">{{ __('Update Skill') }}</button>
                                            </div>
                                            <div class="col">
                                                <span class="btn btn-outline-danger text-uppercase cancel">{{ __('cancel') }}</span>
                                            </div>
                                        </div>
                                    </form>
                                </p>
                            </div>
                        </div>
                    </section>
                    <section class="row confirm confirmation-delete d-none" style="padding: 0">
                        <div class="card" style="padding: 0px;margin-bottom: 15px;">
                            <h5 class="card-header alert alert-warning alert-dismissible fade show" style="color: rgb(228, 60, 60);font-weight: bold;">{{ __('Delete Skill') }}</h5>
                            <div class="card-body" style="margin: 0;" role="alert">
                                <p class="card-text text-muted">{{ __('Do you want to delete ') . $skills[$i]->languageName . __('?') }}</p>
                                <div class="row">
                                    <div class="col">
                                        <a href="{{ route('deleteSkill', ['id' => $skills[$i]->id]) }}" class="btn btn-danger text-uppercase">{{ __('delete') }}</a>
                                    </div>
                                    <div class="col">
                                        <span class="btn btn-outline-primary text-uppercase cancel">{{ __('cancel') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="row m-auto">
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: {{ $skills[$i]->percentage }}%;margin-left: -12px;background-color:#F1525A;opacity: 0.6;" aria-valuenow="{{ $skills[$i]->percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</div>

@endsection
