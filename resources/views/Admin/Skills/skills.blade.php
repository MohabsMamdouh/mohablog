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
                    <a href="{{ route('dashboard.show') }}">{{ __('Admin') }} &#8827;</a> {{ __('Skills') }}
                </h4>
            </div>
        </div>
    </div>
</section>

<div class="buttons">
    <div class="row">
        <div class="col">
            <a href="{{ route('skills.create') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> {{ __('Add Skill') }}</a>
        </div>
    </div>
</div>

<div class="show_skill">
    <div class="row">
        <div class="card p-0">
            <div class="card-header">
                {{ __('Skills') }}
            </div>
            <div class="card-body">

                @php
                    $types = ['Backend', 'Fontend', 'Database', 'Prior Knowledge', 'Little Knowledge',  'Other Skills']
                @endphp
                @foreach ($types as $type)
                    <div class="skill-content">
                        <h3><B>{{ $type }}</B></h3>
                        <div class="row m-2">
                            @php
                                $count = 0
                            @endphp
                            @for ($i = 0; $i < count($skills); $i++)
                                @if ($skills[$i]->type == $type)
                                    @if ($count == 2)
                                        @php
                                            $count = 0
                                        @endphp
                                        </div>
                                        <div class="row m-2">
                                    @endif

                                    <div class="col-sm-6 mb-3">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title text-uppercase">{{ $skills[$i]->languageName }}</h5>
                                                <p class="card-text">
                                                    {{ $skills[$i]->type }}
                                                    @if ($skills[$i]->main != 'null')
                                                        - {{ $skills[$i]->main }}
                                                    @endif
                                                </p>
                                                <a href="{{ route('skills.edit', ['id' => $skills[$i]->id]) }}" class="btn btn-success"><i class="fa-solid fa-edit"></i> {{ __('Update Skill') }}</a>
                                                <a class="btn btn-danger open-button" onclick="openForm{{ $i }}()" id="delete-2" href="#" title="Delete Skill"><i class="fa-solid fa-trash"></i> {{ __('Delete Skill') }} </a>
                                            </div>
                                        </div>
                                    </div>

                                    @php
                                        $count++
                                    @endphp
                                @endif
                            @endfor
                    </div>
                @endforeach


            </div>
        </div>

    </div>
</div>
<div class="overlay"></div>

@for ($i = 0; $i < count($skills); $i++)
    <div class="form-popup" id="myForm_{{ $i }}">
        <div class="card border-danger mb-3" style="max-width: 60rem;">
            <div class="card-header">{{ $skills[$i]->languageName }}</div>
            <div class="card-body text-danger">
                <h5 class="card-title">{{ __('Delete the project "') . $skills[$i]->languageName . '"?' }}</h5>
                <p class="card-text">
                    <a href="{{ route('skills.delete', ['id' => $skills[$i]->id]) }}" class="card-link">{{ __('Delete') }}</a>
                    <a href="#" class="card-link cancel" onclick="closeForm{{ $i }}()">{{ __('Cancel') }}</a>
                </p>
            </div>
        </div>
    </div>
    <script>
        $('.overlay').css('height', $('body').css('height'));
        function openForm{{ $i }}() {
            for (let index = 0; index < {{count($skills)}}; index++) {
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
