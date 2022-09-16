@php
    $title = "Add Project"
@endphp

@extends('Admin.layouts.page')

@section('section')

<section class="title">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-11 Center">
                <h4 class="glitch text-capitalize" data-text="Add Project">
                    <a href="{{ route('home') }}">{{ __('Dashboard') }} &#8827;</a> <a href="{{ route('projects.show') }}">{{ __('Projects') }} &#8827;</a> {{ __('Add Project') }}
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
                        <h5><i class="fa-solid fa-diagram-project"></i> <span>{{ __('Add Project') }}</span></h5>
                    </div>
                </div>
                <div class="row">
                    <div class="form">
                        <form action="{{ route('projects.store') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="projectName" id="projectName" class="form-control" placeholder="Project Name" required>
                                        <label for="projectName">{{ __('Project Name') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="appURL" id="appURL" class="form-control" placeholder="App URL">
                                        <label for="appURL">{{ __('App URL') }}</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="URL" id="URL" class="form-control" placeholder="Github URL">
                                        <label for="URL">{{ __('Github URL') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group">
                                        <input type="text" name="caption" id="caption" class="form-control" placeholder="Caption" required>
                                        <label for="caption">{{ __('Caption') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group">
                                        <textarea name="TechnologyStack" class="form-control" placeholder="Technology Stack" id="TechnologyStack" cols="30" rows="2">
                                        </textarea>
                                        <label for="TechnologyStack">{{ __('Technology Stack') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group">
                                        <input type="date" name="endDate" id="endDate" class="form-control" placeholder="End Date" required>
                                        <label for="endDate">{{ __('End Date') }}</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="input-group">
                                        <button type="submit" class="btn btn-primary">{{ __('Add Project') }}</button>
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
