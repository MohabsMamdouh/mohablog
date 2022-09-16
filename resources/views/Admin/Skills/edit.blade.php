@php
    $title = "Update Skill"
@endphp

@extends('Admin.layouts.page')

@section('section')

<section class="title">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-11 Center">
                <h4 class="glitch text-capitalize" data-text="Add Skill">
                    <a href="{{ route('home') }}">{{ __('Dashboard') }} &#8827;</a> <a href="{{ route('skills.show') }}">{{ __('Skills') }} &#8827;</a> {{ __('Update Skill') }}
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
                        <h5><i class="fa-solid fa-fill-drip"></i> <span>{{ __('Update Skill') }}</span></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="form">
                        <form action="{{ route('skills.update', ['id' => $skill->id]) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="languageName" id="languageName" value="{{ $skill->languageName }}" class="form-control" placeholder="language Name" required>
                                        <label for="languageName">{{ __('language Name') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group">
                                        <select class="form-control" name="type" id="type" required>
                                            <option class="text-uppercase text-center" selected="true" disabled="disabled">{{ __('- Skill Type -') }}</option>
                                            @php
                                                $types = ['Backend', 'Fontend', 'Database', 'Little Knowledge', 'Prior Knowledge', 'Other Skills']
                                            @endphp
                                            @foreach ($types as $type)
                                                <option value="{{ $type }}"
                                                @if ($skill->type == $type)
                                                    selected="true"
                                                @endif
                                                >{{ $type }}</option>
                                            @endforeach
                                        </select>
                                        <label for="type">{{ __('Skill Type') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group">
                                        <div>
                                            <input style="width: 20% !important" type="checkbox" value="primary" name="main" id="main"
                                            @if ($skill->main == 'primary')
                                                checked
                                            @endif
                                            >
                                            <span class="text-muted">{{ __('Primary Language') }}</span>
                                        </div>
                                        <label for="main">{{ __('Main') }}</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="input-group">
                                        <button type="submit" class="btn btn-primary">{{ __('Update Skill') }}</button>
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
