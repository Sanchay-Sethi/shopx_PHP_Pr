<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Document</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3 fixed-top">
        <div class="container-fluid">
          <img class = "logoimg" src="assets/img/logo/ShopX.png"/>           
          <button class="navbar-toggler navDesign" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <img class = "navMenuIcon" src="assets/img//menu.png"/>           
          </button>
          <div class="collapse navbar-collapse nav-buttons" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">      
              <li class="nav-item">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="shop.html">Shop</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact Us</a>
              </li>
              <li class="nav-item">
                <i class="fas fa-shopping-cart"></i>
                <i class="fas fa-user"></i>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <!-- Home -->
    <section id = "home">
        <div class="container">
        </div>
        <div class="container">
            <h5>GRAB LATEST OFFERS</h5>
            <h1><span>Flat 50% OFF</span> This Summer !</h1>
            <p>Shop now with shopx to grab the latest and best deals.</p>
            <button>EXPLORE</button>
        </div>

    </section>

    <section id = "brand" class = "container">
        <div class = "row" style = "justify-content:center;">
            <img  class = "img-fluid col-lg-3 col-md-6 col-sm-12 brandImg" src="assets/img/brand1.png" alt="">
            <img  class = "img-fluid col-lg-3 col-md-6 col-sm-12 brandImg" src="assets/img/brand2.png" alt="">
            <img  class = "img-fluid col-lg-3 col-md-6 col-sm-12 brandImg" src="assets/img/brand3.png" alt="">
            <img  class = "img-fluid col-lg-3 col-md-6 col-sm-12 brandImg" src="assets/img/brand4.png" alt="">
        </div>
    </section>

    <section id = "new" class = "w-100">
        <div class = "row p-0 m-0">
            <div class = "one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class = "img-fluid" src="assets/img/one.jpg" alt="">
                <div class = "details">
                    <h2>25% OFF On Shoes</h2>
                    <button class = "text-uppercase">SHOP NOW</button>
                </div>
            </div>
            <div class = "one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class = "img-fluid" src="assets/img/two.jpg" alt="">
                <div class = "details">
                    <h2>Mens Wear and Glasses</h2>
                    <button class = "text-uppercase">SHOP NOW</button>
                </div>
            </div>
            <div class = "one col-lg-4 col-md-12 col-sm-12 p-0">
                <img class = "img-fluid" src="assets/img/three.jpg" alt="">
                <div class = "details">
                    <h2>50% OFF on Womens Wear</h2>
                    <button class = "text-uppercase">SHOP NOW</button>
                </div>
            </div>
        </div>
    </section>

    <section id = "featured" class = "my-5 pb-5">
        <div class = "container text-center mt-5 py-5">
            <h3>Latest Featuring!</h3>
            <hr class = "mx-auto">
            <p>Latest Products are featured here ! Do check them out.</p>
        </div>
        <div class="row mx-auto container-fluid">
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/img/featured1.jpg" alt="">
            <h5 class = "p-name">Nike Shoes</h5>
            <h4 class = "p-price">₹1999</h4>
            <button class = "buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/img/featured2.jpg" alt="">
            <h5 class = "p-name">Casual Shirt</h5>
            <h4 class = "p-price">₹1299</h4>
            <button class = "buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/img/featured3.jpeg" alt="">
            <h5 class = "p-name">Funky Bag</h5>
            <h4 class = "p-price">₹999</h4>
            <button class = "buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/img/featured4.jpg" alt="">
            <h5 class = "p-name">Floral Dress</h5>
            <h4 class = "p-price">₹3999</h4>
            <button class = "buy-btn">Buy Now</button>
          </div>
        </div>
    </section>

    <section id = "banner" class = "my-5 py-5">
      <div class="container">
        <h4>SEASONAL SALE IS HERE!</h4>
        <h1>Latest Collection <br> Flat 25% OFF </h1>
        <button class = "text-uppercase">SHOP NOW</button>
      </div>
    </section>

    <section id = "featured" class = "my-5">
      <div class = "container text-center mt-5 py-5">
          <h3>All Listed Products</h3>
          <hr class = "mx-auto">
          <p>Sales on greatest brand is here! Grab your need ASAP</p>
      </div>
      <div class="row mx-auto container-fluid">
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/img/clothes1.jpeg" alt="">
          <h5 class = "p-name">Nike Shoes</h5>
          <h4 class = "p-price">₹1999</h4>
          <button class = "buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/img/clothes2.jpeg" alt="">
          <h5 class = "p-name">Casual Shirt</h5>
          <h4 class = "p-price">₹1299</h4>
          <button class = "buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/img/clothes3.jpeg" alt="">
          <h5 class = "p-name">Funky Bag</h5>
          <h4 class = "p-price">₹999</h4>
          <button class = "buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/img/clothes4.jpeg" alt="">
          <h5 class = "p-name">Floral Dress</h5>
          <h4 class = "p-price">₹3999</h4>
          <button class = "buy-btn">Buy Now</button>
        </div>
      </div>
    </section>

    <section id = "shoes" class = "my-5">
    <div class = "container text-center mt-5 py-5">
        <h3>35% OFF Valid for 3 days</h3>
        <hr class = "mx-auto">
        <p>Sales on Shoes! So what are you waiting for! Grab it out</p>
    </div>
    <div class="row mx-auto container-fluid">
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/img/shoes1.jpeg" alt="">
        <h5 class = "p-name">Nike Shoes</h5>
        <h4 class = "p-price">₹1999</h4>
        <button class = "buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/img/shoes2.jpeg" alt="">
        <h5 class = "p-name">Casual Shirt</h5>
        <h4 class = "p-price">₹1299</h4>
        <button class = "buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/img/shoes3.jpeg" alt="">
        <h5 class = "p-name">Funky Bag</h5>
        <h4 class = "p-price">₹999</h4>
        <button class = "buy-btn">Buy Now</button>
      </div>
      <div class="product text-center col-lg-3 col-md-4 col-sm-12">
        <img class="img-fluid mb-3" src="assets/img/shoes4.jpeg" alt="">
        <h5 class = "p-name">Floral Dress</h5>
        <h4 class = "p-price">₹3999</h4>
        <button class = "buy-btn">Buy Now</button>
      </div>
    </div>
    </section>

    <section id = "watches" class = "my-5">
      <div class = "container text-center mt-5 py-5">
          <h3>Smart Watches On Your Way!</h3>
          <hr class = "mx-auto">
          <p></p>
      </div>
      <div class="row mx-auto container-fluid">
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/img/watch1.png" alt="">
          <h5 class = "p-name">Nike Shoes</h5>
          <h4 class = "p-price">₹1999</h4>
          <button class = "buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/img/watch2.jpg" alt="">
          <h5 class = "p-name">Casual Shirt</h5>
          <h4 class = "p-price">₹1299</h4>
          <button class = "buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/img/watch3.jpg" alt="">
          <h5 class = "p-name">Funky Bag</h5>
          <h4 class = "p-price">₹999</h4>
          <button class = "buy-btn">Buy Now</button>
        </div>
        <div class="product text-center col-lg-3 col-md-4 col-sm-12">
          <img class="img-fluid mb-3" src="assets/img/watch4.jpg" alt="">
          <h5 class = "p-name">Floral Dress</h5>
          <h4 class = "p-price">₹3999</h4>
          <button class = "buy-btn">Buy Now</button>
        </div>
      </div>
    </section>

    <footer class="mt-5 py-5">
      <div class="row container mx-auto pt-5">
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <img class="logo" src="assets/img/logo/logow1250.png"/>
          <p class="pt-3">We provide the best products for the most affordable prices</p>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
         <h5 class="pb-2">Featured</h5>
         <ul class="text-uppercase">
           <li><a href="#">men</a></li>
           <li><a href="#">women</a></li>
           <li><a href="#">boys</a></li>
           <li><a href="#">girls</a></li>
           <li><a href="#">new arrivals</a></li>
           <li><a href="#">clothes</a></li>
         </ul>
        </div>

        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <h5 class="pb-2">Contact Us</h5>
          <div>
            <h6 class="text-uppercase">Address</h6>
            <p>123 Gurugram, Haryana</p>
          </div>
          <div>
            <h6 class="text-uppercase">Phone</h6>
            <p>122 1223 1223</p>
          </div>
          <div>
            <h6 class="text-uppercase">Email</h6>
            <p>contact@shopx.com</p>
          </div>
        </div>
        <div class="footer-one col-lg-3 col-md-6 col-sm-12">
          <h5 class="pb-2">Team And Work</h5>
          <div class="column">
            <p>Developer:</p>
            <h6>Sanchay Sethi</h6>
            <a style = "text-decoration: none;" href = "https://www.linkedin.com/in/sanchay-sethi/" target="_blank" ><p><i class="fab fa-linkedin"></i>  @sanchay-sethi </p></a>
            <a style = "text-decoration: none;" href = "https://github.com/Sanchay-Sethi" target="_blank"><p><i class="fab fa-github"></i>  @Sanchay-Sethi </p></a>
          </div>
        </div>
      </div>



      <div class="copyright mt-5">
        <div class="row container mx-auto">
          <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
            <!-- <img src="assets/imgs/payment.jpeg"/> -->
          </div>
          <div class="col-lg-3 col-md-5 col-sm-12 mb-4 text-nowrap mb-2">
            <p>Shopx @2022-23 All Right Reserved</p>
          </div>
          <!-- <div class="col-lg-3 col-md-5 col-sm-12 mb-4">
           <a href="#"><i class="fab fa-facebook"></i></a>
           <a href="#"><i class="fab fa-instagram"></i></a>
           <a href="#"><i class="fab fa-twitter"></i></a>
          </div> -->
        </div>
      </div>

    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>