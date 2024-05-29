<!DOCTYPE html>
<html>
  
<!-- Mirrored from demo.templatesjungle.com/ministore/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Mar 2024 19:59:59 GMT -->
<head>
    <title>Ministore</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="cdn.jsdelivr.net/npm/swiper%409/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500&amp;family=Lato:wght@300;400;700&amp;display=swap" rel="stylesheet">
    <!-- script
    ================================================== -->
    <script src="js/modernizr.js"></script>
  </head>
  <body>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
      <symbol id="search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
        <path fill="currentColor" d="M19 3C13.488 3 9 7.488 9 13c0 2.395.84 4.59 2.25 6.313L3.281 27.28l1.439 1.44l7.968-7.969A9.922 9.922 0 0 0 19 23c5.512 0 10-4.488 10-10S24.512 3 19 3zm0 2c4.43 0 8 3.57 8 8s-3.57 8-8 8s-8-3.57-8-8s3.57-8 8-8z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="user" viewBox="0 0 16 16">
        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="cart" viewBox="0 0 16 16">
        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="star-fill" viewBox="0 0 16 16">
        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="facebook" viewBox="0 0 24 24">
        <path fill="currentColor" d="M9.198 21.5h4v-8.01h3.604l.396-3.98h-4V7.5a1 1 0 0 1 1-1h3v-4h-3a5 5 0 0 0-5 5v2.01h-2l-.396 3.98h2.396v8.01Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="youtube" viewBox="0 0 32 32">
        <path fill="currentColor" d="M29.41 9.26a3.5 3.5 0 0 0-2.47-2.47C24.76 6.2 16 6.2 16 6.2s-8.76 0-10.94.59a3.5 3.5 0 0 0-2.47 2.47A36.13 36.13 0 0 0 2 16a36.13 36.13 0 0 0 .59 6.74a3.5 3.5 0 0 0 2.47 2.47c2.18.59 10.94.59 10.94.59s8.76 0 10.94-.59a3.5 3.5 0 0 0 2.47-2.47A36.13 36.13 0 0 0 30 16a36.13 36.13 0 0 0-.59-6.74ZM13.2 20.2v-8.4l7.27 4.2Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="twitter" viewBox="0 0 256 256">
        <path fill="currentColor" d="m245.66 77.66l-29.9 29.9C209.72 177.58 150.67 232 80 232c-14.52 0-26.49-2.3-35.58-6.84c-7.33-3.67-10.33-7.6-11.08-8.72a8 8 0 0 1 3.85-11.93c.26-.1 24.24-9.31 39.47-26.84a110.93 110.93 0 0 1-21.88-24.2c-12.4-18.41-26.28-50.39-22-98.18a8 8 0 0 1 13.65-4.92c.35.35 33.28 33.1 73.54 43.72V88a47.87 47.87 0 0 1 14.36-34.3A46.87 46.87 0 0 1 168.1 40a48.66 48.66 0 0 1 41.47 24H240a8 8 0 0 1 5.66 13.66Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="instagram" viewBox="0 0 256 256">
        <path fill="currentColor" d="M128 80a48 48 0 1 0 48 48a48.05 48.05 0 0 0-48-48Zm0 80a32 32 0 1 1 32-32a32 32 0 0 1-32 32Zm48-136H80a56.06 56.06 0 0 0-56 56v96a56.06 56.06 0 0 0 56 56h96a56.06 56.06 0 0 0 56-56V80a56.06 56.06 0 0 0-56-56Zm40 152a40 40 0 0 1-40 40H80a40 40 0 0 1-40-40V80a40 40 0 0 1 40-40h96a40 40 0 0 1 40 40ZM192 76a12 12 0 1 1-12-12a12 12 0 0 1 12 12Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="linkedin" viewBox="0 0 24 24">
        <path fill="currentColor" d="M6.94 5a2 2 0 1 1-4-.002a2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="nav-icon" viewBox="0 0 16 16">
        <path d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="close" viewBox="0 0 16 16">
        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
      </symbol>
      <symbol xmlns="http://www.w3.org/2000/svg" id="navbar-icon" viewBox="0 0 16 16">
        <path d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z" />
      </symbol>
    </svg>

    <div class="search-popup">
        <div class="search-popup-container">

          <form role="search" method="get" class="search-form" action="#">
            <input type="search" id="search-form" class="search-field" placeholder="Type and press enter" value="" name="s" />
            <button type="submit" class="search-submit"><svg class="search"><use xlink:href="#search"></use></svg></button>
          </form>

          <h5 class="cat-list-title">Browse Categories</h5>
          
          <ul class="cat-list">
            <li class="cat-list-item">
              <a href="#" title="Mobile Phones">Mobile Phones</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Smart Watches">Smart Watches</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Headphones">Headphones</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Accessories">Accessories</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Monitors">Monitors</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Speakers">Speakers</a>
            </li>
            <li class="cat-list-item">
              <a href="#" title="Memory Cards">Memory Cards</a>
            </li>
          </ul>

        </div>
    </div>
    
    <header id="header" class="site-header header-scrolled position-fixed text-black bg-light">
      <nav id="header-nav" class="navbar navbar-expand-lg px-3 mb-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img src="images/main-logo.png" class="logo">
          </a>
          <button class="navbar-toggler d-flex d-lg-none order-3 p-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#bdNavbar" aria-controls="bdNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <svg class="navbar-icon">
              <use xlink:href="#navbar-icon"></use>
            </svg>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="bdNavbar" aria-labelledby="bdNavbarOffcanvasLabel">
            <div class="offcanvas-header px-4 pb-0">
              <a class="navbar-brand" href="index.php">
                <img src="images/main-logo.png" class="logo">
              </a>
              <button type="button" class="btn-close btn-close-black" data-bs-dismiss="offcanvas" aria-label="Close" data-bs-target="#bdNavbar"></button>
            </div>
            <div class="offcanvas-body">
              <ul id="navbar" class="navbar-nav text-uppercase justify-content-end align-items-center flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link me-4 active" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-4" href="about.html">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-4" href="blog.html">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-4" href="shop.php">Shop</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-4" href="contact.html">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link me-4" href="checkout.html">Checkout</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link me-4 dropdown-toggle link-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Pages</a>
                  <ul class="dropdown-menu">
                    <li>
                      <a href="about.html" class="dropdown-item">About</a>
                    </li>
                    <li>
                      <a href="blog.html" class="dropdown-item">Blog</a>
                    </li>
                    <li>
                      <a href="shop.php" class="dropdown-item">Shop</a>
                    </li>
                    <li>
                      <a href="cart.php" class="dropdown-item">Cart</a>
                    </li>
                    <li>
                      <a href="checkout.html" class="dropdown-item">Checkout</a>
                    </li>
                    <li>
                      <a href="single-post.html" class="dropdown-item">Single Post</a>
                    </li>
                    <li>
                      <a href="single-product.html" class="dropdown-item">Single Product</a>
                    </li>
                    <li>
                      <a href="contact.html" class="dropdown-item">Contact</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <div class="user-items ps-5">
                    <ul class="d-flex justify-content-end list-unstyled">
                      <li class="search-item pe-3">
                        <a href="#" class="search-button">
                          <svg class="search">
                            <use xlink:href="#search"></use>
                          </svg>
                        </a>
                      </li>
                      <li class="pe-3">
                        <a href="#">
                          <svg class="user">
                            <use xlink:href="#user"></use>
                          </svg>
                        </a>
                      </li>
                      <li>
                        <a href="cart.html">
                          <svg class="cart">
                            <use xlink:href="#cart"></use>
                          </svg>
                        </a>
                      </li>
                    </ul>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <section id="selling-product" class="single-product padding-xlarge">
      <div class="container">
        <div class="row mt-5">
          <div class="col-lg-6">
            <div class="product-preview mb-3">
              <img src="images/singel-product-item.jpg" alt="single-product" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="product-info">
              <div class="element-header">
                <h3 itemprop="name" class="display-7 text-uppercase">Pink Watch</h3>
                <div class="rating-container d-flex align-items-center">
                  <div class="rating" data-rating="1" onclick=rate(1)>
                    <svg class="star star-fill">
                      <use xlink:href="#star-fill"></use>
                    </svg>
                    <span class="rating-count ps-2">5.2</span>
                  </div>
                </div>
              </div>
              <div class="product-price pt-3 pb-3">
                <strong class="text-primary display-6 fw-bold">$870.00</strong>
              </div>
              <p>
Introducing the Pink Digital Watch: a sleek, modern timepiece that seamlessly combines style with cutting-edge technology. Its vibrant pink hue adds a bold touch to your look, while the digital display ensures easy readability of the time, date, and other features. Stay ahead of the curve with this chic accessory that's as functional as it is fashionable.</p>
              <div class="cart-wrap padding-small">
                <div class="color-options product-select">
                  <div class="color-toggle" data-option-index="0">
                    <h4 class="item-title text-uppercase text-dark text-decoration-underline">Color:</h4>
                    <ul class="select-list list-unstyled d-flex">
                      <li class="select-item pe-3" data-val="Green" title="Green">
                        <a href="#">Green</a>
                      </li>
                      <li class="select-item pe-3" data-val="Orange" title="Orange">
                        <a href="#">Orange</a>
                      </li>
                      <li class="select-item pe-3" data-val="Red" title="Red">
                        <a href="#">Red</a>
                      </li>
                      <li class="select-item" data-val="Black" title="Black">
                        <a href="#">Black</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="product-quantity">
                  <div class="stock-number text-dark">2 in stock</div>
                  <div class="stock-button-wrap pt-3">

                   <div class="input-group product-qty">
    <span class="input-group-btn">
        <button type="button" class="quantity-left-minus btn btn-number"  data-type="minus" data-field="">
            -
        </button>
    </span>
    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
    <span class="input-group-btn">
        <button type="button" class="quantity-right-plus btn btn-number" data-type="plus" data-field="">
            +
        </button>
    </span>
</div>
     <div class="qty-button d-flex flex-wrap pt-3">
        <a href="cart.php" class="btn btn-black btn-medium text-uppercase mt-3">Add to cart</a>
                   
                    </div>
                  </div>
                </div>
              </div>
              <div class="meta-product py-2">
                <div class="meta-item d-flex align-items-baseline">
                  <h4 class="item-title no-margin pe-2">SKU:</h4>
                  <ul class="select-list list-unstyled d-flex">
                    <li data-value="S" class="select-item">1223</li>
                  </ul>
                </div>
                <div class="meta-item d-flex align-items-baseline">
                  <h4 class="item-title no-margin pe-2">Category:</h4>
                  <ul class="select-list list-unstyled d-flex">
                    <li data-value="S" class="select-item">
                      <a href="#">Watch</a>,
                    </li>
                    <li data-value="S" class="select-item">
                      <a href="#"> Screen touch</a>,
                    </li>
                  </ul>
                </div>
                <div class="meta-item d-flex align-items-baseline">
                  <h4 class="item-title no-margin pe-2">Tags:</h4>
                  <ul class="select-list list-unstyled d-flex">
                    <li data-value="S" class="select-item">
                      <a href="#">Classic</a>,
                    </li>
                    <li data-value="S" class="select-item">
                      <a href="#"> Modern</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="product-info-tabs">
      <div class="container">
        <div class="row">
          <div class="tabs-listing">
            <nav>
              <div class="nav nav-tabs d-flex flex-wrap justify-content-center" id="nav-tab" role="tablist">
                <button class="nav-link active text-uppercase pe-5" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Description</button>
                <button class="nav-link text-uppercase pe-5" id="nav-information-tab" data-bs-toggle="tab" data-bs-target="#nav-information" type="button" role="tab" aria-controls="nav-information" aria-selected="false">Additional information</button>
                <button class="nav-link text-uppercase pe-5" id="nav-review-tab" data-bs-toggle="tab" data-bs-target="#nav-review" type="button" role="tab" aria-controls="nav-review" aria-selected="false">Reviews</button>
              </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active border-top border-bottom padding-small" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <p>Product Description</p>
                <p>Elevate your wristwear game with this standout timepiece that's as functional as it is fashionable. Crafted with precision engineering and a keen eye for style, this Pink Digital Watch is the epitome of modern accessory design.</p>
                <ul style="list-style-type:disc;" class="list-unstyled ps-4">
                  <li>Water-Resistant: No need to worry about unexpected splashes or rain showers—the watch's water-resistant casing keeps it protected, so you can go about your day with confidence, rain or shine.</li>
                  <li>Durable Construction: Built to withstand the rigors of daily wear, this watch features a robust construction that ensures longevity. Whether you're tackling your workout routine or navigating your busy day, this timepiece is up to the task.</li>
                  <li>Customizable Watch Faces: Personalize your timekeeping experience with our Pink Digital Watch's array of customizable watch faces. Choose from a variety of designs and themes to suit your mood, outfit, or occasion. Whether you prefer sleek minimalism, bold graphics, or classic elegance, there's a watch face to match your unique style.</li>
                </ul> 
                <p>Experience the convenience of hands-free assistance with our Pink Digital Watch's interactive virtual assistant. Powered by advanced AI technology, it responds to your voice commands, providing instant access to information, reminders, and assistance whenever you need it. Whether you're setting reminders, checking the weather, or searching for directions, our virtual assistant is always ready to help, keeping you organized and productive throughout your day.</p>
              </div>
              <div class="tab-pane fade border-top border-bottom padding-small" id="nav-information" role="tabpanel" aria-labelledby="nav-information-tab">
                <p>It is Comfortable and Best</p>
                <p>Enhanced Security Features:Protect your personal data and privacy with our Pink Digital Watch's enhanced security features. From biometric authentication methods like fingerprint scanning to advanced encryption protocols, your information remains secure and confidential at all times. Whether you're accessing sensitive apps or making secure transactions, you can trust in the watch's robust security measures to safeguard your digital identity.</p>
                <p>Intuitive Gesture Controls: Navigate through your watch's features with ease using intuitive gesture controls. Swipe, tap, and pinch to interact with your watch's interface, accessing apps, notifications, and settings with simple gestures. With smooth and responsive touch sensitivity, it's like having a miniature touchscreen computer on your wrist, putting the power of technology at your fingertips.</p>
             <p>Multi-Day Battery Life: Enjoy extended usage without the need for constant recharging, thanks to our Pink Digital Watch's impressive battery life. With efficient power management and optimized performance, it delivers multi-day battery life on a single charge, keeping up with your busy lifestyle without interruption. Whether you're traveling, working, or exploring, you can rely on your watch to stay powered throughout the day and beyond.</p>
              <p>Compatibility with Multiple Platforms: Experience versatility and flexibility with our Pink Digital Watch's compatibility with multiple platforms. Whether you're an Android enthusiast or an iOS aficionado, our watch seamlessly integrates with your preferred ecosystem, providing a cohesive and integrated experience across devices. From smartphone notifications to app compatibility, enjoy full functionality regardless of your device preference.</p>
              </div>
              <div class="tab-pane fade border-top border-bottom padding-small" id="nav-review" role="tabpanel" aria-labelledby="nav-review-tab">
                <div class="review-box d-flex flex-wrap">
                  <div class="col-lg-6 d-flex flex-wrap">
                    <div class="col-md-2">
                      <div class="image-holder">
                        <img src="images/review-item1.jpg" alt="review" class="img-fluid">
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="review-content">
                        <div class="rating-container d-flex align-items-center">
                          <div class="rating" data-rating="1" onclick="rate(1)">
                            <i class="icon icon-star"></i>
                          </div>
                          <div class="rating" data-rating="2" onclick="rate(1)">
                            <i class="icon icon-star"></i>
                          </div>
                          <div class="rating" data-rating="3" onclick="rate(1)">
                            <i class="icon icon-star"></i>
                          </div>
                          <div class="rating" data-rating="4" onclick="rate(1)">
                            <i class="icon icon-star-half"></i>
                          </div>
                          <div class="rating" data-rating="5" onclick="rate(1)">
                            <i class="icon icon-star-empty"></i>
                          </div>
                          <span class="rating-count">(3.5)</span>
                        </div>
                        <div class="review-header">
                          <span class="author-name">Tina Johnson</span>
                          <span class="review-date">– 03/07/2023</span>
                        </div>
                        <p>Stunning Design, Seamless Connectivity! The Pink Digital Watch is a game-changer. Its vibrant pink color is eye-catching, and its smart features keep me connected effortlessly. Highly recommended!</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex flex-wrap">
                    <div class="col-md-2">
                      <div class="image-holder">
                        <img src="images/review-item2.jpg" alt="review" class="img-fluid">
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="review-content">
                        <div class="rating-container d-flex align-items-center">
                          <div class="rating" data-rating="1" onclick="rate(1)">
                            <i class="icon icon-star"></i>
                          </div>
                          <div class="rating" data-rating="2" onclick="rate(1)">
                            <i class="icon icon-star"></i>
                          </div>
                          <div class="rating" data-rating="3" onclick="rate(1)">
                            <i class="icon icon-star"></i>
                          </div>
                          <div class="rating" data-rating="4" onclick="rate(1)">
                            <i class="icon icon-star-half"></i>
                          </div>
                          <div class="rating" data-rating="5" onclick="rate(1)">
                            <i class="icon icon-star-empty"></i>
                          </div>
                          <span class="rating-count">(3.5)</span>
                        </div>
                        <div class="review-header">
                          <span class="author-name">Jenny Willis</span>
                          <span class="review-date">– 03/06/2022</span>
                        </div>
                        <p>Impressive Value! The Pink Digital Watch is stylish and functional. Its digital display is easy to read, and its features like fitness tracking and wireless charging make it a great buy./p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="related-products" class="product-store position-relative padding-large">
      <div class="container">
        <div class="row">
          <div class="display-header d-flex justify-content-between pb-3">
            <h2 class="display-7 text-dark text-uppercase">Related Products</h2>
            <div class="btn-right">
              <a href="shop.php" class="btn btn-medium btn-normal text-uppercase">Go to Shop</a>
            </div>
          </div>
          <div class="swiper product-swiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/product-item1.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <div class="btn-left">
                        <a href="#" class="btn btn-medium btn-black">Add to Cart</a>
                        <svg class="cart-outline position-absolute">
                          <use xlink:href="#cart-outline"></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Iphone 10</a>
                    </h3>
                    <span class="item-price text-primary">$980</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/product-item2.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <div class="btn-left">
                        <a href="#" class="btn btn-medium btn-black">Add to Cart</a>
                        <svg class="cart-outline position-absolute">
                          <use xlink:href="#cart-outline"></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Iphone 11</a>
                    </h3>
                    <span class="item-price text-primary">$1100</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/product-item3.jpg" alt="product-item" class="img-fluid">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <div class="btn-left">
                        <a href="#" class="btn btn-medium btn-black">Add to Cart</a>
                        <svg class="cart-outline position-absolute">
                          <use xlink:href="#cart-outline"></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Iphone 8</a>
                    </h3>
                    <span class="item-price text-primary">$780</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/product-item4.jpg" alt="product-item" class="product-image">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <div class="btn-left">
                        <a href="#" class="btn btn-medium btn-black">Add to Cart</a>
                        <svg class="cart-outline position-absolute">
                          <use xlink:href="#cart-outline"></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Iphone 13</a>
                    </h3>
                    <span class="item-price text-primary">$1500</span>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="product-card position-relative">
                  <div class="image-holder">
                    <img src="images/product-item5.jpg" alt="product-item" class="product-image">
                  </div>
                  <div class="cart-concern position-absolute">
                    <div class="cart-button d-flex">
                      <div class="btn-left">
                        <a href="#" class="btn btn-medium btn-black">Add to Cart</a>
                        <svg class="cart-outline position-absolute">
                          <use xlink:href="#cart-outline"></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="card-detail d-flex justify-content-between align-items-baseline pt-3">
                    <h3 class="card-title text-uppercase">
                      <a href="#">Iphone 12</a>
                    </h3>
                    <span class="item-price text-primary">$1300</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-pagination position-absolute text-center"></div>
    </section>
    <br>
    <br>
    <?php include("includes/footer.php")?>
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script>document.addEventListener("DOMContentLoaded", function() {
    var quantityInput = document.getElementById('quantity');
    var stockQuantity = 2; 
    document.querySelector('.quantity-right-plus').addEventListener('click', function() {
        var currentValue = parseInt(quantityInput.value);
        if (currentValue < stockQuantity) {
            quantityInput.value = currentValue + 1;
        } else {
            alert('Cannot add more than available in stock.');
        }
    });

    document.querySelector('.quantity-left-minus').addEventListener('click', function() {
        var currentValue = parseInt(quantityInput.value);
        if (currentValue > 1) {
            quantityInput.value = currentValue - 1;
        }
    });
});
</script>
  </body>

<!-- Mirrored from demo.templatesjungle.com/ministore/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Mar 2024 20:00:01 GMT -->
</html>
