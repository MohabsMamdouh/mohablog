@php
    $title  = 'Portfolio'
@endphp

@extends('layouts.app')

@section('content')

<section class="background-image">
    <div class="container">
        <div class="row text-center text-white profile-info">
            <div class="row">
                {{-- <div class="col-xl-4">
                    <img class="profile-img" src="{{ asset('storage/users/'.$user->profileImage) }}" alt="{{$user->username}}">
                </div> --}}
                <div class="col-xl-8 profile-title text-start p-4" style="margin: auto; text-align: center;">
                    <h2 class="text-uppercase text-center">
                        <strong>
                            <span style="color: #F1525A">{{ strtok($user->fullName, " ") }}</span>
                            {{ trim(strstr($user->fullName," ")) }}
                        </strong>
                    </h2>
                    <h4 class="text-white text-center title"><b>{{ $user->title }}<b></h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 section">
                <div class="col-12 section-content profile">
                    <h2 class="text-capitalize"><strong>{{ __('Profile') }}</strong></h2>
                    <div class="row links" style="margin-bottom: 25px;" align="center">
                        <div class="col-4"><a href="{{ $user->linked_in }}"><img src="https://img.shields.io/badge/LinkedIn-0077B5?style=for-the-badge&logo=linkedin&logoColor=white"/></a></div>
                        <div class="col-4"><a href="{{ $user->github }}"><img src="https://img.shields.io/badge/Github-0077B5?style=for-the-badge&logo=github&logoColor=white&color=black"/></a></div>
                        <div class="col-4"><a href="{{ $user->behance }}"><img src="https://img.shields.io/badge/-Behance-blue?style=for-the-badge&logo=behance&logoColor=white"/></a></div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>
                                @php
                                    $profile = explode(".", $user->profile)
                                @endphp
                                <ul>
                                    @for ($i = 0; $i < count($profile) - 1; $i++)
                                        <li> {{ $profile[$i] }} </li>
                                    @endfor
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 section-content about">
                    <h2 class="text-capitalize"><strong>{{ __('Skills') }}</strong></h2>

                    @php
                        $types = ['Backend', 'Fontend', 'Database', 'Prior Knowledge', 'Little Knowledge',  'Other Skills']
                    @endphp
                    <div class="row flex">


                        @for ($i = 0; $i < count($types); $i++)
                            @if (($i + 1) % 2 != 0)
                                </div><div class="row flex">
                            @endif
                            <div class="col-sm-6">
                                @php
                                    $t = str_replace(" ", "_", $types[$i]);
                                @endphp
                                <h5 class="text-capitalize"><strong>{{ $t }}</strong></h5>
                                @php
                                    $count = 0;
                                @endphp


                                @if (count($$t) <= 2)
                                    <ul class="col" style="">
                                        @foreach ($$t as $skill)
                                            <li>
                                                {{ $skill->languageName }}
                                                @if ($skill->main != 'null')
                                                    - {{ $skill->main }}
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                @else
                                    <ul class="col" style="width: 50%;float: left !important">
                                        @foreach ($$t as $skill)
                                            @if ($count >= 2)
                                                </ul>
                                                <ul class="col" style="width: 50%;float: right !important">
                                            @endif
                                            <li>
                                                {{ $skill->languageName }}
                                                @if ($skill->main != 'null')
                                                    - {{ $skill->main }}
                                                @endif
                                            </li>
                                            @php
                                                $count++
                                            @endphp
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        @endfor
                    </div>
                </div>

                <div class="col-12 section-content latest-project">
                    <h2 class="text-capitalize"><strong>{{ __('Latest projects') }}</strong></h2>
                    @foreach ($projects as $p)
                        <div class="row">
                            <h5 class="text-capitalize">
                                <strong>{{ $p->name }}</strong>
                                <a href="{{ $p->appURL ? $p->appURL : $p->url }}"><i class="fa-solid fa-link"></i></a>
                            </h5>
                            <p class="text-muted">
                                {{ $p->caption }}
                            </p>
                            <p>
                                <strong>{{ __('Technology Stack:') }}</strong> <span class="font-weight-normal">{{ $p->techmologyStack }}</span>
                            </p>
                            <p class="footer">
                                {{ __('Created at: ') . date("F Y", strtotime($p->endDate)) }}
                            </p>
                        </div>
                    @endforeach
                </div>

                <div class="col-12 section-content work-exp">
                    <h2 class="text-capitalize"><strong>{{ __('Work experience') }}</strong></h2>
                    @foreach ($works as $w)
                        <div class="row">
                            <h5 class="text-capitalize">
                                <strong>{{ $w->title }}</strong>
                                <span class="text-muted">
                                    - {{ $w->companyName }}
                                    ({{ date("F Y", strtotime($w->startDate)) }} : {{ $w->endDate == null ? $w->current : date("F Y", strtotime($w->endDate)) }})
                                </span>
                            </h5>
                            <p class="text-muted">
                                {{ $w->caption }}
                            </p>
                            <p>
                                <strong>{{ __('Environment:') }}</strong> <span class="font-weight-normal">{{ $w->environment }}</span>
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="col-xl-4 side-section">
                <div class="col-12 side-section-content info">
                    <div class="row">
                        <div class="col col-2">
                            <ul class="list-unstyled text-center m-auto" style="color: #999">
                                <li><i class="fa-solid fa-location-dot"></i></li>
                                <li><i class="fa-solid fa-envelope"></i></li>
                                <li><i class="fa-solid fa-file-pdf"></i></li>
                                {{-- <li><i class="fa-solid fa-id-card-clip"></i></li> --}}
                            </ul>
                        </div>
                        <div class="col col-10">
                            <ul class="list-unstyled text-capitalize m-auto">
                                <li><a href="#">{{ $user->address }}</a></li>
                                <li class="text-lowercase"><a href="#">{{ $user->email }}</a></li>
                                <li><a href="{{ route('downloadPDF') }}">{{ __('Download CV') }}</a></li>
                                {{-- <li><a href="#">{{ __('Contact me') }}</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 side-section-content skills">
                    <h2 class="text-capitalize"><strong>{{ __('Experience') }}</strong></h2>
                    <div class="row">
                        <div class="col col-4">
                            <ul class="list-unstyled text-capitalize">
                                <li>{{ __('experience:') }}</li>
                                <li>{{ __('position:') }}</li>
                            </ul>
                        </div>
                        <div class="col col-8">
                            <ul class="list-unstyled text-muted text-capitalize">
                                <li>+{{ $user->expYear . __(' Year') }} </li>
                                <li>{{ $user->currentPosition }}</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 side-section-content language">
                    <h2 class="text-capitalize"><strong>{{ __('Language') }}</strong></h2>
                    @foreach ($sLanguages as $sl)
                        <div class="row">
                            <div class="col-3">
                                <strong>{{ $sl->languageName }}:</strong>
                            </div>
                            <div class="col-4">
                                <span class="text-muted">
                                    @php
                                        $level = 0;
                                    @endphp
                                    @if ($sl->level == "Level 0")
                                        {{ __('No Knowallage') }}
                                        @php
                                            $level = 0;
                                        @endphp
                                    @elseif ($sl->level == "Level 1")
                                        {{ __('Elementary') }}
                                        @php
                                            $level = 1;
                                        @endphp
                                    @elseif ($sl->level == "Level 2")
                                        {{ __('Low intermediate') }}
                                        @php
                                            $level = 2;
                                        @endphp
                                    @elseif ($sl->level == "Level 3")
                                        {{ __('	High intermediate') }}
                                        @php
                                            $level = 3;
                                        @endphp
                                    @elseif ($sl->level == "Level 4")
                                        {{ __('Advanced') }}
                                        @php
                                            $level = 4;
                                        @endphp
                                    @elseif ($sl->level == "Level 5")
                                        {{ __('Native') }}
                                        @php
                                            $level = 5;
                                        @endphp
                                    @endif
                                </span>
                            </div>
                            <div class="col-5">
                                <span style="color: #F1525A">
                                    {{-- {{ dd($level) }} --}}
                                    @for ($i = 1; $i <= $level; $i++)
                                        <i class="fa-solid fa-star"></i>
                                    @endfor
                                </span>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
