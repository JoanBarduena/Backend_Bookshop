<?php
include_once "lib/php/functions.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Checkout</title>
    <?php include "parts/meta.php"; ?>
</head>

<body>
    <?php include "parts/navbar.php"; ?>
    <div class="container">
        <div class="card soft">
            <h2>Checkout</h2>
            <form>
                <h3>Address</h3>
                <div class="display-flex">
                    <div class="flex-stretch padding-right form-control">
                        <label class="form-label">First name</label>
                        <input type="text" placeholder="First name" class="form-input">
                    </div>
                    <div class="flex-stretch form-control">
                        <label class="form-label">Last name</label>
                        <input type="text" placeholder="Last name" class="form-input">
                    </div>
                </div>
                <div class="display-flex">
                    <div class="flex-2 padding-right">
                        <label class="form-label">Billing address</label>
                        <input type="text" placeholder="Address" class="form-input">
                    </div>
                    <div class="flex-1">
                        <label class="form-label">Apt, Suite</label>
                        <input type="text" placeholder="Apt, Suite, etc. (optional) " class="form-input">
                    </div>
                </div>
                <div>
                    <div class="form-control">
                        <label class="form-label">City</label>
                        <input type="text" placeholder="City" class="form-input">
                    </div>
                </div>
                <div class="display-flex form-control">
                    <div class="flex-stretch padding-right">
                        <label class="form-label">Country</label>
                        <input type="text" placeholder="Country" class="form-input">
                    </div>
                    <div class="flex-stretch padding-right">
                        <label class="form-label">State</label>
                        <input type="text" placeholder="State" class="form-input">
                    </div>
                    <div class="flex-stretch">
                        <label class="form-label">Postal code</label>
                        <input type="text" value="" maxlength="5" autocomplete="postal-code" pattern="^([0-9]{5})$" placeholder="Postal code" class="form-input">
                    </div>
                </div>

                <h3>Payment</h3>

                <div class="form-control">
                    <label class="form-label">Card number</label>
                    <input type="text" placeholder="XXXX - XXXX - XXXX - XXXX" maxlength="16" pattern="[0-9]*" value="" autocomplete="cc-number" class="form-input">
                </div>
                <div class="form-control">
                    <label class="form-label">Name on card</label>
                    <input type="text" placeholder="Name on card" class="form-input">
                </div>
                <div class="display-flex form-control">
                    <div class="flex-1 display-flex padding-right">
                        <div class=" flex-stretch padding-right">
                            <label class="form-label">Month</label>
                            <input type="text" placeholder="MM" maxlength="2" class="form-input">
                        </div>
                        <div class="flex-stretch">
                            <label class="form-label">Month</label>
                            <input type="text" placeholder="YYYY" maxlength="4" class="form-input">
                        </div>
                    </div>
                    <div class="flex-2">
                        <label class="form-label">CVV</label>
                        <input type="text" placeholder="CVV" maxlength="3" class="form-input">
                    </div>
                </div>

                <a href="product_confirmation.php" class="form-button-fit form-control">Complete Checkout</a>
            </form>
        </div>
    </div>

</body>

</html>