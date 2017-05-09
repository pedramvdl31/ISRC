$(document).ready(function(){
	events.pageLoad();
	events.events();

});
events = {

	pageLoad: function() {
		$.ajaxSetup({
			headers: { 'X-CSRF-Token' : $('meta[name=csrf-token]').attr('content') }
		});
		$( "#datepicker" ).datepicker({
		appendText: "(yyyy-mm-dd)",
		dateFormat: "yy-mm-dd"
		});

	  	tinymce.init({
			fontsize_formats: "8pt 10pt 12pt 14pt",
			selector: '.des',
			height: 500,
			theme: 'modern',
			fontsize_formats: "8pt 9pt 10pt 11pt 12pt 26pt 36pt",
			plugins: [
			'advlist autolink lists link image charmap print preview hr anchor pagebreak',
			'searchreplace wordcount visualblocks visualchars code fullscreen',
			'insertdatetime media nonbreaking save table contextmenu directionality',
			'emoticons template paste textcolor colorpicker textpattern jbimages'
			],
			toolbar1: 'insertfile undo redo | fontsizeselect | fontselect | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image jbimages',
			toolbar2: 'print preview media | forecolor backcolor emoticons',
			image_advtab: true
		});
		$('#fileupload').fileupload({
			// Uncomment the following to send cross-domain cookies:
			//xhrFields: {withCredentials: true},
			url: '/admins/events/images/add',
			dataType:'json',
			autoUpload: true,

			done: function(e, data){
				r = data.result;
				if(r.success === true) {
					var path = r.path;
					var new_input = create_input(path);
					$("#imageDiv").append(new_input);
					// Remove disabled button and add in cancel button
					$(document).find('#displayImagesTable tbody tr .cancel').addClass('hide');
					$(document).find('#displayImagesTable tbody tr .cancel').addClass('hide');
					$(document).find('#displayImagesTable tbody tr .remove').removeClass('hide');
				}
			}
		});

		$(document).on('click', '.fileinput-button', function() {
			$('.template-upload').remove();
			$('#imageDiv').html('');
        });
		$(document).on('click', '.remove', function() {
			$('.template-upload').remove();
			$('#imageDiv').html('');
        });
	},
	events: function() {
        $(document).on('click','.events',function(){
        	if (!$.isEvents('text')) {

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
request = {
	events: function(id) {
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
function eventsf(url)
{

}
// Create input
function create_input(path) {
	var count = $(document).find('.images').length;
	return '<input class="images" name="files['+count+'][path]" type="hidden" value="'+path+'"/>';
}