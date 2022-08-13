<?php require 'views/components/adminHeader.php' ?>

    <div class="p-2 w-100">
        <div class="p-3 pb-5 w-100" style="background-color: white;">
        <?php take('views/components/err.php') ?>
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center"> Products </h3>
                    <div class="table-responsive mt-5">
                        <table class="table table-lg table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th class="product-table" scope="col">No</th>
                                    <th class="product-table" scope="col">Thumbnail</th>
                                    <th class="product-table" scope="col">Name</th>
                                    <th class="product-table" scope="col">Price</th>
                                    <th class="product-table" scope="col">Created At</th>
                                    <th class="product-table" scope="col"  colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $count = 0;
                                foreach($products as $product) : 
                                    $count += 1;    
                                ?>
                                <tr>
                                    <th class="product-table" scope="row"> <?= $count ?> </th>
                                    <td class="product-table">
                                        <img class="" width="50" src="/assets/uploads/products/<?= $product->thumbnail ?>" alt="">
                                    </td>
                                    <td class="product-table"><?= $product->name ?></td>
                                    <td class="product-table"> <?= $product->price ?> </td>
                                    <td class="product-table"> <?=  date("F j, Y, g:i a", strtotime($product->created_at)) ?> </td>
                                    <td class="product-table d-flex">
                                        <a href="products_edit?id=<?= $product->id ?>" class="btn btn-sm btn-primary m-2">Edit</a>
                                        <form action="products_delete" method="POST">
                                            <input type="hidden" name="id" value="<?= $product->id ?>">
                                            <button type="submit" name="submit" class="btn btn-sm btn-danger m-2"
                                            onclick="return confirm ('Are you sure you want to delete?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <?php if($counts > 10): ?>
                        <div class="mt-5 d-flex justify-content-center">
                            <nav aria-label="...">
                                <ul class="pagination">
                                    <?php
                                        $t = 0;
                                        for($i=0; $i<$counts; $i+=10): 
                                            $t ++;
                                    ?>
                                        <li class="page-item <?= $t==$page?'active':'' ?>">
                                            <a class="page-link" href="admin_index?page=<?= $t?>"> <?= $t?> </a>
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

<?php require 'views/components/adminFooter.php'; ?>

                        
