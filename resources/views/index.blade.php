@php
    $title  = 'Portfolio - ' . strtok($user->fullName, " ")
@endphp

@extends('layouts.app')

@section('content')

<section class="background-image">
    <div class="container">
        <div class="row text-center text-white profile-info">
            <div class="row">
                <div class="col-xl-4">
                    <img class="profile-img" src="{{ asset('storage/users/'.$user->profileImage) }}" alt="{{$user->username}}">
                </div>
                <div class="col-xl-8 profile-title text-start p-4">
                    <h2 class="text-uppercase">
                        <strong>
                            <span style="color: #F1525A">{{ strtok($user->fullName, " ") }}</span>
                            {{ trim(strstr($user->fullName," ")) }}
                        </strong>
                    </h2>
                    <h4 class="text-white title"><b>{{ $user->title }}<b></h4>
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
                    <div class="row">
                        <div class="col">
                            <p>
                                {{ $user->profile }}
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 section-content about">
                    <h2 class="text-capitalize"><strong>{{ __('About Me') }}</strong></h2>
                    <div class="row">
                        <div class="col col-4">
                            <ul class="list-unstyled text-capitalize">
                                <li>{{ __('Languages:') }}</li>
                                <li>{{ __('Framework:') }}</li>
                                <li>{{ __('Editor Journey:') }}</li>
                                <li>{{ __('Operating System:') }}</li>
                            </ul>
                        </div>
                        <div class="col col-8">
                            <ul class="list-unstyled text-muted text-capitalize">
                                <li class="last">
                                    @for ($i = 0; $i < count($skills); $i++)
                                        {{ $skills[$i]->languageName }}
                                        @if (isset($skills[$i + 1]))
                                             -
                                        @endif
                                    @endfor
                                </li>
                                <li class="">
                                    @for ($i = 0; $i < count($frameworks); $i++)
                                        {{ $frameworks[$i]->name }}
                                        @if (isset($frameworks[$i + 1]))
                                             ,
                                        @endif
                                    @endfor
                                </li>
                                <li class="">
                                    @for ($i = 0; $i < count($editors); $i++)
                                        {{ $editors[$i]->name }}
                                        @if (isset($editors[$i + 1]))
                                             ,
                                        @endif
                                    @endfor
                                </li>
                                <li class="">
                                    @for ($i = 0; $i < count($operatings); $i++)
                                        {{ $operatings[$i]->name }}
                                        @if (isset($operatings[$i + 1]))
                                             ,
                                        @endif
                                    @endfor
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <h5 class="text-capitalize"><strong>{{ __('Experience') }}</strong></h5>
                        <div class="col col-4">
                            <ul class="list-unstyled text-capitalize">
                                <li>{{ __('Total experience year:') }}</li>
                                <li>{{ __('current position:') }}</li>
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

                <div class="col-12 section-content latest-project">
                    <h2 class="text-capitalize"><strong>{{ __('Latest projects') }}</strong></h2>
                    @foreach ($projects as $p)
                        <div class="row">
                            <h5 class="text-capitalize"><strong>{{ $p->name }}</strong></h5>
                            <h6><a href="{{ $p->url }}">{{ $p->url }}</a></h6>
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
                                <li><i class="fa-solid fa-id-card-clip"></i></li>
                            </ul>
                        </div>
                        <div class="col col-10">
                            <ul class="list-unstyled text-capitalize m-auto">
                                <li><a href="#">{{ $user->address }}</a></li>
                                <li class="text-lowercase"><a href="#">{{ $user->email }}</a></li>
                                <li><a href="{{ route('downloadPDF') }}">{{ __('Download CV') }}</a></li>
                                <li><a href="#">{{ __('Contact me') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 side-section-content skills">
                    <h2 class="text-capitalize"><strong>{{ __('Skills') }}</strong></h2>
                    @foreach ($skills as $s)
                        <div class="row">
                            <div class="row">
                                <div class="col col-7">{{ $s->languageName }}</div>
                                <div class="col col-3 text-muted">
                                    @if ($s->percentage >= 90)
                                        {{ __('Pro') }}
                                    @elseif ($s->percentage >= 75)
                                        {{ __('Intermidate') }}
                                    @else
                                        {{ __('Begginer') }}
                                    @endif
                                </div>
                            </div>
                            <div class="row m-auto">
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: {{ $s->percentage }}%;margin-left: -12px;background-color:#F1525A;opacity: 0.6;" aria-valuenow="{{ $s->percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
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
                                        {{ __('Fluent') }}
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
