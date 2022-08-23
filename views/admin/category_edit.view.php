<?php require 'views/components/adminHeader.php' ?>

    

    <div class="p-2 w-100">
        <div class="p-3 pb-5 w-100" style="background-color: white;">
        <?php take('views/components/err.php') ?>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h3 class="text-center">Category Update Form</h3>
                    <div class="card p-3 px-4 shadow mt-5">
                        <form action="update_category" method="POST">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" value="<?= $category->name ?>" id="name" placeholder="Category name ..." required>
                                <input type="hidden" name="id" value="<?= $category->id ?>">
                            </div>
                            <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
           
    

<?php require 'views/components/adminFooter.php'; ?>

                        
