<?php require 'views/components/adminHeader.php' ?>

    <div class="p-2 w-100">
        <div class="p-3 pb-5 w-100" style="background-color: white;">
        <?php take('views/components/err.php') ?>
            <div class="row">
                <div class="col-12">
                    <h3 class="text-center"> Users </h3>
                    <div class="table-responsive mt-5">
                        <table class="table table-lg table-bordered">
                            <thead class="table-light">
                                <tr>
                                    <th class="product-table" scope="col">No</th>
                                    <th class="product-table" scope="col">Name</th>
                                    <th class="product-table" scope="col">Username</th>
                                    <th class="product-table" scope="col">Email</th>
                                    <th class="product-table" scope="col">Created At</th>
                                    <th class="product-table" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                    $count = 0;
                                    foreach ($users as $user) : 
                                        $count += 1;
                                ?>
                                <tr>
                                    <th class="product-table" scope="row"> <?= $count ?> </th>
                                    <td class="product-table" scope="row"> <?= $user->name ?></td>
                                    <td  class="product-table " scope="row"> 
                                        <a class="text-decoration-none" href="user_order?id=<?= $user->id ?>"> <?= $user->username ?> </a>  
                                    </td>
                                    <td  class="product-table" scope="row"> <?= $user->email ?> </td>
                                    <td class="product-table"> <?=  date("M j, Y, g:i a", strtotime($user->created_at)) ?> </td>
                                    <td class="product-table">
                                        <form action="user_delete" method="POST">
                                            <input type="hidden" name="id" value="<?= $user->id ?>">
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
                                            <a class="page-link" href="users?page=<?= $t?>"> <?= $t?> </a>
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

                        
