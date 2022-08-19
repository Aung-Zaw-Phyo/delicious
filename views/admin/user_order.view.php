<?php require 'views/components/adminHeader.php' ?>

    <div class="p-2 w-100">
        <div class="p-3 pb-5 w-100" style="background-color: white;">
        <?php take('views/components/err.php') ?>
        <h3 class="text-center"> Orders </h3>
            <div class="row g-3 mt-5 d-flex align-items-stretch">
                <?php if(count($orders) > 0): ?>
                    <div class="fs-4 mb-3">Order list that <b><?=$user[0]->name?></b> had ordered!</div>
                <?php endif ?>

                <?php 
                $products = [];
                foreach($orders as $order): 
                    $products = explode(',', $order->products);
                ?>
                    <div class="col-md-6 col-lg-4 p-2">
                        <div class="card h-100 shadow p-2 position-relative">
                            <div class="mb-2">
                                <div class="fw-bold text-secondary">Name</div>
                                <?= $order->name ?><?= $order->id ?>
                            </div>
                            <div class="mb-2">
                                <div class="fw-bold text-secondary">Email</div>
                                <?= $order->email ?>
                            </div>
                            <div class="mb-2">
                                <div class="fw-bold text-secondary">Phone number</div>
                                <?= $order->phone ?>
                            </div>
                            <div class="mb-2">
                                <div class="fw-bold text-secondary">Address</div>
                                <?= $order->address ?>
                            </div>
                            <div class="mb-2">
                                <div class="fw-bold text-secondary">Message</div>
                                <?= $order->message ?>
                            </div>
                            <div class="mb-2">
                                <div class="fw-bold text-secondary">Products</div>
                                <?php foreach($products as $product): ?>
                                    <div> <?= $product ?> </div>
                                <?php endforeach ?>
                            </div>
                            <div class="mb-2">
                                <div class="fw-bold text-secondary">Products Price : $<?= $order->total_price ?></div>
                                
                            </div>
                            <div class="mb-2">
                                <div class="fw-bold text-secondary">Shipping : $30</div>
                                
                            </div>
                            <div class="mb-2">
                                <div class="fw-bold text-secondary">Total Price : $<?= $order->total_price+30 ?></div>
                                
                            </div>
                            <div class="mb-2 mt-1 text-end">
                                <div class="fw-bold text-secondary"><?=  date("M j, Y, g:i a", strtotime($order->created_at)) ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>       

        </div>
    </div>
    

<?php require 'views/components/adminFooter.php'; ?>

                        