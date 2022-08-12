<?php require 'views/components/adminHeader.php' ?>

    <div class="p-2 w-100">
        <div class="p-3 pb-5 w-100" style="background-color: white;">
        <?php take('views/components/err.php') ?>
            <div class="row">
                <div class="col-12">
                <h3 class="text-center"> News </h3>
                <div class="table-responsive mt-5">
                <table class="table table-lg table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th class="product-table" scope="col">No</th>
                            <th class="product-table" scope="col">Title</th>
                            <th class="product-table" scope="col">Created At</th>
                            <th class="product-table" scope="col"  colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            $count = 0;
                            foreach ($news as $new) : 
                                $count += 1;
                        ?>
                        <tr>
                            <th class="product-table" scope="row"> <?= $count ?> </th>
                            <td class="product-table">
                                <a href="admin_single_news?id=<?= $new->id ?>" class="text-decoration-none"> <?= $new->title ?> </a>
                            </td>
                            <td class="product-table"> <?=  date("F j, Y, g:i a", strtotime($new->created_at)) ?> </td>
                            <td class="product-table">
                                <a href="news_edit?id=<?=$new->id?>" class="btn btn-sm btn-primary m-2">Edit</a>
                            </td>
                            <td class="product-table">
                                <form action="news_delete" method="POST">
                                    <input type="hidden" name="id" value="<?= $new->id ?>">
                                    <button type="submit" name="submit" class="btn btn-sm btn-danger m-2"
                                    onclick="return confirm ('Are you sure you want to delete?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach ?>
                        
                    </tbody>
                </table>
            </div>
                </div>
            </div>
        </div>
    </div>
    

<?php require 'views/components/adminFooter.php'; ?>

                        
