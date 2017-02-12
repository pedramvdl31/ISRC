@extends($layout)
@section('stylesheets')
  {!! Html::style('/assets/css/pages/website_pages/general.css') !!}
  {!! Html::style('/assets/css/pages/website_pages/events.css') !!}
@stop
@section('scripts')
<script src="/assets/js/pages/website_pages/events.js"></script>
@stop

@section('content')
<div class="container" style="padding-top:80px;background-color:black">
  <div class="jumbotron my-jumbotron" style="">
    <h1>Newspaper Articles</h1>
  </div>
  	<div class="panel panel-default my-panel-default">
	  <div class="panel-body">
      <div class="col-md-12 col-sm-12 col-xs-12" >
          <div class="col-xs-12 col-md-12">
          <a class="thumbnail">
            <img src="/assets/images/img/papers/papers_1.png" alt="...">
          </a>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12" >
          <div class="col-xs-12 col-md-12">
          <a class="thumbnail">
            <img src="/assets/images/img/papers/papers_3.png" alt="...">
          </a>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12" >
          <div class="col-xs-12 col-md-12">
          <a class="thumbnail">
            <img src="/assets/images/img/papers/papers_6.png" alt="...">
          </a>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12" >
          <div class="col-xs-12 col-md-12">
          <a class="thumbnail">
            <img src="/assets/images/img/papers/papers_5.png" alt="...">
          </a>
        </div>
      </div>
      <div class="col-md-12 col-sm-12 col-xs-12" >
          <div class="col-xs-12 col-md-12">
          <a class="thumbnail">
            <img src="/assets/images/img/papers/papers_7.png" alt="...">
          </a>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12" >
          <div class="col-xs-12 col-md-12">
          <a class="thumbnail">
            <img src="/assets/images/img/papers/papers_4.png" alt="...">
          </a>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12" >
          <div class="col-xs-12 col-md-12">
          <a class="thumbnail">
            <img src="/assets/images/img/papers/papers_2.png" alt="...">
          </a>
        </div>
      </div>

	  </div>
	</div>
</div>

@stop