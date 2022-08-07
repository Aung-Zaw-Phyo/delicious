<?php require 'views/components/header.php' ?>

    <div class="aboutHeroSection">
        <div class="about h-100 w-100">
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
                                <form action="/checkout" class="py-4 p-3">
                                    <div class="mb-3">
                                        <input type="text" name="name" class="form-control form-control-lg normal-fs" placeholder="Name">
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" name="email" class="form-control form-control-lg normal-fs" placeholder="Email">
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" name="address" class="form-control form-control-lg normal-fs" placeholder="Address">
                                    </div>
                                    <div class="mb-3">
                                        <input type="number" name="phone" class="form-control form-control-lg normal-fs" placeholder="Phone">
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control form-control-lg normal-fs" name="message" placeholder="Say Something" cols="30" rows="5"></textarea>
                                    </div>
                                    <div>
                                        <button type="submit" class="productBtn">Place Order</button>
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
                                <tr>
                                    <td  class="border py-3">Berry</td>
                                    <td  class="border py-3">$230</td>
                                </tr>
                                <tr>
                                    <td class="border py-3">Strawberry</td>
                                    <td class="border py-3">$30</td>
                                </tr>
                                <tr>
                                    <td class="border py-3">Lemon</td>
                                    <td class="border py-3">$23</td>
                                </tr>
                                <tr>
                                    <td class="border py-3">Subtotal</td>
                                    <td class="border py-3">$120</td>
                                </tr>
                                <tr>
                                    <td class="border py-3">Shipping</td>
                                    <td class="border py-3">$20</td>
                                </tr>
                            </tbody>
                            <thead>
                                <tr>
                                    <th class="border py-3">Total</th>
                                    <th class="border py-3">$230</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>    

<?php require 'views/components/footer.php' ?>