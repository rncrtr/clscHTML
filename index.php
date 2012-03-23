<?php include('header.php'); ?>
<div class="row" id="content">
	<div class="ninecol">
		<ul id="nav-filters">
			<li>filter tags:</li>
			<li class="all"><a href="/">all</a></li>
			<li class="action"><a href="/category/action">action</a></li>
			<li class="stuff"><a href="/category/stuff">stuff</a></li>
			<li class="prayer"><a href="/category/prayer">prayer</a></li>
			<li class="financial"><a href="/category/financial">financial</a></li>
			<li class="events"><a href="/category/events">events</a></li>
			<li class="friendship"><a href="/category/friendship">friendship</a></li>
		</ul>
	</div>
	<div class="threecol last">
		<div id="location">
			Centennial, CO 
			<span class="fakelink" id="toggle-location-change">change</span>
		</div>
		<div id="location-change" style="display: none;">
			<input type="text" id="location-query" /><input type="button" id="location-btn" value="Go" /><br />
			<span class="prompt">city & state or zipcode</span>
		</div>
	</div>
</div><!--/row-->
<div class="row" id="posts">
	<?php include('loop.php'); ?>
</div>
<?php include('footer.php'); ?>