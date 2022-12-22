<?php
include_once 'head.php';
include_once 'header.php';
?>
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div class="container">
        <div class="hero-box text-center text-white hidden">
            <h1 class="moonffee-font fw-bold display-1">Moonffee</h1>
            <h3 class="moonffee-font fw-bold">Coffee shop</h3>
            <hr>
            <p class="fw-bold fs-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque officia, laudantium quidem exercitationem nemo quod in assumenda harum ea debitis? Dolores, quidem autem corrupti maiores iusto recusandae voluptate.</p>
            <a href="#read-more-landing" class="btn btn-dark rounded-pill border border-white fw-bold p-3 px-4 my-3 mt-3" role="button">SCROLL DOWN TO READ MORE ABOUT US</a>
            <div>
                <i class="fa-solid fa-chevron-down fa-5x fa-beat-fade" style="--fa-beat-fade-opacity: 0.67; --fa-beat-fade-scale: 1.075;"></i>
            </div>
        </div>
    </div>
</section>

<section id="moonffee_short_about">
    <div class="container p-5">
        <div class="text-center">
            <h1 class="moonffee-font fw-bold display-3 hidden">The family-owned coffee shop</h1>
            <p class="text-secondary fs-5 my-4 v hidden"><i>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Cupiditate velit ipsum, illum quod maiores minima numquam alias quo natus quia voluptates voluptatum omnis non perspiciatis sint delectus iure officia impedit ipsa architecto repellendus eaque consequuntur quaerat. Fugit iusto ratione eligendi?</i></p>
            <a href="#" class="btn btn-dark rounded-pill border border-white fw-bold p-3 px-4 my-3 mt-3" role="button">OUR VALUES</a>
        </div>
    </div>
</section>

<section id="moonffee_coffee_categories">
    <div class="container p-5">
        <div class="row row-cols-auto row-cols-md-2">
            <div class="col hidden">
                <div class="moonffee_shop_items text-white m-3 p-4">
                    <img src="assets/bread_icon.webp" alt="Bread icon">
                    <h3 class="moonffee-font fw-bold mt-3">Bread</h3>
                    <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, laborum.</p>
                    <a href="/shop.php#moonffee_shop_bread" class="moonffee-font text-white fs-5">Learn more</a>
                </div>
            </div>
            <div class="col hidden">
                <div class="moonffee_shop_items text-white m-3 p-4">
                    <img src="assets/pastries_icon.webp" alt="Pastries icon">
                    <h3 class="moonffee-font fw-bold mt-3">Pastries</h3>
                    <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, laborum.</p>
                    <a href="/shop.php#moonffee_shop_pastries" class="moonffee-font text-white fs-5">Learn more</a>
                </div>
            </div>
            <div class="col hidden">
                <div class="moonffee_shop_items text-white m-3 p-4">
                    <img src="assets/cake_icon.webp" alt="Cake icon">
                    <h3 class="moonffee-font fw-bold mt-3">Cakes</h3>
                    <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, laborum.</p>
                    <a href="/shop.php#moonffee_shop_cakes" class="moonffee-font text-white fs-5">Learn more</a>
                </div>
            </div>
            <div class="col hidden">
                <div class="moonffee_shop_items text-white m-3 p-4">
                    <img src="assets/cookie_icon.webp" alt="Cookie icon">
                    <h3 class="moonffee-font fw-bold mt-3 ">Cookies</h3>
                    <p class="my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, laborum.</p>
                    <a href="/shop.php#moonffee_shop_cookies" class="moonffee-font text-white fs-5">Learn more</a>
                </div>
            </div>
        </div>
</section>

<section id="moonffee_coffee_types">
    <div class="container p-5">
        <h1 class="moonffee-font fw-bold display-3 text-center my-3 hidden">Our Special Home Made Offers</h1>
        <h4 class="moonffee-font text-center mt-3 mb-5 hidden">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit possimus blanditiis beatae fugit eligendi eum doloribus excepturi tempore sunt maxime!</h4>
        <div class="row row-cols-auto row-cols-md-2 row-cols-lg-3">
            <div class="col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="card-title moonffee-font fw-bold"><u>Americano</u></h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€3.25<span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <a href="/shop.php" class="btn btn-dark rounded-pill border border-white ms-auto">Order</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="card-title moonffee-font fw-bold"><u>Café au Lait</u></h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€5.00<span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <a href="/shop.php" class="btn btn-dark rounded-pill border border-white ms-auto">Order</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="card-title moonffee-font fw-bold"><u>Latte</u></h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€7.45<span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <a href="/shop.php" class="btn btn-dark rounded-pill border border-white ms-auto">Order</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="card-title moonffee-font fw-bold"><u>Cappuccino</u></h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€2.85<span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <a href="/shop.php" class="btn btn-dark rounded-pill border border-white ms-auto">Order</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="card-title moonffee-font fw-bold"><u>Espresso</u></h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€4.45<span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <a href="/shop.php" class="btn btn-dark rounded-pill border border-white ms-auto">Order</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col hidden">
                <div class="card m-3">
                    <img src="assets/coffee_card_example_small.webp" class="card-img-top" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(min-width: 1400px) 358px, (min-width: 1200px) 298px, (min-width: 1000px) 238px, (min-width: 780px) 266px, (min-width: 580px) 410px, calc(100vw - 130px)">
                    <div class="card-body">
                        <h4 class="card-title moonffee-font fw-bold"><u>Mocha</u></h4>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                        <hr>
                        <div class="d-flex align-items-center">
                            <h5 class="moonffee-font fw-bold align-items-center">€10.15<span class="text-secondary ms-1 fs-6"> per cup</span></h5>
                            <a href="/shop.php" class="btn btn-dark rounded-pill border border-white ms-auto">Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="moonffee_coffee_filler" class="d-flex align-items-center text-center">
    <div class="container p-5">
        <div class="d-flex flex-column text-white hidden">
            <h1 class="moonffee-font fw-bold display-3 hidden">Lorem Ipsum</h1>
            <h4 class="my-5"><i>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur quibusdam nam quidem qui ipsam laudantium totam accusamus laboriosam sit dignissimos.</i></h4>
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 hidden">
                <div class="col">
                    <a href="shop.php" class="btn btn-dark rounded-pill border border-white fw-bold p-3 px-4 my-3">COFFEES</a>
                </div>
                <div class="col">
                    <a href="shop.php" class="btn btn-dark rounded-pill border border-white fw-bold p-3 px-4 my-3">BAKERY</a>
                </div>
                <div class="col">
                    <a href="shop.php" class="btn btn-dark rounded-pill border border-white fw-bold p-3 px-4 my-3">CAFE</a>
                </div>
                <div class="col">
                    <a href="shop.php" class="btn btn-dark rounded-pill border border-white fw-bold p-3 px-4 my-3">CATERING</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="moonffee_story_about">
    <div class="container p-5">
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col d-flex flex-column my-5 hidden">
                <img src="assets/coffee_with_heart_drawn_foam_small.webp" alt="Coffee with heart drawn foam" 
                     srcset="assets/coffee_with_heart_drawn_foam_large.webp 1200w,
                             assets/coffee_with_heart_drawn_foam_medium.webp 700w,
                             assets/coffee_with_heart_drawn_foam_small.webp 340w"
                     sizes="(min-width: 1400px) 590px, (min-width: 1200px) 500px, (min-width: 1000px) 410px, (min-width: 780px) 614px, (min-width: 580px) 434px, calc(100vw - 106px)">
                <div class="mt-4 ps-1 text-center text-md-start">
                    <h3 class="moonffee-font fw-bold">Our Story</h3>
                    <p><i>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta, molestiae. Id rerum fugiat ab veritatis sunt vitae assumenda libero harum! Tenetur ullam fugit dolore neque impedit? Explicabo inventore facere, fugit provident ea voluptate distinctio error id tempore dicta ullam et.</i></p>
                    <a href="#" class="btn btn-dark rounded-pill border border-white fw-bold p-2 px-4">Learn more</a>
                </div>
            </div>
            <div class="col d-flex flex-column my-5 hidden">
                <img src="assets/coffee_with_heart_drawn_foam_small.webp" alt="Coffee with heart drawn foam" 
                     srcset="assets/coffee_with_heart_drawn_foam_large.webp 1200w,
                             assets/coffee_with_heart_drawn_foam_medium.webp 700w,
                             assets/coffee_with_heart_drawn_foam_small.webp 340w"
                     sizes="(min-width: 1400px) 590px, (min-width: 1200px) 500px, (min-width: 1000px) 410px, (min-width: 780px) 614px, (min-width: 580px) 434px, calc(100vw - 106px)">
                <div class="ps-1 mt-4 text-center text-md-start">
                    <h3 class="moonffee-font fw-bold">Our Coffee</h3>
                    <p><i>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Soluta, molestiae. Id rerum fugiat ab veritatis sunt vitae assumenda libero harum! Tenetur ullam fugit dolore neque impedit? Explicabo inventore facere, fugit provident ea voluptate distinctio error id tempore dicta ullam et.</i></p>
                    <a href="#" class="btn btn-dark rounded-pill border border-white fw-bold p-2 px-4">Learn more</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="moonffee_coffee_gallery">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4">
        <div class="col hidden">
            <img src="assets/coffee_machine_bar_small.webp" alt="Coffee machine making coffee" srcset="assets/coffee_machine_bar_large.webp 1200w, assets/coffee_machine_bar_medium.webp 700w, assets/coffee_machine_bar_small.webp 340w" sizes="(max-width: 580px) 426px, 90vw">
        </div>
        <div class="col hidden">
            <img src="assets/close_up_hands_making_coffee_small.webp" alt="Close up hands making coffee" srcset="assets/close_up_hands_making_coffee_large.webp 1200w, assets/close_up_hands_making_coffee_medium.webp 700w, assets/close_up_hands_making_coffee_small.webp 340w" sizes="(max-width: 580px) 426px, 90vw">
        </div>
        <div class="col hidden">
            <img src="assets/coffee_card_example_small.webp" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_large.webp 1200w, assets/coffee_card_example_medium.webp 700w, assets/coffee_card_example_small.webp 340w" sizes="(max-width: 580px) 426px, 90vw">
        </div>
        <div class="col hidden">
            <img src="assets/coffee_card_example_2_small.webp" alt="Coffee beans with coffee cup on the table" srcset="assets/coffee_card_example_2_large.webp 1200w, assets/coffee_card_example_2_medium.webp 700w, assets/coffee_card_example_2_small.webp 340w" sizes="(max-width: 580px) 426px, 90vw)">
        </div>
    </div>
</section>

<section id="moonffee_storing_about">
    <div class="container p-5">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="text-center">
                <h1 class="moonffee-font fw-bold display-3 mb-4 hidden">Keeping & Storing</h1>
                <p class="mx-5 pb-4 hidden"><i>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quidem maiores earum corporis omnis. Fuga consequatur eos facilis deserunt quo quia voluptas. Cumque amet, inventore error quae et harum illum adipisci laboriosam, dolor pariatur debitis alias sunt! Aperiam nemo animi quia dolorum totam accusantium doloribus aliquam expedita. Explicabo natus voluptatum nemo veniam saepe reprehenderit, qui, consectetur illo enim illum ducimus consequuntur.</i></p>
            </div>
            <img src="assets/coffee_beans_in_a_bag_small.webp" class="hidden" alt="Open bag of coffee beans" srcset="assets/coffee_beans_in_a_bag_large.webp 1200w, assets/coffee_beans_in_a_bag_medium.webp 700w, assets/coffee_beans_in_a_bag_small.webp 340w" sizes="(min-width: 1200px) 578px, (min-width: 780px) 547px, (min-width: 620px) 434px, calc(80vw - 46px)">
        </div>
    </div>
</section>

<section id="moonffee_shop_info" class="d-flex justify-content-center align-items-center">
    <div class="container p-5">
        <div class="d-flex flex-column flex-md-row text-white justify-content-center align-items-center">
            <div class="moonffee-work-time text-center fw-bold p-5 fs-5 hidden">
                <h1 class="moonffee-font disaply-3">Hours & Location</h1>
                <p class="my-3">350 5th Ave, New York, NY 10118</p>
                <a href="tel:1 212-736-3100" class="text-white">1 212-736-3100</a>
                <p class="mt-3 mb-1"><i>Monday - Friday</i></p>
                <p><i>7:00am - 8:00pm</i></p>
            </div>
            <div class="moonffee-services text-left fw-bold p-5 ps-3 hidden">
                <ul class="list-group">
                    <li class="list-item">In-store Dining</li>
                    <li class="list-item">Outdoor Dining</li>
                    <li class="list-item">Open Seating</li>
                    <li class="list-item">Take Out Free Wifi</li>
                    <li class="list-item">Delivery</li>
                    <li class="list-item">ADA-Accessible</li>
                </ul>
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