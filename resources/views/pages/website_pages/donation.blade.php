@extends($layout)
@section('stylesheets')
  {!! Html::style('/assets/css/pages/website_pages/general.css') !!}
  {!! Html::style('/assets/css/pages/website_pages/events.css') !!}
@stop
@section('scripts')
<script src="/assets/js/pages/website_pages/events.js"></script>
@stop

@section('content')
<style type="text/css">
  .my-jumbotron>h1{
    text-align: center;
    font: 400 100px/1.0 'Just Another Hand', Helvetica, sans-serif !important;
    text-shadow: 0px 3px 0px #5e5e5e, 0px 5px 0px #4d4d4d, 0px 7px 0px #3c3c3c, 0px 9px 0px #2b2b2b, 3px 8px 15px rgba(0,0,0,0.1), 3px 8px 5px rgba(0,0,0,0.3);
  }
</style>
<div class="container" style="padding-top:80px;background-color:black">
  <div class="jumbotron my-jumbotron" style="">
    <h1>Donate</h1>
  </div>
  	<div class="panel panel-default my-panel-default">
	  <div class="panel-body">

			<center>

<!-- 			<div id="fb-root"></div><script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3"; fjs.parentNode.insertBefore(js, fjs);}(document, 'script', 'facebook-jssdk'));</script><div class="fb-post" data-href="https://www.facebook.com/ubutoday/videos/441151662718031/" data-width="500"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/ubutoday/videos/441151662718031/">Posted by <a href="https://www.facebook.com/ubutoday/">Believe in Breath - UBU Today</a> on&nbsp;<a href="https://www.facebook.com/ubutoday/videos/441151662718031/">Tuesday, April 28, 2015</a></blockquote></div></div>
			<br>
			<br> -->
			<img src="/assets/images/img/kpif.jpg" class="img-responsive" alt="Responsive image">
			<h3><a style="word-break: break-all;" target="_blank" href="https://www.paypal.me/ubutodaypayment">https://www.paypal.me/ubutodaypayment</a></h3>
</center>





	  </div>
	</div>
</div>

@stop