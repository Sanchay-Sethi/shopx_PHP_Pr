<?php include('components/navbar.php'); ?>
<!-- <?php
    if(!isset($_SESSION['logged_in'])){
        header('location: login.php');
        exit;
    }
?> -->
<head>
    <title>User Account</title>
</head>

    <section class = "mt-5 py-5">
        <div class="row container mx-auto">
            <div class="text-center mt-3 pt-5 col-lg-6 col-md-12 col-sm-12">
                <div class="account-info">
                    <h3 class="font-weight-bold">Your Account</h3>
                    <hr class="">
                    <p>Name - <span>Sanchay</span></p>
                    <p>Email - <span>sanchay@gmail.com</span></p>
                    <p><a href="" id = "order-btn">Your Orders</a></p>
                    <p><a href="" id = "logout-btn">Logout</a></p>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <form action="" id="account-form">
                    <h3>Change Password</h3>
                    <hr class = "">
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" class = "form-control" id="account-password" placeholder="Password" name = "password" required/>
                    </div>
                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="password" class = "form-control" id="account-password-confirm" placeholder="Confirm Password" name = "confirm-password" required/>
                    </div>
                    <div class="form-group">
                        <input type="submit" value = "Change Password" class = "btn" id = "change-pass-btn">
                    </div>
                </form>
            </div>
        </div>
    </section>

    <section id = "" class = "orders container">
        <div class="container">
            <h2 class = "font-weight-bold">Your Orders</h2>
            <hr>
        </div>
        <table class = "mt-5 pt-5">
            <tr>
                <th>Product</th>
                <th>Purchased Date</th>
            </tr>
            <tr>
                <td>
                   <div class="product-info">
                       <img src="assets/img/featured1.jpg" alt="">
                       <div>
                           <p class = "mt-3">White Shoes</p>
                       </div>
                   </div>
                </td>
                <td>
                    <span>05-08-2021</span>
                </td>
               
            </tr>
            
        </table>
        
        
    </section>

    <?php include('components/footer.php'); ?>
