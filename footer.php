
		</div><!--/container-->
	</div><!--/page-->
	<script>
	$(document).ready(function(){
		//alert('jQ!');
		$('#toggle-location-change').click(function(){
			$('#location-change').toggle();
		});

		// input watermarks
		$('input[id$=need-who]').focus(function(){if($(this).val() == 'who'){$(this).val('');}});
		$('input[id$=need-what]').focus(function(){if($(this).val() == 'what'){$(this).val('');}});
		$('input[id$=need-when]').focus(function(){if($(this).val() == 'when (this week, 5/23/12, etc.)'){$(this).val('');}});
		$('input[id$=need-where]').focus(function(){if($(this).val() == 'where (zipcode)'){$(this).val('');}});
		$('input[id$=need-detail]').focus(function(){if($(this).html() == 'tell your story'){$(this).html('');}});
		$('input[id$=need-contact-name]').focus(function(){if($(this).val() == 'name'){$(this).val('');}});
		$('input[id$=need-contact-phone]').focus(function(){if($(this).val() == 'phone'){$(this).val('');}});
		$('input[id$=need-contact-email]').focus(function(){if($(this).val() == 'email'){$(this).val('');}});
		
		$('input[id$=need-who]').blur(function(){if($(this).val() == ''){$(this).val('who');}});
		$('input[id$=need-what]').blur(function(){if($(this).val() == ''){$(this).val('what');}});
		$('input[id$=need-when]').blur(function(){if($(this).val() == ''){$(this).val('when (this week, 5/23/12, etc.)');}});
		$('input[id$=need-where]').blur(function(){if($(this).val() == ''){$(this).val('where (zipcode)');}});
		$('input[id$=need-detail]').blur(function(){if($(this).html() == ''){$(this).html('tell your story');}});
		$('input[id$=need-contact-name]').blur(function(){if($(this).val() == ''){$(this).val('name');}});
		$('input[id$=need-contact-phone]').blur(function(){if($(this).val() == ''){$(this).val('phone');}});
		$('input[id$=need-contact-email]').blur(function(){if($(this).val() == ''){$(this).val('email');}});
	});
	</script>
</body>
</html>