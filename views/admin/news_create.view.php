<?php require 'views/components/adminHeader.php' ?>

    <div class="p-2 w-100">
        <div class="p-3 pb-5 w-100" style="background-color: white;">
        <?php take('views/components/err.php') ?>
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h3 class="text-center">News Create Form</h3>
                    <div class="card p-3 px-4 shadow mt-5">
                        <form action="post_news" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="News title ..." required>
                            </div>
                            <div class="mb-3">
                                <label for="body" class="form-label">Body</label>
                                <textarea class="form-control" name="body" id="body" placeholder="News body ..." rows="5" required></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="thumbnail" class="form-label">Thumbnail</label>
                                <input type="file" class="form-control" name="thumbnail" id="thumbnail" placeholder="News Img ..." required>
                            </div>
                            <button class="btn btn-primary" name="submit" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
           
    

<?php require 'views/components/adminFooter.php'; ?>

                        
