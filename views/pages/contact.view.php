<?php require 'views/components/header.php' ?>

    <div class="aboutHeroSection">
        <div class="about h-100 w-100">
        <?php require "views/components/pagesErr.php" ?>
            <div class="container d-flex justify-content-center align-items-center h-100">
                <div class="col-12 text-center p-2">
                    <div class="fw-bold text-warning "> G E T &nbsp; 2 4 / 7 &nbsp; S U P P O R T  </div>
                    <h1 class="text-light heroFont my-4">Contact us</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="contactQuestionsection py-5">
        <div class="container py-5">
            <div class="row g-3">
                <div class="col-md-8 p-2">
                   <h3 class="fw-bold mb-3">Have you any question?</h3> 
                   <div>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum autem totam suscipit in ducimus dolore incidunt consequuntur sapiente eveniet asperiores!
                   </div>
                    <form action="message" method="POST" class="mt-4">
                        <div class="g-3 d-flex flex-wrap">
                            <div class="col-12 col-lg-6 mb- py-2 pe-2">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                            </div>
                            <div class="col-12 col-lg-6 mb- py-2 pe-2">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required>
                            </div>
                            <div class="col-12 col-lg-6 mb- py-2 pe-2">
                                <input type="number" name="phone" class="form-control" id="phone" placeholder="Your Phone" required>
                            </div>
                            <div class="col-12 col-lg-6 mb- py-2 pe-2">
                                <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="col-12 py-2 pe-2">
                                <textarea class="form-control" name="message" placeholder="Message" cols="30" rows="5" required></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary mt-2">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="card border border-0 shadow-sm p-3">
                        <div class="d-flex ">
                            <div class="me-3"><i class="fa-solid fa-map normal-color fs-4"></i></div>
                            <div>
                                <h4 class="fw-bold"> Shop Address</h4>
                                <div class="mt-3 normal-fs text-secondary"> 34/8, East Hukupara <br> Gifirtok, Sadan. <br> Country Name </div>
                            </div>
                        </div>
                        <div class="d-flex my-4">
                            <div class="me-3"><i class="fa-solid fa-clock  normal-color fs-4"></i></div>
                            <div>
                                <h4 class="fw-bold"> Shop Address</h4>
                                <div class="mt-3 normal-fs text-secondary"> MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </div>
                            </div>
                        </div>
                        <div class="d-flex ">
                            <div class="me-3"><i class="fa-solid fa-address-book normal-color fs-4"></i></div>
                            <div>
                                <h4 class="fw-bold"> Shop Address</h4>
                                <div class="mt-3 normal-fs text-secondary"> Phone: +00 111 222 3333 <br> Email: support@fruitkha.com </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php require 'views/components/footer.php' ?>