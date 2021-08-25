@extends('parts.template') @section('content')
<div class = "container page-margin">
<div class = "pages-title">{{__('site.cookie')}}</div>
<div class = "pages-text">{!!settings('site.cookie')!!}</div>
</div>
@endsection