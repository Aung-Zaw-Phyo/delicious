<?php require 'views/components/adminHeader.php' ?>

    <div class="p-2 w-100">
        <div class="p-3 pb-5 w-100" style="background-color: white;">
            <?php take('views/components/err.php') ?>
            <h3 class="text-center"> Pending Money and Income Money </h3>
            <div class="row g-3 mt-5 d-flex align-items-stretch">
                <div class="col-lg-6 p-2">
                    <div class="card shadow p-3 text-center">
                        <div class="fs-5">
                            Pending Money
                        </div>
                        <div class="mt-3 fs-4">
                            $<?= $pending_money ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 p-2">
                    <div class="card shadow p-3 text-center">
                        <div class="fs-5">
                            Income Money
                        </div>
                        <div class="mt-3 fs-4">
                            $<?= $income_money ?>
                        </div>
                    </div>
                </div>
            </div>       

        </div>
    </div>
    

<?php require 'views/components/adminFooter.php'; ?>

                        