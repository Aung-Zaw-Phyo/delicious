<?php require 'views/components/header.php' ?>

    <div class="aboutHeroSection">
        <div class="about h-100 w-100">
        <?php require "views/components/pagesErr.php" ?>
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
                <a href="product" class="btn btn-outline-dark normal-fs fw-bold fst-italic m-3">All</a>
                <?php foreach($categories as $category): ?>
                    <?php if (isset($_GET['category'])) { ?>
                        <?php if ($_GET['category'] == $category->name) { ?>
                            <a href="product?category=<?= $category->name ?>" class="active btn btn-outline-dark normal-fs fw-bold fst-italic m-3"><?= $category->name ?></a>
                        <?php }else { ?>
                            <a href="product?category=<?= $category->name ?>" class="btn btn-outline-dark normal-fs fw-bold fst-italic m-3"><?= $category->name ?></a>
                        <?php } ?>
                    <?php }else { ?>
                        <a href="product?category=<?= $category->name ?>" class="btn btn-outline-dark normal-fs fw-bold fst-italic m-3"><?= $category->name ?></a>
                    <?php } ?>
                <?php endforeach ?>
            </div>
            <div class="row g-3 mt-5">
                <?php foreach($products as $product) :?>
                    <div class="col-sm-6 col-lg-3 p-4">
                    <div class="productCard card border border-0 text-center">
                        <img class="p-2" src="/assets/uploads/products/<?= $product->thumbnail ?>" alt="">
                        <div class="pb-5">
                            <div class="normal-bold fs-5"><?= $product->name ?></div>
                            <div class="mt-2">Per Kg</div>
                            <div class="normal-bold fs-3"><?= $product->price ?>$</div>
                            <form action="post_cart" method="POST">
                                <input type="hidden" name="id" value="<?= $product->id ?>">
                                <button type="submit" name="submit" class="productBtn mt-3">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                    Add to Cart
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>
            <?php if($counts > 8): ?>
                <div class="mt-5 d-flex justify-content-center">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <?php
                                $t = 0;
                                for($i=0; $i<$counts; $i+=8): 
                                    $t ++;
                            ?>
                                <li class="page-item <?= $t==$page?'active':'' ?>">
                                    <a class="page-link" href="product?<?= isset($_GET['category'])?'category='.$_GET['category'].'&':'' ?>page=<?= $t?>"> <?= $t?> </a>
                                </li>
                            <?php endfor ?>
                        </ul>
                    </nav>
                </div>
            <?php endif ?>

        </div>
    </div>

<?php require 'views/components/footer.php' ?>