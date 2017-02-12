@extends($layout)
@section('stylesheets')

@stop
@section('scripts')

@stop

@section('content')
	<div class="jumbotron">
		<h1>Welcome Wendy&nbsp<img src="/assets/images/icons/smiley.png" width="80px"></h1>
	</div>

	@if(isset($message))
		<div class="alert alert-success" role="alert">
	      <strong>Well done!</strong> {!! $message !!}
	    </div>
	@endif




@stop