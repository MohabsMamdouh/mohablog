<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <style>
        @page {
            margin: 140px 25px 100px 25px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            height: 100%;
        }

        body {
            min-height: 120%;
            background: #eee;
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            color: #222;
            font-size: 14px;
            line-height: 26px;
            padding-bottom: 50px;
        }

        .container {
            max-width: 600px;
            height: 90%;
            background: #fff;
            margin: 0px auto 0px;
            box-shadow: 1px 1px 2px #DAD7D7;
            border-radius: 3px;
            padding: 40px;
            margin-top: 50px;
        }

        .header {
            top: -136px;
            left: -60px;
            right: -60px;
            width: 100%;
        }

        .full-name {
            font-size: 40px;
            text-transform: uppercase;
            margin-bottom: 5px;
        }

        .first-name {
            font-weight: 700;
            color: #F1525A
        }

        .last-name {
            font-weight: 300;
        }

        .contact-info {
            margin-bottom: 7px;
        }

        .email ,
        .phone {
            color: #999;
            font-weight: 300;
        }

        .separator {
            height: 10px;
            display: inline-block;
            border-left: 2px solid #999;
            margin: 0px 10px;
        }

        .position {
            font-weight: bold;
            display: inline-block;
            margin-right: 10px;
            text-decoration: underline;
        }


        .details {
            line-height: 15px;
        }
        .section {
            margin-bottom: 15px;
            margin-top: 20px;
        }

        .section:last-of-type {
            margin-bottom: 0px;
        }

        .section__title {
            letter-spacing: 2px;
            color: #F1525A;
            font-weight: bold;
            margin-bottom: 10px;
            text-transform: uppercase;
        }

        .section__list-item {
            margin-bottom: 20px;
        }

        .section__list-item:last-of-type {
            margin-bottom: 0;
        }

        .left ,
        .right {
            vertical-align: top;
            display: inline-block;
        }

        .left {
            width: 60%;
        }

        .right {
            text-align: right;
            width: 39%;
        }

        .name {
            font-weight: bold;
        }

        a {
            text-decoration: none;
            color: #000;
            font-style: italic;
        }

        a:hover {
            text-decoration: underline;
            color: #000;
        }

        .skills__item {
            margin-bottom: 10px;
        }

        .skills__item .right input{
            display: none;
        }

        label {
            display: inline-block;
            width: 20px;
            height: 20px;
            background: #d1b9bb;
            border-radius: 20px;
            margin-right: 3px;
        }

        input:checked + label {
            background: #bd545a;
        }

        .unbreakable {
            page-break-inside: always !important;
        }

        .row {
            width: 90%;
            margin: auto;
            min-height: 80px;
            display: flex;
        }

        .col {
            width: 45%;
            padding: 5px;
            margin-bottom: 10px;
            text-align: center;
            flex: auto;
        }

        .col ul {
            margin-left: 50px;
            text-align: left;
        }

        .row .col:first-child {
            float: left;
        }

        .row .col:last-child {
            float: right;
        }

        .skills .row:first-child {
            display: none;
        }

        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <section>
        <div class="container">
            <div class="header unbreakable">
                <div class="full-name">
                    <span class="first-name">{{ strtok($user->fullName, " ") }}</span>
                    @php
                        $strArray = explode(' ',$user->fullName);
                        $lastName = $strArray[1];
                    @endphp
                    <span class="last-name">{{ $lastName }}</span>
                </div>
                <div class="contact-info">
                    <span class="email">Email: </span>
                    <span class="email-val">{{ $user->email }}</span>
                    <span class="separator"></span>
                    <span class="phone">Phone: </span>
                    <span class="phone-val">{{ $user->phone }}</span>
                </div>
                <div class="contact-info">
                    <span class="email">Linked In: </span>
                    <span class="email-val"><a href="{{ $user->linked_in }}">{{ $user->linked_in }}</a></span>
                </div>
                <div class="contact-info">
                    <span class="phone">Github: </span>
                    <span class="phone-val"><a href="{{ $user->github }}">{{ $user->github }}</a></span>
                </div>
                <div class="contact-info">
                    <span class="phone">Behance: </span>
                    <span class="phone-val"><a href="{{ $user->behance }}">{{ $user->behance }}</a></span>
                </div>
                <div class="contact-info">
                    <span class="phone">Website: </span>
                    <span class="phone-val"><a href="{{ $user->my_site }}">{{ $user->my_site }}</a></span>
                </div>
                {{-- <div style="height: 100px"></div> --}}
                <div class="about" style="">
                    <span class="position">{{ $user->title }}</span>
                    <span class="desc">
                        @php
                            $profile = explode(".", $user->profile)
                        @endphp
                        <ul>
                            @for ($i = 0; $i < count($profile) - 1; $i++)
                                <b><li> {{ $profile[$i] }} </li></b>
                            @endfor
                        </ul>
                    </span>
                </div>
            </div>

            <div class="details">
                <div class="section unbreakable">
                    <div class="section__title">{{ __('Experience') }}</div>
                    <div class="section__list">
                        @foreach ($works as $w)
                            <div class="section__list-item">
                                <div class="left">
                                    <div class="name">{{ $w->companyName }}</div>
                                    <div class="duration">{{ date("F Y", strtotime($w->startDate)) }} - {{ $w->endDate == null ? $w->current : date("F Y", strtotime($w->endDate)) }}</div>
                                </div>
                                <div class="right">
                                    <div class="name">{{ $w->title }}</div>
                                    <div class="desc">{{ $w->environment }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="section unbreakable" id="skill">
                    <div class="section__title">{{ __ ('Skills') }}</div>
                    <div class="skills">
                        @php
                            $types = ['Backend', 'Fontend', 'Database', 'Prior Knowledge', 'Little Knowledge',  'Other Skills']
                        @endphp

                        <div class="row">
                            @for ($i = 0; $i < count($types); $i++)
                                @if (($i + 1) % 2 != 0)
                                    </div><div class="clear"></div><div class="row">
                                @endif
                                <div class="col">
                                    <h5 class="text-capitalize"><strong>{{ $types[$i] }}</strong></h5>
                                    <ul>
                                        @for ($x = 0; $x < count($skills); $x++)
                                            @if ($skills[$x]->type == $types[$i])
                                                <li>
                                                    {{ $skills[$x]->languageName }}
                                                    @if ($skills[$x]->main != 'null')
                                                        - {{ $skills[$x]->main }}
                                                    @endif
                                                </li>
                                            @endif
                                        @endfor
                                    </ul>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="details">

                <div class="section unbreakable">
                    <div class="section__title">{{ __('Projects') }}</div>
                    <div class="section__list">
                        @foreach ($projects as $p)
                            <div class="section__list-item">
                                <div class="name">{{ $p->name }}</div>
                                <div class="text"><a href="{{ $p->appURL ? $p->appURL : $p->url }}">{{ $p->appURL ? $p->appURL : $p->url }}</a></div>
                                <div class="text">{{ $p->caption }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>



                <div class="section unbreakable">
                    <div class="section__title">
                        {{ __('Language') }}
                    </div>
                    <div class="section__list">
                        <div class="section__list-item">
                            @for ($i = 0; $i < count($sLanguages); $i++)
                                {{ $sLanguages[$i]->languageName }} (

                                @php
                                    $level = 0;
                                @endphp
                                @if ($sLanguages[$i]->level == "Level 0")
                                    {{ __('No Knowallage') }}
                                    @php
                                        $level = 0;
                                    @endphp
                                @elseif ($sLanguages[$i]->level == "Level 1")
                                    {{ __('Elementary') }}
                                    @php
                                        $level = 1;
                                    @endphp
                                @elseif ($sLanguages[$i]->level == "Level 2")
                                    {{ __('Low intermediate') }}
                                    @php
                                        $level = 2;
                                    @endphp
                                @elseif ($sLanguages[$i]->level == "Level 3")
                                    {{ __('	High intermediate') }}
                                    @php
                                        $level = 3;
                                    @endphp
                                @elseif ($sLanguages[$i]->level == "Level 4")
                                    {{ __('Advanced') }}
                                    @php
                                        $level = 4;
                                    @endphp
                                @elseif ($sLanguages[$i]->level == "Level 5")
                                    {{ __('Native') }}
                                    @php
                                        $level = 5;
                                    @endphp
                                @endif
                                )
                                @if (isset($sLanguages[$i + 1]))
                                    ,
                                @endif
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
