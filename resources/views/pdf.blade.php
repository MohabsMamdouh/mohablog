<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <style>
        @page {
            margin: 140px;
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
            margin-bottom: 30px;
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
            margin-bottom: 20px;
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
            line-height: 20px;
        }
        .section {
            margin-bottom: 40px;
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
            margin-bottom: 40px;
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
            margin-top: 50px;
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

                <div class="about">
                    <span class="position">{{ $user->title }}</span>
                    <span class="desc">
                        {{ $user->profile }}
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
                {{-- <div class="section">
                    <div class="section__title">Education</div>
                    <div class="section__list">
                        <div class="section__list-item">
                            <div class="left">
                                <div class="name">Sample Institute of technology</div>
                                <div class="addr">San Fr, CA</div>
                                <div class="duration">Jan 2011 - Feb 2015</div>
                            </div>
                            <div class="right">
                                <div class="name">Fr developer</div>
                                <div class="desc">did This and that</div>
                            </div>
                        </div>
                        <div class="section__list-item">
                            <div class="left">
                                <div class="name">Akount</div>
                                <div class="addr">San Monica, CA</div>
                                <div class="duration">Jan 2011 - Feb 2015</div>
                            </div>
                            <div class="right">
                                <div class="name">Fr developer</div>
                                <div class="desc">did This and that</div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="section unbreakable">
                    <div class="section__title">{{ __('Projects') }}</div>
                    <div class="section__list unbreakable">
                        @foreach ($projects as $p)
                            <div class="section__list-item">
                                <div class="name"><a href="{{ $p->url }}">{{ $p->name }} </a></div>
                                <div class="text">{{ $p->caption }}</div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="section unbreakable" id="skill">

                    <div class="section__title">{{ __ ('Skills') }}</div>
                    <div class="skills">
                        @foreach ($skills as $s)
                            <div class="skills__item">
                                <div class="left">
                                    <div class="name">
                                        {{ $s->languageName }}
                                    </div>
                                </div>
                                <div class="right">
                                    @php
                                        $count = 0
                                    @endphp
                                    @for ($i = 0; $i < (($s->percentage / 20) - 1); $i++)
                                        <input  id="ck{{ $i }}" type="checkbox" checked/>
                                        <label for="ck{{ $i }}"></label>
                                        @php
                                            $count++
                                        @endphp
                                    @endfor

                                    @for ($i = $count; $i < 5; $i++)
                                        <input  id="ck{{ $i }}" type="checkbox"/>
                                        <label for="ck{{ $i }}"></label>
                                    @endfor
                                </div>
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
                                {{ $sLanguages[$i]->languageName }}
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
