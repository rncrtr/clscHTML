<?php $i =0; while ($i < 10){ ?>
<?php 
$needer = array();
$needer[] = 'Anon Y Mouse';
$needer[] = 'John Doe';
$needer[] = 'Regina Philanges';
$needer[] = 'Polly Morphenson';
$needer[] = 'Mr. Holland';
$needer[] = 'Dante Havesham';
$needer[] = 'Renaldo Pontiste';
$needer[] = 'Sally Johnson';
$needer[] = 'Christy Haymers';
$needer[] = 'Jane Cho';

$needed_items = array();
$needed_items[] = 'a whatever device';
$needed_items[] = 'a norkel';
$needed_items[] = 'a jerry-rigged jimmyd-lock';
$needed_items[] = 'an expecto patronum';
$needed_items[] = 'a rocket-scientist';
$needed_items[] = 'a con man\'s left ventricle';
$needed_items[] = 'a landscaping army';
$needed_items[] = 'a speaker for the dead';
$needed_items[] = 'a quick brown fox who jumps over a lazy dog';
$needed_items[] = 'a weezard, stat!';
?>
<article class="entry span-24 last">
	<div class="entry-main span-18">
		<h2 class="entry-title span-18 last"><?=$needer[$i]?> needs <?=$needed_items[$i]?></h2>
		<span class="entry-dates span-3 prompt">3/12/2012 - 5/12/2012</span>
		<div class="entry-admin-controls">
			<span class="fakelink">edit</span>
			<span class="fakelink">delete</span>
			<span class="fakelink">publish</span>
		</div>
		<p class="span-18 last">
			lorem was in love with ipsum, but he worked as a castle guard, 
			far from their tiny cottage in the woods. 
			Lorem wished for a job closer to home so that Ipsum would not have to commute so far, 
			and spend more time with Amet, Dolor, and their dog Lipsum.
		</p>
		<div class="span-18">
		<ul class="entry-tags">
			<li><h3>tags:</h3></li>
			<li class="action"><a class="active" href="/category/action">action</a></li>
			<li class="stuff"><a href="/category/stuff">stuff</a></li>
			<li class="prayer"><a href="/category/prayer">prayer</a></li>
			<li class="financial"><a class="active" href="/category/financial">financial</a></li>
			<li class="events"><a href="/category/events">events</a></li>
			<li class="friendship"><a href="/category/friendship">friendship</a></li>
		</ul>
	</div>
	</div><!--/entry-main-->
	<div class="entry-actions span-6 last">
		<div class="entry-contact span-6 last">
			<h3>Contact:</h3>
			<div class="contact-name">Ryan C.</div>
			<div class="contact-phone">303-578-0023</div>
			<div class="contact-email"><a href="mailto:ryan@theclsc.com">ryan@theclsc.com</a></div>
			<!--
			<div class="entry-donate">
				<div class="btn-sm-left"></div>
				<div class="btn-sm-middle">donate</div>
				<div class="btn-sm-right"></div>
			</div>
			-->
		</div>
	</div><!--/entry-actions-->
</article><!--/entry-->
<?php $i++; } ?>