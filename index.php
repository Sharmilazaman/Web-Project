<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products Valley</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://fonts.googleapis.com/css2 family=Dancing+Script:wght@500&display=swap" rel="stylesheet"/>
</head>
<body>
    
      <header>
      <nav class="navbar navbar-expand-lg">
        <div class="container">
         <div class="logo">
             
         </div>
          <a class="navbar-brand" href="#">
            <strong class="logo">Products Valley</strong>
             <h3>We Ensure The Quality!!</h3>
          </a>
         
          <button class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarResponsive"
            aria-controls="navbarResponsive"
            aria-expanded="false"
            aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active mx-3">
                <a class="nav-link" href="#"
                  >Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="aboutus.php">About</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="#">Collection</a>
              </li>
              
              <li class="nav-item mx-3">
                <a class="nav-link" href="logout.php">Log Out</a>
              </li>    
              
              <li class="nav-search"><input type="text" placeholder="Search.."></li>
               
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- main -->
    <div class="container-fluid">

      <!-- banner -->
      <div class="row banner" color="primary">
        <div class="row col-md inner-banner m-4">
          <div class="col-md-6 content bg-circle align-self-center text-center">
            <h1 class="text-center">Hello Summer!</h1>
            <h5>Enjoy Amazing summer 2021 sale</h5>
            <p class="dummy-desc">
              Summer is knocking at the door. Enjoy your summer shopping from Products Valley with exclusive discount and Dhamaka offers. Prefer your favourite products and enjoy your day!!!.
            </p>
            <div class="button">
              <button type="button" class="btn"> Shop Now <i class="fa fa-shopping-bag" aria-hidden="true"></i>
              </button>
            </div>
          </div>
          <div class="col-md-6 image alig-end">
            <div class=""></div>
          </div>
        </div>
      </div>
    </div>

    <!-- About -->
    <div class="container text-center about my-5">
      <div class="row">
        <div class="col-lg col-md col-sm col-xs">
          <h2 class="custom-title my-5">
            What We Offer
          </h2>
          <p class="dummy-desc">
            So, now the offer is on!!! We can get 25% off at any Gents items and shoes and snickers. Get up to 20% off at any ladies item. Snatch your discouhnt from Products Vally at any purchase. You can Get also 23% at any ladies shoes and cosmetics.
          </p>
        </div>
      </div>
    </div>
    <!-- collection -->
    <div class="container text-center collections my-5">
      <h2 class="custom-title">New Collections</h2>
      <div class="row my-5">
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/Bag.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Ladies Bags</h5>
              <p class="card-text dummy-desc">
               Michael Kors Women's Nicole Large Shoulder Bag Tote Purse Handbag
              </p>
              <a href="#" class="price-tag"><p> 1800 BDT </p></a>
              <br><br>
              <a href="shoppingcart.php" class="btn">BUY NOW</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/T-shirt.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Boys Collections</h5>
              <p class="card-text dummy-desc">
               Exclusive Polo t-shirts in Grey colour with 100% cotton.
              </p>
              <a href="#" class="price-tag"> <p> 690 BDT</p></a>
              <br><br>
              <a href="shoppingcart.php" class="btn">BUY NOW</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/tiny-jeans_3.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Tiny Jeans</h5>
              <p class="card-text dummy-desc">
                Jeans Pant for ladies. Easy to wear and comfortable and light.
              </p>
              <a href="#" class="price-tag"><p>1190 BDT</p></a>
              
              <br>
              <a href="shoppingcart.php" class="btn">BUY NOW</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row my-5">
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/Shirt.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Shirt</h5>
              <p class="card-text dummy-desc">
                Men's Shirt. Colour gurranted and 100% cotton.
              </p>
              <a href="#" class="price-tag"><p>790 BDT</p></a>
              <br>
              <a href="shoppingcart.php" class="btn">BUY NOW</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/Shoes.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Shoes</h5>
              <p class="card-text dummy-desc">
                Shoes for Man. Original leather and comfortable to wear.
              </p>
              <a href="#" class="price-tag"><p>2290 BDT</p></a>
              <br>
              <a href="shoppingcart.php" class="btn">BUY NOW</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/Sneakers.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Sneakers</h5>
              <p class="card-text dummy-desc">
                Stylish & Classy Sneakers. Very light weight and comfortable.
              </p>
              <a href="#" class="price-tag"><p>3490 BDT</p></a>
              <br>
              <a href="shoppingcart.php" class="btn">BUY NOW</a>
            </div>
          </div>
        </div>
      </div>

<div class="gadgets">
  <h2>Smartphones</h2>
<div class="row my-5">
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/Mi 11 ultra.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Xiaomi Mi 11 Ultra</h5>
              <p class="card-text dummy-desc">
                The Xiaomi Mi 11 Ultra is now available in two variants (256/512GB/8/12GB RAM).
              </p>
              <a href="#" class="price-tag"><p>85,000 BDT</p></a>
              <br>
              <a href="shoppingcart.php" class="btn">BUY NOW</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/iphone XR.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">iphone XR</h5>
              <p class="card-text dummy-desc">
                This Apple iPhone XR has 3 GB ram, 64 GB, 128 GB, 256 GB Internal Memory and No External Memory.
              </p>
              <a href="#" class="price-tag"><p>52,500 BDT</p></a>
              <br>
              <a href="shoppingcart.php" class="btn">BUY NOW</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/S20 Ultra.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Samsung S20 Ultra</h5>
              <p class="card-text dummy-desc">
                 This Samsung Galaxy S20 Ultra has 12 GB ram, 128 GB Internal Memory and External Memory Card.
              </p>
              <a href="#" class="price-tag"><p>129,900 BDT</p></a>
              <br>
              <a href="shoppingcart.php" class="btn">BUY NOW</a>
            </div>
          </div>
        </div>
      </div>
</div>


<div>
<div class="kids-item">
  <h2>Kids Collection</h2>
<div class="row my-5">
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/kids1.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Dress</h5>
              <p class="card-text dummy-desc">
                Black georgette frock for baby girls.
              </p>
              <a href="#" class="price-tag"><p>890 BDT</p></a>
              <br>
              <a href="shoppingcart.php" class="btn">BUY NOW</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/kids2.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Dress</h5>
              <p class="card-text dummy-desc">
                Pink kurti with koti for baby girls.
              </p>
              <a href="#" class="price-tag"><p>1500 BDT</p></a>
              <br>
              <a href="shoppingcart.php" class="btn">BUY NOW</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/kids3.jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Dress</h5>
              <p class="card-text dummy-desc">
                 Cotton Printed Frock for Baby Girls.
              </p>
              <a href="#" class="price-tag"><p>1299.. BDT</p></a>
              <br>
              <a href="shoppingcart.php" class="btn">BUY NOW</a>
            </div>
          </div>
        </div>
      </div>
</div>
</div>


<div>
<div class="gifts-item">
  <h2>Gifts Corner</h2>
<div class="row my-5">
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/gifts1 (1).jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Watch</h5>
              <p class="card-text dummy-desc">
                Classy Watch for Men.
              </p>
              <a href="#" class="price-tag"><p>1890 BDT</p></a>
              <br>
              <a href="cart.php" class="btn">BUY NOW</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/gifts1 (2).jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Cartoon Bag</h5>
              <p class="card-text dummy-desc">
                Yellow Cartoon Bag for Kids.
              </p>
              <a href="#" class="price-tag"><p>500 BDT</p></a>
              <br>
              <a href="shoppingcart.php" class="btn">BUY NOW</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/gifts1 (3).jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Light Hut</h5>
              <p class="card-text dummy-desc">
                 Small Light Hut and Showpiece.
              </p>
              <a href="#" class="price-tag"><p>399.. BDT</p></a>
              <br>
              <a href="shoppingcart.php" class="btn">BUY NOW</a>
            </div>
          </div>
        </div>
      </div>
</div>
</div>


<div>
<div class="gifts-item">
  <h2>Gifts Corner</h2>
<div class="row my-5">
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/gifts1 (4).jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Photo Frame</h5>
              <p class="card-text dummy-desc">
                Photo FrameShowpiece for Home.
              </p>
              <a href="#" class="price-tag"><p>790 BDT</p></a>
              <br>
              <a href="shoppingcart.php" class="btn">BUY NOW</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/gifts1 (5).jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Toy</h5>
              <p class="card-text dummy-desc">
                Baby Taxi Toy and Showpiece.
              </p>
              <a href="#" class="price-tag"><p>450 BDT</p></a>
              <br>
              <a href="shoppingcart.php" class="btn">BUY NOW</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="images/gifts1 (6).jpg" alt="Card image cap" />
            <div class="card-body">
              <h5 class="card-title">Toy Camera</h5>
              <p class="card-text dummy-desc">
                 Pink Toy Camera For Babies.
              </p>
              <a href="#" class="price-tag"><p>499.. BDT</p></a>
              <br>
              <a href="shoppingcart.php" class="btn">BUY NOW</a>
            </div>
          </div>
        </div>
      </div>
</div>
</div>

    </div>

    <!-- footer -->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-widget one">
            <strong class="logo">Products Valley</strong>
            <div class="row">
              <div class="col-md">
                <p class="dummy-desc">
                  Products Valley is an E-Commerce company. We provide authentic and genuine products. Our first moto is to maintain quallity of our products which is been delivered to our customers. We always maintain products quality so that customers can buy their products without any hesitation. 
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 footer-widget two" text-color="white">
            <h5>Categories</h5>
            <ul>
              <li>Summer Collections</li>
              <li><a href="shoes.php">Shoes</a></li>             
              <li><a href="mcollection.php">Men Collection</a></li>
              <li><a href="wcollection.php">Women Collection</a></li>
              <li><a href="gadgets.php">Electronics Gadgets</a></li>
              
            </ul>
          </div>
          <div class="col-md-3 footer-widget three">
            <h5>Folow Us on Social Media</h5>
            <div class="row"></div>
            <div class="social-icons col-md">
              <a href="https://www.facebook.com/groups/615534416062281" class="fa fa-facebook"></a>
              <a href="https://www.facebook.com/groups/615534416062281" class="fa fa-twitter"></a>
              <a href="https://www.facebook.com/groups/615534416062281" class="fa fa-google"></a>
              <a href="https://www.facebook.com/groups/615534416062281" class="fa fa-linkedin"></a>
              <a href="https://www.facebook.com/groups/615534416062281" class="fa fa-youtube"></a>
              <a href="https://www.instagram.com/productsvalleye/" class="fa fa-instagram"></a>
            </div>
          </div>
          
        </div>
      </div>
    </footer>
</body>
</html>