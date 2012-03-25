<?php
function callout($content,$width=null){
	if($width==null){$w='200';}else{$w=$width;}
	$callout .= '<div class="callout border-callout" style="text-align: center; width: '.$w.'px;">';
	$callout .= $content;
	$callout .= '<b class="border-notch notch"></b>';
	$callout .= '<b class="notch"></b>';
	$callout .= '</div>';
	echo $callout;
}

function stripeCreatePlan(){
	require_once('./lib/Stripe.php');
	Stripe::setApiKey("mDZRJuHrjeG3sSKJdmumEZdbGtr1TLDW");
	Stripe_Plan::create(array(
	  "amount" => 2000,
	  "interval" => "month",
	  "name" => "Amazing Gold Plan",
	  "currency" => "usd",
	  "id" => "gold")
	);
}

function stripeSubscribeCustomer(){
	// set your secret key: remember to change this to your live secret key in production
	// see your keys here https://manage.stripe.com/account
	Stripe::setApiKey("mDZRJuHrjeG3sSKJdmumEZdbGtr1TLDW");

	// get the credit card details submitted by the form
	$token = $_POST['stripeToken'];

	$customer = Stripe_Customer::create(array(
	  "card" => $token,
	  "plan" => "gold",
	  "email" => "payinguser@example.com")
	);
}
?>