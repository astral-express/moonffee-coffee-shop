<?php
include_once 'head.php';
include_once 'header.php';
?>

<section id="moonffee_shop_hero" class="border-bottom">
    <div class="container p-5 pt-4">
        <div id="welcome" class="text-center mb-5 hidden">
            <img src="assets/welcome.webp" alt="Welcome">
        </div>
        <h4 class="moonffee-font text-white display-4 text-center mb-4 hidden">Check out our other products!</h4>
        <div id="shop_item_categories" class="row row-cols-auto row-cols-lg-4">
            <div class="shop-item col hidden">
                <div class="moonffee_shop_items text-white m-3 p-4">
                    <img src="assets/bread_icon.webp" alt="Bread icon">
                    <h3 class="moonffee-font fw-bold mt-3">Bread</h3>
                    <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, laborum.</p>
                    <a href="#moonffee_shop_bread" class="moonffee-font text-white fs-5">Check out</a>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="moonffee_shop_items text-white m-3 p-4">
                    <img src="assets/pastries_icon.webp" alt="Pastries icon">
                    <h3 class="moonffee-font fw-bold mt-3">Pastries</h3>
                    <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, laborum.</p>
                    <a href="#moonffee_shop_pastries" class="moonffee-font text-white fs-5">Check out</a>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="moonffee_shop_items text-white m-3 p-4">
                    <img src="assets/cake_icon.webp" alt="Cake icon">
                    <h3 class="moonffee-font fw-bold mt-3">Cakes</h3>
                    <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, laborum.</p>
                    <a href="#moonffee_shop_cakes" class="moonffee-font text-white fs-5">Check out</a>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="moonffee_shop_items text-white m-3 p-4">
                    <img src="assets/cookie_icon.webp" alt="Cookie icon">
                    <h3 class="moonffee-font fw-bold mt-3 ">Cookies</h3>
                    <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, laborum.</p>
                    <a href="#moonffee_shop_cookies" class="moonffee-font text-white fs-5">Check out</a>
                </div>
            </div>
        </div>
</section>

<section id="moonffee_shop_coffee">
    <div id="moonffee_shop_coffee_background" class="d-flex flex-column justify-content-center align-items-center p-5">
        <h1 class="moonffee-font fw-bold display-3 text-center my-3 text-white hidden">Our Coffee</h1>
        <h4 class="moonffee-font text-center mt-3 mb-5 text-white hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit possimus blanditiis beatae fugit eligendi eum doloribus excepturi tempore sunt maxime!</h4>
    </div>
    <div class="container p-5">
        <div class="row row-cols-auto row-cols-md-2 row-cols-lg-3">
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Americano</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">3.25</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="1">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="1"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Café au Lait</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">5.00</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="2">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="2"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Latte</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">7.45</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="3">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="3"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Cappuccino</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">2.85</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="4">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="4"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Espresso</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">4.45</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="5">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="5"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Mocha</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">10.15</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="6">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="6"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Cappuccino</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">2.85</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="7">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="7"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Espresso</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">4.45</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="8">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="8"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Mocha</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">10.15</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="9">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="9"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Cappuccino</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">2.85</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="10">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="10"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Espresso</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">4.45</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="11">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="11"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Mocha</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">10.15</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="12">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="12"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="moonffee_shop_bread">
    <div id="moonffee_shop_bread_background" class="d-flex flex-column justify-content-center align-items-center p-5">
        <h1 class="moonffee-font fw-bold display-3 text-center my-3 text-white hidden">Bread</h1>
        <h4 class="moonffee-font text-center mt-3 mb-5 text-white hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit possimus blanditiis beatae fugit eligendi eum doloribus excepturi tempore sunt maxime!</h4>
    </div>
    <div class="container p-5">
        <div class="row row-cols-auto row-cols-md-2 row-cols-lg-4">
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Americano</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">3.25</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="13">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="13"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Café au Lait</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">5.00</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="14">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="14"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Latte</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">7.45</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="15">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="15"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Cappuccino</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">2.85</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="16">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="16"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="moonffee_shop_pastries">
    <div id="moonffee_shop_pastries_background" class="d-flex flex-column justify-content-center align-items-center p-5">
        <h1 class="moonffee-font fw-bold display-3 text-center my-3 text-white hidden">Pastries</h1>
        <h4 class="moonffee-font text-center mt-3 mb-5 text-white hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit possimus blanditiis beatae fugit eligendi eum doloribus excepturi tempore sunt maxime!</h4>
    </div>
    <div class="container p-5">
        <div class="row row-cols-auto row-cols-md-2 row-cols-lg-3">
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Americano</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">3.25</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="17">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="17"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Café au Lait</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">5.00</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="18">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="18"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Latte</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">7.45</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="19">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="19"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Cappuccino</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">2.85</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="20">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="20"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Espresso</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">4.45</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="21">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="21"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Mocha</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">10.15</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="22">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="22"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="moonffee_shop_cakes" class="pt-5">
    <div id="moonffee_shop_cakes_background" class="d-flex flex-column justify-content-center align-items-center p-5">
        <h1 class="moonffee-font fw-bold display-3 text-center my-3 text-white hidden">Cakes</h1>
        <h4 class="moonffee-font text-center mt-3 mb-5 text-white hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit possimus blanditiis beatae fugit eligendi eum doloribus excepturi tempore sunt maxime!</h4>
    </div>
    <div class="container p-5">
        <div class="row row-cols-auto row-cols-md-2 row-cols-lg-4">
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Americano</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">3.25</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="23">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="23"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Café au Lait</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">5.00</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="24">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="24"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Latte</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">7.45</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="25">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="25"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Cappuccino</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">2.85</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="26">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="26"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="moonffee_shop_cookies">
    <div id="moonffee_shop_cookies_background" class="d-flex flex-column justify-content-center align-items-center p-5">
        <h1 class="moonffee-font fw-bold display-3 text-center my-3 text-white hidden">Cookies</h1>
        <h4 class="moonffee-font text-center mt-3 mb-5 text-white hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit possimus blanditiis beatae fugit eligendi eum doloribus excepturi tempore sunt maxime!</h4>
    </div>
    <div class="container p-5">
        <div class="row row-cols-auto row-cols-md-2 row-cols-lg-3">
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Americano</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">3.25</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="27">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="27"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Café au Lait</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">5.00</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="28">Add</button>
                        </div>
                        <div class="item-added-feedback my-2 fw-bold text-success" data-item-id="28"></div>
                    </div>
                </div>
            </div>
            <div class="shop-item col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="shop-item-title card-title moonffee-font fw-bold">Latte</h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€<span class="shop-item-price">7.45</span><span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <button class="btn btn-dark rounded-pill border border-white ms-auto add-to-cart" data-item-id="29">Add</button>
                        </div>
                        <div class="item-added-feedback my-1 fw-bold text-success" data-item-id="29"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<button type="button" class="btn btn-dark btn-floating btn-lg" id="back_to_top_btn">
    <i class="fas fa-arrow-up"></i>
</button>

<?php
include_once 'footer.php';
?>