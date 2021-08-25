@extends('parts.template') @section('content')
<div class="container page-margin">
    <div class="title">{{__('site.clients')}}</div>
    <div class="contact-subtitle">{{settings('clients.clients-sub')}}</div>

    <div class = "clients-container" data-aos="fade-right"  data-aos-delay="250">
        @foreach($clients as $clientPicture)
    <div class = "client-element"><img src = "{{ route('thumb', ['width:800', $clientPicture->image]) }}" class = "client-image"></div>
        @endforeach
    </div>
</div>
@endsection