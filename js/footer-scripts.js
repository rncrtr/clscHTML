	$(document).ready(function(){
		//alert('jQ!');
		$('#toggle-location-change').click(function(){
			$('#location-change').toggle();
		});
	// need form 
		// input watermarks
			// focus
			$('input[id$=need-who]').focus(function(){if($(this).val() == 'who'){$(this).val('');}});
			$('input[id$=need-what]').focus(function(){if($(this).val() == 'what'){$(this).val('');}});
			$('input[id$=need-when]').focus(function(){if($(this).val() == 'when (this week, 5/23/12, etc.)'){$(this).val('');}});
			$('input[id$=need-where]').focus(function(){if($(this).val() == 'where (zipcode)'){$(this).val('');}});
			$('input[id$=need-detail]').focus(function(){if($(this).html() == 'tell your story'){$(this).html('');}});
			$('input[id$=need-contact-name]').focus(function(){if($(this).val() == 'name'){$(this).val('');}});
			$('input[id$=need-contact-phone]').focus(function(){if($(this).val() == 'phone'){$(this).val('');}});
			$('input[id$=need-contact-email]').focus(function(){if($(this).val() == 'email'){$(this).val('');}});
			// blur
			$('input[id$=need-who]').blur(function(){if($(this).val() == ''){$(this).val('who');}});
			$('input[id$=need-what]').blur(function(){if($(this).val() == ''){$(this).val('what');}});
			$('input[id$=need-when]').blur(function(){if($(this).val() == ''){$(this).val('when (this week, 5/23/12, etc.)');}});
			$('input[id$=need-where]').blur(function(){if($(this).val() == ''){$(this).val('where (zipcode)');}});
			$('input[id$=need-detail]').blur(function(){if($(this).html() == ''){$(this).html('tell your story');}});
			$('input[id$=need-contact-name]').blur(function(){if($(this).val() == ''){$(this).val('name');}});
			$('input[id$=need-contact-phone]').blur(function(){if($(this).val() == ''){$(this).val('phone');}});
			$('input[id$=need-contact-email]').blur(function(){if($(this).val() == ''){$(this).val('email');}});

		// functions
			$('#anon').click(function(){
				if($(":checked").val()){
					$('#need-who').val('Anon Mouse');
				}else{
					$('#need-who').val('who');
				}
			});
/*
			// stripe integration
			
			$("#payment-form").submit(function(event) {
		    // disable the submit button to prevent repeated clicks
		    $('.submit-button').attr("disabled", "disabled");

		    Stripe.createToken({
		        number: $('.card-number').val(),
		        cvc: $('.card-cvc').val(),
		        exp_month: $('.card-expiry-month').val(),
		        exp_year: $('.card-expiry-year').val()
		    }, stripeResponseHandler);

		    // prevent the form from submitting with the default action
		    return false;
		  });
*/
	});
/*
	function stripeResponseHandler(status, response) {
	    if (response.error) {
	        ...
	        //show the errors on the form
	        $(".payment-errors").html(response.error.message);
	    } else {
	        var form$ = $("#payment-form");
	        // token contains id, last4, and card type
	        var token = response['id'];
	        // insert the token into the form so it gets submitted to the server
	        form$.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
	        // and submit
	        form$.get(0).submit();
	    }
	}
*/