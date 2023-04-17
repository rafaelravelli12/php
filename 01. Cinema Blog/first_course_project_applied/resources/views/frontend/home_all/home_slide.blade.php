@php
    $homeSlide = App\Models\HomeSlide::find(1);
@endphp

<section class="banner">
    <div class="custom-container container">
        <div class="row align-items-center justify-content-center justify-content-lg-between">
            <div class="col-lg-6 order-0 order-lg-2">
                <div class="banner__img text-xxl-end text-center">
                    <img src=" {{ $homeSlide->home_slide }}" alt="">
                </div>
            </div>
            <div class="col-xl-5 col-lg-6">
                <div class="banner__content">
                    <h2 class="title wow fadeInUp" data-wow-delay=".2s"><span>{{ $homeSlide->title }}</span></h2>
                    <p class="wow fadeInUp" data-wow-delay=".4s">{!! $homeSlide->short_title !!}</p>
                    <a href="https://en.wikipedia.org/wiki/History_of_film" class="btn banner__btn wow fadeInUp" data-wow-delay=".6s">Keep reading in Wikipedia</a>
                </div>
            </div>
        </div>
    </div>
    <div class="banner__video">
        <a href="{{ $homeSlide->video_url }}" class="popup-video"><i class="fas fa-play"></i></a>
    </div>
</section>
