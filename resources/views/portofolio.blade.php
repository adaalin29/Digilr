@extends('parts.template') @section('content')
<div class="container page-margin">
    <div class="pages-title">{{__('site.portofolio')}}</div>
    <div class="servicii-categorii servicii-categorii-modificat">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style = "display:none;">
                    <div class="serviciu-element" categorie_id="0">
                        <div class="serviciu-element-text selectat">All</div>
                        <div class="serviciu-punct"><img src="images/dot.svg" class="full-width"></div>
                    </div>
                </div>
                @foreach($categorii as $categorie)
                <div class="swiper-slide">
                    <div class="serviciu-element" categorie_id="{{$categorie['id']}}"
                        item_category="{{$categorie['id']}}">
                        <div class="serviciu-element-text ">{{$categorie->name}}</div>
                        <div class="serviciu-punct"><img src="images/dot.svg" class="full-width"></div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>


{{-- All items --}}

<div class="toate-portofoliile">
    <div class="container container-fara-overflow portofoliu-animat categorie-0">
        <div class="portofolii">
            <div class="swiper-container" data-id="toate">
                <div class="swiper-wrapper">
                    @foreach($portofolio as $item)
                    <div class="swiper-slide">

                        <a class="portofolio-item" href="/portofolio-detail/{{$item->id}}">
                            <div class="portofolio-overlay-portofolio">
                                <div class="portofolio-overlay-content">
                                    @if($item->logo!=null)
                                    <div class="portofolio-logo"><img
                                            src="{{ route('thumb', ['width:1920', $item->logo]) }}"
                                            class="portofolio-image-image"></div>
                                    @else
                                    <div class="portofolio-logo"><img src="images/logo.svg"
                                            class="portofolio-image-image">
                                    </div>
                                    @endif
                                    <div class="portofolio-logo-title">{{$item->name}}</div>
                                </div>
                            </div>
                            <div class="portofolio-image"><img src="{{ route('thumb', ['width:800', $item->banner]) }}"
                                    class="portofolio-image-image"></div>
                        </a>

                    </div>
                    @endforeach
                </div>
                <!-- Add Pagination -->
                {{-- <div class="swiper-pagination"></div> --}}
            </div>
            <div class="swiper-button-next swiper-button-nexttoate mobile-hidden mai-jos">
                <div class="forward-container">
                    <div class="forward-text" style="color:#03A9F4">{{__('site.next')}}</div>
                    <div class="forward-image"><img src="images/next-next-blue.svg" class="full-width"></div>
                </div>
            </div>
            <div class="swiper-button-prev swiper-button-prevtoate mobile-hidden mai-jos">
                <div class="backward-container">
                    <div class="backward-text" style="color:#03A9F4">{{__('site.prev')}}</div>
                    <div class="backward-image backward-image-modificat"><img src="images/prev-prev-blue.svg"
                            class="full-width"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- Category Items --}}

    @foreach($categorii as $key=>$category)
    <div class="container container-fara-overflow portofoliu-animat categorie-{{$category->id}}"
        swiper-categorie={{$category->id}}>
        <div class="portofolii">
            <div class="swiper-container" data-id="{{$category->id}}">
                <div class="swiper-wrapper">
                    @foreach($portofolio as $item)
                    @if($item->category === $category->id)
                    <div class="swiper-slide">

                        <a class="portofolio-item" href="/portofolio-detail/{{$item->id}}">
                            <div class="portofolio-overlay-portofolio">
                                <div class="portofolio-overlay-content">
                                    @if($item->logo!=null)
                                    <div class="portofolio-logo"><img
                                            src="{{ route('thumb', ['width:1920', $item->logo]) }}"
                                            class="portofolio-image-image"></div>
                                    @else
                                    <div class="portofolio-logo"><img src="images/logo.svg"
                                            class="portofolio-image-image">
                                    </div>
                                    @endif
                                    <div class="portofolio-logo-title">{{$item->name}}</div>
                                </div>
                            </div>
                            <div class="portofolio-image"><img src="{{ route('thumb', ['width:800', $item->banner]) }}"
                                    class="portofolio-image-image"></div>
                        </a>

                    </div>
                    @endif
                    @endforeach
                </div>
                <!-- Add Pagination -->
                {{-- <div class="swiper-pagination"></div> --}}
            </div>
            <div class="swiper-button-next swiper-button-next{{$category->id}} mobile-hidden mai-jos">
                <div class="forward-container">
                    <div class="forward-text" style="color:#03A9F4">{{__('site.next')}}</div>
                    <div class="forward-image"><img src="images/next-next-blue.svg" class="full-width"></div>
                </div>
            </div>
            <div class="swiper-button-prev swiper-button-prev{{$category->id}} mobile-hidden mai-jos">
                <div class="backward-container">
                    <div class="backward-text" style="color:#03A9F4">{{__('site.prev')}}</div>
                    <div class="backward-image backward-image-modificat"><img src="images/prev-prev-blue.svg"
                            class="full-width"></div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="container">
    <div class="portofoliu-mobile">
        @foreach($portofolio as $item)
        <a class="portofolio-item portofolio-item-mobile categorie_mobil-{{$item->category}}" href="/portofolio-detail/{{$item->id}}">
            <div class="portofolio-overlay-portofolio">
                <div class="portofolio-overlay-content">
                    @if($item->logo!=null)
                    <div class="portofolio-logo"><img src="{{ route('thumb', ['width:1920', $item->logo]) }}"
                            class="portofolio-image-image"></div>
                    @else
                    <div class="portofolio-logo"><img src="images/logo.svg" class="portofolio-image-image">
                    </div>
                    @endif
                    <div class="portofolio-logo-title">{{$item->name}}</div>
                </div>
            </div>
            <div class="portofolio-image"><img src="{{ route('thumb', ['width:800', $item->banner]) }}"
                    class="portofolio-image-image"></div>
        </a>
        @endforeach
    </div>
</div>




@endsection
@push('scripts')

<script>
    $(document).ready(function () {
        $slides = 4;
        $slidesGrup = 1;
        if (screen.width <= 1366) {
            $slides = 4;
            $slidesGrup = 1;
        }
        if (screen.width <= 1024) {
            $slides = 3;
            $slidesGrup = 1;
        }
        if (screen.width <= 768) {
            $slides = 2;
            $slidesGrup = 2;
        }




        $(".swiper-container").each(function (index, element) {

            var $this = $(this);
            var swiper = new Swiper(this, {
                slidesPerView: $slides,
                spaceBetween: 30,
                slidesPerGroup: $slidesGrup,
                // loopFillGroupWithBlank: true,
                navigation: {
                    nextEl: ".swiper-button-next" + $this.data('id'),
                    prevEl: ".swiper-button-prev" + $this.data('id'),
                },
                pagination: {
                    el: '.swiper-pagination.desktop-hidden',
                    clickable: true,
                    dynamicBullets: true,
                },
                nextButton: $this.find(".swiper-button-next")[0],
                prevButton: $this.find(".swiper-button-prev")[0]
            });
        });

        setTimeout(function () {
            $(".selectat").trigger("click");
        }, 10);

        $('.serviciu-element').click(function () {
            $('.serviciu-punct').removeClass('punct-vizibil');
            $(this).find('.serviciu-punct').addClass('punct-vizibil');


            $('.serviciu-element').removeClass('serviciu-element-selected');
            var categorie_curenta = $(this).attr('categorie_id');
            $(this).addClass('serviciu-element-selected');
            console.log(categorie_curenta);
            if (categorie_curenta == 0) {
                var elemente_afisate = '.categorie-' + 0;
                $('.portofoliu-animat').removeClass('portofoliu-afisat');
                console.log(elemente_afisate);
                $(elemente_afisate).addClass('portofoliu-afisat');
                $('.portofolio-item-mobile').fadeIn();
            } 
            
            else {
                var elemente_afisate = '.categorie-' + categorie_curenta;
                var elemente_mobil = '.categorie_mobil-' + categorie_curenta;
                $('.portofoliu-animat').removeClass('portofoliu-afisat');
                $('.portofolio-item-mobile').fadeOut();
                console.log(elemente_mobil);
                $(elemente_afisate).addClass('portofoliu-afisat');
                $(elemente_mobil).fadeIn();
            }


        });

    });
</script>

@endpush