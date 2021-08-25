@extends('parts.template') @section('content')
<div class="index-top">
    <div class="container">
        <div class="index-section-top">
            <div class="index-section-top-left" data-aos="fade-right">
                <div class="index-section-top-title">{{settings('index.inex-header-title')}}</div>
                <div class="index-section-top-subtitle">{{settings('index.index-header-subtitle')}}</div>
                <a class="check-link" href="portofolio">
                    <div class="check-work">
                        <div class="check-linie"></div>
                        <div class="check-text">{{__('site.check')}}</div>
                    </div>
                </a>
            </div>
            <div class="index-section-top-right" data-aos="fade-left">
                <img src="images/space.gif" class="full-width">
            </div>
        </div>
    </div>
</div>
{{-- //////// --}}
<div class="container">
    <div class="title projects-title index-service-title">{{__('site.services')}}</div>
    <div class="work-services-container" data-aos="fade-right" data-aos-delay="250">
        <div class="index-work-underlay"></div>
        <div class="index-service-element" id="element1">
            <div class="work-service-image"><img style = "transition:0.3s;" src="images/service1-white.svg" class="full-width poza-selectata"></div>
            <div class="index-work-service-title prim-element-selected text-selectat">{{settings('index.index-service-title1')}}</div>
            <div class="work-service-text prim-element-selected selected1 text-selectat">{{settings('index.index-service-text1')}}</div>
        </div>
        <div class="index-service-element" id="element2">
            <div class="work-service-image"><img style = "transition:0.3s;" src="images/service2-black.svg" class="full-width"></div>
            <div class="index-work-service-title">{{settings('index.index-service-title2')}}</div>
            <div class="work-service-text">{{settings('index.index-service-text2')}}</div>
        </div>
        <div class="index-service-element" id="element3">
            <div class="work-service-image"><img style = "transition:0.3s;" src="images/service3-black.svg" class="full-width"></div>
            <div class="index-work-service-title">{{settings('index.index-service-title3')}}</div>
            <div class="work-service-text">{{settings('index.index-service-text3')}}</div>
        </div>
        <div class="index-service-element" id="element4">
            <div class="work-service-image"><img style = "transition:0.3s;" src="images/service3-black.svg" class="full-width"></div>
            <div class="index-work-service-title">{{settings('index.index-service-title4')}}</div>
            <div class="work-service-text">{{settings('index.index-service-text4')}}</div>
        </div>
    </div>
    <div class="work-services-mobile" data-aos="fade-right" data-aos-delay="250">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="index-service-element" id="element1">
                <div class="work-service-image"><img src="images/service1-white.svg" class="full-width"></div>
                <div class="index-work-service-title">{{settings('index.index-service-title1')}}</div>
                <div class="work-service-text index-work-service-text">{{settings('index.index-service-text1')}}</div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="index-service-element" id="element2">
                <div class="work-service-image"><img src="images/service2-white.svg" class="full-width"></div>
                <div class="index-work-service-title">{{settings('index.index-service-title2')}}</div>
                <div class="work-service-text index-work-service-text">{{settings('index.index-service-text2')}}</div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="index-service-element" id="element3">
                <div class="work-service-image"><img src="images/service3-white.svg" class="full-width"></div>
                <div class="index-work-service-title">{{settings('index.index-service-title3')}}</div>
                <div class="work-service-text index-work-service-text">{{settings('index.index-service-text3')}}</div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="index-service-element" id="element3">
                <div class="work-service-image"><img src="images/service4-white.svg" class="full-width"></div>
                <div class="index-work-service-title">{{settings('index.index-service-title4')}}</div>
                <div class="work-service-text index-work-service-text">{{settings('index.index-service-text4')}}</div>
              </div>
            </div>
          </div>
          <!-- Add Pagination -->
          <div class="swiper-pagination desktop-hidden desktop-hidden3"></div>
        </div>
      </div>
</div>
{{-- ///////// --}}


<div class="container">
    <div class="rocket-container">
        <div class="rocket-left" data-aos="fade-right"><img src="images/rocket.gif" id='change_image'
                class="full-width"></div>
        <div class="rocket-right" data-aos="fade-left">
            <div class="rocket-title">{{settings('index.rocket-title')}}</div>
            <div class="rocket-right-content">
                <div class="rocket-right-content-element">
                    <div class="rocket-right-content-element-title">{{settings('index.rocket-subtitle1')}}</div>
                    <div class="rocket-right-content-element-text">{{settings('index.rocket-text1')}}</div>
                </div>
                <div class="rocket-right-content-element">
                    <div class="rocket-right-content-element-title">{{settings('index.rocket-subtitle2')}}</div>
                    <div class="rocket-right-content-element-text">{{settings('index.rocket-text2')}}</div>
                </div>
                <div class="rocket-right-content-element">
                    <div class="rocket-right-content-element-title">{{settings('index.rocket-subtitle3')}}</div>
                    <div class="rocket-right-content-element-text">{{settings('index.rocket-text3')}}</div>
                </div>
                <div class="rocket-right-content-element">
                    <div class="rocket-right-content-element-title">{{settings('index.rocket-subtitle4')}}</div>
                    <div class="rocket-right-content-element-text">{{settings('index.rocket-text4')}}</div>
                </div>
            </div>
        </div>
    </div>


    {{-- swiper --}}
    {{-- </div>
<div class = "projects">
    <div class = "title">{{__('site.services')}}
</div>
</div> --}}


<div class="container">

    <div class="index-portofolii">
        <div class="title projects-title">{{__('site.projects')}}</div>
        <div class="swiper-container" data-id="toate">
            <div class="swiper-wrapper">
                @foreach($portofolio as $item)
                <div class="swiper-slide">
                    <a class="portofolio-item portofolio-item-index" href="/portofolio-detail/{{$item->id}}">
                        <div class="portofolio-overlay-portofolio">
                            <div class="portofolio-overlay-content">
                                @if($item->logo!=null)
                                <div class="portofolio-logo"><img
                                        src="{{ route('thumb', ['width:1920', $item->logo]) }}"
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

                </div>
                @endforeach
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination desktop-hidden"></div>
        </div>
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

<div class="container">
    <a href="contact" class="index-contact-link">
        <div class="index-contact">
            <div class="got-project">{{__('site.got-project')}}</div>
            <div class="got-contact">{{__('site.contact-us')}}</div>
            <div class="arrow">
                <section id="section04" class="demo">
                    <div href="contact" id="scroll-item"><span></span></div>
                </section>
            </div>
        </div>
    </a>
</div>



@endsection
@push('scripts')

<script>
    $(document).ready(function () {
      $("#element2").hover(function () {
        $(this).parent().find('.index-work-underlay').addClass("index-work-underlay-element2");
        $(this).find('.index-work-service-title').addClass('index-work-text-white');
        $(this).find('.work-service-text').addClass('index-work-text-white');
        $(this).find('.work-service-image').find('img').attr('src','images/service2-white.svg');
        $(this).parent().find('#element1').find('.work-service-image').find('img').attr('src','images/service1-black.svg');
        $(this).parent().find('#element1').find('.index-work-service-title').removeClass('prim-element-selected');
        $(this).parent().find('#element1').find('.work-service-text').removeClass('prim-element-selected');

      }, function () {
        $(this).parent().find('.index-work-underlay').removeClass("index-work-underlay-element2");
        $(this).find('.index-work-service-title').removeClass('index-work-text-white');
        $(this).find('.work-service-text').removeClass('index-work-text-white');
        $(this).find('.work-service-image').find('img').attr('src','images/service2-black.svg');
        $(this).parent().find('#element1').find('.work-service-image').find('img').attr('src','images/service1-white.svg');
        $(this).parent().find('#element1').find('.index-work-service-title').addClass('prim-element-selected');
        $(this).parent().find('#element1').find('.work-service-text').addClass('prim-element-selected');
      });
      $("#element3").hover(function () {
        $(this).parent().find('.index-work-underlay').addClass("index-work-underlay-element3");
        $(this).find('.index-work-service-title').addClass('index-work-text-white');
        $(this).find('.work-service-text').addClass('index-work-text-white');
        $(this).find('.work-service-image').find('img').attr('src','images/service3-white.svg');
        $(this).parent().find('#element1').find('.work-service-image').find('img').attr('src','images/service1-black.svg');
        $(this).parent().find('#element1').find('.index-work-service-title').removeClass('prim-element-selected');
        $(this).parent().find('#element1').find('.work-service-text').removeClass('prim-element-selected');
      }, function () {
        $(this).parent().find('.index-work-underlay').removeClass("index-work-underlay-element3");
        $(this).find('.index-work-service-title').removeClass('index-work-text-white');
        $(this).find('.work-service-text').removeClass('index-work-text-white');
        $(this).find('.work-service-image').find('img').attr('src','images/service3-black.svg');
        $(this).parent().find('#element1').find('.work-service-image').find('img').attr('src','images/service1-white.svg');
        $(this).parent().find('#element1').find('.index-work-service-title').addClass('prim-element-selected');
        $(this).parent().find('#element1').find('.work-service-text').addClass('prim-element-selected');
      });
      $("#element4").hover(function () {
        $(this).parent().find('.index-work-underlay').addClass("index-work-underlay-element4");
        $(this).find('.index-work-service-title').addClass('index-work-text-white');
        $(this).find('.work-service-text').addClass('index-work-text-white');
        $(this).find('.work-service-image').find('img').attr('src','images/service4-white.svg');
        $(this).parent().find('#element1').find('.work-service-image').find('img').attr('src','images/service1-black.svg');
        $(this).parent().find('#element1').find('.index-work-service-title').removeClass('prim-element-selected text-selectat');
        $(this).parent().find('#element1').find('.work-service-text').removeClass('prim-element-selected');
      }, function () {
        $(this).parent().find('.index-work-underlay').removeClass("index-work-underlay-element4");
        $(this).find('.index-work-service-title').removeClass('index-work-text-white');
        $(this).find('.work-service-text').removeClass('index-work-text-white');
        $(this).find('.work-service-image').find('img').attr('src','images/service4-black.svg');
        $(this).parent().find('#element1').find('.work-service-image').find('img').attr('src','images/service1-white.svg');
        $(this).parent().find('#element1').find('.index-work-service-title').addClass('prim-element-selected text-selectat');
        $(this).parent().find('#element1').find('.work-service-text').addClass('prim-element-selected');
        
      });

      if($('.index-work-underlay').hasClass('index-work-underlay-element2')){
        $('.selected1').removeClass('prim-element-selected');
      }

  
            $slides = 2;
            $slidesGrup = 2;
            if(screen.width<=768){
                $slides = 1;
                $slidesGrup = 1;
            }
          var swiper = new Swiper('.work-services-mobile .swiper-container', {
              slidesPerView: $slides,
              spaceBetween: 30,
              slidesPerGroup: $slidesGrup,
              // loopFillGroupWithBlank: true,
              pagination: {
                  el: '.swiper-pagination .desktop-hidden .desktop-hidden3',
                  clickable: true,
              },
          });
  
  
    });
  </script>
<script>
    $(document).ready(function () {
        $slides = 3;
        $slidesGrup = 1;
        if (screen.width <= 1366) {
            $slides = 2;
            $slidesGrup = 1;
        }
        if (screen.width <= 768) {
            $slides = 1;
            $slidesGrup = 1;
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
                },
                nextButton: $this.find(".swiper-button-next")[0],
                prevButton: $this.find(".swiper-button-prev")[0]
            });
        });

    });
</script>
@endpush