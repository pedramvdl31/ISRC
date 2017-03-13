$(document).ready(function(){
	main.pageLoad();
	main.events();

});
main = {
	pageLoad: function() {
		$.ajaxSetup({
			headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
		});



	},
	events: function() {



		$('.subscribe-form').submit(function(e) {
		    e.preventDefault();
		    var postdata = $('.subscribe-form').serialize();
			requestw.send_email_purchace(postdata);
		    // $.ajax({
		    //     type: 'POST',
		    //     url: 'assets/php/subscribe.php',
		    //     data: postdata,
		    //     dataType: 'json',
		    //     success: function(json) {
		    //     if(json.valid == 0) {
		    //         $('.success-message').hide();
		    //         $('.error-message').hide();
		    //         $('.error-message').html(json.message);
		    //         $('.error-message').fadeIn('fast', function(){
		    //             $('.subscribe-form').addClass('animated flash').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
		    //             $(this).removeClass('animated flash');
		    //           });
		    //       });
		    //     }
		    //     else {
		    //         $('.error-message').hide();
		    //         $('.success-message').hide();
		    //         $('.subscribe-form').hide();
		    //         $('.success-message').html(json.message);
		    //         $('.success-message').fadeIn('fast', function(){
		    //         $('.top-content').backstretch("resize");
		    //       });
		    //     }
		    //   }
		    // });
		  });


	}
}
requestw = {
	send_email_purchace: function(pform) {
		var token = $('meta[name=csrf-token]').attr('content');
		$('#add-to-cart-modal').modal('hide');
		$.post(
			'/purchace_request',
			{
				"_token": token,
				"pform" : pform
			},
			function(result){
				var status = result.status;

				switch(status) {
					case 200: 
				            $('.error-message').hide();
				            $('.success-message').hide();
				            $('#pbtn').hide();
				            $('.success-message').html(result.suc);
				            $('.success-message').fadeIn('fast', function(){
				            	$('.top-content').backstretch("resize");
				          	});
					break;				
					case 400: 
					$('.success-message').hide();
			            $('.error-message').hide();
			            $('.error-message').html(result.err);
			            $('.error-message').fadeIn('fast', function(){
			                $('.subscribe-form').addClass('animated flash').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
			                $(this).removeClass('animated flash');
			            	});
			        	});
					break;
					default:
					break;
				}

				}
				);
	}
};

