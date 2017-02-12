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
<div class="container" style="margin-top:75px;margin-bottom:30px;">
  <div class="jumbotron my-jumbotron">
    <h1>Our Events</h1>
  </div>

  	@if(isset($event) && isset($ind))
			<div class="panel panel-default my-panel my-panel-default">
			  <div class="panel-heading clearfix my-panel-heading">
			    <h3 class="panel-title pull-left">{{$event->title}}</h3>
			  </div>
			  <div class="panel-body my-panel-body">
			    {!!$event->decoded_description!!}
			  </div>
			  <div class="panel-footer my-panel-footer clearfix text-center" style="color: black">
			  	@if($event['id'] == 4)
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="6B8VWP77R6TE2">
					<table>
					<tr><td><input type="hidden" name="on0" value="ALL-INCLUSIVE BIODYNAMIC BREATH WORKSHOP - JUNE 9-14, 2016">ALL-INCLUSIVE BIODYNAMIC BREATH WORKSHOP - JUNE 9-14, 2016</td></tr><tr><td><select name="os0" style="width: 100%">
						<option value="NON-REFUNDABLE DEPOSIT">NON-REFUNDABLE DEPOSIT $400.00 USD</option>
						<option value="NON-REFUNDABLE DEPOSIT - PAY IT FORWARD APPLIED TOWARD DEPOSIT">NON-REFUNDABLE DEPOSIT - PAY IT FORWARD APPLIED TOWARD DEPOSIT $200.00 USD</option>
						<option value="BALANCE DUE AFTER DEPOSIT PAID WITH DISCOUNTED PRICING">BALANCE DUE AFTER DEPOSIT PAID WITH DISCOUNTED PRICING $800.00 USD</option>
						<option value="PAYMENT IN FULL WITH PAY IF FORWARD DISCOUNT APPLIED">PAYMENT IN FULL WITH PAY IF FORWARD DISCOUNT APPLIED $1,000.00 USD</option>
						<option value="PAYMENT IN FULL WITH DISCOUNTED PRICING">PAYMENT IN FULL WITH DISCOUNTED PRICING $1,200.00 USD</option>
						<option value="PAYMENT IN FULL WITH DISCOUNTED PRICING">PAYMENT IN FULL WITH DISCOUNTED PRICING $1,450.00 USD</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="USD">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
			  	@elseif($event['id'] == 3)
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="UDLATBWT3RABS">
					<table>
					<tr><td><input type="hidden" name="on0" value="7 Day All-Inclusive Cocoon Workshop - Aug 27 to Sept 3, 2016">7 Day All-Inclusive Cocoon Workshop - Aug 27 to Sept 3, 2016</td></tr><tr><td><select name="os0" style="width: 100%">
						<option value="NON-REFUNDABLE DEPOSIT">NON-REFUNDABLE DEPOSIT €200.00 EUR</option>
						<option value="BALANCE DUE AFTER DEPOSIT PAID WITH DISCOUNTED PRICING">BALANCE DUE AFTER DEPOSIT PAID WITH DISCOUNTED PRICING €400.00 EUR</option>
						<option value="PAYMENT IN FULL WITH UBU TODAY DISCOUNT APPLIED">PAYMENT IN FULL WITH UBU TODAY DISCOUNT APPLIED €600.00 EUR</option>
						<option value="PAYMENT IN FULL WITH OUT DISCOUNTED PRICING">PAYMENT IN FULL WITH OUT DISCOUNTED PRICING €9,000.00 EUR</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="EUR">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
			  	@endif
			  </div>
			</div>
  	@elseif(isset($events) && isset($not_ind))
  	  		@foreach($events as $kkey => $event)
			<div class="panel panel-default my-panel my-panel-default">
			  <div class="panel-heading clearfix my-panel-heading">
			    <h3 class="panel-title pull-left">{{$event->title}}</h3>
			  </div>
			  <div class="panel-body my-panel-body">
			    {!!$event->decoded_description!!}
			  </div>
			  <div class="panel-footer my-panel-footer clearfix text-center" style="color: black">
			  	@if($kkey == 1)
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="6B8VWP77R6TE2">
					<table>
					<tr><td><input type="hidden" name="on0" value="ALL-INCLUSIVE BIODYNAMIC BREATH WORKSHOP - JUNE 9-14, 2016">ALL-INCLUSIVE BIODYNAMIC BREATH WORKSHOP - JUNE 9-14, 2016</td></tr><tr><td><select name="os0" style="width: 100%">
						<option value="NON-REFUNDABLE DEPOSIT">NON-REFUNDABLE DEPOSIT $400.00 USD</option>
						<option value="NON-REFUNDABLE DEPOSIT - PAY IT FORWARD APPLIED TOWARD DEPOSIT">NON-REFUNDABLE DEPOSIT - PAY IT FORWARD APPLIED TOWARD DEPOSIT $200.00 USD</option>
						<option value="BALANCE DUE AFTER DEPOSIT PAID WITH DISCOUNTED PRICING">BALANCE DUE AFTER DEPOSIT PAID WITH DISCOUNTED PRICING $800.00 USD</option>
						<option value="PAYMENT IN FULL WITH PAY IF FORWARD DISCOUNT APPLIED">PAYMENT IN FULL WITH PAY IF FORWARD DISCOUNT APPLIED $1,000.00 USD</option>
						<option value="PAYMENT IN FULL WITH DISCOUNTED PRICING">PAYMENT IN FULL WITH DISCOUNTED PRICING $1,200.00 USD</option>
						<option value="PAYMENT IN FULL WITH DISCOUNTED PRICING">PAYMENT IN FULL WITH DISCOUNTED PRICING $1,450.00 USD</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="USD">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
			  	@elseif($kkey == 0)
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="UDLATBWT3RABS">
					<table>
					<tr><td><input type="hidden" name="on0" value="7 Day All-Inclusive Cocoon Workshop - Aug 27 to Sept 3, 2016">7 Day All-Inclusive Cocoon Workshop - Aug 27 to Sept 3, 2016</td></tr><tr><td><select name="os0" style="width: 100%">
						<option value="NON-REFUNDABLE DEPOSIT">NON-REFUNDABLE DEPOSIT €200.00 EUR</option>
						<option value="BALANCE DUE AFTER DEPOSIT PAID WITH DISCOUNTED PRICING">BALANCE DUE AFTER DEPOSIT PAID WITH DISCOUNTED PRICING €400.00 EUR</option>
						<option value="PAYMENT IN FULL WITH UBU TODAY DISCOUNT APPLIED">PAYMENT IN FULL WITH UBU TODAY DISCOUNT APPLIED €600.00 EUR</option>
						<option value="PAYMENT IN FULL WITH OUT DISCOUNTED PRICING">PAYMENT IN FULL WITH OUT DISCOUNTED PRICING €9,000.00 EUR</option>
					</select> </td></tr>
					</table>
					<input type="hidden" name="currency_code" value="EUR">
					<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
			  	@endif
			  </div>
			</div>
  		@endforeach

  	@endif







<!-- 	<div class="panel panel-default my-panel my-panel-default" id="booking">
		<div class="panel-heading clearfix my-panel-heading">
			<h3 class="panel-title pull-left">Booking and Payments</h3>
		</div>
		<div class="panel-body my-panel-body text-center">
			<p>You may pay using Paypal.</p>
			<div class="form-group">
				<select class="form-control">
				  <option value="1">$300 Deposit – Female $300.00 USD</option>
				  <option value="2">$300 Deposit – Male $300.00 USD</option>
				</select>
			</div>


		</div>
	</div> -->
</div>

@stop