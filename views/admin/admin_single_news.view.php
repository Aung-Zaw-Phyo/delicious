<?php require 'views/components/adminHeader.php' ?>

    <div class="p-2 w-100">
        <div class="p-3 pb-5 w-100" style="background-color: white;">
            <div class="row">
                <div class="col-12">
                    
                    <div class="newsNewsSection py-5">
                        <div class="container">
            
                            <div class="row d-flex justify-content-center">
                                <div class="col-12 col-lg-10 p-1">
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
                                                            <a class="page-link" href="admin_single_news?id=<?= $_GET['id']?>&page=<?= $t?>"> <?= $t?> </a>
                                                        </li>
                                                    <?php endfor ?>
                                                </ul>
                                            </nav>
                                        </div>
                                        <?php endif ?>
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

                        
