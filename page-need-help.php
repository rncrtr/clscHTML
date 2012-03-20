<?php include('header.php'); ?>
<div id="need-form">
	<div class="row">
	<h2 class="entry-title">Need Help?</h2><br />
	<div class="twelvecol last">
		<input type="text" class="prompt" id="need-who" value="who" />
		needs
		<input type="text" class="prompt" id="need-what" value="what" />
	</div><!--/col-->
</div><!--/row-->
<br />
<div class="row">
	<div class="twelvecol last">
		<input type="text" class="prompt" id="need-when" value="when (this week, 5/23, etc.)" />
		&nbsp;and&nbsp;
		<input type="text" class="prompt" id="need-where" value="where (denver)" />
	</div><!--/col-->
</div><!--/row-->
<br />
<div class="row">
	<div class="twelvecol last">
		<h3>Details:</h3>
		<textarea rows="5" cols="50" id="need-detail"></textarea><br />
		<span class="prompt">size, shape, description, tools needed, info on the situation, tell your story, whatever will help us meet the need.</span>
	</div>
</div><!--/row-->
<div class="row">
	<div class="twelvecol last">
		<ul id="need-filters">
			<li><h3>Tags:</h3></li>
			<div class="clear"></div>
			<li class="pray"><span class="fakelink">pray</span></li>
			<li class="financial"><span class="fakelink">financial</span></li>
			<li class="event"><span class="fakelink">event</span></li>
			<li class="employment"><span class="fakelink">employment</span></li>
			<li class="housing"><span class="fakelink">housing</span></li>
			<li class="friendship"><span class="fakelink">friendship</span></li>
		</ul>
		<div class="clear"></div>
		<span class="prompt">choose one or more tags that fit this need. It will help us find the right people.</span>
	</div>
</div><!--/row-->
<br />
<div class="row">
	<div class="twelvecol last">
		<h3>Who do we contact?</h3>
		<input type="text" class="prompt" id="need-contact-name" value="name" /><br />
		<input type="text" class="prompt" id="need-contact-phone" value="phone" /><br />
		<input type="text" class="prompt" id="need-contact-email" value="email" /><br /><br />
		<div class="btn-left"></div>
		<div class="btn-middle">send</div>
		<div class="btn-right"></div>
	</div>
</div><!--/row-->
</div><!--/need-form-->
<?php include('footer.php'); ?>		