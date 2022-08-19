<?php require 'views/components/header.php' ?>

    <div class="aboutHeroSection">
        <div class="about h-100 w-100">
        <?php require "views/components/pagesErr.php" ?>
            <div class="container d-flex justify-content-center align-items-center h-100">
                <div class="col-12 text-center p-2">
                    <div class="fw-bold text-warning "> F R E S H &nbsp; A N D &nbsp; O R G A N I C  </div>
                    <h1 class="text-light heroFont my-4">Cart</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="cart py-5">
        <div class="container py-5">
            <?php if(!$carts): ?>
                <div class="alert alert-warning text-center mb-4" role="alert">
                    Your cart is empty!
                </div>
            <?php endif ?>
            <div class="row g-3 d-flex justify-content-center">
                <div class="col-md-8 p-3">
                    <div class="table-responsive">
                        <table class="table table-lg table-borderless">
                            <thead class="table-light">
                                <tr class="border">
                                    <th scope="col" class="text-center py-3"></th>
                                    <th scope="col" class="text-center py-3">Product Img</th>
                                    <th scope="col" class="text-center py-3">Name</th>
                                    <th scope="col" class="text-center py-3">Price</th>
                                    <th scope="col" class="text-center py-3">Quantity</th>
                                    <th scope="col" class="text-center py-3">Total Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $subTotal = 0;
                                    foreach($carts as $cart): 
                                        $subTotal += $cart->price*$cart->count;
                                ?>
                                    <tr>
                                        <td  class="border product-table">
                                            <form action="delete_cart" method="POST">
                                                <input type="hidden" name="id" value="<?= $cart->id ?>">
                                                <button onclick="return confirm ('Are you sure you want to delete?')" 
                                                    type="submit" name="submit" 
                                                    class="text-decoration-none btn btn-sm btn-outline-dark">
                                                    <i class="fa-solid fa-xmark"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td  class="border product-table">
                                            <img class="" width="60" height="" src="/assets/uploads/products/<?= $cart->thumbnail ?>" alt="">
                                        </td>
                                        <td  class="border product-table"><?= $cart->name ?></td>
                                        <td  class="border product-table">$<?= $cart->price ?></td>
                                        <td  class="border product-table">
                                            <form action="update_cart" method="POST">
                                                <div class="input-group input-group-sm">
                                                    <input type="hidden" name="id" value="<?= $cart->id ?>">
                                                    <input type="number" class="form-control mx-auto " name="count" value="<?= $cart->count ?>" style="width: 80px;" placeholder="1">
                                                    <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </form>
                                        </td>
                                        <td  class="border product-table "><?= $cart->price * $cart->count ?></td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>

                

                <div class="col-md-4 p-3">
                    <div class="table-responsive">
                        <table class="table table-lg table-borderless">
                            <thead class="table-light">
                                <tr class="border">
                                    <th scope="col" class=" p-3">Your order Details</th>
                                    <th scope="col" class=" p-3">Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td  class="border  p-3">Subtotal:</td>
                                    <td  class="border  p-3">$<?=$subTotal?></td>
                                </tr>
                                <tr>
                                    <td class="border   p-3">Shipping:</td>
                                    <td class="border  p-3">$30</td>
                                </tr>
                                <tr>
                                    <td class="border fw-bold  p-3">Total:</td>
                                    <td class="border  p-3">$<?=$subTotal+30?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex flex-warp mt-4">
                        <a href="checkout" class="productBtn text-decoration-none text-light">Check Out</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php require 'views/components/footer.php' ?>