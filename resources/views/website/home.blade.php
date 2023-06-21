@extends('website.templates.default')

@section('content')

    <div class="d-flex flex-column flex-root" id="kt_app_root">

        <!--begin::Header Section-->
        <div class="mb-0" id="home">
            <div class="bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url(assets/media/landing.svg)">
                @include('website.templates.partials.header')

                <!--begin::Landing hero-->
                <div class="d-flex flex-column flex-center w-100 min-h-350px min-h-lg-500px px-9">
                    <div class="text-center mb-5 mb-lg-10 py-10 py-lg-20">
                        <h1 class="text-white lh-base fw-bold fs-2x fs-lg-3x mb-15">
                            {{ __('home.baner') }}
                            <br>
                            <span style="background: linear-gradient(to right, #12CE5D 0%, #FFD80C 100%);-webkit-background-clip: text;-webkit-text-fill-color: transparent;">
                                <span id="kt_landing_hero_text">JJPROMOTION</span>
                            </span>
                        </h1>
                    </div>
                </div>
                <!--end::Landing hero-->
            </div>
            <div class="landing-curve landing-dark-color mb-10 mb-lg-20">
                <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!--end::Header Section-->

        <!--begin::Content Section-->
        <div class="mb-n10 mb-lg-n20 z-index-2">
            <div class="container">
                <div class="text-center mb-17">
                    <h3 class="fs-2hx text-dark mb-5" id="content" data-kt-scroll-offset="{default: 100, lg: 150}"> {{ __('home.content') }}</h3>
                    <div class="fs-5 text-muted fw-bold">
                        {{ __('home.content_desc') }}
                    </div>
                </div>
                <div class="row w-100 gy-10 mb-md-20">
                    @foreach ($contents as $item)
                    <div class="col-md-4 px-5">
                        <div class="text-center mb-10 mb-md-0">
                            <div class="d-flex flex-center mb-5">
                                <span class="badge badge-circle badge-light-success fw-bold p-5 me-3 fs-3">{{$loop->iteration}}</span>
                                <div class="fs-5 fs-lg-3 fw-bold text-dark">
                                    {{ Lang::locale() == 'id' ? $item->title : $item->title_en }}
                                </div>
                            </div>
                            <div class="fw-semibold fs-6 fs-lg-4 text-muted">
                                {{-- {{$item->desc}} --}}
                                {{ Lang::locale() == 'id' ? $item->desc : $item->desc_en }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!--end::Content Section-->

        @include('website.templates.partials.footer')

    </div>

@endsection
