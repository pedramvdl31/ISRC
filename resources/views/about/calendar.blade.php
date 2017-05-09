@extends($layout)
@section('stylesheets')

@stop
@section('scripts')

@stop

@section('content')


<!--=== Breadcrumbs ===-->
<div class="breadcrumbs breadcrumbs-dark">
	<div class="container">
		<h1 class="pull-left">Event Calendar</h1>
		<ul class="pull-right breadcrumb">
			<li><a href="/">Home</a></li>
			<li><a href="#">Calendar</a></li>
			<li class=""><a href="/view/our-team">About Us</a></li>
		</ul>
	</div>
</div>
<!--=== End Breadcrumbs ===-->
<!--=== Content Part ===-->
<div class="container content">

	  <!-- Service Blocks -->
	<div class="headline"><h2>UPCOMING EVENTS</h2></div>
	<div class="row margin-bottom-30">
	    <div class="col-md-12">
	        <div class="service">
                <iframe class="iframe-class" width="100%" height="700px" src="https://ubutoday.thundertix.com" frameborder="0" scrolling="auto" marginheight="0" marginwidth="0" allowtransparency="true"></iframe>
                <script>
                  var mobile_regex = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/;
                  if( mobile_regex.test(navigator.userAgent) ) {
                    $('.iframe-class').addClass('iframe-mobile');
                  }
                </script>
	        </div>
	    </div>
	</div>
    <!-- End Service Blokcs -->
</div><!--/container-->
<!--=== End Content Part ===-->


@stop