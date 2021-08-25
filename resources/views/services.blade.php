@extends('parts.template') @section('content')
<div class="container page-margin">
    <div class="pages-title">{{__('site.services')}}</div>
    <div class="servicii-categorii">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($categorii as $categorie)
                @if($categorie->id == 1)
                <div class="swiper-slide">
                    <div class="serviciu-element selectat" categorie_id = "{{$categorie['id']}}" item_category = "{{$categorie['id']}}">
                        <div class="serviciu-element-text ">{{$categorie->name}}</div>
                        <div class="serviciu-punct"><img src="images/dot.svg" class="full-width"></div>
                    </div>
                </div>
                @else
                <div class="swiper-slide">
                    <div class="serviciu-element" categorie_id = "{{$categorie['id']}}" item_category = "{{$categorie['id']}}">
                        <div class="serviciu-element-text ">{{$categorie->name}}</div>
                        <div class="serviciu-punct"><img src="images/dot.svg" class="full-width"></div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <div class="swiper-pagination desktop-hidden"></div>
        </div>
        {{-- <div class="swiper-button-next mobile-hidden swiper-gray-right"></div>
        <div class="swiper-button-prev mobile-hidden swiper-gray-left"></div> --}}
        <!-- Add Arrows -->
    </div>
</div>
<div class = "servicii-elemente-container">
    @foreach($servicii as $serviciu)
    <div class = "serviciu categorie-{{$serviciu['category']}}">
        <div class = "servici-element">
            <div class = "servicii-element-imagine"><img src = "{{ route('thumb', ['width:1000', $serviciu->image]) }}" class = "full-width" style = "object-fit:cover;"></div>
            <div class = "servicii-element-text-container">
            <div class = "servicii-element-text-title">{{$serviciu->categories['name']}}</div>
            <div class = "servicii-element-text-text">{!!$serviciu->text!!}</div>
            <a href = "work" class = "buton-albastru">{{__('site.get')}}</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
@push('scripts')

<script>


    $(document).ready(function(){

        setTimeout(function() {
        $( ".selectat" ).trigger( "click" );
    },10);

    $('.serviciu-element').click(function(){
        
        $('.serviciu-punct').removeClass('punct-vizibil');
        $(this).find('.serviciu-punct').addClass('punct-vizibil');

        
        $('.serviciu-element').removeClass('serviciu-element-selected');
      var categorie_curenta = $(this).attr('categorie_id');
      $(this).addClass('serviciu-element-selected');
      if(categorie_curenta == 0){
         $('.imagine-album').fadeIn();
      }
      else{
        var elemente_afisate = '.categorie-' + categorie_curenta;
        $('.serviciu').removeClass('serviciu-selected');;
        console.log(elemente_afisate);
        $(elemente_afisate).addClass('serviciu-selected');
        
      }
    });
    
  });
</script>

@endpush