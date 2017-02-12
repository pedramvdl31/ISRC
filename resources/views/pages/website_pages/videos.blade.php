@extends($layout)
@section('stylesheets')
  {!! Html::style('/assets/css/pages/website_pages/general.css') !!}
  {!! Html::style('/assets/css/pages/website_pages/events.css') !!}
@stop
@section('scripts')
<script src="/assets/js/pages/website_pages/events.js"></script>
@stop

@section('content')
<div class="container" style="padding-top:80px;padding-bottom:20px;">
  <div class="jumbotron my-jumbotron" style="margin-bottom: 20px;">
    <h1>Videos</h1>
  </div>
	<div class="col-md-12" style="margin-bottom: 47px">
		<div class="embed-responsive embed-responsive-4by3">
			<iframe width="420" height="315" src="https://www.youtube.com/embed/eWaACzRY13o" 	frameborder="0" allowfullscreen></iframe>
		</div>
	</div>

	<div class="col-md-6">
	      <div class="embed-responsive embed-responsive-4by3">
				<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fubutoday%2Fvideos%2Fvb.424487967717734%2F570279149805281%2F%3Ftype%3D3&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
	      </div>
	</div>
	<div class="col-md-6">
		<div class="embed-responsive embed-responsive-4by3">
			<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fubutoday%2Fvideos%2Fvb.424487967717734%2F570278166472046%2F%3Ftype%3D3&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
		</div>
	</div>
	<div class="col-md-6">
		<div class="embed-responsive embed-responsive-4by3">
			<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fubutoday%2Fvideos%2Fvb.424487967717734%2F525247160975147%2F%3Ftype%3D3&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
		</div>
	</div>
	<div class="col-md-6">
		<div class="embed-responsive embed-responsive-4by3">
			<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fubutoday%2Fvideos%2Fvb.424487967717734%2F441151662718031%2F%3Ftype%3D3&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
		</div>
	</div>	
	<div class="col-md-6">
		<div class="embed-responsive embed-responsive-4by3">
			<iframe width="420" height="315" src="https://www.youtube.com/embed/FcIWiLBnf54" frameborder="0" allowfullscreen></iframe>
		</div>
	</div>



</div>

@stop