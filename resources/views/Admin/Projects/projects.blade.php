@php
    $title = "Show Projects"
@endphp

@extends('Admin.layouts.page')

@section('section')

<section class="title">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-11 Center">
                <h4 class="glitch text-capitalize" data-text="Projects">
                    <a href="{{ route('home') }}">{{ __('Admin') }} &#8827;</a> {{ __('Projects') }}
                </h4>
            </div>
        </div>
    </div>
</section>

<div class="buttons">
    <div class="row">
        <div class="col">
            <a href="{{ route('createProject') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> {{ __('Add Project') }}</a>
        </div>
    </div>
</div>

<section class="content">
    <div class="container">
        <div class="card-deck row">
            @for ($i = 0; $i < count($projects); $i++)
                @if ($i % 2 == 0)
                    </div>
                    <div class="card-deck row">
                @endif

                <div class="card col-xl-6">
                    <div class="card-body">
                        <div class="row">
                            <h5 class="card-title col font-weight-bold text-uppercase">{{ $projects[$i]->name }}</h5>
                            <div class="col-1 text-end update">
                                <a class="text-success" href="{{ route('editProject', ['id' => $projects[$i]->id]) }}" title="Update Project"><i class="fa-solid fa-edit"></i></a>
                            </div>
                            <div class="col-1 text-end remove">
                                <a class="text-danger open-button" onclick="openForm{{ $i }}()" id="delete-2" href="#" title="Delete Skill"><i class="fa-solid fa-trash"></i></a>
                            </div>
                        </div>
                        <h6><a href="{{ $projects[$i]->url }}">{{ $projects[$i]->url }}</a></h6>
                        <p class="card-text">{{ $projects[$i]->caption }}</p>
                        <p class="card-text"><b>{{ __('Technology Stack: ') }}</b>{{ $projects[$i]->techmologyStack }}</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">{{ __('Created at ') . $projects[$i]->endDate }}</small>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

<div class="overlay"></div>

@for ($i = 0; $i < count($projects); $i++)
    <div class="form-popup" id="myForm_{{ $i }}">
        <div class="card border-danger mb-3" style="max-width: 60rem;">
            <div class="card-header">{{ $projects[$i]->name }}</div>
            <div class="card-body text-danger">
                <h5 class="card-title">{{ __('Delete the project "') . $projects[$i]->name . '"?' }}</h5>
                <p class="card-text">
                    <a href="{{ route('deleteProject', ['id' => $projects[$i]->id]) }}" class="card-link">{{ __('Delete') }}</a>
                    <a href="#" class="card-link cancel" onclick="closeForm{{ $i }}()">{{ __('Cancel') }}</a>
                </p>
            </div>
        </div>
    </div>
    <script>
        $('.overlay').css('height', $('body').css('height'));
        function openForm{{ $i }}() {
            for (let index = 0; index < {{count($projects)}}; index++) {
                if (index == {{$i}}) {
                    continue;
                }
                console.log(index);
                $('#myForm_' + index).css('display', 'none');
            }
            $('#myForm_' + {{ $i }}).css('display', 'block');
            $('.overlay').css('display', 'block');

        }

        function closeForm{{ $i }}() {
            $('#myForm_' + {{ $i }}).css('display', 'none');
            $('.overlay').css('display', 'none');
        }
    </script>
@endfor



@endsection
