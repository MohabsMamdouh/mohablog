@php
    $title = "Personal Info"
@endphp

@extends('Admin.layouts.page')

@section('section')



<section class="title">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-11 Center">
                <h4 class="glitch text-capitalize" data-text="personal info">
                    <a href="{{ route('home') }}">{{ __('Dashboard') }} &#8827;</a> {{ __('personal info') }}
                </h4>
            </div>
        </div>
    </div>
</section>

<style>
    .card {
        margin: 2rem 1rem 2rem 1rem;
        border: none;
        border-radius: 0px;
        box-shadow: -2px 1px 8px 1px lightgrey;
    }

    .portfolio-card__image {
        max-height: 13rem;
    }

    .portfolio-card__title {
        font-family: 'Barlow Condensed', sans-serif;
        font-size: 2rem;
        text-transform: uppercase;
    }

    .portfolio-card__category {
        font-family: 'Barlow Condensed', sans-serif;
        font-size: 1rem;
        text-transform: uppercase;
    }

    .portfolio-card__category__offices {
        color: red;
    }

    .portfolio-card__category__industrial {
        color: blue;
    }

    .portfolio-card__category__retail {
        color: green;
    }

    .portfolio-card__text {
        font-family: 'Abel', sans-serif;
        font-size: 1rem;
    }

    .portfolio-card__stage {
        color: white;
        text-transform: uppercase;
        padding: 6px;
        font-family: 'Barlow Condensed', sans-serif;
    }

    .portfolio-card__stage__icon {
        margin-right: 5px;
    }

    .portfolio-card__stage__complete {
        background-color: green;
    }

    .portfolio-card__stage__construction {
        background-color: red;
    }

    .portfolio-card__stage__planning {
        background-color: lightblue;
    }

    .portfolio-card__link {
        font-family: 'Barlow Condensed', sans-serif;
        text-transform: uppercase;
        font-size: 0.8rem;
        color: grey;
        text-decoration: underline;
        transition: 0.3s;
    }

    .portfolio-card__link:hover {
        color: black;
    }
</style>

<section class="content">
    <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img class="card-img-top portfolio-card__image" src="{{ asset('storage/users/'.$user->profileImage) }}" alt="Card image cap">
              <div class="card-body">
                <h6 class="card-subtitle mb-2 portfolio-card__category portfolio-card__category__offices">{{ $user->currentPosition }}</h6>
                <h4 class="card-title mb-2 portfolio-card__title">{{ $user->fullName }}</h4>
                <p class="card-text portfolio-card__text">{{ $user->profile }}</p>
                <p><span class="portfolio-card__stage portfolio-card__stage__construction"><i class="fas fa-hammer portfolio-card__stage__icon"></i>Construction</span></p>
                  <a href="#" class="card-link portfolio-card__link">Learn More</a>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>
          </div>
        </div>

      </div>
</section>

@endsection
