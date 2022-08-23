<?php require 'views/components/header.php' ?>

    <div class="aboutHeroSection">
        <div class="about h-100 w-100">
        <?php require "views/components/pagesErr.php" ?>
            <div class="container d-flex justify-content-center align-items-center h-100">
                <div class="col-12 text-center p-2">
                    <div class="fw-bold text-warning "> F R E S H &nbsp; A N D &nbsp; O R G A N I C  </div>
                    <h1 class="text-light heroFont my-4">Check Out Product</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container py-5">
            <?php if(!$carts): ?>
                <div class="alert alert-warning text-center mb-4" role="alert">
                    Your cart is empty! You need to go shopping first! <a href="product">shop</a>
                </div>
            <?php endif ?>
            <div class="row g-3 d-flex justify-content-between">
                <div class="col-md-8 p-2">

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class="fa-solid fa-check-double normal-color me-3"></i> <span class="fw-bold">Billing Address</span>
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form action="post_order" method="POST" class="py-4 p-3">
                                    <div class="mb-3">
                                        <input type="text" name="name" class="form-control form-control-lg normal-fs" placeholder="Name" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" name="email" class="form-control form-control-lg normal-fs" placeholder="Email" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="address" class="form-control form-control-lg normal-fs" placeholder="Address" required>
                                    </div>
                                    <div class="mb-3">
                                        <input type="number" name="phone" class="form-control form-control-lg normal-fs" placeholder="Phone" required>
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control form-control-lg normal-fs" name="message" placeholder="Say Something" cols="30" rows="5" required></textarea>
                                    </div>
                                    <div>
                                        <?php if($carts){ ?>
                                            <button type="submit" name="submit" class="productBtn">Place Order</button>
                                        <?php }else { ?>
                                            <button type="submit" name="submit" class="productBtn" disabled>Place Order</button>
                                        <?php } ?>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class="fa-solid fa-check-double normal-color me-3"></i> <span class="fw-bold">Shipping Address</span>
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Your shipping address form is here.
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class="fa-solid fa-check-double normal-color me-3"></i> <span class="fw-bold">Card Details</span>
                            </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                Your card details goes here.
                            </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-4 col-lg-3 p-3">
                    <div class="table-responsive">
                        <table class="table table-lg table-borderless">
                            <thead class="table-light">
                                <tr class="border">
                                    <th scope="col" class=" py-3">Your order Details</th>
                                    <th scope="col" class=" py-3">Price</th>
                                </tr>
                            </thead>
                            <thead class="">
                                <tr>
                                    <th scope="col"  class="border py-3">Product</th>
                                    <th scope="col" class="border py-3">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $subTotal = 0;
                                foreach($carts as $cart):
                                    $subTotal += $cart->count*$cart->price;
                                ?>
                                    <tr>
                                        <td  class="border py-3"><?= $cart->name ?></td>
                                        <td  class="border py-3">$<?= $cart->count*$cart->price ?></td>
                                    </tr>
                                <?php endforeach?>
                                <tr>
                                    <td  class="border py-3">Shipping</td>
                                    <td  class="border py-3">$30</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th class="border py-3">Total</th>
                                    <th class="border py-3">$<?= $subTotal+30 ?></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    

<?php require 'views/components/footer.php' ?>