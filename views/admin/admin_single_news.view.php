<?php require 'views/components/adminHeader.php' ?>

    <div class="p-2 w-100">
        <div class="p-3 pb-5 w-100" style="background-color: white;">
            <div class="row">
                <div class="col-12">
                    
                    <div class="newsNewsSection py-5">
                        <div class="container">
            
                            <div class="row d-flex justify-content-center">
                                <div class="col-12 col-lg-10 p-1">
                                    <div>
                                        <img class="w-100 rounded" src="/assets/uploads/news/<?= $news->thumbnail ?>" alt="">
                                        <div class="p-3 py-4">
                                            <div class="text-secondary">
                                                <span class="me-3"><i class="fa-solid fa-user"></i> Admin</span>
                                                <span><i class="fa-solid fa-calendar"></i> 27 December, 2019</span>
                                            </div>
                                                <div class="fw-bold lh-sm fs-4 my-3 mt-4" ><?= $news->title ?></div>
                                                <div class="normal-fs mb-4">
                                                    <?= $news->body ?>
                                                </div>
                                        </div>
                                    </div>

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
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
           
    

<?php require 'views/components/adminFooter.php'; ?>

                        
