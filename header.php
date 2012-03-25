<?php
include('functions.php');
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
	<!--<link rel="stylesheet" type="text/css" href="css/1140.css">-->
	
	<link rel="stylesheet" href="css/blueprint/screen.css" type="text/css" media="screen,projection">
	<link rel="stylesheet" href="css/blueprint/print.css" type="text/css" media="print">
	<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen,projection">
	<link rel="stylesheet" href="css/callouts.css" type="text/css" media="screen,projection">
	<!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen,projection"><![endif]-->
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script type="text/javascript" src="https://js.stripe.com/v1/"></script>
	<script type="text/javascript">
    // this identifies your website in the createToken call below
    Stripe.setPublishableKey('YOUR_PUBLISHABLE_KEY');
    ...
</script>
	<style>
	@font-face {
	  font-family: 'Open Sans Condensed';
	  font-style: normal;
	  font-weight: 700;
	  src: local('Open Sans Condensed Bold'), local('OpenSans-CondensedBold'), url('type/gk5FxslNkTTHtojXrkp-xM6Eyu0BCqAfob_z3hhzRFzr7w4p9aSvGirXi6XmeXNA.woff') format('woff');
	}
	/* html elements */
	h1,h2,h3,h4,h5{<?=$font_title?> color: #00137F;}
	a{color: #0094FF;}
	a:hover{background: #0094FF; color: #FFFFFF;}
	textarea{margin-bottom: -5px;}
	label{color: #00137F;}
	/* class */
		.showgrid div,.showgrid ul,.showgrid h3{border: 0px solid #0094FF;}
		.hide{display: none;}
		.show{display: block;}
		.clear{clear: both;}
		.left{text-align: left;}
		.center{text-align: center;}
		.right{float: right; !important}
		.divide{border-top: 1px solid #CCCCCC; margin-top: 10px; margin-bottom: 10px;}
		.prompt{font-size: 11px; color: #696969; font-style: italic; display: block;}
		#need-form .inputvalue{font-size: 16px; color: #696969; font-style: italic;}
		.fakelink{color: #0094FF; text-decoration: underline; cursor: pointer;}

		#header{padding-top: 10px;}
		#site-title h1{margin-top: 5px; color: #00137F; <?=$font_title?>}
		#description{margin-top: -20px;}
		#login-register{float: right; }
			#nav-login{list-style: none; margin-right: 0px;}
			#nav-login li{padding: 5px 0px 5px 10px;}
		#tagline{padding: 10px 0px 0px 0px;}
		#nav-main{list-style: none; padding-top: 0px;}
			#nav-main li a{<?=$rounded5?> background: #00CC00; color: #FFFFFF; font-size: 16px; padding: 3px 10px; margin: 0px 10px; float: left; width: 15%; text-align: center; text-decoration: none;  border-right: 0px solid #CCCCCC;}
			#nav-main li a:hover{background: #0094FF; color: #FFFFFF;}
			#nav-main li a.last{border-right: 0px;}

		#nav-filters{list-style: none; margin-top: 0px;}
			#nav-filters li{float: left; margin: 5px 0px 5px 0px;}
			#nav-filters li a{ color: #00137F; text-decoration: none; border: 1px solid #CCCCCC; padding: 3px 10px; margin: 0px 5px; <?=$rounded5?>}
			#nav-filters li a:hover{ color: #FFFFFF; text-decoration: none; border: 1px solid #CCCCCC; padding: 3px 10px; margin: 0px 5px; <?=$rounded5?>}
			#nav-filters li a.active{border: 1px solid #0094FF; color: #0094FF;}
			#nav-filters li a.active:hover{color: #FFFFFF;}
		#need-tags{margin-top: 20px;}
		#need-filters{list-style: none; margin-top: 5px; padding: 0px 0px 0px 10px; margin-bottom: 0px;}
			#need-filters li{float: left; margin: 5px 0px 5px 0px;}
			#need-filters li a{ color: #00137F; text-decoration: none; border: 1px solid #CCCCCC; padding: 3px 10px; margin: 0px 5px; <?=$rounded5?>}
			#need-filters li a:hover{ color: #FFFFFF; text-decoration: none; border: 1px solid #CCCCCC; padding: 3px 10px; margin: 0px 5px; <?=$rounded5?>}
			#need-filters li a.active{border: 1px solid #0094FF; color: #0094FF;}
			#need-filters li a.active:hover{color: #FFFFFF;}

		article.entry{margin-top: 20px;}
			.entry h2{color: #00137F; <?=$font_title?>}
			.entry-title{margin-bottom: 0px;}
			.entry-admin-controls{margin-top: 5px;}
			.entry-admin-controls span.fakelink{padding: 0px 5px 0px 0px;}
			.entry-contact h3{margin-bottom: 0px; margin-top: 38px; color: #00137F; <?=$font_title?>}
			.entry-main p{margin-bottom: 5px;}
			.entry-tags{list-style: none; margin-top: 0px;}
			.entry-tags h3{font-size: 14px; color: #00137F; margin-right: 10px;}
			.entry-tags li{float: left; margin: 5px 0px 5px 0px;}
			.entry-tags li a{ color: <?=$navy?>; text-decoration: none; border: 1px solid #CCCCCC; padding: 3px 10px; margin: 0px 5px; <?=$rounded5?>}
			.entry-tags li a:hover{ color: #FFFFFF; text-decoration: none; border: 1px solid #CCCCCC; padding: 3px 10px; margin: 0px 5px; <?=$rounded5?>}
			.entry-tags li a.active{border: 1px solid #0094FF; color: #0094FF;}
			.entry-tags li a.active:hover{color: #FFFFFF;}
	/* buttons */	
		.btn-left{float: left; background: url('img/btn-left.png') no-repeat; height: 38px; width: 5px;}
		.btn-middle{float: left; background: url('img/btn-middle.png') repeat-x; height: 38px; padding: 8px 10px 0px 10px; color: #FFF; font-weight: bold; cursor: pointer;}
		.btn-right{float: left; background: url('img/btn-right.png') no-repeat; height: 38px; width: 6px;}
		
		.btn-sm-left{float: left; background: url('img/btn-left.png') no-repeat; background-size: 5px 25px;  height: 25px; width: 5px;}
		.btn-sm-middle{float: left; background: url('img/btn-middle.png') repeat-x; background-size: 1px 25px;  height: 25px; padding: 3px 5px 0px 5px; color: #FFF; font-weight: bold; cursor: pointer;}
		.btn-sm-right{float: left; background: url('img/btn-right.png') no-repeat; background-size: 6px 25px; height: 25px; width: 6px;}
		
		#need-form input[type=text]{font-size: 14px; border: 0px; border-bottom: 1px solid #00137F; width: 250px;}
		#need-form input[type=checkbox]{margin: 0px 5px 0px 10px;}
		#need-form h3{margin: 10px 0px 0px 0px;}

		#city-col1,#city-col2,#city-col3,#city-col4{list-style: none;}
		#city-col1 li,#city-col2 li,#city-col3 li,#city-col4 li{padding: 3px 0px;}

		.footer{border-top: 1px solid #CCCCCC; color: #00137F;}
		.footer, .push {height: 4em; clear: both;}
		#nav-footer{list-style: none;}
		#nav-footer li{float: left; margin: 0px 10px 0px 0px;}
	</style>
</head>
<body>
	<div id="wrapper">
		<div class="container">
			<div id="header">
				<div class="span-2 center" id="logo">
					<span class="fakelink" onclick="window.location.href='/clsc';"><img alt="clsc" src="img/asterisk60.png" /></span>
				</div>
				<!--/col-->
				<div class="span-6" id="site-title">
					<h1>clsc</h1>
					<div id="description">
						fuse. blend. unite as one.
					</div>
				</div>
				<!--/col-->
				<div class="span-8">
					<?php callout("we're in beta, help us kick the tires!",'250'); ?>
				</div>
				<!--/col-->
				<div class="span-6 last right">
					<div id="login-register">
						<ul id="nav-login">
							<li class="left"><a href="/register">register</a></li>
							<li class="left"><a href="/login">login</a></li>
						</ul>
					</div>
					<div class="right" id="tagline">social-powered people care</div>
				</div>
				<!--/col-->
				<div class="span-24 last divide"></div>
				<!--/col-->
				<div class="span-24 last">
					<ul id="nav-main">
						<li><a href="/clsc" class="first">home</a></li>
						<li><a href="/clsc/page-about.php">about</a></li>
						<li><a href="/clsc/page-need-help.php">need help?</a></li>
						<li><a href="/clsc/page-help-out.php">want to help?</a></li>
						<li><a href="/clsc/page-org.php" class="last">clsc for your org</a></li>
					</ul>
				</div>
				<!--/col-->
				<div class="span-24 last divide"></div>