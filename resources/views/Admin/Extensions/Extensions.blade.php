@php
    $title = "Extensions"
@endphp

@extends('Admin.layouts.page')

@section('section')

<section class="title">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-11 Center">
                <h4 class="glitch text-capitalize" data-text="Extensions">
                    <a href="{{ route('home') }}">{{ __('Admin') }} &#8827;</a> {{ __('Extensions') }}
                </h4>
            </div>
        </div>
    </div>
</section>

<div class="buttons">
    <div class="row">
        <div class="col">
            <a href="{{ route('createExtensions') }}" class="btn btn-primary"><i class="fa-solid fa-plus"></i> {{ __('Add Extension') }}</a>
        </div>
    </div>
</div>

<section class="content">
    <div class="container">
        <div class="card">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs navigation" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active text-capitalize" data-id="framework" href="#framework" role="tab" aria-controls="framework" aria-selected="true" data-toggle="tab">{{ __('framework') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" data-id="editor"  href="#editor" role="tab" aria-controls="editor" aria-selected="false" data-toggle="tab">{{ __('Editor') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-capitalize" data-id="operating" href="#operating" role="tab" aria-controls="operating" aria-selected="false" data-toggle="tab">{{ __('operating System') }} </a>
                    </li>
                </ul>
            </div>

            <div class="card-body">
                <div class="tab-content mt-3">
                    <div class="tab-pane active framework" role="tabpanel" aria-labelledby="framework-tab">
                        <table class="table">
                            <thead>
                                <tr>
                                  <th class="text-center" scope="col">{{ __('#') }}</th>
                                  <th class="text-center" scope="col">{{ __('Name') }}</th>
                                  <th class="text-center" scope="col">{{ __('Type') }}</th>
                                  <th class="text-center" scope="col" colspan="2">{{ __('Control') }}</th>
                                </tr>
                              </thead>
                              <tbody>
                                @for ($i = 0; $i < count($frameworks); $i++)
                                    <tr>
                                        <th class="text-center">{{ $i + 1 }}</th>
                                        <td class="text-center font-bold">{{ $frameworks[$i]->name }}</td>
                                        <td class="text-center">{{ $frameworks[$i]->type }}</td>
                                        <td class="text-center">
                                            <a class="text-success" style="color: #080 !important;" href="{{ route('editExtensions', ['id' => $frameworks[$i]->id ]) }}" title="Update Extension"><i class="fa-solid fa-edit"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <a class="text-danger open-button" onclick="openForm{{ $i }}()" id="delete-2" style="color: #F1525A !important;" href="#" title="Delete Extension"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endfor
                              </tbody>
                        </table>
                    </div>

                    <div class="tab-pane editor" role="tabpane2" aria-labelledby="editor-tab">
                        <table class="table">
                            <thead>
                                <tr>
                                  <th class="text-center" scope="col">{{ __('#') }}</th>
                                  <th class="text-center" scope="col">{{ __('Name') }}</th>
                                  <th class="text-center" scope="col">{{ __('Type') }}</th>
                                  <th class="text-center" scope="col" colspan="2">{{ __('Control') }}</th>
                                </tr>
                              </thead>
                              <tbody>
                                @for ($i = 0; $i < count($editors); $i++)
                                    <tr>
                                        <th class="text-center">{{ $i + 1 }}</th>
                                        <td class="text-center">{{ $editors[$i]->name }}</td>
                                        <td class="text-center">{{ $editors[$i]->type }}</td>
                                        <td class="text-center">
                                            <a class="text-success" style="color: #080 !important;" href="{{ route('editExtensions', ['id' => $editors[$i]->id ]) }}" title="Update Extension"><i class="fa-solid fa-edit"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <a class="text-danger open-button" onclick="openDeleteEDitor{{ $i }}()" id="delete-2" style="color: #F1525A !important;" href="#" title="Delete Extension"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endfor
                              </tbody>
                        </table>
                    </div>

                    <div class="tab-pane operating" role="tabpane3" aria-labelledby="operating-tab">
                        <table class="table">
                            <thead>
                                <tr>
                                  <th class="text-center" scope="col">{{ __('#') }}</th>
                                  <th class="text-center" scope="col">{{ __('Name') }}</th>
                                  <th class="text-center" scope="col">{{ __('Type') }}</th>
                                  <th class="text-center" scope="col" colspan="2">{{ __('Control') }}</th>
                                </tr>
                              </thead>
                              <tbody>
                                @for ($i = 0; $i < count($operatings); $i++)
                                    <tr>
                                        <th class="text-center">{{ $i + 1 }}</th>
                                        <td class="text-center text-bold">{{ $operatings[$i]->name }}</td>
                                        <td class="text-center">{{ $operatings[$i]->type }}</td>
                                        <td class="text-center">
                                            <a class="text-success" style="color: #080 !important;" href="{{ route('editExtensions', ['id' => $operatings[$i]->id ]) }}" title="Update Extension"><i class="fa-solid fa-edit"></i></a>
                                        </td>
                                        <td class="text-center">
                                            <a class="text-danger open-button" onclick="openDeleteOperating{{ $i }}()" id="delete-2" style="color: #F1525A !important;" href="#" title="Delete Extension"><i class="fa-solid fa-trash"></i></a>
                                        </td>
                                    </tr>
                                @endfor
                              </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<div class="overlay"></div>

{{-- Delete Framework Form --}}
@for ($i = 0; $i < count($frameworks); $i++)
    <div class="form-popup" id="myForm_{{ $i }}">
        <div class="card border-danger mb-3" style="max-width: 60rem;">
            <div class="card-header">{{ $frameworks[$i]->name }}</div>
            <div class="card-body text-danger">
                <h5 class="card-title">{{ __('Delete the Extension "') . $frameworks[$i]->name . '"?' }}</h5>
                <p class="card-text">
                    <a href="{{ route('deleteExtensions', ['id' => $frameworks[$i]->id]) }}" class="card-link">{{ __('Delete') }}</a>
                    <a href="#" class="card-link cancel" onclick="closeForm{{ $i }}()">{{ __('Cancel') }}</a>
                </p>
            </div>
        </div>
    </div>
    <script>
        $('.overlay').css('height', $('body').css('height'));
        function openForm{{ $i }}() {
            for (let index = 0; index < {{count($frameworks)}}; index++) {
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

{{-- Delete Editors Form --}}
@for ($i = 0; $i < count($editors); $i++)
    <div class="form-popup" id="editor_{{ $i }}">
        <div class="card border-danger mb-3" style="max-width: 60rem;">
            <div class="card-header">{{ $editors[$i]->name }}</div>
            <div class="card-body text-danger">
                <h5 class="card-title">{{ __('Delete the Extension "') . $editors[$i]->name . '"?' }}</h5>
                <p class="card-text">
                    <a href="{{ route('deleteExtensions', ['id' => $editors[$i]->id]) }}" class="card-link">{{ __('Delete') }}</a>
                    <a href="#" class="card-link cancel" onclick="closeDeleteEDitor{{ $i }}()">{{ __('Cancel') }}</a>
                </p>
            </div>
        </div>
    </div>
    <script>
        $('.overlay').css('height', $('body').css('height'));
        function openDeleteEDitor{{ $i }}() {
            for (let index = 0; index < {{count($editors)}}; index++) {
                if (index == {{$i}}) {
                    continue;
                }
                console.log(index);
                $('#editor_' + index).css('display', 'none');
            }
            $('#editor_' + {{ $i }}).css('display', 'block');
            $('.overlay').css('display', 'block');

        }

        function closeDeleteEDitor{{ $i }}() {
            $('#editor_' + {{ $i }}).css('display', 'none');
            $('.overlay').css('display', 'none');
        }
    </script>
@endfor

{{-- Delete Operating System Form --}}
@for ($i = 0; $i < count($operatings); $i++)
    <div class="form-popup" id="operating_{{ $i }}">
        <div class="card border-danger mb-3" style="max-width: 60rem;">
            <div class="card-header">{{ $operatings[$i]->name }}</div>
            <div class="card-body text-danger">
                <h5 class="card-title">{{ __('Delete the Extension "') . $operatings[$i]->name . '"?' }}</h5>
                <p class="card-text">
                    <a href="{{ route('deleteExtensions', ['id' => $operatings[$i]->id]) }}" class="card-link">{{ __('Delete') }}</a>
                    <a href="#" class="card-link cancel" onclick="closeDeleteOperating{{ $i }}()">{{ __('Cancel') }}</a>
                </p>
            </div>
        </div>
    </div>
    <script>
        $('.overlay').css('height', $('body').css('height'));
        function openDeleteOperating{{ $i }}() {
            for (let index = 0; index < {{count($operatings)}}; index++) {
                if (index == {{$i}}) {
                    continue;
                }
                console.log(index);
                $('#operating_' + index).css('display', 'none');
            }
            $('#operating_' + {{ $i }}).css('display', 'block');
            $('.overlay').css('display', 'block');

        }

        function closeDeleteOperating{{ $i }}() {
            $('#operating_' + {{ $i }}).css('display', 'none');
            $('.overlay').css('display', 'none');
        }
    </script>
@endfor


@endsection
