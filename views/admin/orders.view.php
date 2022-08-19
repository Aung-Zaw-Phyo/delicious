<?php require 'views/components/adminHeader.php' ?>

    <div class="p-2 w-100">
        <div class="p-3 pb-5 w-100" style="background-color: white;">
        <?php take('views/components/err.php') ?>
        <h3 class="text-center"> Orders </h3>
            <div class="row g-3 mt-5 d-flex align-items-stretch">
                <?php 
                $products = [];
                foreach($orders as $order): 
                    $products = explode(',', $order->products);
                ?>
                    <div class="col-md-6 col-lg-4 p-2">
                        <div class="card h-100 shadow p-2 position-relative">
                            <div class="position-absolute top-0 end-0">
                                <form action="order_complete" method="POST">
                                    <input type="hidden" name="id" value="<?= $order->id ?>">
                                    <button class="btn btn-sm btn-outline-primary m-2" type="submit" name="submit">Complete</button>
                                </form>
                            </div>
                            <div class="mb-2">
                                <div class="fw-bold text-secondary">Username</div>
                                <?= $order->username ?>
                            </div>
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

            <?php if($counts > 6): ?>
                <div class="mt-5 d-flex justify-content-center">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <?php
                                $t = 0;
                                for($i=0; $i<$counts; $i+=6): 
                                    $t ++;
                            ?>
                                <li class="page-item <?= $t==$page?'active':'' ?>">
                                    <a class="page-link" href="admin_orders?page=<?= $t?>"> <?= $t?> </a>
                                </li>
                            <?php endfor ?>
                        </ul>
                    </nav>
                </div>
            <?php endif ?>
        </div>
    </div>
    

<?php require 'views/components/adminFooter.php'; ?>

                        