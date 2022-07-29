@php
    $title = "Add Extensions"
@endphp

@extends('Admin.layouts.page')

@section('section')

<section class="title">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-11 Center">
                <h4 class="glitch text-capitalize" data-text="Add Extensions">
                    <a href="{{ route('home') }}">{{ __('Admin') }} &#8827;</a> <a href="{{ route('showExtensions') }}">{{ __('Extensions') }} &#8827;</a> {{ __('Add Extensions') }}
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
                        <h5><i class="fa-solid fa-fill-drip"></i> <span>{{ __('Create Extensions') }}</span></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="form">
                        <form action="{{ route('updateExtensions', ['id' => $ext->id]) }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="ExtensionsName" id="ExtensionsName" class="form-control" value="{{ $ext->name }}" required>
                                        <label for="ExtensionsName">{{ __('Extensions Name') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group">
                                        <select class="form-control" name="Type" id="Type" required>
                                            <option class="text-uppercase text-center" selected="true" disabled="disabled">{{ __('- Chooce The Type -') }}</option>
                                            @php
                                                $types = ['Framework', 'Editor', 'Operating System']
                                            @endphp
                                            @foreach ($types as $t)
                                                <option value="{{ $t }}"
                                                @if ($t == $ext->type)
                                                    selected="true"
                                                @endif
                                                >{{ __($t) }}</option>
                                            @endforeach
                                        </select>
                                        <label for="Type">{{ __('Type') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group">
                                        <button type="submit" class="btn btn-primary">{{ __('Add Extension') }}</button>
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
