<?php require 'views/components/adminHeader.php' ?>

    <div class="p-2 w-100">
        <div class="p-3 pb-5 w-100" style="background-color: white;">
        <?php take('views/components/err.php') ?>
        <h3 class="text-center"> Messages </h3>
            <div class="row g-3 mt-5 d-flex align-items-stretch">
                <?php foreach($messages as $message): ?>
                    <div class="col-md-6 col-lg-4 p-2">
                        <div class="card h-100 shadow p-2">
                            <div class="mb-2">
                                <div class="fw-bold text-secondary">Name</div>
                                <?= $message->name ?>
                            </div>
                            <div class="mb-2">
                                <div class="fw-bold text-secondary">Email</div>
                                <?= $message->email ?>
                            </div>
                            <div class="mb-2">
                                <div class="fw-bold text-secondary">Phone number</div>
                                <?= $message->phone ?>
                            </div>
                            <div class="mb-2">
                                <div class="fw-bold text-secondary">Subject</div>
                                <?= $message->subject ?>
                            </div>
                            <div class="mb-2">
                                <div class="fw-bold text-secondary">Message</div>
                                <?= $message->message ?>
                            </div>
                            <div class="mb-2 mt-1 text-end">
                                <div class="fw-bold text-secondary"><?=  date("M j, Y, g:i a", strtotime($message->created_at)) ?></div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>       

            <?php if($counts > 6): ?>
                <div class="mt-5 d-flex justify-content-center">
                    <nav aria-label="...">
                        <ul class="pagination">
                            <?php
                                $t = 0;
                                for($i=0; $i<$counts; $i+=6): 
                                    $t ++;
                            ?>
                                <li class="page-item <?= $t==$page?'active':'' ?>">
                                    <a class="page-link" href="admin_contact?page=<?= $t?>"> <?= $t?> </a>
                                </li>
                            <?php endfor ?>
                        </ul>
                    </nav>
                </div>
            <?php endif ?>
        </div>
    </div>
    

<?php require 'views/components/adminFooter.php'; ?>
