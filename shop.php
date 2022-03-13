<?php include('components/navbar.php'); ?>
<head>
    <style>
        .product img{
            width: 100%;
            height: auto;
            box-sizing: border-box;
            object-fit: cover;
        }
        .pagination a{
            color: black;
        }
        .pagination l1:hover a{
           color: #fff;
           background-color: rgb(112, 232, 253); 
        }
    </style>
    <title>Shop</title>
</head>


    <section id = "featured" class = "my-5 py-5">
        <div class = "container  mt-5 py-5">
            <h3>All Products</h3>
            <hr class = "">
            <p>Latest Products are featured here ! Do check them out.</p>
        </div>
        <div class="row mx-auto container">

          <div onclick="window.location.href='product.html';" class="product text-center col-lg-3 col-md-4 col-sm-12">
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
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/img/shoes1.jpeg" alt="">
            <h5 class = "p-name">Floral Dress</h5>
            <h4 class = "p-price">₹3999</h4>
            <button class = "buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/img/shoes2.jpeg" alt="">
            <h5 class = "p-name">Floral Dress</h5>
            <h4 class = "p-price">₹3999</h4>
            <button class = "buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/img/shoes3.jpeg" alt="">
            <h5 class = "p-name">Floral Dress</h5>
            <h4 class = "p-price">₹3999</h4>
            <button class = "buy-btn">Buy Now</button>
          </div>
          <div class="product text-center col-lg-3 col-md-4 col-sm-12">
            <img class="img-fluid mb-3" src="assets/img/shoes4.jpeg" alt="">
            <h5 class = "p-name">Floral Dress</h5>
            <h4 class = "p-price">₹3999</h4>
            <button class = "buy-btn">Buy Now</button>
          </div>

          <nav area-label="Page navigation example">
              <ul class = "pagination mt-5">
                <li class = "page-item">
                    <a class = "page-link" href="#">Prev</a>
                </li>
                <li class = "page-item">
                    <a class = "page-link" href="#">1</a>
                </li>
                <li class = "page-item">
                    <a class = "page-link" href="#">2</a>
                </li>
                <li class = "page-item">
                    <a class = "page-link" href="#">3</a>
                </li>
                <li class = "page-item">
                    <a class = "page-link" href="#">Last</a>
                </li>
              </ul>
          </nav>
          
        </div>
        
    </section>

    <?php include('components/footer.php'); ?>