<?php require 'views/components/header.php' ?>

    <div class="aboutHeroSection">
        <div class="about h-100 w-100">
        <?php require "views/components/pagesErr.php" ?>
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
                            <span class="me-3"><i class="fa-solid fa-user me-2"></i> Admin</span>
                                <span><i class="fa-solid fa-calendar me-2"></i>  <?=  date("F j, Y", strtotime($new->created_at)) ?> </span>
                            </div>
                                <div class="fw-bold lh-sm fs-4 my-3 mt-4" ><?= $new->title ?></div>
                                <div class="normal-fs mb-4">
                                    <?= $new->body ?>
                                </div>
                        </div>
                    </div>
                    <?php endforeach ?>

                    <div class="mt-4">
                        <?php if($counts): ?>
                            <h3 class="fw-bold mb-5"><?= $counts?> Comments</h3>
                        <?php endif ?>
                        <?php foreach($comments as $comment): ?>
                            <div class="d-flex mb-4">
                                <div class="me-3">
                                    <img width="55" class="rounded-circle" src="/assets/img/avaters/avatar1.png" alt="">
                                </div>
                                <div>
                                    <div class="d-flex">
                                        <h5 class="fw-bold me-2"><?= $comment->name, $comment->id ?></h5>
                                        <div class="fw-bold text-secondary"> <?=  date("M j, Y", strtotime($comment->created_at)) ?> </div>
                                    </div>
                                    <div class="mt-2">
                                    <?= $comment->message ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                        <?php if($counts > 3): ?>
                        <div class="mt-5 d-flex justify-content-center">
                            <nav aria-label="...">
                                <ul class="pagination">
                                    <?php
                                        $t = 0;
                                        for($i=0; $i<$counts; $i+=3): 
                                            $t ++;
                                    ?>
                                        <li class="page-item <?= $t==$page?'active':'' ?>">
                                            <a class="page-link" href="single_news?id=<?= $_GET['id']?>&page=<?= $t?>"> <?= $t?> </a>
                                        </li>
                                    <?php endfor ?>
                                </ul>
                            </nav>
                        </div>
                    <?php endif ?>
                    </div>

                    <div class="commentFormSection mt-5">
                        <h3 class="fw-bold">Leave a comment</h3>
                        <div class="text-secondary mt-3">If you have a comment dont feel hesitate to send us your opinion.</div>

                        <form action="comment" method="POST" class="mt-4">
                            <input type="hidden" name="id" value="<?= $_GET['id']?>">
                            <div class="row mb-3 g-3">
                                <div class="col-lg-6">
                                    <input type="text" name="name" class="form-control form-control-lg" placeholder="Your Name" required>
                                </div>
                                <div class="col-lg-6">
                                    <input type="email" name="email" class="form-control form-control-lg" placeholder="Your Email" required>
                                </div>
                            </div>
                            <textarea name="message" class="form-control form-control-lg mb-3" cols="30" rows="5" placeholder="Your Message" required></textarea>
                            <button class="productBtn" type="submit" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

<?php require 'views/components/footer.php' ?>