@php
    $title = "Add Speaking Language"
@endphp

@extends('Admin.layouts.page')

@section('section')

<section class="title">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-11 Center">
                <h4 class="glitch text-capitalize" data-text="Add Speaking Language">
                    <a href="{{ route('dashboard.show') }}">{{ __('Admin') }} &#8827;</a> <a href="{{ route('langs.show') }}">{{ __('Speaking Language') }} &#8827;</a> {{ __('Add Speaking Language') }}
                </h4>
            </div>
        </div>
    </div>
</section>

<section class="createForm">
    <div class="col-xl-9">
        <div class="row">
            <div class="section-content create">
                <div class="row">
                    <div class="col-8 head info-head">
                        <h5><i class="fa-solid fa-diagram-project"></i> <span>{{ __('Add Speaking Language') }}</span></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="form">
                        <form action="{{ route('langs.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="languageName" id="languageName" class="form-control" placeholder="Language Name" required>
                                        <label for="languageName">{{ __('Language Name') }}</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="input-group">
                                        <select class="form-control" name="level" id="level" required>
                                            <option class="text-uppercase text-center" selected="true" disabled="disabled">{{ __('- Chooce Your Level -') }}</option>
                                            @for ($i = 0; $i < 6; $i++)
                                                <option value="Level {{ $i }}">{{ __('Level ') . $i }}</option>
                                            @endfor
                                        </select>
                                        <label for="level">{{ __('Level') }}</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="input-group">
                                        <button type="submit" class="btn btn-primary">{{ __('Add Speaking Language') }}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
