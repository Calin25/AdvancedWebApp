<!Doctype html>
<html lang='en'>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="<?php echo base_url(); ?>/assets/css/style.css" rel="stylesheet" media="all" />
</head>

<body>
<header class="headerNav center-navbar">
    <nav class="navbar navbar-expand-lg custom-navbar">
        <div class="container-fluid">
        <a href="<?php echo base_url(); ?>/AdminHomeView"><img src="<?= base_url('assets/images/site/logo1.png') ?>" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="<?php echo base_url(); ?>/CustomerHomeView">Home</a>
                <li class="nav-item">
                <a class="nav-link text-white" href="<?php echo base_url(); ?>/CustomerBrowseProducts">Browse Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo base_url(); ?>/ViewMyOrders">My Orders</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="<?php echo base_url(); ?>/ViewMyWishList">View Wish List</a>
                </li>
                <li class="nav-item">
            
                <a class="nav-link text-white" href="<?php echo base_url(); ?>/viewBasket">Basket</a>
                </li>
                <li class="nav-item">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Reviews
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="<?php echo base_url(); ?>/viewAllReviews">View All Reviews</a>
                            <a class="dropdown-item" href="<?php echo base_url(); ?>/ViewMyReviews">My Reviews</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo base_url(); ?>/logout">Log Out</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</header>