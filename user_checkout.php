<?php
include_once 'head.php';
include_once 'header.php';
include_once 'includes/user_profile.inc.php';
?>

<?php
if (isset($_GET["success"])) {
    if ($_GET["success"] == "purchaseConfirmed") {
        echo '
        <section id="user-must-login" class="bg-success">
            <div class="container">
                <h3 class="moonffee-font fw-bold text-center m-0 p-3 text-white">Your order was successfully fulfilled, we will be sending it your way as soon as possible!</h3>
            </div>
        </section>';
    }
}
?>

<section id="user_cart_hero">
    <div id="user_cart_shop_background" class="d-flex flex-column justify-content-center align-items-center p-5">
        <h1 class="moonffee-font fw-bold display-3 text-center my-3 text-white hidden">Your cart shop</h1>
        <h4 class="moonffee-font text-center mt-3 mb-5 text-white hidden">Here are products you've added to your cart!</h4>
    </div>
</section>

<section id="shop_cart">
    <div class="container py-5">
        <div class="row d-flex justify-content-center my-4">
            <div class="col-md-8">
                <div class="card mb-4">
                    <div class="d-flex align-items-middle card-header py-3">
                        <h3 class="moonffee-font fw-bold mb-0">Shopping Cart</h3>
                        <h5 class="ms-auto moonffee-font fw-bold text-secondary my-1"><span id="item_quantity"></span> items</h5>
                    </div>
                    <div id="checkout_cart" class="card-body">
                        <ul class='list-group checkout-cart'>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-header py-3">
                        <h5 class="moonffee-font fw-bold mb-0">Order details</h5>
                    </div>
                    <div class="card-body">
                        <form action="includes/user_checkout_cart.inc.php" method="POST">
                            <h4 class="fw-bold">Payment</h4>
                            <div class="form-check d-flex justify-content-between border-top border-2 pt-2">
                                <div>
                                    <input class="form-check-input" type="radio" name="cardsRadio" id="paypal_radio" value="paypal" checked>
                                    <label class="form-check-label fw-bold" for="paypal_radio">
                                        Paypal
                                    </label>
                                </div>
                                <div>
                                    <i class="fa-brands fa-cc-paypal fa-2x"></i>
                                </div>
                            </div>
                            <div class="form-check d-flex justify-content-between pb-2">
                                <div>
                                    <input class="form-check-input" type="radio" name="cardsRadio" id="cards_radio" value="debit/credit card">
                                    <label class="form-check-label fw-bold" for="cards_radio">
                                        Debit / Credit Card
                                    </label>
                                </div>
                                <div>
                                    <i class="fa-brands fa-cc-visa fa-2x"></i>
                                    <i class="fa-brands fa-cc-mastercard fa-2x"></i>
                                    <i class="fa-brands fa-cc-amex fa-2x"></i>
                                </div>
                            </div>
                            <div id="card_input">
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                    <input type="text" id="userCCName" class="form-control" name="cardName" aria-label="userEmail" placeholder="Card Name">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text"><i class="fa-solid fa-credit-card"></i></span>
                                    <input type="text" id="userCCNum" class="form-control" name="cardNumber" aria-label="userEmail" placeholder="XXXX-XXXX-XXXX-XXXX">
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-4 my-1">
                                        <label for="cardMonth" class="fw-bold">Month</label>
                                        <select class="form-control" id="cardMonth" name="cardMonth">
                                            <option value="0"></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-4 my-1">
                                        <label for="cardYear" class="fw-bold">Year</label>
                                        <select class="form-control" id="cardYear" name="cardYear">
                                            <option value="0"></option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-4 my-1">
                                        <div class="form-group">
                                            <label for="cvv" class="fw-bold">CVV/CVC</label>
                                            <input class="form-control" id="CVV" type="text" name="CVV" maxlength="3" placeholder="123">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-3">
                                <div class="billing-address d-flex">
                                    <h4 class="fw-bold">Billing address</h4>
                                    <span class="text-muted ms-1 mb-1"><small>(Change as needed)</small></span>
                                </div>
                                <div class="border-top border-2 pt-2">
                                    <p class="card-text fw-bold mb-1">First name:</p>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                        <input type="text" id="orderFN" class="form-control" name="orderFirstName" aria-label="userFirstName" placeholder="First Name" value="<?php echo $userFirstName; ?>" required>
                                    </div>
                                    <p class="card-text fw-bold mb-1">Last name:</p>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                                        <input type="text" id="orderLN" class="form-control" name="orderLastName" aria-label="userLastName" placeholder="Last Name" value="<?php echo $userLastName; ?>" required>
                                    </div>
                                    <p class="card-text fw-bold mb-1">Your email:</p>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                        <input type="text" id="orderEM" class="form-control" name="orderEmail" aria-label="userEmail" placeholder="Email" value="<?php echo $userEmail; ?>" required>
                                    </div>
                                    <p class="card-text fw-bold mb-2">Your address:</p>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                                        <input type="text" id="orderAD" class="form-control" name="orderAddress" aria-label="userAddress" placeholder="Address" value="<?php if ($userAddress != null) echo $userAddress;
                                                                                                                                                                        else echo ""; ?>" required>
                                    </div>
                                    <p class="card-text fw-bold mb-2">Your address 2: <span class="text-muted fw-normal">(Optional)</span></p>
                                    <div class="input-group mb-3">
                                        <span class="input-group-text"><i class="fa-solid fa-location-dot"></i></span>
                                        <input type="text" id="orderAD2" class="form-control" name="orderAddress2" aria-label="userAddress" placeholder="e.g. Apartment or suite" value="">
                                    </div>
                                    <div class="input-group mb-2">
                                        <textarea id="userMsgArea" name="orderAdditionalNote" class="form-control" placeholder="Additional notes"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="pt-2">
                                <h4 class="fw-bold">Expected shipping delivery</h4>
                                <div class="border-top border-2">
                                    <p class="fs-6 fw-bold pt-2 mb-0">Within 2-3 days</p>
                                </div>
                            </div>
                            <ul class="list-group list-group-flush pt-4">
                                <h4 class="fw-bold">Total</h4>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-top border-2 border-0 px-0 pb-0">
                                    <strong>Products</strong>
                                    <span id="checkout_products_sum_price" class="fw-bold">$0</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                                    <strong>Shipping</strong>
                                    <span><strong>Free</strong></span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                                    <div>
                                        <strong>Total amount</strong>
                                        <strong>
                                            <p class="mb-0">(including VAT)</p>
                                        </strong>
                                    </div>
                                    <span id="checkout_final_price" class="fw-bold fs-4">$0</span>
                                </li>
                            </ul>
                            <div class="text-center">
                                <button id="checkout_btn" type="button" class="btn btn-lg btn-info fw-bold" data-bs-toggle="modal" data-bs-target="#checkoutCartModal">
                                    <i class='fa-solid fa-check-to-slot me-2'></i>Proceed To Checkout
                                </button>
                            </div>
                            <!-- purchase confirmation modal -->
                            <div class="modal fade" id="checkoutCartModal" tabindex="-1" aria-labelledby="checkoutCartModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content border border-info border-3">
                                        <div class="modal-header justify-content-center">
                                            <h2 class="modal-title moonffee-font fw-bold">Thank you for your purchase!</h2>
                                        </div>
                                        <div class="modal-body text-center">
                                            <p class="fw-bold fs-5 m-0">We have received your order and we'll be preparing to send it your way as soon as possible!</p>
                                            <hr>
                                            <p class="fw-bold fs-6 m-0">Please bear in mind that shipping delivery may vary due to numerous possible reasons for our couriers, we will inform you if anything changes!</p>
                                        </div>
                                        <div class="modal-footer justify-content-center">
                                            <div class="d-flex flex-column">
                                                <input id="checkout_submit" type='submit' name='proceedToCheckout' class='btn btn-lg fw-bold btn-info' value='Close'>
                                                <!-- <button type="button" class="btn btn-info fw-bold" data-bs-dismiss="modal">Great!</button> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>