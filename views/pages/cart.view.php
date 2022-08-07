<?php require 'views/components/header.php' ?>

    <div class="aboutHeroSection">
        <div class="about h-100 w-100">
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
                                <tr>
                                    <td  class="border product-table">
                                        <a href="" class="text-decoration-none btn btn-sm btn-outline-dark"><i class="fa-solid fa-xmark"></i></a>
                                    </td>
                                    <td  class="border product-table">
                                        <img class="" width="60" height="" src="/assets/img/products/product-img-1.jpg" alt="">
                                    </td>
                                    <td  class="border product-table">Strawberry</td>
                                    <td  class="border product-table">$18</td>
                                    <td  class="border product-table">
                                        <input type="number" class="form-control mx-auto " value="1" style="width: 80px;" placeholder="1">
                                    </td>
                                    <td  class="border product-table ">$18</td>
                                </tr>
                                <tr>
                                    <td  class="border product-table">
                                        <a href="" class="text-decoration-none btn btn-sm btn-outline-dark"><i class="fa-solid fa-xmark"></i></a>
                                    </td>
                                    <td  class="border product-table">
                                        <img class="" width="60" height="" src="/assets/img/products/product-img-2.jpg" alt="">
                                    </td>
                                    <td  class="border product-table">Strawberry</td>
                                    <td  class="border product-table">$19</td>
                                    <td  class="border product-table">
                                        <input type="number" class="form-control mx-auto " value="1" style="width: 80px;" placeholder="1">
                                    </td>
                                    <td  class="border product-table ">$19</td>
                                </tr>
                                <tr>
                                    <td  class="border product-table">
                                        <a href="" class="text-decoration-none btn btn-sm btn-outline-dark"><i class="fa-solid fa-xmark"></i></a>
                                    </td>
                                    <td  class="border product-table">
                                        <img class="" width="60" height="" src="/assets/img/products/product-img-3.jpg" alt="">
                                    </td>
                                    <td  class="border product-table">Strawberry</td>
                                    <td  class="border product-table">$13</td>
                                    <td  class="border product-table">
                                        <input type="number" class="form-control mx-auto " value="1" style="width: 80px;" placeholder="1">
                                    </td>
                                    <td  class="border product-table ">$13</td>
                                </tr>
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
                                    <td  class="border  p-3">$230</td>
                                </tr>
                                <tr>
                                    <td class="border   p-3">Shipping:</td>
                                    <td class="border  p-3">$30</td>
                                </tr>
                                <tr>
                                    <td class="border fw-bold  p-3">Total:</td>
                                    <td class="border  p-3">$30</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="d-flex flex-warp mt-4">
                        <button class="productBtn me-4">Update Cart</button>
                        <button class="productBtn">Check Out</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php require 'views/components/footer.php' ?>