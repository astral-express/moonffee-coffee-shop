<?php
include_once 'header.php';
?>
<!-- <section>
        <?php
        if (isset($_SESSION["useruid"])) {
            echo "<p>Hello there " . $_SESSION["useruid"] . "</p>";
        }
        ?>
    </section> -->
<section id="hero" class="d-flex justify-content-center align-items-center">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-container">
                    <h2>Welcome to <span>Moonffee</span></h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima ut nostrum corrupti incidunt. Voluptatem quo molestias explicabo ipsa architecto velit culpa excepturi facere. Tempore veritatis, dolor magnam ea minus incidunt vitae! Architecto officia quidem consequatur sunt nemo. Aliquam omnis eius earum mollitia cum odit voluptatibus impedit explicabo perspiciatis libero sit similique quidem, sunt officiis veritatis consectetur aspernatur laboriosam est recusandae. Expedita, doloremque repellendus eum exercitationem veritatis facere. Repellendus quisquam, laudantium voluptatum fugit tempora officia quae! Dolore placeat ad odit, soluta ipsum quos iusto praesentium qui expedita cumque optio repudiandae accusantium voluptatum nobis, fugiat cupiditate nesciunt magnam possimus laudantium culpa labore!</p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-container">
                    <h1>Want to try our special <span>Moonffee?</span></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae hic at iure dolorum vel non. Id vel aperiam hic natus amet molestias ea nihil expedita laudantium reiciendis in dignissimos recusandae vero reprehenderit veniam voluptatum error laboriosam accusantium fuga eligendi maiores, officia, quod labore magnam. Aspernatur tempora est quam minima nam.</p>
                    <a class="btn btn-primary">Check out Moonffee</a>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-container">
                    <h1>About us and what's our goal</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis commodi repudiandae sequi sunt eius voluptate qui quod voluptatum voluptas beatae? Quasi ut rerum nihil eius accusamus repellendus a quas nisi magnam nam aliquid neque minima explicabo doloremque architecto, excepturi vero! Optio incidunt saepe, odit quas tenetur exercitationem, nobis autem explicabo culpa quisquam aut consectetur praesentium fuga et illum. Impedit perspiciatis sit fuga natus voluptates recusandae numquam sequi fugiat earum minima, quod perferendis magnam quasi rerum vel error dolorum praesentium? Obcaecati?</p>
                    <a class="btn btn-primary">Read more about us</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
<main id="main">

</main>
<?php
include_once 'footer.php';
?>