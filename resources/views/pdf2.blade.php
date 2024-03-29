<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>

	<title>{{ $user->fullName }}</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/reset-fonts-grids/reset-fonts-grids.css" media="all" />
	<link rel="stylesheet" type="text/css" href="resume.css" media="all" />

    <style>
        .msg { padding: 10px; background: #222; position: relative; }
        .msg h1 { color: #fff;  }
        .msg a { margin-left: 20px; background: #408814; color: white; padding: 4px 8px; text-decoration: none; }
        .msg a:hover { background: #266400; }

        /* //-- yui-grids style overrides -- */
        body { font-family: Georgia; color: #444; }
        #inner { padding: 10px 80px; margin: 80px auto; background: #f5f5f5; border: solid #666; border-width: 8px 0 2px 0; }
        .yui-gf { margin-bottom: 2em; padding-bottom: 2em; border-bottom: 1px solid #ccc; }

        /* //-- header, body, footer -- */
        #hd { margin: 2.5em 0 3em 0; padding-bottom: 1.5em; border-bottom: 1px solid #ccc }
        #hd h2 { text-transform: uppercase; letter-spacing: 2px; }
        #bd, #ft { margin-bottom: 2em; }
        #doc2 { width: 90%; margin: auto;}

        /* //-- footer -- */
        #ft { padding: 1em 0 5em 0; font-size: 92%; border-top: 1px solid #ccc; text-align: center; }
        #ft p { margin-bottom: 0; text-align: center;   }

        /* //-- core typography and style -- */
        #hd h1 { font-size: 48px; text-transform: uppercase; letter-spacing: 3px; }
        h2 { font-size: 152% }
        h3, h4 { font-size: 122%; }
        h1, h2, h3, h4 { color: #333; }
        p { font-size: 100%; line-height: 18px; padding-right: 3em; }
        a { color: #990003 }
        a:hover { text-decoration: none; }
        strong { font-weight: bold; }
        li { line-height: 24px; border-bottom: 1px solid #ccc; }
        p.enlarge { font-size: 144%; padding-right: 6.5em; line-height: 24px; }
        p.enlarge span { color: #000 }
        .contact-info { margin-top: 7px; }
        .first h2 { font-style: italic; }
        .last { border-bottom: 0 }


        /* //-- section styles -- */

        a#pdf { display: block; float: left; background: #666; color: white; padding: 6px 50px 6px 12px; margin-bottom: 6px; text-decoration: none;  }
        a#pdf:hover { background: #222; }

        .job { position: relative; margin-bottom: 1em; padding-bottom: 1em; border-bottom: 1px solid #ccc; }
        .job h4 { position: absolute; top: 0.35em; right: 0 }
        .job p { margin: 0.75em 0 0em 0; }

        .last { border: none; }
        .skills-list {  }
        .skills-list ul { margin: 0; }
        .skills-list li { margin: 3px 0; padding: 3px 0; }
        .skills-list li span { font-size: 152%; display: block; margin-bottom: -2px; padding: 0 }
        .talent { width: 32%; float: left }
        .talent h2 { margin-bottom: 6px; }

        #srt-ttab { margin-bottom: 100px; text-align: center;  }
        #srt-ttab img.last { margin-top: 20px }

        /* --// override to force 1/8th width grids -- */
        .yui-gf .yui-u{width:80.2%;}
        .yui-gf div.first{width:12.3%;}

        .row {
            margin: auto;
            display: flex;
        }

        .col {
            width: 45%;
            margin-bottom: 10px;
            height: 25px;
            margin-top: 29px;
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

<div id="doc2" class="yui-t7">
	<div id="inner">

		<div id="hd">
			<div class="yui-gc">
                @php
                    $strArray = explode(' ',$user->fullName);
                    $firstName = $strArray[0];
                    $lastName = $strArray[1];
                @endphp
				<div class="yui-u first">
					<h1>{{ $firstName . " " . $lastName }}</h1>
					<h2>{{ $user->title }}</h2>
				</div>

				<div class="yui-u">
					<div class="contact-info">
						{{-- <h3><a id="pdf" href="#">Download PDF</a></h3> --}}
						<h3><a href="mailto:name@yourdomain.com">{{ $user->email }}</a></h3>
						<h3>{{ $user->phone }}</h3>
					</div><!--// .contact-info -->
				</div>
			</div><!--// .yui-gc -->
		</div><!--// hd -->

		<div id="bd">
			<div id="yui-main">
				<div class="yui-b">

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Profile</h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
								@php
                                    $profile = explode(".", $user->profile)
                                @endphp
                                <ul>
                                    @for ($i = 0; $i < count($profile) - 1; $i++)
                                        <b><li> {{ $profile[$i] }} .</li></b>
                                    @endfor
                                </ul>
							</p>
						</div>
					</div><!--// .yui-gf -->

                    <div class="yui-gf">
						<div class="yui-u first">
							<h2>Links</h2>
						</div>
						<div class="yui-u">
							<p class="enlarge">
                                <ul>
                                    <li style="margin-bottom: 10px"><b>LINKED-IN: </b> <a href="{{ $user->linked_in }}">{{ $user->linked_in }}</a></li>
                                    <li style="margin-bottom: 10px"><b>MY SITE: </b> <a href="{{ $user->my_site }}">{{ $user->my_site }}</a></li>
                                    <li class="last"><b>GITHUB: </b> <a href="{{ $user->github }}">{{ $user->github }}</a></li>
                                </ul>
							</p>
						</div>
					</div><!--// .yui-gf -->

					<div class="yui-gf">
						<div class="yui-u first">
							<h2>Technical Skills</h2>
						</div>
                        <div class="yui-u">
                            <div class="skills">
                                @php
                                    $types = ['Backend', 'Fontend', 'Database', 'Prior Knowledge', 'Little Knowledge',  'Other Skills']
                                @endphp

                                @for ($i = 0; $i < count($types); $i++)
                                    <h5 class="text-capitalize"><strong>{{ $types[$i] }}</strong></h5><br>
                                    <div class="row">
                                        @for ($x = 0; $x < count($skills); $x++)
                                            @if ($skills[$x]->type == $types[$i])
                                                <div class="col" style="border-bottom: 1px solid #ccc;border-right: 1px solid #ccc;text-align:center">
                                                    {{ $skills[$x]->languageName }}
                                                    @if ($skills[$x]->main != 'null')
                                                        - {{ $skills[$x]->main }}
                                                    @endif
                                                </div>
                                            @endif
                                        @endfor
                                    </div>
                                @endfor
                            </div>
						</div>
					</div><!--// .yui-gf-->

					<div class="yui-gf">

						<div class="yui-u first">
							<h2>Experience</h2>
						</div><!--// .yui-u -->

						<div class="yui-u">
                            @for ($i = 0; $i < count($works); $i++)
                                <div class="job
                                @if (!isset($works[$i+1]))
                                    last
                                @endif
                                ">
                                    <h2>{{ $works[$i]->companyName }}</h2>
                                    <h3>{{ $works[$i]->title }}</h3>
                                    <h4>{{ date("F Y", strtotime($works[$i]->startDate)) }} - {{ $works[$i]->endDate == null ? $works[$i]->current : date("F Y", strtotime($works[$i]->endDate)) }}</h4>
                                    <p>{{ $works[$i]->caption }}</p>
                                    <p>{{ $works[$i]->environment }}</p>
                                </div>
                            @endfor
						</div><!--// .yui-u -->
					</div><!--// .yui-gf -->


					{{-- <div class="yui-gf last">
						<div class="yui-u first">
							<h2>Education</h2>
						</div>
						<div class="yui-u">
							<h2>Indiana University - Bloomington, Indiana</h2>
							<h3>Dual Major, Economics and English &mdash; <strong>4.0 GPA</strong> </h3>
						</div>
					</div><!--// .yui-gf --> --}}

                    <div class="yui-gf last">
						<div class="yui-u first">
							<h2>Language</h2>
						</div>
						<div class="yui-u">
                            @foreach ($sLanguages as $sl)
                                <h2>
                                    {{ $sl->languageName }} - (
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
                                    )
                                </h2>
                            @endforeach
						</div>
					</div><!--// .yui-gf -->


				</div><!--// .yui-b -->
			</div><!--// yui-main -->
		</div><!--// bd -->



		<div id="ft">
            @php
                $strArray = explode(' ',$user->fullName);
                $firstName = $strArray[0];
                $lastName = $strArray[1];
            @endphp
			<p>{{ $firstName . " " . $lastName }} &mdash; <a href="{{ $user->email }}">{{ $user->email }}</a> &mdash; {{ $user->phone }}</p>
		</div><!--// footer -->

	</div><!-- // inner -->


</div><!--// doc -->


</body>
</html>

