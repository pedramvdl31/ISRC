$(document).ready(function(){
	home.pageLoad();
	home.events();

});
home = {

	pageLoad: function() {
		$.ajaxSetup({
			headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
		});
		$(function () {
		  $('[data-toggle="tooltip"]').tooltip()
		})
		$(function () {
		  $.scrollUp({
		    scrollName: 'scrollUp', // Element ID
		    topDistance: '300', // Distance from top before showing element (px)
		    topSpeed: 300, // Speed back to top (ms)
		    animation: 'fade', // Fade, slide, none
		    animationInSpeed: 200, // Animation in speed (ms)
		    animationOutSpeed: 200, // Animation out speed (ms)
		    scrollText: 'Scroll to top', // Text for element
		    activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
		  });
		});

      $("#slider1").responsiveSlides({
        maxwidth: 600,
        speed: 800
      });
		var count = $('.slogans').length;
      setInterval(function(){ 

      	
      	    $(".slogans").each(function(e){
      	    	if($(this).hasClass('act')){
      	    		var this_id = parseInt($(this).attr('this-id'));
      	    		var new_id = this_id+1;
      	    		if (new_id>=count) {
						new_id = 0;
      	    		}
      	    		
      	    		$(this).removeClass('act').addClass('hide');
      	    		$('.slogan-'+new_id).removeClass('hide').addClass('act');
      	    		return false;
      	    	}
		    });


      }, 8000);

	},
	events: function() {
        $(document).on('click','.home',function(){
        	if (!$.isHome('text')) {

            }
        	//CHECKBOX
            var $this = $(this);
		     
		    // $this will contain a reference to the checkbox   
		    if ($this.is(':checked')) {
		       
		    } else {
		        // the checkbox was unchecked
		    }
        });
        $(document).on('click','._ignore_',function(){
		});
	}
}
requestss = {
	home: function(id) {
		var token = $('meta[name=csrf-token]').attr('content');
		$.post(
			'/',
			{
				"_token": token
			},
			function(result){
				var status = result.status;

				switch(status) {
					case 200: 
						
					break;				
					case 400: 
						
					break;
					default:
					break;
				}

				}
				);
	}
};
function homef(url)
{

}

