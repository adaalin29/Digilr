@extends('parts.template') @section('content')
<div class = "container page-margin">
<div class = "pages-title">{{__('site.privacy')}}</div>
<div class = "pages-text">{!!settings('site.privacy')!!}</div>
</div>
@endsection