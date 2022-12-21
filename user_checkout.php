<?php
include_once 'head.php';
include_once 'header.php';
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
                        <h5 class="moonffee-font fw-bold mb-0">Summary</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
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
                                <span id="checkout_final_price" class="fw-bold">$0</span>
                            </li>
                        </ul>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary btn-lg btn-block fw-bold btn btn-info">
                                <i class='fa-solid fa-check-to-slot me-2'></i>Proceed To Checkout
                            </button>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body text-center">
                        <h5 class="moonffee-font fw-bold">Expected shipping delivery:</h5>
                        <p class="fs-6 fw-bold mb-0">Within 2-3 days</p>
                    </div>
                    <hr>
                    <div class="mb-4 mb-lg-0">
                        <div class="card-body">
                            <h5 class="text-center moonffee-font fw-bold mb-3">We accept</h5>
                            <div class="d-flex justify-content-around align-items-center">
                                <i class="fa-brands fa-cc-paypal fa-3x"></i>
                                <i class="fa-brands fa-cc-visa fa-3x"></i>
                                <i class="fa-brands fa-cc-mastercard fa-3x"></i>
                                <i class="fa-brands fa-cc-amex fa-3x"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once 'footer.php';
?>