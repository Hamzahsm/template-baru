<?php
if(isset($_POST['login'])){
  echo"<script> document.location.href = './dashboard';</script>";
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="mmopilot, boosting service">
    <title>MMOPILOT - Power Leveling Service</title>

    <!-- CSS -->
    <link href="assets/css/fonts/etline-font.min.css" rel="stylesheet">
<!--     <link href="assets/css/fonts/fontawesome/all.min.css" rel="stylesheet"> -->
    <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
<!--     <link href="assets/css/fonts/themify-icons.css" rel="stylesheet"> -->

    <link href="assets/plugins/owl.carousel/owl.carousel.min.css" rel="stylesheet">

    <link href="assets/css/main.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
    <link rel="icon" href="assets/img/MMOpilot-logo-rocket.png">
 
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

        <!-- css live search ada di bawah -->
        <style>
          #result {
          position: absolute;
          width: 100%;
          max-width:870px;
          cursor: pointer;
          overflow-y: auto;
          max-height: 400px;
          box-sizing: border-box; 
          z-index: 1001;
          }
          .link-class:hover{
          background-color:#f1f1f1;
          }
        </style>
  </head>
  <body class="page-body">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-nav zi-3">
      <div class="container">
        <div class="row">
          <div class="col-4 col-sm-3 col-md-2 mr-auto">
            <a class="navbar-brand logo" href="#">
              <img src="assets/img/pilot baru.png" alt="Wicodus" class="" width="435px" height="116">
            </a>
          </div>

          <!-- our search query start here -->
          <div class="col-4 d-none d-lg-block mx-auto">
              <form action="search.php" method="get" class="input-group border-0 bg-transparent">
                  <input type="text" name="keyword" placeholder="Type here..." autocomplete="off" class="form-control live-search-box">
                  <button type="submit" name="cari" class="btn btn-sm btn-warning text-secondary my-0 mx-0"><i class="fas fa-search">Search</i></button>
              </form>
          </div>
          <div class="col-8 col-sm-8 col-md-8 col-lg-6 col-xl-4 ml-auto text-right">
            <a class="btn btn-sm btn-warning text-secondary mr-2" href="#" data-toggle="modal" data-target="#userLogin">Sign in</a>
            <a class="btn btn-sm text-light d-none d-sm-inline-block" href="#">Sign up</a>
            <ul class="nav navbar-nav d-none d-sm-inline-flex flex-row">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle small" href="#" id="dropdownGaming" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="mr-2 fas fa-globe"></i>EN </a>
                <div class="dropdown-menu position-absolute" aria-labelledby="dropdownGaming">
                  <a class="dropdown-item" href="#">English</a>
                  <a class="dropdown-item" href="#">Deutsch</a>
                  <a class="dropdown-item" href="#">Espa??ol</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link small" href="" data-toggle="offcanvas" data-target="#offcanvas-cart">
                  <span class="p-relative d-inline-flex">
                    <span class="badge-cart badge badge-counter badge-warning position-absolute l-1">2</span>
                    <i class="fas fa-shopping-cart"></i>
                  </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <button class="navbar-toggler navbar-toggler-fixed" type="button" data-toggle="collapse" data-target="#collapsingNavbar" aria-controls="collapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">???</button>
        <div class="collapse navbar-collapse" id="collapsingNavbar">
          <ul class="navbar-nav">
            <li class="nav-item dropdown dropdown-hover">
              <a class="nav-link dropdown-toggle pl-lg-0" href="#" id="dropdownGaming_games" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products </a>
              <div class="dropdown-menu dropdown-menu-dark-lg" aria-labelledby="dropdownGaming_games">
                <a class="dropdown-item" href="./product-category/new-world.php">New World</a>
                <a class="dropdown-item" href="./product-category/guildwars-2.php">Guild Wars 2</a>
                <a class="dropdown-item" href="./product-category/albion.php">Albion Online</a>
                <a class="dropdown-item" href="./shop.php">All Product</a>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link " href="./guide.php">Guide </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="./contact.html">Contact </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://online.pubhtml5.com/gdbb/tzfn/#p=1">Catalog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://discord.com/invite/BMWz8vq" target="_blank">Promo</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- header -->
    <header class="header">
      <div id="carousel_main" class="carousel carousel-header slide carousel-fade fl-scn" data-ride="carousel">
        <!-- Indicators -->
        <div class="po_carousel__wrapper">
            <ol class="list-unstyled carousel-indicators def po_carousel-indicators">
              <li data-target="#carousel_main" data-slide-to="0" class=""></li>
              <li data-target="#carousel_main" data-slide-to="1" class=""></li>
              <li data-target="#carousel_main" data-slide-to="2" class="active"></li>
            </ol>
        </div>
        <!-- Carousel items -->
        <div class="carousel-inner a-cont">
          <!-- carousel-item -->
          <div class="carousel-item active">
            <div class="h-fullscreen__page bs-c br-n ow-h" style="background-image: url(https://mmopilot.com/wp-content/uploads/2021/12/gw2.png);">
              <div class="w-100 d-flex jc-c overlay">
                <!-- sm-overlay -->
                <div class="overlay bg-light_A-20 d-lg-none"></div>
                <div class="overlay bg-dark_A-50 d-lg-none"></div>
                <!-- lg-overlay -->
                <div class="d-none d-lg-block position-absolute triangle-bottomleft a-out carousel-shape__light light_A-2" data-carousel-animation="fade"></div>
                <div class="d-none d-lg-block position-absolute triangle-bottomleft a-out carousel-shape ad-200ms" data-carousel-animation="fade"></div>
              </div>
              <div class="d-flex align-items-center h-100">
                <div class="container">
                  <div class="row align-items-center h-100">
                    <div class="col-12 mr-auto ml-lg-0 col-lg-5">
                      <div class="main_carousel__content ad-900ms fadeIn text-light px-8 px-md-6 mx-lg-4 mx-xl-0">
                        <h2 class="carousel__heading text-light fadeInDown ad-500ms">Guild Wars 2</h2>
                        <p class="carousel__text lead-1 mb-6 fadeInDown ad-600ms">Guild Wars 2 is a massively multiplayer online role-playing game developed by ArenaNet and published by NCSoft and ArenaNet. Set in the fantasy world of Tyria, the game follows the re-emergence of Destiny's Edge</p>
                        <div class="d-flex fadeInLeft ad-900ms">
                        <a href="./product-category/guildwars-2.php" class="btn btn-lg btn-light parallelogram br-round-0tl br-round-0bl un_text mb-0"><span class="d-block">Show Service</span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.carousel-item -->

          <!-- carousel-item -->
          <div class="carousel-item">
            <div class="h-fullscreen__page bs-c br-n ow-h" style="background-image: url(assets/img/content/carousel/choose-3.png);"> 
              <div class="w-100 d-flex jc-c overlay">
                <!-- sm-overlay -->
                <div class="overlay bg-light_A-20 d-lg-none"></div>
                <div class="overlay bg-dark_A-50 d-lg-none"></div>
                <!-- lg-overlay -->
                <div class="d-none d-lg-block position-absolute triangle-bottomleft a-out carousel-shape__light light_A-2" data-carousel-animation="fade"></div>
                <div class="d-none d-lg-block position-absolute triangle-bottomleft a-out carousel-shape ad-200ms" data-carousel-animation="fade"></div>
              </div>
              <div class="d-flex align-items-center h-100">
                <div class="container">
                  <div class="row align-items-center h-100">
                    <div class="col-12 mr-auto ml-lg-0 col-lg-5">
                      <div class="main_carousel__content ad-900ms fadeIn text-light px-8 px-md-6 mx-lg-4 mx-xl-0">
                        <h2 class="carousel__heading text-light fadeInDown ad-500ms">Albion Online</h2>
                        <p class="carousel__text lead-1 mb-6 fadeInDown ad-600ms">Albion Online (AP) is a free medieval fantasy MMORPG developed by Sandbox Interactive, a studio based in Berlin, Germany. Albion online is based on The Arthurian legends</p>
                        <div class="d-flex fadeInLeft ad-900ms">
                        <a href="./product-category/albion.php" class="btn btn-lg btn-light parallelogram br-round-0tl br-round-0bl un_text mb-0"><span class="d-block">Show Service</span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.carousel-item -->

          <!-- carousel-item -->
          <div class="carousel-item">
            <div class="h-fullscreen__page bs-c br-n ow-h" style="background-image: url(https://mmopilot.com/wp-content/uploads/2021/12/NW.png);">
              <div class="w-100 d-flex jc-c overlay">
                <!-- sm-overlay -->
                <div class="overlay bg-light_A-20 d-lg-none"></div>
                <div class="overlay bg-dark_A-50 d-lg-none"></div>
                <!-- lg-overlay -->
                <div class="d-none d-lg-block position-absolute triangle-bottomleft a-out carousel-shape__light light_A-2" data-carousel-animation="fade"></div>
                <div class="d-none d-lg-block position-absolute triangle-bottomleft a-out carousel-shape ad-200ms" data-carousel-animation="fade"></div>
              </div>
              <div class="d-flex align-items-center h-100">
                <div class="container">
                  <div class="row align-items-center h-100">
                    <div class="col-12 mr-auto ml-lg-0 col-lg-5">
                      <div class="main_carousel__content ad-900ms fadeIn text-light px-8 px-md-6 mx-lg-4 mx-xl-0">
                        <h2 class="carousel__heading text-light fadeInDown ad-500ms">New World</h2>
                        <p class="carousel__text lead-1 mb-6 fadeInDown ad-600ms">New World is a massively multiplayer online role-playing game (MMORPG) developed by Amazon Games Orange County and published by Amazon Games released on September 28, 2021.</p>
                        <div class="d-flex fadeInLeft ad-900ms">
                        <a href="./product-category/new-world.php" class="btn btn-lg btn-light parallelogram br-round-0tl br-round-0bl un_text mb-0"><span class="d-block">Show Service</span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.carousel-item -->
        </div>
        <!-- Carousel nav -->
        <div class="carousel-control-prev a-out-t"><a class="text-light" href="#carousel_main" data-slide="prev"><span class="icon-cl-prev text-shadow pe-7s-angle-left"></span></a></div>
        <div class="carousel-control-next a-out-t"><a class="text-light" href="#carousel_main" data-slide="next"><span class="icon-cl-next text-shadow pe-7s-angle-right"></span></a></div>
      </div>
    </header>
    <!-- /.header -->

    <!-- main content -->
    <main class="main-content">

      <!-- content area -->
      <section class="content-section owl-carousel-spotlight carousel-spotlight ig-carousel text-light" style="background-image: url(assets/img/bg/bg_shape.png);">
        <div class="container">
          <header class="header">
            <h2>Most popular products</h2>
          </header>
          <div class="position-relative">
            <!-- nav tabs -->
            <ul class="spotlight-tabs spotlight-tabs-dark nav nav-tabs border-0 mb-5 position-relative flex-nowrap" id="most_popular_products-carousel" role="tablist">
              <li class="nav-item text-fnwp pg-none relative">
                <a class="nav-link active" id="mp-01-tab" data-toggle="tab" href="#mp-01-c" role="tab" aria-controls="mp-01-c" aria-selected="true">New</a>
              </li>
              <li class="nav-item text-fnwp relative">
                <a class="nav-link" id="mp-02-tab" data-toggle="tab" href="#mp-02-c" role="tab" aria-controls="mp-02-c" aria-selected="false">Highlights</a>
              </li>
              <li class="nav-item text-fnwp relative">
                <a class="nav-link" id="mp-03-tab" data-toggle="tab" href="#mp-03-c" role="tab" aria-controls="mp-03-c" aria-selected="false">Coming Soon</a>
              </li>
            </ul>
            <!-- /.nav tabs -->
            <!-- tab panes -->
            <div id="color_sel_Carousel-content" class="tab-content fl-scn relative w-100">

              <!-- tab item -->
              <div class="tab-pane fade show active" id="mp-01-c" role="tabpanel" aria-labelledby="mp-01-tab">
                <div class="owl-carousel gs-carousel" data-carousel-margin="30" data-carousel-nav="true" data-carousel-navText="<span class='icon-cl-next pe-7s-angle-left'></span>, <span class='icon-cl-next pe-7s-angle-right'></span>">
                  <!-- item -->
                  <div class="item">
                    <div class="item-cont">
                      <figure class="owl_item_review">
                        <div>
                          <div class="position-relative overflow-hidden">
                            <img class="m-0-auto" src="assets/img/content/cont/LONG_GOLD_COIN_NEW_WORLD_MMOPILOT.png" alt="Games Store">
                            <div class="review_h text-light">
                              <a href="./product/new-world-gold.html">
                                <i class="item_icon_cart fas fa-shopping-cart"></i>
                                <span class="item_atc_text">DETAIL</span>
                              </a>
                            </div>
                          </div>
                          <div>
                            <h5 class="owl_item_title text-lt"><a href="">Gold New World</a></h5>
                            <div class="relative small-1">
                              <span class="owl_item_price">???44.99</span>
                              <span class="owl_item_genre">
                                MMORPG, NEW WORLD
                              </span>
                            </div>
                          </div>
                        </div>
                      </figure>
                    </div>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="item">
                    <div class="item-cont">
                      <figure class="owl_item_review">
                        <div>
                          <div class="position-relative overflow-hidden">
                            <img class="m-0-auto" src="assets/img/content/cont/LONG_POWER_LEVELING_1_60_NEW_WORLD_MMOPILOT.png" alt="Games Store">
                            <div class="review_h text-light">
                              <a href="./product/new-world-1-60-1-max-gathering.html">
                                <i class="item_icon_cart fas fa-shopping-cart"></i>
                                <span class="item_atc_text">DETAIL</span>
                              </a>
                            </div>
                          </div>
                          <div>
                            <h5 class="owl_item_title text-lt"><a href="">Power Leveling 1-60 New World</a></h5>
                            <div class="relative small-1">
                              <span class="owl_item_price">???44.99</span>
                              <span class="owl_item_genre">
                                MMORPG, NEW WORLD
                              </span>
                            </div>
                          </div>
                        </div>
                      </figure>
                    </div>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="item">
                    <div class="item-cont">
                      <figure class="owl_item_review">
                        <div>
                          <div class="position-relative overflow-hidden">
                            <img class="m-0-auto" src="assets/img/content/cont/LONG_POWER_LEVELING_41_60_NEW_WORLD_MMOPILOT.png" alt="Games Store">
                            <div class="review_h text-light">
                              <a href="./product/new-world-level-41-60.html">
                                <i class="item_icon_cart fas fa-shopping-cart"></i>
                                <span class="item_atc_text">DETAIL</span>
                              </a>
                            </div>
                          </div>
                          <div>
                            <h5 class="owl_item_title text-lt"><a href="">POWER LEVELING 41-60</a></h5>
                            <div class="relative small-1">
                              <span class="owl_item_price">???44.99</span>
                              <span class="owl_item_genre">
                                MMORPG, NEW WORLD
                              </span>
                            </div>
                          </div>
                        </div>
                      </figure>
                    </div>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="item">
                    <div class="item-cont">
                      <figure class="owl_item_review">
                        <div>
                          <div class="position-relative overflow-hidden">
                            <img class="m-0-auto" src="assets/img/content/cont/LONG_REFINING_SMELTING_NEW_WORLD_MMOPILOT.png" alt="Games Store">
                            <div class="review_h text-light">
                              <a href="./product/new-world-smelting.html">
                                <i class="item_icon_cart fas fa-shopping-cart"></i>
                                <span class="item_atc_text">DETAIL</span>
                              </a>
                            </div>
                          </div>
                          <div>
                            <h5 class="owl_item_title text-lt"><a href="">SMELTING</a></h5>
                            <div class="relative small-1">
                              <span class="owl_item_price">???44.99</span>
                              <span class="owl_item_genre">
                                MMORPG, NEW WORLD
                              </span>
                            </div>
                          </div>
                        </div>
                      </figure>
                    </div>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="item">
                    <div class="item-cont">
                      <figure class="owl_item_review">
                        <div>
                          <div class="position-relative overflow-hidden">
                            <img class="m-0-auto" src="assets/img/content/cont/LONG_REFINING_WEAVING_NEW_WORLD_MMOPILOT.png" alt="Games Store">
                            <div class="review_h text-light">
                              <a href="./product/new-world-weaving.html">
                                <i class="item_icon_cart fas fa-shopping-cart"></i>
                                <span class="item_atc_text">DETAIL</span>
                              </a>
                            </div>
                          </div>
                          <div>
                            <h5 class="owl_item_title text-lt"><a href="">REFINING WEAVING</a></h5>
                            <div class="relative small-1">
                              <span class="owl_item_price">???44.99</span>
                              <span class="owl_item_genre">
                                MMORPG, NEW WORLD
                              </span>
                            </div>
                          </div>
                        </div>
                      </figure>
                    </div>
                  </div>
                  <!-- /.item -->
                </div>
              </div>
              <!-- /.tab item -->

              <!-- tab item -->
              <div class="tab-pane fade" id="mp-02-c" role="tabpanel" aria-labelledby="mp-02-tab">
                <div class="owl-carousel gs-carousel" data-carousel-margin="30" data-carousel-nav="true" data-carousel-navText="<span class='icon-cl-next pe-7s-angle-left'></span>, <span class='icon-cl-next pe-7s-angle-right'></span>">
                  <!-- item -->
                  <div class="item">
                    <div class="item-cont">
                      <figure class="owl_item_review">
                        <div>
                          <div class="position-relative overflow-hidden">
                            <img class="m-0-auto" src="https://mmopilot.com/wp-content/uploads/2019/09/max-mastery-HoT-guild-wars-2-mmopilot.png" alt="Games Store">
                            <div class="review_h text-light">
                              <a href="./product/guild-wars-2-max-mastery-hot.html">
                                <i class="item_icon_cart fas fa-shopping-cart"></i>
                                <span class="item_atc_text">DETAIL</span>
                              </a>
                            </div>
                          </div>
                          <div>
                            <h5 class="owl_item_title text-lt"><a href="">Max Mastery HOT</a></h5>
                            <div class="relative small-1">
                              <span class="owl_item_price">???44.99</span>
                              <span class="owl_item_genre">
                                MMORPG, GUILD WARS
                              </span>
                            </div>
                          </div>
                        </div>
                      </figure>
                    </div>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="item">
                    <div class="item-cont">
                      <figure class="owl_item_review">
                        <div>
                          <div class="position-relative overflow-hidden">
                            <img class="m-0-auto" src="https://mmopilot.com/wp-content/uploads/2021/07/mastery-crafting-tyria-guild-wars-2-mmopilot.png" alt="Games Store">
                            <div class="review_h text-light">
                              <a href="./product/mastery-crafting-tyria.html">
                                <i class="item_icon_cart fas fa-shopping-cart"></i>
                                <span class="item_atc_text">DETAIL</span>
                              </a>
                            </div>
                          </div>
                          <div>
                            <h5 class="owl_item_title text-lt"><a href="">Mastery Crafting Tyria</a></h5>
                            <div class="relative small-1">
                              <span class="owl_item_price">???44.99</span>
                              <span class="owl_item_genre">
                                MMOPRG, GUILD WARS 2
                              </span>
                            </div>
                          </div>
                        </div>
                      </figure>
                    </div>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="item">
                    <div class="item-cont">
                      <figure class="owl_item_review">
                        <div>
                          <div class="position-relative overflow-hidden">
                            <img class="m-0-auto" src="https://mmopilot.com/wp-content/uploads/2021/03/legendary-weapon-pharus-guild-wars-2-mmopilot.png" alt="Games Store">
                            <div class="review_h text-light">
                              <a href="./product/legendary-weapon-pharus.html">
                                <i class="item_icon_cart fas fa-shopping-cart"></i>
                                <span class="item_atc_text">DETAIL</span>
                              </a>
                            </div>
                          </div>
                          <div>
                            <h5 class="owl_item_title text-lt"><a href="">Legendary Weapon Pharus</a></h5>
                            <div class="relative small-1">
                              <span class="owl_item_price">???44.99</span>
                              <span class="owl_item_genre">
                                MMORPG, GUILD WARS 2
                              </span>
                            </div>
                          </div>
                        </div>
                      </figure>
                    </div>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="item">
                    <div class="item-cont">
                      <figure class="owl_item_review">
                        <div>
                          <div class="position-relative overflow-hidden">
                            <img class="m-0-auto" src="https://mmopilot.com/wp-content/uploads/2021/03/envoy-I-guild-wars-2-mmopilot.png" alt="Games Store">
                            <div class="review_h text-light">
                              <a href="./product/envoy-i.html">
                                <i class="item_icon_cart fas fa-shopping-cart"></i>
                                <span class="item_atc_text">DETAIL</span>
                              </a>
                            </div>
                          </div>
                          <div>
                            <h5 class="owl_item_title text-lt"><a href="">ENVOY 1</a></h5>
                            <div class="relative small-1">
                              <span class="owl_item_price">???44.99</span>
                              <span class="owl_item_genre">
                                MMORPG, GUILD WARS 2
                              </span>
                            </div>
                          </div>
                        </div>
                      </figure>
                    </div>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="item">
                    <div class="item-cont">
                      <figure class="owl_item_review">
                        <div>
                          <div class="position-relative overflow-hidden">
                            <img class="m-0-auto" src="https://mmopilot.com/wp-content/uploads/2021/07/diamond-2000-guild-wars-2-mmopilot.png" alt="Games Store">
                            <div class="review_h text-light">
                              <a href="./product/diamond-2000.html">
                                <i class="item_icon_cart fas fa-shopping-cart"></i>
                                <span class="item_atc_text">DETAIL</span>
                              </a>
                            </div>
                          </div>
                          <div>
                            <h5 class="owl_item_title text-lt"><a href="">CASH DIAMOND </a></h5>
                            <div class="relative small-1">
                              <span class="owl_item_price">???44.99</span>
                              <span class="owl_item_genre">
                                MMORPG, GUILD WARS
                              </span>
                            </div>
                          </div>
                        </div>
                      </figure>
                    </div>
                  </div>
                  <!-- /.item -->
                </div>
              </div>
              <!-- /.tab item -->

              <!-- tab item -->
              <div class="tab-pane fade" id="mp-03-c" role="tabpanel" aria-labelledby="mp-03-tab">
                <div class="owl-carousel gs-carousel" data-carousel-margin="30" data-carousel-nav="true" data-carousel-navText="<span class='icon-cl-next pe-7s-angle-left'></span>, <span class='icon-cl-next pe-7s-angle-right'></span>">
                  <!-- item -->
                  <div class="item">
                    <div class="item-cont">
                      <figure class="owl_item_review">
                        <div>
                          <div class="position-relative overflow-hidden">
                            <img class="m-0-auto" src="https://mmopilot.com/wp-content/uploads/2020/06/leveling-T1T5-pve-fame-albion-online-mmopilot.png" alt="Games Store">
                            <div class="review_h text-light">
                              <a href="./product/leveling-pve-fame-t1-t5.html">
                                <i class="item_icon_cart fas fa-shopping-cart"></i>
                                <span class="item_atc_text">DETAIL</span>
                              </a>
                            </div>
                          </div>
                          <div>
                            <h5 class="owl_item_title text-lt"><a href="">Leveling T1-T5 PVE FAME</a></h5>
                            <div class="relative small-1">
                              <span class="owl_item_price">???44.99</span>
                              <span class="owl_item_genre">
                                Action, Albion Online
                              </span>
                            </div>
                          </div>
                        </div>
                      </figure>
                    </div>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="item">
                    <div class="item-cont">
                      <figure class="owl_item_review">
                        <div>
                          <div class="position-relative overflow-hidden">
                            <img class="m-0-auto" src="https://mmopilot.com/wp-content/uploads/2020/06/gear-weapon-craft-t1t6-albion-online-mmopilot.png" alt="Games Store">
                            <div class="review_h text-light">
                              <a href="./product/gear-and-weapon-craft-t1-t6.html">
                                <i class="item_icon_cart fas fa-shopping-cart"></i>
                                <span class="item_atc_text">DETAIL</span>
                              </a>
                            </div>
                          </div>
                          <div>
                            <h5 class="owl_item_title text-lt"><a href="">Gear and Weapon Craft T1 - T6</a></h5>
                            <div class="relative small-1">
                              <span class="owl_item_price">???44.99</span>
                              <span class="owl_item_genre">
                                Action, Albion Online
                              </span>
                            </div>
                          </div>
                        </div>
                      </figure>
                    </div>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="item">
                    <div class="item-cont">
                      <figure class="owl_item_review">
                        <div>
                          <div class="position-relative overflow-hidden">
                            <img class="m-0-auto" src="https://mmopilot.com/wp-content/uploads/2020/06/leveling-T6T7-pve-fame-albion-mmopilot.png" alt="Games Store">
                            <div class="review_h text-light">
                              <a href="./product/gathering-t6-t7.html">
                                <i class="item_icon_cart fas fa-shopping-cart"></i>
                                <span class="item_atc_text">DETAIL</span>
                              </a>
                            </div>
                          </div>
                          <div>
                            <h5 class="owl_item_title text-lt"><a href="">Gathering T6-T7</a></h5>
                            <div class="relative small-1">
                              <span class="owl_item_price">???44.99</span>
                              <span class="owl_item_genre">
                                Action, Albion Online
                              </span>
                            </div>
                          </div>
                        </div>
                      </figure>
                    </div>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="item">
                    <div class="item-cont">
                      <figure class="owl_item_review">
                        <div>
                          <div class="position-relative overflow-hidden">
                            <img class="m-0-auto" src="https://mmopilot.com/wp-content/uploads/2020/06/gathering-T5T6-albion-mmopilot.png" alt="Games Store">
                            <div class="review_h text-light">
                              <a href="./store.html">
                                <i class="item_icon_cart fas fa-shopping-cart"></i>
                                <span class="item_atc_text">DETAIL</span>
                              </a>
                            </div>
                          </div>
                          <div>
                            <h5 class="owl_item_title text-lt"><a href="">Gathering T5-T6</a></h5>
                            <div class="relative small-1">
                              <span class="owl_item_price">???44.99</span>
                              <span class="owl_item_genre">
                                Action, Albion Online
                              </span>
                            </div>
                          </div>
                        </div>
                      </figure>
                    </div>
                  </div>
                  <!-- /.item -->
                  <!-- item -->
                  <div class="item">
                    <div class="item-cont">
                      <figure class="owl_item_review">
                        <div>
                          <div class="position-relative overflow-hidden">
                            <img class="m-0-auto" src="https://mmopilot.com/wp-content/uploads/2021/01/silver-albion-online-mmopilot.png" alt="Games Store">
                            <div class="review_h text-light">
                              <a href="./store.html">
                                <i class="item_icon_cart fas fa-shopping-cart"></i>
                                <span class="item_atc_text">DETAIL</span>
                              </a>
                            </div>
                          </div>
                          <div>
                            <h5 class="owl_item_title text-lt"><a href="">Albion Silver</a></h5>
                            <div class="relative small-1">
                              <span class="owl_item_price">???44.99</span>
                              <span class="owl_item_genre">
                                Action, Albion Online
                              </span>
                            </div>
                          </div>
                        </div>
                      </figure>
                    </div>
                  </div>
                  <!-- /.item -->
                </div>
              </div>
              <!-- /.tab item -->

            </div>
            <!-- /.tab panes -->
          </div>
        </div>  
      </section>
      <!-- /.content area -->



      <!-- content area -->
      <section class="section gs_features">
        <div class="row no-gutters">
          <div class="col-xl-6 col-12 py-8 px-4 px-sm-8 py-md-9 px-md-9 br-n bs-c effect-wrapper effect-grayscale position-relative hover" style="background-image: url('assets/img/content/cont/landing_page_our_services_07.png');">
            <div class="overlay bg-dark_A-90 d-md-none"></div>
            <div class="row h-100 align-items-center content">
              <div class="col-12 col-md-8 ml-auto text-light text-md-right">
                <small class="d-block text-uppercase fw-600 ls-3">New</small>
                <h2 class="mb-4">An Incredible Journey</h2>
                <span class="d-block text-uppercase ls-3 mb-6">Only On Mmopilot</span>
                <a href="./store.html" class="btn btn-lg btn-outline-light btn-round" >Explore</a>
              </div>
            </div>
            <figure class="d-none d-md-block effect-layla effect-layla-light"></figure>
          </div>
          <div class="col-xl-6 col-12 py-8 px-4 px-sm-8 py-md-9 px-md-9 br-n bs-c" style="background-image: url('assets/img/content/cont/OURSERVICE-GUILDWARS2-MMOVIGI-1024x732.jpg');" data-overlay="7">
            <div class="row align-items-center h-100">
              <div class="col-sm-6 col-md-4 mb-5 mb-md-0">
                <figure class="position-relative my-0">
                  <div style="background-image: url('assets/img/content/cont/LONG_REFINING_SMELTING_NEW_WORLD_MMOPILOT.png');" class="main-fb-product bs-c bp-c br-n">
                    <div class="position-absolute t-0 r-0 px-4 py-1 bg-danger text-white text-uppercase fw-600">-50%</div>
                    <div class="position-absolute b-0 w-100 text-center">
                      <div data-countdown="2020/01/25 12:34:56" class="countdown-coupon bg-dark_A-50 py-3 text-light fw-700 timer"></div>
                    </div>
                  </div>
                </figure>
              </div>
              <div class="col-md-8 text-light">
                <h2 class="text-light mb-4">New World Smelting</h2>
                <p class="mb-7">Mauris euismod aliquam erat, a vestibulum tortor bibendum sit amet. Duis vitae augue non dolor fermentum faucibus non quis justo. Sed consequat accumsan turpis et semper. Nulla blandit blandit est, nec tincidunt neque sollicitudin vitae.</p>
                <a href="#" class="btn btn-lg btn-danger btn-round"><i class="fa fa-shopping-cart mr-5" aria-hidden="true"></i>Buy</a>
              </div>
            </div>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-xl-6 py-8 px-4 px-sm-8 py-md-9 px-md-9 bs-c" style="background-image: url('assets/img/content/cont/OURSERVICE-GUILDWARS2-MMOVIGI-1024x732.jpg');" data-overlay="7">
            <div class="row align-items-center h-100">
              <div class="col-sm-6 col-md-4 order-md-2 mb-6 mb-md-0">
                <figure class="position-relative my-0">
                  <div style="background-image: url('assets/img/content/cont/LONG_REFINING_SMELTING_NEW_WORLD_MMOPILOT.png');" class="main-fb-product bs-c bp-c br-n">
                    <div class="position-absolute t-0 r-0 px-4 py-1 bg-danger text-white text-uppercase fw-600">-72%</div>
                    <div class="position-absolute b-0 w-100 text-center">
                      <div data-countdown="2020/02/11 12:34:56" class="countdown-coupon bg-dark_A-50 py-3 text-light fw-700 timer"></div>
                    </div>
                  </div>
                </figure>
              </div>
              <div class="col-md-8 order-md-1 text-light text-md-right">
                <h2 class="mb-4">Explore vestibulum</h2>
                <p class="mb-7">Mauris euismod aliquam erat, a vestibulum tortor bibendum sit amet. Duis vitae augue non dolor fermentum faucibus non quis justo. Sed consequat accumsan turpis et semper. Nulla blandit blandit est, nec tincidunt neque sollicitudin vitae.</p>
                <a href="#" class="btn btn-lg btn-danger btn-round"><i class="fa fa-shopping-cart mr-5" aria-hidden="true"></i>Buy</a>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-sm-12 py-8 px-4 px-sm-8 py-md-9 px-md-9 bs-c effect-wrapper effect-grayscale position-relative hover" style="background-image: url('assets/img/content/cont/OURSERVICE-GUILDWARS2-MMOVIGI-1.jpg');">
            <div class="overlay bg-dark_A-90 d-md-none"></div>
            <div class="row h-100 align-items-center content">
              <div class="col-12 col-md-6 mr-auto text-light text-left">
                <small class="d-block text-uppercase fw-600 ls-3">Action</small>
                <h2 class="mb-4">Sed consequat</h2>
                <span class="d-block lead-1 text-uppercase ls-3 mb-7">An amazing experience from beginning to end.</span>
                <a href="#" class="btn btn-lg btn-outline-light btn-round">Explore the Sky</a>
              </div>
            </div>
            <figure class="d-none d-md-block effect-layla effect-layla-light"></figure>
          </div>
        </div>
      </section>
      <!-- /.content area -->

            <!-- count service  -->

            <div class="content-section container " >
        <div class="row">
          <div class="col text-white text-center ">
            <h2 class="text-uppercase mt-8" style="font-weight: bold;">43</h2>
            <h5>Customer This Month</h5>
          </div>
          <div class="col text-white text-center">
            <h2 style="font-weight: bold;" class="mt-8">1254</h2>
            <h5>Completed Orders</h5>
          </div>
          <div class="col text-center">
            <h2 style="color: #FFAD00; font-weight: bold; font-size: 50px;" class="mt-7">99%</h2>
            <h5 style="color: #FFAD00;">Customers Were Satisfied</h5>
          </div>
          <div class="col text-white text-center">
            <h3 style="font-weight: bold;" class="mt-8">CHECK US</h3>
            <h5><i class="fas fa-arrow-circle-right" style="font-size: 50px;"></i></h5>
          </div>
          <div class="col">
            <p><a href="https://www.epicnpc.com/members/mmopilot-com.680058/" target="_blank"><img src="https://mmopilot.com/wp-content/uploads/2021/10/epicnpc_border.png" alt=""></a></p>
            <p><a href="https://www.trustpilot.com/review/mmopilot.com" target="_blank"><img src="https://mmopilot.com/wp-content/uploads/2021/02/Trustpilot_border_white.png" alt=""></a></p>
            <p><a href="https://www.playerauctions.com/store/r4y4p/" target="_blank"><img src="https://mmopilot.com/wp-content/uploads/2021/02/AUCTIONS_border_white.png" alt=""></a></p>
          </div>
        </div>
      </div>

      <!-- ./count service -->

            <!-- truspilot -->
            <div class="content-section text-center ">
        <div class=" text-white">
          <h4><a href="https://www.trustpilot.com/review/mmopilot.com" target="_blank"><span>See our reviews on </span><span><img src="https://mmopilot.com/wp-content/uploads/2021/02/Trustpilot_border_white.png" alt="" width="200" height="50" style="margin-top: -5px;"></span></a></h4>
        </div>
      </div>

      <!-- ./truspilot -->



      <!-- content area -->
      <section class="content-section text-light" style="background: linear-gradient(to bottom, #111931 0%, #0f131e 100%);">
        <div class="container">
          <header class="header text-left">
            <h2 class="mb-6">Latest News</h2>
          </header>
          <div class="row">
            <!-- post -->
            <div class="col-12 mb-8">
              <div class="row">
                <div class="col-lg-4 mb-6 mb-lg-0">
                  <div class="card">
                    <div class="img__news_wrapper"><img src="assets/img/content/18 sep pendek tiga.png" alt="News"></div>
                    <div class="badges badges-left badges-bottom text-white">
                      <div class="rating_circle-wrapper"> 
                        <span class="rating_circle-foreground">
                            <span class="rating_circle-number">9.7</span>
                        </span> 
                        <span class="rating_circle" data-rating-total="9"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <h4 class="text-uppercase mb-3">Nullam vestibulum</h4>
                  <div class="mb-3 small text-info">
                    <span><i class="fas fa-tags"></i> Cras quis lacus dolor, Quisque dictum sollicitudin</span> <span class="mx-1">-</span> <span>4th October 2020</span>
                  </div>
                  <p>Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim convallis. Aliquam convallis, nisi in facilisis tincidunt, augue nunc efficitur lectus, ut auctor orci purus sed neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                  <a href="news-article.html" class="btn btn-outline-light">Read More</a>
                </div>
              </div>
            </div>
            <!-- /.post -->

            <!-- post -->
            <div class="col-12 mb-8">
              <div class="row">
                <div class="col-lg-4 mb-6 mb-lg-0">
                  <div class="card">
                    <div class="img__news_wrapper"><img src="assets/img/content/23 sep pendek.png" alt="News"></div>
                    <div class="badges badges-left badges-bottom text-white">
                      <div class="rating_circle-wrapper"> 
                        <span class="rating_circle-foreground">
                            <span class="rating_circle-number">9.7</span>
                        </span> 
                        <span class="rating_circle" data-rating-total="9"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <h4 class="text-uppercase mb-3">Nullam vestibulum</h4>
                  <div class="mb-3 small text-info">
                    <span><i class="fas fa-tags"></i> Cras quis lacus dolor, Quisque dictum sollicitudin</span> <span class="mx-1">-</span> <span>4th October 2020</span>
                  </div>
                  <p>Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim convallis. Aliquam convallis, nisi in facilisis tincidunt, augue nunc efficitur lectus, ut auctor orci purus sed neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                  <a href="news-article.html" class="btn btn-outline-light">Read More</a>
                </div>
              </div>
            </div>
            <!-- /.post -->

            <!-- post -->
            <div class="col-12">
              <div class="row">
                <div class="col-lg-4 mb-6 mb-lg-0">
                  <div class="card">
                    <div class="img__news_wrapper"><img src="assets/img/content/27 september pendek.png" alt="News"></div>
                    <div class="badges badges-left badges-bottom text-white">
                      <div class="rating_circle-wrapper"> 
                        <span class="rating_circle-foreground">
                            <span class="rating_circle-number">9.7</span>
                        </span>
                        <span class="rating_circle" data-rating-total="9"></span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-8">
                  <h4 class="text-uppercase mb-3">Nullam vestibulum</h4>
                  <div class="mb-3 small text-info">
                    <span><i class="fas fa-tags"></i> Cras quis lacus dolor, Quisque dictum sollicitudin</span> <span class="mx-1">-</span> <span>4th October 2020</span>
                  </div>
                  <p>Donec vestibulum, odio a sagittis vestibulum, eros nunc consectetur ex, eu tincidunt neque lacus ac lorem. Mauris interdum urna id eros dignissim convallis. Aliquam convallis, nisi in facilisis tincidunt, augue nunc efficitur lectus, ut auctor orci purus sed neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                  <a href="news-article.html" class="btn btn-outline-light">Read More</a>
                </div>
              </div>
            </div>
            <!-- /.post -->
          </div> 
        </div>
      </section>
      <!-- /.content area -->

      <!-- how to order  -->
      <section class="content-section text-light" style="background: linear-gradient(to bottom, #111931 0%, #0f131e 100%);">
        <div class="container text-center">
          <h2 class="text-uppercase" style="font-weight: bold;">HOW TO ORDER ON MMOPILOT</h2>
          <p><img src="https://mmopilot.com/wp-content/uploads/2021/02/How_TO_Order_Baru-1.png" alt=""></p>
        </div>
      </section>

      <!-- ./ how to order -->

            <!-- mmopilot is safe website -->

            <section class="content-section text-light" style="background: linear-gradient(to bottom, #111931 0%, #0f131e 100%);">
        <div class="container">
          <h2 class="text-uppercase text-center" style="font-weight: bold;">MMOPILOT IS SAFE WEBSITE</h2>
          <div class="row">
            <div class="col text-right mt-5">
              <p><a href="https://transparencyreport.google.com/safe-browsing/search?url=https:%2F%2Fmmopilot.com%2F&hl=en" target="_blank"><img src="https://mmopilot.com/wp-content/uploads/2021/07/safebrowser-from-chrome-1.png" alt="" width="400" height="153"></a></p>
            </div>
            <div class="col text-left mt-5">
              <p><a href="https://www.ssllabs.com/ssltest/analyze.html?d=mmopilot.com" target="_blank"><img src="https://mmopilot.com/wp-content/uploads/2022/01/pilot-removebg-preview.png" alt="" width="400" height="153" style="margin-top: -20px;"></a></p>
            </div>
          </div>
        </div>
      </section>

      <!-- ./mmopilot is safe website -->

      <!-- banner -->
      <div class="content-section pt-0">
        <div class="container">
          <a href="#" class="d-block">
            <div class="position-relative br-n bs-cont bp-c" style="background-image: url('assets/img/content/eso-boosting-mmopilot-2-1024x349.jpg');">
              <img src="assets/img/content/banner_01.jpg" alt="banner" class="invisible"/>
            </div>
          </a>
        </div>
      </div>
      <!-- /.banner -->

    </main>

    <!-- footer -->
    <footer class="footer footer-dark bg-dark py-9">

      <div class="container">
          <div class="row gutters-y">
              <div class="col-6 col-lg-3">
                <a href="./about.html" class="logo d-block mb-2"><img src="assets/img/pilot baru.png" alt="Wicodus" class="" width="435px" height="116"></a>
                <p style="color: #403B30">OESMAN LLC. Perum Bumi Asri Sengkaling N-34, Malang, East Java, Indonesia. Reg. number: 0709210024961</p>
                <div class="social-buttons">
                  <a class="social-twitter" href="#"><i class="fab fa-facebook"></i></a>
                  <a class="social-dribbble" href="#"><i class="fab fa-discord"></i></a>
                  <a class="social-instagram" href="#"><i class="fab fa-instagram"></i></a>
                </div>
              </div>

              <div class="col-6 col-lg-2">
                <h6 class="text-uppercase fw-600 mb-4">Guild Wars 2</h6>
                <div class="nav flex-column">
                  <a class="nav-link" href="./product-category/guildwars-2/gw2-powerleveling-packages.php?id=<?=$data['id']?>">Packages</a>
                  <a class="nav-link" href="./product-category/guildwars-2/gw2-legendary-armour-trinket.php">Legendary Armour & Trinket</a>
                  <a class="nav-link" href="./product-category/guildwars-2/gw2-legendary-weapon.html">Legendary Weapon</a>
                  <a class="nav-link" href="./product-category/guildwars-2/gw2-leveling-and-mastery.html">Leveling & Mastery</a>
                  <a class="nav-link" href="./product-category/guildwars-2/wvw-pvp-leveling-mastery-guild-wars-2.html">WvW & PvP</a>
                  <a class="nav-link" href="./product-category/guildwars-2/fractal-leveling-mastery-guild-wars-2.html">Fractal</a>
                  <a class="nav-link" href="./product-category/guildwars-2/gw2-ascended-and-crafting.html">Ascended & Crafting</a>
                  
                </div>
              </div>

              <div class="col-6 col-lg-2">
                <h6 class="text-uppercase fw-600 mb-4">Albion Online</h6>
                <div class="nav flex-column">
                  <a class="nav-link" href="product-category/albion.html">Power Leveling</a>
                </div>
              </div>

              <div class="col-6 col-lg-2">
                <h6 class="text-uppercase fw-600 mb-4">New World</h6>
                <div class="nav flex-column">
                  <a class="nav-link" href="new-world/level.php">Level</a>
                  <a class="nav-link" href="new-world/life-skill.php">Life Skill</a>
                  <a class="nav-link" href="new-world/gathering.php">Gathering</a>
                  <a class="nav-link" href="new-world/trade-skill.php">Trade Skill</a>
                </div>
              </div> 
              
              <div class="col col-lg-3 order-lg-last">
                <div class="mb-6">
                  <h6 class="text-uppercase fw-600 mb-4">All About Our Site</h6>
                  <div class="nav flex-column">
                    <a class="nav-link" href="./about.html">About Us</a>
                    <a class="nav-link" href="contact.html">Contact Us</a>
                    <a class="nav-link" href="return-and-refund.html">Return and Refund</a>
                    <a class="nav-link" href="privacy-policy.php">Privacy Policy</a>
                    <a class="nav-link" href="terms-and-conditions-policy.html">Terms and Conditions Policy</a>
                  </div>
                </div>
                <div>
                  <div class="text-light lead-5 lh-1">
                    <a href="store.html" class="mr-2"><i class="fab fa-cc-paypal"></i></a>
                    <a href="store.html" class="mr-2"><i class="fab fa-cc-visa"></i></a>
                    <a href="store.html" class="mr-2"><i class="fab fa-cc-amazon-pay"></i></a>
                    <a href="store.html" class="mr-2"><i class="fab fa-cc-stripe"></i></a>
                    <a href="store.html" class="mr-2"><i class="fab fa-cc-jcb"></i></a>
                  </div>
                </div>
              </div>
          </div>
      </div>
    </footer>

    
    <!-- /.footer -->

    <!-- sign Up -->
    <div class="modal fade" id="userLogin" tabindex="-1" role="dialog" aria-labelledby="userLoginTitle" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content bg-dark text-light">
          <div class="modal-header border-secondary">
            <h5 class="modal-title" id="userLoginTitle">Log in</h5>
            <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div>
              <div class="text-center my-6"> 
                <a class="btn btn-circle btn-sm btn-google mr-2" href=""><i class="fab fa-google"></i></a>
                <a class="btn btn-circle btn-sm btn-facebook mr-2" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-circle btn-sm btn-twitter" href=""><i class="fab fa-twitter"></i></a>
              </div>
              <span class="hr-text small my-6">Or</span>
            </div>
            <form class="input-transparent" action="" method="POST">
              <div class="form-group">
                <input type="text" class="form-control border-secondary" name="username" placeholder="Username">
              </div>
              <div class="form-group">
                <input type="password" class="form-control border-secondary" name="password" placeholder="Password">
              </div>
              <div class="form-group d-flex justify-content-between">
                <div class="custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" checked="" id="rememberMeCheck">
                  <label class="custom-control-label" for="rememberMeCheck">Remember me</label> 
                </div>
                <a class="small-3" href="#">Forgot password?</a>
              </div>
              <div class="form-group mt-6">
                <button class="btn btn-block btn-warning" type="submit" name="login">Login</button>
              </div>
            </form>
            <span class="small">Don't have an account? <a href="#">Create an account</a></span>
          </div>
        </div>
      </div>
    </div>
    <!-- /.sign Up -->

    <!-- offcanvas-cart -->
    <div id="offcanvas-cart" class="offcanvas-cart offcanvas text-light h-100 r-0 l-auto d-flex flex-column" data-animation="slideRight">
      <div>
        <button type="button" data-toggle="offcanvas-close" class="close float-right ml-4 text-light o-1 fw-100" data-dismiss="offcanvas" aria-label="Close">
          <span aria-hidden="true">??</span>
        </button>
        <hr class="border-light o-20 mt-8 mb-4">
      </div>
      <div class="offcanvas-cart-body flex-1">
        <div class="offcanvas-cart-list row align-items-center no-gutters">
          <div class="ocs-cart-item col-12">
            <div class="row align-items-center no-gutters">
              <div class="col-3 item_img d-none d-sm-block">
                <a href="store-product.html"><img class="img bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Product"></a>
              </div>
              <div class="col-7 flex-1 flex-grow pl-0 pl-sm-4 pr-4">
                <a href="store-product.html"><span class="d-block item_title text-lt ls-1 lh-1 small-1 fw-600 text-uppercase mb-2">Integer sagittis semper</span></a>
                <div class="position-relative lh-1">
                  <div class="number-input">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ><i class="ti-minus"></i></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="ti-plus"></i></button>
                  </div>
                </div>
              </div>
              <div class="col-2">
                <div class="row align-items-center h-100 no-gutters">
                  <div class="ml-auto text-center">
                    <a href="#"><i class="far fa-trash-alt"></i></a><br>
                    <span class="fw-500 text-warning">???44.99</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ocs-cart-item col-12">
            <div class="row align-items-center no-gutters">
              <div class="col-3 item_img d-none d-sm-block">
                <a href="store-product.html"><img class="img bl-3 text-primary" src="assets/img/content/cont/cg-h_01.jpg" alt="Product"></a>
              </div>
              <div class="col-7 flex-1 flex-grow pl-0 pl-sm-4 pr-4">
                <a href="store-product.html"><span class="d-block item_title text-lt ls-1 lh-1 small-1 fw-600 text-uppercase mb-2">Integer sagittis semper</span></a>
                <div class="position-relative lh-1">
                  <div class="number-input">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" ><i class="ti-minus"></i></button>
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp()"><i class="ti-plus"></i></button>
                  </div>
                </div>
              </div>
              <div class="col-2">
                <div class="row align-items-center h-100 no-gutters">
                  <div class="ml-auto text-center">
                    <a href="#"><i class="far fa-trash-alt"></i></a><br>
                    <span class="fw-500 text-warning">???27.59</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <a href="checkout-order.html" class="btn btn-lg btn-block btn-outline-light">View cart</a>
      </div>
    </div>
    <!-- /.offcanvas-cart -->

    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- User JS -->
    <script src="assets/js/scripts.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js" id="_mainJS" data-plugins="load"></script>


  </body>
</html>

<script>
  $(document).ready(function(){
   $.ajaxSetup({ cache: false });
   $('#search').keyup(function(){
    $('#result').html('');
    $('#state').val('');
    var searchField = $('#search').val();
    var expression = new RegExp(searchField, "i");
    $.getJSON('./assets/database/data.json', function(data) {
     $.each(data, function(key, value){
      if (value.name.search(expression) != -1 || value.location.search(expression) != -1)
      {
       $('#result').append('<li class="list-group-item link-class"><img src="'+value.image+'" height="40" width="40" class="img-thumbnail" /><span class="text-muted"><a href="'+value.link+'" style="color: black;"> '+value.name+'</a></span> </li>');
      }
     });   
    });
   });
   
   $('#result').on('click', 'li', function() {
    var click_text = $(this).text().split('|');
    $('#search').val($.trim(click_text[0]));
    $("#result").html('');
   });
  });
  </script>