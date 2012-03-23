<?php
/* styles */
	$font_title = "font-family: 'Open Sans Condensed', sans-serif;";
	$font_text = "font-family: tahoma, arial, sans-serif;"; //"font-family: 'Open Sans', sans-serif;";
	$h2size = '24px';
	$rounded5 = 'border-radius: 5px; -moz-border-radius: 5px;';
/* colors */
$ltblue = '#0094FF';
$navy = '#00137F';
?>
<!DOCTYPE html>
<head>
	<title>clsc</title>
	<link rel="stylesheet" type="text/css" href="css/1140.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
	<style>
	/* html elements */
		html{}
		body{<?=$font_text?> font-size: .85em;}
		h1,h2,h3,h4,h5{<?=$font_title?>}
		a{color: #0094FF;}
		a:hover{background: #0094FF; color: #FFFFFF;}
	
	/* class */
		.clear{clear: both;}
		.left{text-align: left;}
		.center{text-align: center;}
		.right{text-align: right;}
		.divide{border-top: 1px solid #CCCCCC; margin-top: 10px; margin-bottom: 10px;}
		.prompt{font-size: 11px; color: #696969; font-style: italic;}
		.fakelink{color: #0094FF; text-decoration: underline; cursor: pointer;}
		
	/* buttons */	
		.btn-left{float: left; background: url('img/btn-left.png') no-repeat; height: 38px; width: 5px;}
		.btn-middle{float: left; background: url('img/btn-middle.png') repeat-x; height: 38px; padding: 8px 10px 0px 10px; color: #FFF; font-weight: bold; cursor: pointer;}
		.btn-right{float: left; background: url('img/btn-right.png') no-repeat; height: 38px; width: 6px;}
		
		.btn-sm-left{float: left; background: url('img/btn-left.png') no-repeat; background-size: 5px 25px;  height: 25px; width: 5px;}
		.btn-sm-middle{float: left; background: url('img/btn-middle.png') repeat-x; background-size: 1px 25px;  height: 25px; padding: 3px 5px 0px 5px; color: #FFF; font-weight: bold; cursor: pointer;}
		.btn-sm-right{float: left; background: url('img/btn-right.png') no-repeat; background-size: 6px 25px; height: 25px; width: 6px;}
	/* colors */
		.ltblue{color: <?=$ltblue?>;}
		.navy{color: <?=$navy?>;}
	/* id */
		#page{}
			#header{padding-top: 10px; border: 0px solid blue;}
				#logo{float: left;}
				#site-title{float: left; font-size: 24px; margin-top: -10px; margin-left: 10px; color: #00137F;}
				#description{margin-left: 72px; margin-top: -20px; width: 200px;}
				#login-register{}
				#nav-login{list-style: none; float: right;}
				#nav-login li{float: left; padding: 3px 0px 3px 10px;}
				#tagline{float: right;}
			#nav-main{list-style: none; padding-top: 0px; margin: 0 10%;}
				#nav-main li a{float: left; text-align: center; text-decoration: none; width: 19%; padding: 3px 0px; border-right: 0px solid #CCCCCC;}
				#nav-main li a:hover{background: #0094FF; color: #FFFFFF;}
				#nav-main li a.last{border-right: 0px;}
			#content{}
				#nav-filters{list-style: none; margin-top: 20px;}
				#nav-filters li{float: left; margin: 5px 0px 5px 0px;}
				#nav-filters li a{ color: <?=$navy?>; text-decoration: none; border: 1px solid #CCCCCC; padding: 3px 10px; margin: 0px 5px; <?=$rounded5?>}
				
				#need-filters{list-style: none; margin-top: 20px;}
				#need-filters li{float: left; margin: 5px 0px 5px 0px;}
				#need-filters li span{ color: <?=$navy?>; text-decoration: none; border: 1px solid #CCCCCC; padding: 3px 10px; margin: 0px 5px; <?=$rounded5?>}
				
				#location{float: right; margin-top: 20px;}
				#location-change{float: right;}
				#posts{margin-top: 10px;}
				#help-out-posts ul{list-style: none;}
				.entry{font-size: 16px; line-spacing: 1.5em; margin-top: 30px;}
				.entry-alt{font-size: 16px; line-spacing: 1.5em; margin-top: 0px;}
				h2.entry-title{margin-bottom: 0px; font-size: 24px; color: <?=$navy?>;}
				
				.entry-main{float: left; width: 700px; padding-right: 20px; border-right: 1px solid #CCCCCC;}
				.entry-main-alt{float: left; width: 940px; padding-right: 20px;}
				.entry-meta{margin-top: 0px;}
				.entry-dates{}
				
				.entry-tags{margin-top: 10px;}
				.entry-tags li{border: 0px solid #CCCCCC; font-size: 14px;}
				.entry-tags{list-style: none;}
				.entry-tags li{float: left; margin: 5px 0px 5px 0px;}
				.entry-tags li a{ color: <?=$navy?>; text-decoration: none; border: 1px solid #CCCCCC; padding: 3px 10px; margin: 0px 5px; <?=$rounded5?>}
				
				.entry-actions{float: left; width: 180px;  }
				.entry-actions h3{color: <?=$navy?>; margin-top: 3px; margin-bottom: -5px;}
				.entry-contact{padding: 0px 10px 0px 20px;}
				.entry-donate{clear: both; width: 80px; padding: 10px 0px 0px 0px; vertical-align: middle;}
				#need-form input{font-size: 14px; border: 0px; border-bottom: 1px solid #00137F; width: 250px;}
				#city-col1 li,#city-col2 li,#city-col3 li,#city-col4 li{padding: 3px 0px;}
	/* filters/tags */
		.all a{color: #FFFFFF; border: 1px solid #0094FF;}
		.all a:hover{color: #0094ff;}
	</style>
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
</head>
<body>
	<div id="page">
		<div class="container">
			<div class="row" id="header">
				<div class="threecol">
					<div id="logo">
						<a href="/clsc"><img alt="clsc" src="img/asterisk60.png" /></a>
					</div>
					<div id="site-title">
						<h1>clsc</h1>
					</div>
					<div class="clear"></div>
					<div id="description">
						fuse. blend. unite as one.
					</div>
				</div><!--/col-->
				<div class="sixcol">
					<div class="center navy">(we're in beta, help us kick the tires!)</div>
				</div><!--/col-->
				<div class="threecol last">
					<div id="login-register">
						<ul id="nav-login">
							<li><a href="/register">register</a></li>
							<li><a href="/login">login</a></li>
						</ul>
					</div>
					<div class="clear"></div>
					<div id="tagline">
						social-powered people care
					</div>
				</div><!--/col-->
			</div><!--/row-->
			<div class="row">
				<div class="twelvecol last divide"></div>
			</div>
			<div class="row" id="nav">
				<div class="twelvecol last">
					<ul id="nav-main">
						<li><a href="/clsc" class="first">home</a></li>
						<li><a href="/about">about</a></li>
						<li><a href="/need-help">need help?</a></li>
						<li><a href="/hero">want to help?</a></li>
						<li><a href="/org" class="last">clsc for your org</a></li>
					</ul>
				</div><!--/col-->
			</div><!--/row-->
			<div class="row">
				<div class="twelvecol last divide"></div>
			</div><!--/row-->