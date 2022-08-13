<?php require 'views/components/header.php' ?>

    <div class="aboutHeroSection">
        <div class="about h-100 w-100">
            <div class="container d-flex justify-content-center align-items-center h-100">
                <div class="col-12 text-center p-2">
                    <div class="fw-bold text-warning "> R E A D &nbsp; T H E &nbsp; D E T A I L S  </div>
                    <h1 class="text-light heroFont my-4">Single Article</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="newsNewsSection py-5">
        <div class="container py-5">
            
            <div class="row d-flex justify-content-center">
                <div class="col-lg-8 p-3">
                    <?php foreach ($news as $new) : ?>
                    <div>
                        <img class="w-100 rounded" src="/assets/uploads/news/<?= $new->thumbnail ?>" alt="">
                        <div class="p-3 py-4">
                            <div class="text-secondary">
                                <span class="me-3"><i class="fa-solid fa-user"></i> Admin</span>
                                <span><i class="fa-solid fa-calendar"></i> 27 December, 2019</span>
                            </div>
                                <div class="fw-bold lh-sm fs-4 my-3 mt-4" ><?= $new->title ?></div>
                                <div class="normal-fs mb-4">
                                    <?= $new->body ?>
                                </div>
                        </div>
                    </div>
                    <?php endforeach ?>

                    <div class="mt-4">
                        <h3 class="fw-bold mb-5">3 Comments</h3>
                        <div class="d-flex mb-4">
                            <div class="me-3">
                                <img width="55" class="rounded-circle" src="/assets/img/avaters/avatar1.png" alt="">
                            </div>
                            <div>
                                <div class="d-flex">
                                    <h5 class="fw-bold me-2">Jenny Joe</h5>
                                    <div class="fw-bold text-secondary">Aprl 26, 2020</div>
                                </div>
                                <div class="mt-2">
                                    Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna, maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus.
                                </div>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="me-3">
                                <img width="55" class="rounded-circle" src="/assets/img/avaters/avatar2.png" alt="">
                            </div>
                            <div>
                                <div class="d-flex">
                                    <h5 class="fw-bold me-2">Jenny Joe</h5>
                                    <div class="fw-bold text-secondary">Aprl 26, 2020</div>
                                </div>
                                <div class="mt-2">
                                    Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna, maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus.
                                </div>
                            </div>
                        </div>
                        <div class="d-flex mb-4">
                            <div class="me-3">
                                <img width="55" class="rounded-circle" src="/assets/img/avaters/avatar3.png" alt="">
                            </div>
                            <div>
                                <div class="d-flex">
                                    <h5 class="fw-bold me-2">Jenny Joe</h5>
                                    <div class="fw-bold text-secondary">Aprl 26, 2020</div>
                                </div>
                                <div class="mt-2">
                                    Nunc risus ex, tempus quis purus ac, tempor consequat ex. Vivamus sem magna, maximus at est id, maximus aliquet nunc. Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus Suspendisse lacinia velit a eros porttitor, in interdum ante faucibus.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="commentFormSection mt-5">
                        <h3 class="fw-bold">Leave a comment</h3>
                        <div class="text-secondary mt-3">If you have a comment dont feel hesitate to send us your opinion.</div>

                        <form action="" class="mt-4">
                            <div class="row mb-3 g-3">
                                <div class="col-lg-6">
                                    <input type="text" name="name" class="form-control form-control-lg" placeholder="Your Name">
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Your Email">
                                </div>
                            </div>
                            <textarea name="message" class="form-control form-control-lg mb-3" cols="30" rows="5" placeholder="Your Message"></textarea>
                            <button class="productBtn" type="submit">Submit</button>
                        </form>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>

<?php require 'views/components/footer.php' ?>