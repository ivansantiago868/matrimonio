(function ($) {
	$(".wpcf7-submit").click(function(event) {		
		var wpcf7id  = $(this).closest('form').find('input[name=_wpcf7]').val();
		var ajax_url = pma_template_Url+'/wp-admin/admin-ajax.php';
		
		$(".wpcf7-response-output").hide();
		jQuery.post(
			ajax_url,
			{
				action:'checkPMAenable'  ,
				data:wpcf7id
			}, 
			function(response){
				//alert(response);
				var json = $.parseJSON(response);
				if(json.pma==1)
				{
					$(".wpcf7-response-output").hide();
					$( document ).ajaxComplete(function() {
						$(".wpcf7-response-output").hide();											
						var msg_alert = $(".wpcf7-response-output").html();
						if($(".wpcf7-response-output").hasClass("wpcf7-validation-errors"))
						{
							//swal({   title: msg_alert,   text: "",   type: "error",   confirmButtonText: "OK" });
							swal(msg_alert, "", "error");
						}
						if($(".wpcf7-response-output").hasClass("wpcf7-mail-sent-ok"))
						{
							swal(msg_alert, "", "success");
						}
					});
				}	
							
			});
	});
})(jQuery);
