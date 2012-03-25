<?php include('header.php'); ?>
	<div class="span-18">
		<ul id="nav-filters">
			<li>filter tags:</li>
			<li class="all"><a class="button blue" href="/">all</a></li>
			<li class="action"><a class="active" href="/category/action">action</a></li>
			<li class="stuff"><a href="/category/stuff">stuff</a></li>
			<li class="prayer"><a href="/category/prayer">prayer</a></li>
			<li class="financial"><a class="active" href="/category/financial">financial</a></li>
			<li class="events"><a href="/category/events">events</a></li>
			<li class="friendship"><a href="/category/friendship">friendship</a></li>
		</ul>
	</div>
	<div class="span-6 last">
		<div id="location">
			Centennial, CO 
			<span class="fakelink" id="toggle-location-change">change</span>
		</div>
		<div id="location-change" class="span-6 hide last">
			<input type="text" id="location-query" size="17"/>
			<input type="button" id="location-btn" value="Go" />
			<div class="prompt ">city & state or zip</div>
		</div>
	</div>
	<div id="entries">
		<?php include('loop.php'); ?>
	</div>
<?php include('footer.php'); ?>