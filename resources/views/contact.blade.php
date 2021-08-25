@extends('parts.template') @section('content')
<div class="container page-margin">
    <div class="title">{{__('site.lets')}}</div>
    <div class="contact-subtitle">{{settings('contact.subtitle')}}</div>

    <form class="contact-form" action='{{ action("ContactController@send_message") }}' method="post" data-aos="fade-right"  data-aos-delay="250">
        <div class="form-title">{{__('site.leave')}}</div>

        <div class="form-container">
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
           <div class = "time-frame-div">
            <input class="contact-form-element datepicker-here time-frame-element" type="text" id="femail" name="time-start" placeholder = "Start date"
            data-multiple-dates-separator=" - " data-language="en" />
            <input class="contact-form-element datepicker-here time-frame-element" type="text" id="femail" name="time-stop" placeholder = "End date"
            data-multiple-dates-separator=" - " data-language="en" />
            {{-- <div class="form-image"><img src="images/calendar.svg" class="full-width"></div> --}}
           </div>
            {{-- <div class="form-image"><img src="images/calendar.svg" class="full-width"></div> --}}
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
    <div class="contact-details-bottom">
        <div class="contact-detail">
            <div class="contact-detail-title">{{__('site.address')}}</div>
            <div class="contact-detail-text">{{settings('contact.address')}}</div>
        </div>
        <div class="contact-detail">
            <div class="contact-detail-title">E-mail</div>
            <a href = "mailto:{{settings('contact.email')}}" class="contact-detail-text">{{settings('contact.email')}}</a>
        </div>
    </div>
</div>
@endsection
@push('scripts')
@push('scripts')

<script>
    $(document).ready(function () {
        $('.datepicker-here').datepicker({
            autoClose: true,
            language: 'en',
            minDate: new Date() // Now can select only dates, which goes after today
        })

    });
</script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
      $.ajaxSetup({
  
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
      });
      var $formContact = $('.contact-form');
      var $rezultatFormular = $('#result');
      $('.submit-btn').on('click', function (event) {
        event.preventDefault();
        $.ajax({
          method: 'POST',
          url: '{{ action("ContactController@send_message") }}',
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
          //   var eroare = res.error;
          // for (var i = 0; i < eroare.length; i++) {
          //   eroare[i] = eroare[i] + "\n";
          // }
          //   $.notify(res.error, {
          //     type: "error",
          //     breakNewLines: true,
          //     gap:2
          //   });

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
@endpush()