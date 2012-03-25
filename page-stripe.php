<?php include('header.php'); ?>
<div class="span-24 last">
    <h2>Payment Information</h2>
    <p>By clicking subscribe on this page, you agree to our <a href="">terms and conditions</a> and acknowledge that you will be charged for $29/month. You can cancel at any time. If you have any questions or problems please <a href="">contact us</a> directly.</p>
    <form action="" method="POST" id="payment-form">
        <div class="form-row">
            <label>Card Number</label>
            <input type="text" size="20" autocomplete="off" class="card-number"/>
        </div>
        <div class="form-row">
            <label>CVC</label>
            <input type="text" size="4" autocomplete="off" class="card-cvc"/>
        </div>
        <div class="form-row">
            <label>Expiration (MM/YYYY)</label>
            <input type="text" size="2" class="card-expiry-month"/>
            <span> / </span>
            <input type="text" size="4" class="card-expiry-year"/>
        </div>
        <button type="submit" class="submit-button">Subscribe</button>
    </form>
</div>
<?php include('footer.php'); ?>