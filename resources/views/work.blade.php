@extends('parts.template') @section('content')
<div class="container page-margin">
  <div class="title">{{__('site.work-with')}}</div>
  <div class="contact-subtitle">{{settings('work.work-subtitle')}}</div>

  <div class="work-services-container" data-aos="fade-right" data-aos-delay="250">
    <div class="work-undelay"></div>
    <div class="work-service-element" id="element1">
      <div class="work-service-image"><img src="images/work-image1.svg" class="full-width"></div>
      <div class="work-service-title">{{settings('work.work-service-title1')}}</div>
      <div class="work-service-text">{{settings('work.work-service-text1')}}</div>
    </div>
    <div class="work-service-element" id="element2">
      <div class="work-service-image"><img src="images/work-image2.svg" class="full-width"></div>
      <div class="work-service-title">{{settings('work.work-service-title2')}}</div>
      <div class="work-service-text">{{settings('work.work-service-text2')}}</div>
    </div>
    <div class="work-service-element" id="element3">
      <div class="work-service-image"><img src="images/work-image3.svg" class="full-width"></div>
      <div class="work-service-title">{{settings('work.work-service-title3')}}</div>
      <div class="work-service-text">{{settings('work.work-service-text3')}}</div>
    </div>
  </div>
  <div class="work-services-mobile" data-aos="fade-right" data-aos-delay="250">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <div class="work-service-element" id="element1">
            <div class="work-service-image"><img src="images/work-image1.svg" class="full-width"></div>
            <div class="work-service-title">{{settings('work.work-service-title1')}}</div>
            <div class="work-service-text">{{settings('work.work-service-text1')}}</div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="work-service-element" id="element2">
            <div class="work-service-image"><img src="images/work-image2.svg" class="full-width"></div>
            <div class="work-service-title">{{settings('work.work-service-title2')}}</div>
            <div class="work-service-text">{{settings('work.work-service-text2')}}</div>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="work-service-element" id="element3">
            <div class="work-service-image"><img src="images/work-image3.svg" class="full-width"></div>
            <div class="work-service-title">{{settings('work.work-service-title3')}}</div>
            <div class="work-service-text">{{settings('work.work-service-text3')}}</div>
          </div>
        </div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination desktop-hidden"></div>
    </div>
  </div>
  <form class="work-form" action='{{ action("WorkController@send_work") }}' method="post" data-aos="fade-left"
    data-aos-delay="500">
    {{-- <div class="form-title">{{__('site.leave')}}
</div> --}}

<div class="form-container work-container">
  <div class="form-container-width">
    <div class="form-contact-element">
      <div class="form-contact-text">{{__('site.name')}}</div>
      <input class="contact-form-element" type="text" id="fname" name="name">
    </div>
    <div class="form-contact-element">
      <div class="form-contact-text">{{__('site.telephone')}}</div>
      <input class="contact-form-element" type="number" id="fname" name="number">
    </div>
    <div class="form-contact-element">
      <div class="form-contact-text">{{__('site.service-interested')}}</div>
      <select id="cars" name="service">
        @foreach($categories as $category)
        <option value="{{$category->name}}">{{$category->name}}</option>
        @endforeach
      </select>
      {{-- <input class="contact-form-element" type="text" id="fname" name="service"> --}}
    </div>
  </div>
  <div class="form-container-width">
    <div class="form-contact-element">
      <div class="form-contact-text">{{__('site.email')}}</div>
      <input class="contact-form-element" type="email" id="femail" name="email">
    </div>
    <div class="form-contact-element">
      <div class="form-contact-text">{{__('site.company')}}</div>
      <input class="contact-form-element" type="text" id="femail" name="company">
    </div>
    <div class="form-contact-element">
      <div class="form-contact-text">{{__('site.website')}}</div>
      <input class="contact-form-element" type="text" id="femail" name="website">
    </div>
  </div>
</div>
<div class="form-contact-element">
  <div class="form-contact-text">{{__('site.describe')}}</div>
  <input class="contact-form-element" type="text" id="femail" name="describe">
</div>
<div class="form-contact-element">
  <div class="form-contact-text">{{__('site.have')}}</div>
  <input class="contact-form-element" type="text" id="femail" name="have">
</div>
<div class="form-contact-element">
  <div class="form-contact-text">{{__('site.time')}}</div>
  <div class="time-frame-div">
    <input class="contact-form-element datepicker-here time-frame-element" type="text" id="femail" name="time-start"
      placeholder="Start date" data-multiple-dates-separator=" - " data-language="en" />
    <input class="contact-form-element datepicker-here time-frame-element" type="text" id="femail" name="time-stop"
      placeholder="End date" data-multiple-dates-separator=" - " data-language="en" />
    {{-- <div class="form-image"><img src="images/calendar.svg" class="full-width"></div> --}}
  </div>
</div>

<div class="contact-details">
  <div class="fields">{{__('site.all-fields')}}</div>
  <div class="termeni">
    <label class="checkbox">
      <input type="checkbox" id="accept-privacy" name="terms" value="checkbox" />
      <span></span>
    </label>
    <div class="termeni-text">{{__('site.termeni-text')}}</div>
  </div>
</div>
<button class="submit-btn">{{__('site.submit')}}</button>
<div id = "result"></div>
</form>
</div>
@endsection
@push('scripts')
<script>
  $(document).ready(function () {
    $("#element2").hover(function () {
      $(this).parent().find('.work-undelay').addClass("work-underlay-element2");
    }, function () {
      $(this).parent().find('.work-undelay').removeClass("work-underlay-element2");
    });
    $("#element3").hover(function () {
      $(this).parent().find('.work-undelay').addClass("work-underlay-element3");
    }, function () {
      $(this).parent().find('.work-undelay').removeClass("work-underlay-element3");
    });

    $slides = 2;
    $slidesGrup = 2;
    if (screen.width <= 768) {
      $slides = 1;
      $slidesGrup = 1;
    }
    var swiper = new Swiper('.work-services-mobile .swiper-container', {
      slidesPerView: $slides,
      spaceBetween: 30,
      slidesPerGroup: $slidesGrup,
      // loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination.desktop-hidden',
        clickable: true,
      },
    });


  });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    $.ajaxSetup({

      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
      }
    });
    var $formContact = $('.work-form');
    var $rezultatFormular = $('#result');
    $('.submit-btn').on('click', function (event) {
      event.preventDefault();
      $.ajax({
        method: 'POST',
        url: '{{ action("WorkController@send_work") }}',
        data: $formContact.serializeArray(),
        context: this,
        async: true,
        cache: false,
        dataType: 'json'
      }).done(function (res) {
        console.log(res);
        if (res.success == true) {
          $.notify(res.successMessage, "success");
          setTimeout(function () {
            window.location.reload();

          }, 4000);
        } else {
          $rezultatFormular.fadeIn()
          $rezultatFormular.css('color','white');
          $rezultatFormular.html(
            
            '<strong>'+res.error.join('<br>')+"</strong>"
          );
        }
      });
      return;
    });

  });
</script>
@endpush