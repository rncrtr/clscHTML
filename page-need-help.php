<?php include('header.php'); ?>
<div class="span-16" id="need-form">
	<h2 class="entry-title">Need Help?</h2><br />
	<p>
		If you or someone you know is in need of help, please fill in the blanks below and we will do what we can to find the right people to help you. Please be patient, though, because these things do take time.
	</p>
	<div class="span-24 last">
		<div class="span-7">
			<input type="text" class="inputvalue" id="need-who" value="who" />
			<!--<input type="checkbox" id="anon" /><label for="anon">remain anonymous</label>-->
		</div>
		<div class="span-1" style="margin-left: -20px; margin-top: 10px;">needs</div>
		<div class="span-16 last">
			<input type="text" class="inputvalue" id="need-what" value="what" />
		</div>
	</div><!--/col-->
	<div class="span-24 last">
		<input type="text" class="inputvalue" id="need-when" value="when (this week, 5/23/12, etc.)" />
		&nbsp;and&nbsp;
		<input type="text" class="inputvalue" id="need-where" value="where (zipcode)" />
	</div><!--/col-->
	<div class="span-24 last">
		<h3>Details:</h3>
		<span class="prompt">tell your story, info on the situation, size, shape, description, tools needed, whatever will help us meet the need.</span>
		<textarea rows="5"></textarea><br />
	</div>
	<div class="span-24 last" id="need-tags">
		<h3 class="span-1">Tags:</h3>
		<ul class="span-23 last" id="need-filters">
			<li class="action"><a href="/category/action">action</a></li>
			<li class="stuff"><a href="/category/stuff">stuff</a></li>
			<li class="prayer"><a href="/category/prayer">prayer</a></li>
			<li class="financial"><a href="/category/financial">financial</a></li>
			<li class="events"><a href="/category/events">events</a></li>
			<li class="friendship"><a href="/category/friendship">friendship</a></li>
		</ul>
		<span class="span-24 last prompt">choose one or more tags that fit this need. It will help find the right people.</span>
	</div>
	<div class="span-24 last">
		<h3 class="span-24 last">Who do we contact?</h3>
		<input type="text" class="inputvalue" id="need-contact-name" value="name" /><br />
		<input type="text" class="inputvalue" id="need-contact-phone" value="phone" /><br />
		<input type="text" class="inputvalue" id="need-contact-email" value="email" /><br /><br />
		<div class="btn-left"></div>
		<div class="btn-middle">send</div>
		<div class="btn-right"></div>
	</div>
</div><!--/need-form-->
<?php include('footer.php'); ?>		