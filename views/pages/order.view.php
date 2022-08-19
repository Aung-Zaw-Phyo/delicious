<?php require 'views/components/header.php' ?>

    <div class="aboutHeroSection">
        <div class="about h-100 w-100">
            <div class="container d-flex justify-content-center align-items-center h-100">
                <div class="col-12 text-center p-2">
                    <div class="fw-bold text-warning "> F R E S H &nbsp; A N D &nbsp; O R G A N I C  </div>
                    <h1 class="text-light heroFont my-4">Orders</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="py-5">
        <div class="container py-5">
            <h3 class="text-center">Your Orders</h3>
            <div class="row g-3 mt-4 d-flex justify-content-center align-items-stretch">
                <?php 
                    $products = [];
                    foreach($orders as $order): 
                        $products = explode(',', $order->products);
                ?>
                    <div class="col-md-4 col-lg-3 p-2">
                        <div class="card p-3 h-100 border border-0 shadow">
                            <div class="mb-2">
                                <div class="text-secondary fw-bold">Products</div>
                                <?php foreach($products as $product): ?>
                                    <div> <?= $product ?> </div>
                                <?php endforeach ?>
                            </div>
                            <div class="mb-2">
                                <div class="text-secondary fw-bold">Total Price</div>
                                <div>$<?= $order->total_price ?> + shipping : $30 = $<?= $order->total_price+30 ?></div>
                            </div>
                            <div class="mb-2">
                                <div class="text-secondary fw-bold">Name</div>
                                <div><?= $order->name ?></div>
                            </div>
                            <div class="mb-2">
                                <div class="text-secondary fw-bold">Email</div>
                                <div><?= $order->email ?></div>
                            </div>
                            <div class="mb-2">
                                <div class="text-secondary fw-bold">Address</div>
                                <div><?= $order->address ?></div>
                            </div>
                            <div class="mb-2">
                                <div class="text-secondary fw-bold">Phone number</div>
                                <div><?= $order->phone ?></div>
                            </div>
                            <div class="mb-2">
                                <div class="text-secondary fw-bold">Message</div>
                                <div><?= $order->message ?></div>
                            </div>
                            <div class="text-end mt-2">
                                <?=  date("F j, Y, g:i a", strtotime($order->created_at)) ?> 
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>

<?php require 'views/components/footer.php' ?>