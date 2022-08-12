<?php require 'views/components/adminHeader.php' ?>

    <div class="p-2 w-100">
        <div class="p-3 pb-5 w-100" style="background-color: white;">
        <?php take('views/components/err.php') ?>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h3 class="text-center">Product Edit Form</h3>
                    <div class="card p-3 px-4 shadow mt-5">
                        <form action="update_product" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="id" value="<?= $product->id ?>">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" value="<?= $product->name ?>" class="form-control" name="name" id="name" placeholder="Product Name ...">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Price</label>
                                <input type="text" value="<?= $product->price ?>" class="form-control" name="price" id="price" placeholder="Product Price ...">
                            </div>
                            <div class="mb-3">
                                <label for="thumbnail" class="form-label">Thumbnail</label>
                                <input type="file" class="form-control" name="thumbnail" id="thumbnail" placeholder="Product Img ...">
                                <input type="hidden" name="oldThumbnail" value="<?= $product->thumbnail ?>">
                                <img width="50" src="/assets/uploads/products/<?= $product->thumbnail ?>" alt="">
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">Category</label>
                                <select name="category_id" class="form-control" id="category">
                                    <?php foreach($categories as $category) : ?>
                                        <option value="<?= $category->id ?>" <?= $category->id===$product->category_id ? "selected" : ""; ?> >
                                            <?= $category->name ?>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
           
    

<?php require 'views/components/adminFooter.php'; ?>

                        
