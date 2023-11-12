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
        <a href="<?php echo base_url(); ?>/"><img src="<?= base_url('assets/images/site/logo1.png') ?>" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active text-white" aria-current="page" href="<?php echo base_url(); ?>/">Home</a>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Browse Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Reviews</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Shopping Cart</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link text-white" href="<?php echo base_url(); ?>/logIn">Log-In/Register</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
</header>
