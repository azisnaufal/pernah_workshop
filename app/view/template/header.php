<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Start Meta -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- End Meta -->

    <link rel="shortcut icon" type="image/png" href="<?php echo $_SERVER['SERVER_NAME'];?>../../../../assets/images/logo_icon.png"/>
    <link rel="shortcut icon" type="image/png" href="http://example.com/logo.png"/>

    <!-- Start CSS -->

    <link rel="stylesheet" href="<?php echo $_SERVER['SERVER_NAME'];?>../../../../assets/fonts/open-sans/open-sans.css">
    <link rel="stylesheet" href="<?php echo $_SERVER['SERVER_NAME'];?>../../../../assets/fonts/dosis/style.css">
    <link rel="stylesheet" href="<?php echo $_SERVER['SERVER_NAME'];?>../../../../assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $_SERVER['SERVER_NAME'];?>../../../../assets/plugins/nice-select/css/nice-select.css">

    <link rel="stylesheet" href="<?php echo $_SERVER['SERVER_NAME'];?>../../../../assets/css/main-style.css">

    <!-- End CSS -->

    <title>AZTECH</title>

</head>

<body>

<!-- Start Content -->

<!-- Start Navbar -->
<nav class="navbar fixed-top navbar-search p-0">
    <input type="" name="" class="form-control input-search px-5" placeholder="Search...">
    <select class="form-control select-category d-none d-md-block" name="category">
        <option value="0">All</option>
        <option value="1">Web</option>
        <option value="2">Android</option>
    </select>
    <button class="btn btn-danger btn-close"><i class="fas fa-times"></i></button>
</nav>

<nav class="navbar navbar-expand-md navbar-light bg-red">
    <div class="container">
        <a class="navbar-brand" href="<?php echo $_SERVER['SERVER_NAME'].'../../../';?>">
            <img src="<?php echo $_SERVER['SERVER_NAME'];?>../../../../assets/images/logo.png" height="40">
        </a>
        <a href="#" class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link px-3 my-1 text-light" href="<?php echo $_SERVER['SERVER_NAME'].'../../../trending';?>">Trending<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 my-1 text-light" href="<?php echo $_SERVER['SERVER_NAME'].'../../../fotografi';?>">Fotografi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 my-1 text-light" href="<?php echo $_SERVER['SERVER_NAME'].'../../../hardware';?>">Hardware</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-3 my-1 text-light" href="<?php echo $_SERVER['SERVER_NAME'].'../../../software';?>">Software</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
