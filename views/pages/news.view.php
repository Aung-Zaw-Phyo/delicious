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
                <?php foreach ($news as $new): ?>
                <div class="col-md-6 col-lg-4 p-3">
                    <div class="card news-card border border-0">
                        <img src="/assets/uploads/news/<?= $new->thumbnail ?>" alt="">
                        <div class="p-3 py-4">
                            <div class="fw-bold lh-sm fs-4" ><?= $new->title ?></div>
                            <div class="text-secondary my-3">
                                <span class="me-3"><i class="fa-solid fa-user me-2"></i> Admin</span>
                                <span><i class="fa-solid fa-calendar me-2"></i>  <?=  date("F j, Y", strtotime($new->created_at)) ?> </span>
                            </div>
                            <div class="normal-fs mb-4">
                                <?= substr($new->body, 0, 50) ?>
                            </div>
                            <a href="single_news?id=<?= $new->id ?>" class="text-decoration-none fw-bold read-more"> read more <i class="fa-solid fa-chevron-right" style="font-size:small;"></i></a>
                        </div>
                    </div>
                </div>
                <?php endforeach ?>
            </div>

            <?php if($counts > 8): ?>
                <div class="mt-5 d-flex justify-content-center">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <?php
                                $t = 0;
                                for($i=0; $i<$counts; $i+=6): 
                                    $t ++;
                            ?>
                                <li class="page-item <?= $t==$page?'active':'' ?>">
                                    <a class="page-link" href="news?page=<?= $t?>"> <?= $t?> </a>
                                </li>
                            <?php endfor ?>
                        </ul>
                    </nav>
                </div>
            <?php endif ?>
        </div>
    </div>

<?php require 'views/components/footer.php' ?>