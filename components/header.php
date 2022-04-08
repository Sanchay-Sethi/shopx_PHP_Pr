<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light py-3 fixed-top">
    <div class="container-fluid">
        <a href="index.php"><img class = "logoimg" src="assets/img/logo/ShopX.png"/> </a>          
        <button class="navbar-toggler navDesign" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img class = "navMenuIcon" src="assets/img//menu.png"/>           
        </button>
        <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">      
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.php">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a href="cart.php"><i class="fas fa-shopping-cart">
                <?php if(!empty($_SESSION['cart'])){ ?>
                <?php if(isset($_SESSION['quantity']) && $_SESSION['quantity'] != 0) {?>
                      <span style = "
                        background-color: #ec1a60;
                        color: #fff;
                        padding: 1px 5px;
                        border-radius: 50%;
                        margin: -5px;
                        font-size: 1rem;
                      "> <?php echo $_SESSION['quantity']; ?> </span>
                    <?php } ?> 
                    <?php } ?>
                </i></a>
                <a href="account.php"><i class="fas fa-user"></i></a>
              </li>
            </ul>
        </div>
    </div>
</nav>
