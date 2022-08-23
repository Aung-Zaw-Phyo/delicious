<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7c0ec42130.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="assets/js/script.js"></script>
    <title>The Golden</title>
</head>
<body style="background-color: rgb(237,242,249);"> 
<!--  -->

    <div class="adminNavbar sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent px-0 mx-0">
                <div class="container-fluid">
                    <a class="navbar-brand text-light" href="admin_index">
                        <img src="/assets/img/logo.png" width="120" alt="">
                    </a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                        <li class="nav-item">
                            <a class="nav-link active text-light fst-italic btn btn-link" aria-current="page" href="/">home </a>
                        </li>
                    </ul>
                    <div class="d-flex">
                        <div class="ms-auto adminMenuContainer d-lg-none">
                            <div class="adminMenu adminLine1"></div>
                            <div class="adminMenu adminLine2"></div>
                            <div class="adminMenu adminLine3"></div>
                        </div>
                        <div class="dropdown ms-2">
                            <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa-solid fa-user  "></i>
                            </button>
                            <ul class="dropdown-menu text-center border border-0 shadow" style="left: -120px; margin-top: 20px;" aria-labelledby="dropdownMenuButton1">
                                <li class=""><span class="dropdown-item text-break" href="login">username: <?= $_SESSION['user']['username'] ?> </span></li>
                                <li>
                                    <form action="logout" method="POST">
                                        <button type="submit" name="submit" class="dropdown-item fs text-primary" href="logout">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>

        </div>
    </div>

    <div class="adminNavOverContainer ">
        <div class="adminNavOver shadow">
            <div class="mb-3 ">
                <div class="accordion " id="accordionExample">
                    <div class="accordion-item  bg-transparent">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fa-solid fa-crate-apple"></i> Products
                        </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="list-unstyled">
                                <li class="mb-2"><a href="admin_index" class="text-decoration-none text-dark">
                                    <i class="fa-solid fa-circle-check me-2 "></i> </i>Products
                                </a></li>
                                <li><a href="product_create" class="text-decoration-none text-dark">
                                    <i class="fa-solid fa-circle-check me-2 "></i> Create
                                </a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item bg-transparent">
                        <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            News
                        </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><a href="admin_news" class="text-decoration-none text-dark">
                                        <i class="fa-solid fa-circle-check me-2 "></i> </i>News
                                    </a></li>
                                    <li><a href="news_create" class="text-decoration-none text-dark">
                                        <i class="fa-solid fa-circle-check me-2 "></i> Create
                                    </a></li>
                                </ul>                                    
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item  bg-transparent">
                        <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Categories
                        </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="list-unstyled">
                                    <li class="mb-2"><a href="admin_category" class="text-decoration-none text-dark">
                                        <i class="fa-solid fa-circle-check me-2 "></i> </i>Categories
                                    </a></li>
                                    <li><a href="category_create" class="text-decoration-none text-dark">
                                        <i class="fa-solid fa-circle-check me-2 "></i> Create
                                    </a></li>
                                </ul>                                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="list-group">
                <li class="list-group-item">
                    <a href="users" class="text-decoration-none text-dark admin_link_icon"><i class="fa-solid fa-users me-2"></i> Users</a>
                </li>
                <li class="list-group-item">
                    <a href="subscribers" class="text-decoration-none text-dark admin_link_icon"><i class="fa-solid fa-users me-2"></i> Subscribers</a>
                </li>
                <li class="list-group-item">
                    <a href="admin_contact" class="text-decoration-none text-dark admin_link_icon"><i class="fa-solid fa-message me-2"></i> Contact</a>
                </li>
                <li class="list-group-item">
                    <a href="admin_orders" class="text-decoration-none text-dark admin_link_icon"><i class="fa-solid fa-bell me-2"></i> Orders</a>
                </li>
                <li class="list-group-item">
                    <a href="money" class="text-decoration-none text-dark admin_link_icon"><i class="fa-solid fa-bell me-2"></i> Money</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="mt-3">
        <div class="container">
            <div class="d-flex">
                <div class="adminNavSideContainer p-2 d-none d-lg-block">
                    <div class="adminNavSide shadow-sm">

                        <div class="mb-3">
                            <div class="accordion " id="accordionExampleTwo">
                                <div class="accordion-item  bg-transparent">
                                    <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button bg-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <i class="fa-solid fa-crate-apple"></i> Products
                                    </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExampleTwo">
                                    <div class="accordion-body">
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><a href="admin_index" class="text-decoration-none text-dark admin_link_icon">
                                                <i class="fa-solid fa-circle-check me-2 "></i> </i>Products
                                            </a></li>
                                            <li><a href="product_create" class="text-decoration-none text-dark admin_link_icon">
                                                <i class="fa-solid fa-circle-check me-2 "></i> Create
                                            </a></li>
                                        </ul>
                                    </div>
                                    </div>
                                </div>
                                <div class="accordion-item bg-transparent">
                                    <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        News
                                    </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExampleTwo">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li class="mb-2"><a href="admin_news" class="text-decoration-none text-dark admin_link_icon">
                                                    <i class="fa-solid fa-circle-check me-2 "></i> </i>News
                                                </a></li>
                                                <li><a href="news_create" class="text-decoration-none text-dark admin_link_icon">
                                                    <i class="fa-solid fa-circle-check me-2 "></i> Create
                                                </a></li>
                                            </ul>                                    
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item  bg-transparent">
                                    <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button bg-transparent collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Categories
                                    </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExampleTwo">
                                        <div class="accordion-body">
                                            <ul class="list-unstyled">
                                                <li class="mb-2"><a href="admin_category" class="text-decoration-none text-dark admin_link_icon">
                                                    <i class="fa-solid fa-circle-check me-2 "></i> </i>Categories
                                                </a></li>
                                                <li><a href="category_create" class="text-decoration-none text-dark admin_link_icon">
                                                    <i class="fa-solid fa-circle-check me-2 "></i> Create
                                                </a></li>
                                            </ul>                                  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="users" class="text-decoration-none text-dark admin_link_icon"><i class="fa-solid fa-users me-2"></i> Users</a>
                            </li>
                            <li class="list-group-item">
                                <a href="subscribers" class="text-decoration-none text-dark admin_link_icon"><i class="fa-solid fa-users me-2"></i> Subscribers</a>
                            </li>
                            <li class="list-group-item">
                                <a href="admin_contact" class="text-decoration-none text-dark admin_link_icon"><i class="fa-solid fa-message me-2"></i> Contact</a>
                            </li>
                            <li class="list-group-item">
                                <a href="admin_orders" class="text-decoration-none text-dark admin_link_icon"><i class="fa-solid fa-bell me-2"></i> Orders</a>
                            </li>
                            <li class="list-group-item">
                                <a href="money" class="text-decoration-none text-dark admin_link_icon"><i class="fa-solid fa-bell me-2"></i> Money</a>
                            </li>
                        </ul>

                    </div>
                </div>