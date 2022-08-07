<?php require 'views/components/header.php' ?>

    <div class="aboutHeroSection">
        <div class="about h-100 w-100">
            <div class="container d-flex justify-content-center align-items-center h-100">
                <div class="col-12 text-center p-2">
                    <div class="fw-bold text-warning "> F R E S H &nbsp; A N D &nbsp; O R G A N I C  </div>
                    <h1 class="text-light heroFont my-4">Shop </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="productProductSection py-5">
        <div class="container py-5">
            <h1 class="text-center fw-bold"> <span class="normal-color">Our</span> Products </h1>
            <div class="head_underline"></div>
            <div class="col-lg-8 px-3 mx-auto normal-fs text-center mt-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam libero odio labore repellat odit et sapiente accusantium ea nam illum?
            </div>
            <div class="mt-5 d-flex justify-content-center flex-wrap">
                <a href="#" class="btn btn-outline-dark normal-fs fw-bold fst-italic m-3">All</a>
                <a href="#" class="btn btn-outline-dark normal-fs fw-bold fst-italic m-3">Strawberry</a>
                <a href="#" class="btn btn-outline-dark normal-fs fw-bold fst-italic m-3">Berry</a>
                <a href="#" class="btn btn-outline-dark normal-fs fw-bold fst-italic m-3">Lemon</a>
            </div>
            <div class="row g-3 mt-5">
                <?php foreach([1,2,3,4,5,6,7,8] as $one) :?>
                <div class="col-sm-6 col-lg-3 p-3">
                    <div class="productCard card border border-0 text-center">
                        <img class="p-2" src="assets/img/products/product-img-1.jpg" alt="">
                        <div class="pb-5">
                            <div class="normal-bold fs-5">Strawberry</div>
                            <div class="mt-2">Per Kg</div>
                            <div class="normal-bold fs-3">85$</div>
                            <button class="productBtn mt-3">
                                <i class="fa-solid fa-cart-shopping"></i>
                                Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>

            <div class="mt-5 d-flex justify-content-center">
                <nav aria-label="...">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>

<?php require 'views/components/footer.php' ?>