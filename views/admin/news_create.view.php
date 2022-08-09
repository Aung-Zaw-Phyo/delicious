<?php require 'views/components/adminHeader.php' ?>

    <div class="p-2 w-100">
        <div class="p-3 pb-5 w-100" style="background-color: white;">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h3 class="text-center">News Create Form</h3>
                    <div class="card p-3 px-4 shadow mt-5">
                        <form action="" >
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="News title ...">
                            </div>
                            <div class="mb-3">
                                <label for="body" class="form-label">Body</label>
                                <input type="text" class="form-control" name="body" id="body" placeholder="News body ...">
                            </div>
                            <div class="mb-3">
                                <label for="thumbnail" class="form-label">Thumbnail</label>
                                <input type="file" class="form-control" name="thumbnail" id="thumbnail" placeholder="News Img ...">
                            </div>
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
           
    

<?php require 'views/components/adminFooter.php'; ?>

                        
