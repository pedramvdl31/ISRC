@extends($layout)
@section('stylesheets')
<!--   {!! Html::style('/assets/css/pages/website_pages/general.css') !!}
  {!! Html::style('/assets/css/pages/website_pages/events.css') !!} -->
@stop
@section('scripts')
<!-- <script src="/assets/js/pages/website_pages/events.js"></script> -->
@stop

@section('content')
  <style type="text/css">
    span img {
      width: 60%;
    }
  </style>
    <!--=== Breadcrumbs v3 ===-->
    <div class="breadcrumbs-v3 img-v1">
      <div class="container text-center">
        <!-- <h1>{{$title}}</h1> -->
        <h1>&nbsp;</h1>
      </div><!--/end container-->
    </div>
    <!--=== End Breadcrumbs v3 ===-->

    <!--=== Content Part ===-->
    <div class="container content">
      <div class="row">
        <div class="col-md-12">
          <h2 class="title-v2">{{$title}}</h2>
          {!!$page_content!!}
        </div>
<!--         <div class="col-md-6">
          <img class="img-responsive" src="/assets/img/mockup/mockup1.png" alt="">
        </div> -->
      </div>
    </div><!--/container-->
    <!--=== End Content Part ===-->


@stop