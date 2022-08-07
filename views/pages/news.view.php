<?php require 'views/components/header.php' ?>

    <div class="aboutHeroSection">
        <div class="about h-100 w-100">
            <div class="container d-flex justify-content-center align-items-center h-100">
                <div class="col-12 text-center p-2">
                    <div class="fw-bold text-warning "> O R G A N I C &nbsp;  I N F O R M A T I O N  </div>
                    <h1 class="text-light heroFont my-4">News Artical</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="newsNewsSection py-5">
        <div class="container py-5">
            <h1 class="text-center fw-bold"> <span class="normal-color">Our</span> News </h1>
            <div class="head_underline"></div> 
            <div class="col-lg-8 px-3 mx-auto normal-fs text-center mt-4">
                Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam libero odio labore repellat odit et sapiente accusantium ea nam illum?
            </div>

            <div class="row g-3 mt-5">
                <?php foreach ([1,2,3,4,5,6] as $one): ?>
                <div class="col-md-6 col-lg-4 p-3">
                    <div class="card news-card border border-0">
                        <img src="/assets/img/latest-news/news-bg-1.jpg" alt="">
                        <div class="p-3 py-4">
                            <div class="fw-bold lh-sm fs-4" >You will vainly look for fruit on it in autumn.</div>
                            <div class="text-secondary my-3">
                                <span class="me-3"><i class="fa-solid fa-user"></i> Admin</span>
                                <span><i class="fa-solid fa-calendar"></i> 27 December, 2019</span>
                            </div>
                            <div class="normal-fs mb-4">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perferendis tenetur odit illo aperiam sit laborum placeat dicta quis deleniti recusandae.
                            </div>
                            <a href="" class="text-decoration-none fw-bold read-more"> read more <i class="fa-solid fa-chevron-right" style="font-size:small;"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>

            <div class="mt-5 d-flex justify-content-center">
                <nav aria-label="..." >
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

<?php require 'views/components/footer.php' ?>