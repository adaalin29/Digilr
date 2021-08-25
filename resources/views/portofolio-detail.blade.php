@extends('parts.template') @section('content')
<div class="container page-margin">
    <div class="portofolio-banner">
        <img src="{{ route('thumb', ['width:1920', $portofolio->banner]) }}" class="portofolio-banner-img">
        <div class="portofolio-overlay">
            <div class="portofolio-title"data-aos="fade-right"  data-aos-delay="250" >{{$portofolio->name}}</div>
        </div>
        <div class="forward-portofolio">
            @if($nextLink!=0)
            <a href="portofolio-detail/{{$nextLink}}" class="forward-class">
                <div class="forward-container">
                    <div class="forward-text">{{__('site.next')}}</div>
                    <div class="forward-image"><img src="images/forward.svg" class="full-width"></div>
                </div>
            </a>
            @endif
        </div>
        <div class="backward-portofolio mobile-hidden">
            @if($prevLink!=0)
            <a href="portofolio-detail/{{$prevLink}}" class="backward-class">
                <div class="backward-container">
                    <div class="backward-text">{{__('site.prev')}}</div>
                    <div class="backward-image backward-image-yes"><img src="images/backward.svg" class="full-width"></div>
                </div>
            </a>
            @endif
            @if($prevLink==0)
            <a href="portofolio" class="backward-class">
                <div class="backward-container">
                    <div class="backward-text">{{__('site.prev')}}</div>
                    <div class="backward-image backward-image-yes"><img src="images/backward.svg" class="full-width"></div>
                </div>
            </a>
            @endif
        </div>
    </div>
    <div class="portofolio-description">
        <div class="portofolio-description-left" data-aos="fade-right"  data-aos-delay="500" >
            <div class="portofolio-description-title">{{__('site.project-description')}}</div>
            <div class="portofolio-description-text">{{$portofolio->description}}</div>
        </div>
        <div class="portofolio-description-right" data-aos="fade-left"  data-aos-delay="500">
            <div class="portofolio-description-title">{{__('site.project-details')}}</div>
            <div class="portofolio-description-text"> {!!$portofolio->category['name']!!}</div>
            <div class="portofolio-description-text"> {!!$portofolio->work!!}</div>
            {{-- <div class="portofolio-description-bold-text">{{__('site.project-work')}}</div> --}}
        </div>
    </div>
    <div class = "share-section">
        <div class="portofolio-description-title">{{__('site.share')}}</div>
        <div class = "share-buttons">
            <a target="_blank" href = "https://twitter.com/intent/tweet?url={{URL::to('/')}}/portofolio-detail/{{$portofolio->id}}" class = "share-item"><img src = "images/twitter-portofolio.svg" class = "full-width"></a>
            <a target="_blank" href = "https://www.linkedin.com/sharing/share-offsite/?url={{URL::to('/')}}/portofolio-detail/{{$portofolio->id}}" class = "share-item"><img src = "images/linkedin-portofolio.svg" class = "full-width"></a>
            <a target="_blank" href = "https://www.facebook.com/sharer/sharer.php?u={{URL::to('/')}}/portofolio-detail/{{$portofolio->id}}" class = "share-item"><img src = "images/facebook-portofolio.svg" class = "full-width"></a>
        </div>
    </div>

    <div class = "portofolio-gallery">
        @if($portofolio->images!=null)
        @php ($delay_contor = 0)
            @foreach($portofolio->images as $image)
            <div class = "portofolio-item" data-aos="fade-right"  data-aos-delay="{{$delay_contor*250}}">
                <a class="fancybox-width" data-fancybox="gallery" href="{{ route('thumb', ['width:1920', $image]) }}">
                    <img class = "full-width" style = "object-fit:cover;" src = "{{ route('thumb', ['width:1920', $image]) }}">
                </a>
            </div>
            <?php $delay_contor++ ?>
            @endforeach
        @endif

    </div>
    <div class = "portofolio-gallery-mobile">
        @if($portofolio->mobile_images!=null)
        @php ($delay_contor = 0)
            @foreach($portofolio->mobile_images as $image)
            <div class = "portofolio-item-modificat" data-aos="fade-right"  data-aos-delay="{{$delay_contor*250}}">
                <a class="fancybox-width" data-fancybox="gallery" href="{{ route('thumb', ['width:1920', $image]) }}">
                    <img class = "full-width" style = "object-fit:cover;" src = "{{ route('thumb', ['width:1920', $image]) }}">
                </a>
            </div>
            <?php $delay_contor++ ?>
            @endforeach
        @endif

    </div>

    <div class = "butoane-portofolio">
        @if($prevLink!=0)
        <a href = "portofolio-detail/{{$prevLink}}" class = "link-mobil-stanga">
            <div class = "buton-container-portofolio">
                <div class = "buton-container-portofolio-text-prev" style = "text-align:right">{{__('site.prev')}}</div>
                <div class = "buton-container-prev"><img src = "images/prev-grey.svg" class = "full-width"></div>
            </div>
        </a>
        @endif
        @if($prevLink==0)
        <a href = "portofolio" class = "link-mobil-stanga">
            <div class = "buton-container-portofolio">
                <div class = "buton-container-portofolio-text-prev" style = "text-align:right">{{__('site.prev')}}</div>
                <div class = "buton-container-prev"><img src = "images/prev-grey.svg" class = "full-width"></div>
            </div>
        </a>
        @endif
        
        @if($nextLink!=0)
        <a href = "portofolio-detail/{{$nextLink}}" class = "link-mobil-stanga">
            <div class = "buton-container-portofolio">
               <div class = "buton-container-portofolio-text">{{__('site.next')}}</div>
               <div class = "buton-container-next"><img src = "images/next-blue.svg" class = "full-width"></div>
            </div>
        </a>
        @endif
    </div>

</div>
@endsection