@extends('parts.template') @section('content')
<div class="container page-margin">
    <div class="title">{{__('site.team')}}</div>
    <div class="team-subtitle">{{settings('team.team-subtitle')}}</div>
    <div class="team-container" data-aos="fade-right"  data-aos-delay="250">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($team as $person)
                <div class="swiper-slide">
                    <div class="person-container">
                        <div class="person-image"><img src = "{{ route('thumb', ['width:300', $person->image]) }}" class = "rounded-image"></div>
                    <div class = "person-name">{{$person->name}}</div>
                    <div class = "person-domain">{{$person->domain}}</div>
                    <div class = "person-description">{{$person->description}}</div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination desktop-hidden"></div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next mobile-hidden swiper-gray-right"></div>
        <div class="swiper-button-prev mobile-hidden swiper-gray-left"></div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function () {
            $slides = 3;
            $slidesGrup = 3;
            if(screen.width<=1366){
                $slides = 2;
                $slidesGrup = 2;
            }
        if(screen.width<=768){
            $slides = 1;
            $slidesGrup = 1;
            }   

        var swiper = new Swiper('.team-container .swiper-container', {
            slidesPerView: $slides,
            spaceBetween: 30,
            slidesPerGroup: $slidesGrup,
            // loopFillGroupWithBlank: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination.desktop-hidden',
                clickable: true,
                dynamicBullets: true,
            },
        });

    });
</script>
@endpush