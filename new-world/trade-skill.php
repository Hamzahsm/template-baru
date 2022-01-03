<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trade Skill - MMOPILOT</title>

    <!-- CSS -->
    <link href="../assets/css/fonts/etline-font.min.css" rel="stylesheet">
    <link href="../assets/css/fonts/fontawesome/all.min.css" rel="stylesheet">
    <link href="../assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="../assets/css/fonts/themify-icons.css" rel="stylesheet">

    <link href="../assets/plugins/owl.carousel/owl.carousel.min.css" rel="stylesheet">

    <link href="../assets/css/main.css" rel="stylesheet"> 
    <link href="../assets/css/styles.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../assets/img/apple-touch-icon.png">
    <link rel="icon" href="../assets/img/MMOpilot-logo-rocket.png">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

                    <!-- css live search ada di bawah -->
                    <style>
                      .live-search-list {
                      -webkit-box-sizing: border-box;
                      -moz-box-sizing: border-box;
                      box-sizing: border-box;
                      padding: 1em;
                      background-color: #2c3e50;
                      -webkit-border-radius: 5px;
                      -moz-border-radius: 5px;
                      border-radius: 5px;
                      font-family: 'Lato', sans-serif;
                      color: #fff;
                      }
                
                      .live-search-box {
                      width: 100%;
                      display: block;
                      padding: 1em;
                      -webkit-box-sizing: border-box;
                      -moz-box-sizing: border-box;
                      box-sizing: border-box;
                      border: 1px solid #3498db;
                      -webkit-border-radius: 5px;
                      -moz-border-radius: 5px;
                      border-radius: 5px;
                      }
                
                      .live-search-list li {
                      color: fff;
                      list-style: none;
                      padding: 0;
                      margin: 5px 0;
                      }
                    </style>
  </head>
  <body class="page-body">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-nav zi-3">
      <div class="container">
        <div class="row">
          <div class="col-4 col-sm-3 col-md-2 mr-auto">
            <a class="navbar-brand logo" href="../index.php">
              <img src="../assets/img/pilot baru.png" alt="Wicodus" class="" width="435px" height="116">
            </a>
          </div>
          <div class="col-4 d-none d-lg-block mx-auto">
            <!-- <form class="input-group border-0 bg-transparent">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sm btn-warning text-secondary my-0 mx-0" type="submit"><i class="fas fa-search"></i></button>
              </div>
            </form> -->

            <form action="search.php" method="GET" class="input-group border-0 bg-transparent">
                <input value="<?php echo isset($_GET['s']) ? $_GET['s'] : ''; ?>" class="form-control live-search-box" type="search" placeholder="Search" aria-label="Search" name="s" id="search" autocomplete="off">
                <div class="input-group-append">
                  <button class="btn btn-sm btn-warning text-secondary my-0 mx-0" type="submit" value="Search" name="search"><i class="fas fa-search"></i></button>
                </div>
              </form>
  
                <ul class="list-group" id="result"></ul>
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
                  <a class="dropdown-item" href="#">Español</a>
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
        <button class="navbar-toggler navbar-toggler-fixed" type="button" data-toggle="collapse" data-target="#collapsingNavbar" aria-controls="collapsingNavbar" aria-expanded="false" aria-label="Toggle navigation">☰</button>
        <div class="collapse navbar-collapse" id="collapsingNavbar">
          <ul class="navbar-nav">
            <li class="nav-item dropdown dropdown-hover">
              <a class="nav-link dropdown-toggle pl-lg-0" href="#" id="dropdownGaming_games" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products </a>
              <div class="dropdown-menu dropdown-menu-dark-lg" aria-labelledby="dropdownGaming_games">
                <a class="dropdown-item" href="./new-world.html">New World</a>
                <a class="dropdown-item" href="./guildwars-2.html">Guild Wars 2</a>
                <a class="dropdown-item" href="./albion.html">Albion Online</a>
                <a class="dropdown-item" href="../shop.html">All Product</a>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link " href="./guide.html">Guide </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="./contact.html">Contact </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://online.pubhtml5.com/gdbb/tzfn/#p=1">Catalog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://discord.com/invite/BMWz8vq">Promo</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /.navbar -->

    <!-- header -->
    <header class="header">
      <!-- content area -->
      <section class="content-section text-light br-n bs-c bp-c" style="background-image: url(../assets/img/bg/bg_shape.png);">
        <div class="container">
          <div class="header text-left">
            <h2>Albion Online Best Deals</h2>
          </div>
          <div id="storeCarousel" class="carousel-spotlight carousel slide" data-ride="carousel">
            <div class="carousel-inner">

              <!-- carousel item -->
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-lg-8 pr-lg-1">
                    <a href="#">
                      <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url(../assets/img/content/cont/albion\ satu.jpg);">
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block pl-lg-1">
                    <div class="row no-gutters h-100">
                      <div class="col-12 pb-1">
                        <a href="#">
                          <div class="d-flex h-100 bs-c br-n bp-c position-relative" style="background-image: url(../assets/img/content/cont/product\ albion\ satu.png);"></div>
                        </a>
                      </div>
                      <div class="col-12 pt-1">
                        <a href="#">
                          <div class="d-flex h-100 bs-c br-n bp-c position-relative" style="background-image: url(../assets/img/content/cont/product\ albion\ dua.png);"></div>
                        </a>
                      </div>
                    </div>  
                  </div>
                  <div class="col-12">
                    <div class="bg-dark d-flex p-4">
                      <div class="flex-1 d-flex align-items-center">
                        <h5 class="mb-0"><a href="#">PROMO 1</a></h5>
                      </div>
                      <div class="price d-none d-md-flex flex-wrap align-items-center">
                        <div class="px-3 py-1 my-md-3 my-lg-0 bg-warning text-secondary rounded"><span class="fw-600">-30%</span></div>
                        <div class="pl-3 d-flex flex-column my-md-3 my-lg-0 lh-1">
                          <span class="small discount fw-600 td-lt mb-1">€144.99</span>
                          <span class="discount_final lead-2">€99.99</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.carousel item -->

              <!-- carousel item -->
              <div class="carousel-item">
                <div class="row">
                  <div class="col-lg-8 pr-lg-1">
                    <a href="#">
                      <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url(../assets/img/content/cont/albion\ dua.jpg);">
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block pl-lg-1">
                    <div class="row no-gutters h-100">
                      <div class="col-12 pb-1">
                        <a href="#">
                          <div class="d-flex h-100 bs-c br-n bp-c position-relative" style="background-image: url(../assets/img/content/cont/product\ albion\ satu.png);"></div>
                        </a>
                      </div>
                      <div class="col-12 pt-1">
                        <a href="#">
                          <div class="d-flex h-100 bs-c br-n bp-c position-relative" style="background-image: url(../assets/img/content/cont/product\ albion\ dua.png);"></div>
                        </a>
                      </div>
                    </div>  
                  </div>
                  <div class="col-12">
                    <div class="bg-dark d-flex p-4">
                      <div class="flex-1 d-flex align-items-center">
                        <h5 class="mb-0"><a href="#">Exploration Memories</a></h5>
                      </div>
                      <div class="price d-none d-md-flex flex-wrap align-items-center">
                        <div class="px-3 py-1 my-md-3 my-lg-0 bg-warning text-secondary rounded"><span class="fw-600">-30%</span></div>
                        <div class="pl-3 d-flex flex-column my-md-3 my-lg-0 lh-1">
                          <span class="small discount fw-600 td-lt mb-1">€144.99</span>
                          <span class="discount_final lead-2">€99.99</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.carousel item -->

              <!-- carousel item -->
              <div class="carousel-item">
                <div class="row">
                  <div class="col-lg-8 pr-lg-1">
                    <a href="#">
                      <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url(../assets/img/content/cont/albion\ tiga.jpg);">
                      </div>
                    </a>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block pl-lg-1">
                    <div class="row no-gutters h-100">
                      <div class="col-12 pb-1">
                        <a href="#">
                          <div class="d-flex h-100 bs-c br-n bp-c position-relative" style="background-image: url(../assets/img/content/cont/product\ albion\ satu.png);"></div>
                        </a>
                      </div>
                      <div class="col-12 pt-1">
                        <a href="#">
                          <div class="d-flex h-100 bs-c br-n bp-c position-relative" style="background-image: url(../assets/img/content/cont/product\ albion\ dua.png);"></div>
                        </a>
                      </div>
                    </div>  
                  </div>
                  <div class="col-12">
                    <div class="bg-dark d-flex p-4">
                      <div class="flex-1 d-flex align-items-center">
                        <h5 class="mb-0"><a href="#">Exploration Memories</a></h5>
                      </div>
                      <div class="price d-none d-md-flex flex-wrap align-items-center">
                        <div class="px-3 py-1 my-md-3 my-lg-0 bg-warning text-secondary rounded"><span class="fw-600">-30%</span></div>
                        <div class="pl-3 d-flex flex-column my-md-3 my-lg-0 lh-1">
                          <span class="small discount fw-600 td-lt mb-1">€144.99</span>
                          <span class="discount_final lead-2">€99.99</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.carousel item -->

            </div>

            <!-- left and right controls -->
            <a class="carousel-control-prev light" href="#storeCarousel" data-slide="prev">
              <span class="icon-cl-prev pe-7s-angle-left lead-6 px-2 py-2"></span>
            </a>
            <a class="carousel-control-next light" href="#storeCarousel" data-slide="next">
              <span class="icon-cl-next pe-7s-angle-right lead-6 px-2 py-2"></span>
            </a>
            <!-- /.left and right controls -->

            <!-- indicators -->
            <ul class="carousel-indicators indicators-square">
              <li data-target="#storeCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#storeCarousel" data-slide-to="1"></li>
              <li data-target="#storeCarousel" data-slide-to="2"></li>
            </ul>
            <!-- /.indicators -->

          </div>
        </div>
      </section>
      <!-- /.content area -->
    </header>
    <!-- /.header -->

    <!-- main content -->
    <main class="main-content">

      <!-- content area -->
      <section class="content-section top_sellers carousel-spotlight ig-carousel pt-0 text-light">
        <div class="container">
          <header class="header">
            <h2>Most popular products</h2>
          </header>
          <div class="position-relative">
            <div class="row">
              <div class="col-lg-8">
                <!-- nav tabs -->
                <ul class="spotlight-tabs spotlight-tabs-dark nav nav-tabs border-0 mb-5 position-relative flex-nowrap" id="most_popular_products-carousel-01" role="tablist">
                  <li class="nav-item text-fnwp position-relative">
                    <a class="nav-link active show" id="mp-2-01-tab" data-toggle="tab" href="#mp-2-01-c" role="tab" aria-controls="mp-2-01-c" aria-selected="true">New</a>
                  </li>
                  <li class="nav-item text-fnwp position-relative"> 
                    <a class="nav-link" id="mp-2-02-tab" data-toggle="tab" href="#mp-2-02-c" role="tab" aria-controls="mp-2-02-c" aria-selected="false">Highlights</a>
                  </li>
                  <li class="nav-item text-fnwp position-relative"> 
                    <a class="nav-link" id="mp-2-03-tab" data-toggle="tab" href="#mp-2-03-c" role="tab" aria-controls="mp-2-03-c" aria-selected="false">Coming Soon</a>
                  </li>
                </ul>
                <!-- /.nav tabs -->
                <!-- tab panes -->
                <div id="color_sel_Carousel-content_02" class="tab-content position-relative w-100">
                  <!-- tab item -->
                  <div class="tab-pane fade active show" id="mp-2-01-c" role="tabpanel" aria-labelledby="mp-2-01-tab">
                    <div class="row">
                      <!-- item -->
                      <div class="col-md-12 mb-4">
                        <a href="./power-leveling-150.html" class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <img class="img bl-3 text-primary" src="../assets/img/content/cont/product albion satu.png" alt="Games Store" >
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                              <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Leveling T1-T5 PVE FAME</h6>
                              <div class="mb-0">
                                <i class="mr-2 fab fa-windows"></i>
                                <i class="mr-2 fab fa-steam"></i>
                                <i class="fab fa-apple"></i>
                              </div>
                              <div class="position-relative">
                                <span class="item_genre small fw-600">
                                  MMORPG, ALBION ONLINE
                                </span>
                              </div>
                            </div>
                            <div class="item_discount d-none d-sm-block">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right text-secondary px-6">
                                  <span class="fw-600 btn bg-warning">-50%</span>
                                </div>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <span class="fw-600 td-lt">€144.99</span><br>
                                  <span class="fw-600">€44.99</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-4">
                        <a href="store-product.html" class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <img class="img bl-3 text-primary" src="../assets/img/content/cont/product albion dua.png" alt="Games Store">
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                              <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Leveling T5-T6 PVE FAME</h6>
                              <div class="mb-0">
                                <i class="mr-2 fab fa-windows"></i>
                                <i class="mr-2 fab fa-steam"></i>
                                <i class="fab fa-apple"></i>
                              </div>
                              <div class="position-relative">
                                <span class="item_genre small fw-600">
                                  MMORPG, ALBION ONLINE
                                </span>
                              </div>
                            </div>
                            <div class="item_discount d-none d-sm-block">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right text-secondary px-6">
                                  <span class="fw-600 btn bg-warning">-50%</span>
                                </div>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <span class="fw-600 td-lt">€144.99</span><br>
                                  <span class="fw-600">€44.99</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-4">
                        <a href="store-product.html" class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <img class="img bl-3 text-primary" src="../assets/img/content/cont/product albion satu.png" alt="Games Store">
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                              <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Leveling T1-T5 PVE FAME</h6>
                              <div class="mb-0">
                                <i class="mr-2 fab fa-windows"></i>
                                <i class="mr-2 fab fa-steam"></i>
                                <i class="fab fa-apple"></i>
                              </div>
                              <div class="position-relative">
                                <span class="item_genre small fw-600">
                                  MMORPG, ALBION ONLINE
                                </span>
                              </div>
                            </div>
                            <div class="item_discount d-none d-sm-block">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right text-secondary px-6">
                                  <span class="fw-600 btn bg-warning">-50%</span>
                                </div>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <span class="fw-600 td-lt">€144.99</span><br>
                                  <span class="fw-600">€44.99</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-4">
                        <a href="store-product.html" class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <img class="img bl-3 text-primary" src="../assets/img/content/cont/product albion dua.png" alt="Games Store">
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                              <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">
                                Leveling T5-T6 PVE FAME</h6>
                              <div class="mb-0">
                                <i class="mr-2 fab fa-windows"></i>
                                <i class="mr-2 fab fa-steam"></i>
                                <i class="fab fa-apple"></i>
                              </div>
                              <div class="position-relative">
                                <span class="item_genre small fw-600">
                                  MMORPG, ALBION ONLINE
                                </span>
                              </div>
                            </div>
                            <div class="item_discount d-none d-sm-block">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right text-secondary px-6">
                                  <span class="fw-600 btn bg-warning">-50%</span>
                                </div>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <span class="fw-600 td-lt">€144.99</span><br>
                                  <span class="fw-600">€44.99</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-4">
                        <a href="store-product.html" class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <img class="img bl-3 text-primary" src="../assets/img/content/cont/product albion satu.png" alt="Games Store">
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                              <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Leveling T1-T5 PVE FAME</h6>
                              <div class="mb-0">
                                <i class="mr-2 fab fa-windows"></i>
                                <i class="mr-2 fab fa-steam"></i>
                                <i class="fab fa-apple"></i>
                              </div>
                              <div class="position-relative">
                                <span class="item_genre small fw-600">
                                  MMORPG, ALBION ONLINE
                                </span>
                              </div>
                            </div>
                            <div class="item_discount d-none d-sm-block">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right text-secondary px-6">
                                  <span class="fw-600 btn bg-warning">-50%</span>
                                </div>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <span class="fw-600 td-lt">€144.99</span><br>
                                  <span class="fw-600">€44.99</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                    </div>
                  </div>
                  <!-- /.tab item -->

                  <!-- tab item -->
                  <div class="tab-pane fade" id="mp-2-02-c" role="tabpanel" aria-labelledby="mp-2-02-tab">
                    <div class="row">
                      <!-- item -->
                      <div class="col-md-12 mb-4">
                        <a href="store-product.html" class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <img class="img bl-3 text-primary" src="../assets/img/content/cont/POWER_LEVELING_1_50_NEW_WORLD_MMOPILOT.png" alt="Games Store">
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                              <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Integer sagittis semper</h6>
                              <div class="mb-0">
                                <i class="mr-2 fab fa-windows"></i>
                                <i class="mr-2 fab fa-steam"></i>
                                <i class="fab fa-apple"></i>
                              </div>
                              <div class="position-relative">
                                <span class="item_genre small fw-600">
                                  Action, Adventure
                                </span>
                              </div>
                            </div>
                            <div class="item_discount d-none d-sm-block">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right text-secondary px-6">
                                  <span class="fw-600 btn bg-warning">-50%</span>
                                </div>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <span class="fw-600 td-lt">€144.99</span><br>
                                  <span class="fw-600">€44.99</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-4">
                        <a href="store-product.html" class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <img class="img bl-3 text-primary" src="../assets/img/content/cont/POWER_LEVELING_1_60_NEW_WORLD_MMOPILOT.png" alt="Games Store">
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                              <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Integer sagittis semper</h6>
                              <div class="mb-0">
                                <i class="mr-2 fab fa-windows"></i>
                                <i class="mr-2 fab fa-steam"></i>
                                <i class="fab fa-apple"></i>
                              </div>
                              <div class="position-relative">
                                <span class="item_genre small fw-600">
                                  Action, Adventure
                                </span>
                              </div>
                            </div>
                            <div class="item_discount d-none d-sm-block">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right text-secondary px-6">
                                  <span class="fw-600 btn bg-warning">-50%</span>
                                </div>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <span class="fw-600 td-lt">€144.99</span><br>
                                  <span class="fw-600">€44.99</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-4">
                        <a href="store-product.html" class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <img class="img bl-3 text-primary" src="../assets/img/content/cont/POWER_LEVELING_1_50_NEW_WORLD_MMOPILOT.png" alt="Games Store">
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                              <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Integer sagittis semper</h6>
                              <div class="mb-0">
                                <i class="mr-2 fab fa-windows"></i>
                                <i class="mr-2 fab fa-steam"></i>
                                <i class="fab fa-apple"></i>
                              </div>
                              <div class="position-relative">
                                <span class="item_genre small fw-600">
                                  Action, Adventure
                                </span>
                              </div>
                            </div>
                            <div class="item_discount d-none d-sm-block">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right text-secondary px-6">
                                  <span class="fw-600 btn bg-warning">-50%</span>
                                </div>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <span class="fw-600 td-lt">€144.99</span><br>
                                  <span class="fw-600">€44.99</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-4">
                        <a href="store-product.html" class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <img class="img bl-3 text-primary" src="../assets/img/content/cont/POWER_LEVELING_1_60_NEW_WORLD_MMOPILOT.png" alt="Games Store">
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                              <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Integer sagittis semper</h6>
                              <div class="mb-0">
                                <i class="mr-2 fab fa-windows"></i>
                                <i class="mr-2 fab fa-steam"></i>
                                <i class="fab fa-apple"></i>
                              </div>
                              <div class="position-relative">
                                <span class="item_genre small fw-600">
                                  Action, Adventure
                                </span>
                              </div>
                            </div>
                            <div class="item_discount d-none d-sm-block">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right text-secondary px-6">
                                  <span class="fw-600 btn bg-warning">-50%</span>
                                </div>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <span class="fw-600 td-lt">€144.99</span><br>
                                  <span class="fw-600">€44.99</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-4">
                        <a href="store-product.html" class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <img class="img bl-3 text-primary" src="../assets/img/content/cont/POWER_LEVELING_1_60_NEW_WORLD_MMOPILOT.png" alt="Games Store">
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                              <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Integer sagittis semper</h6>
                              <div class="mb-0">
                                <i class="mr-2 fab fa-windows"></i>
                                <i class="mr-2 fab fa-steam"></i>
                                <i class="fab fa-apple"></i>
                              </div>
                              <div class="position-relative">
                                <span class="item_genre small fw-600">
                                  Action, Adventure
                                </span>
                              </div>
                            </div>
                            <div class="item_discount d-none d-sm-block">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right text-secondary px-6">
                                  <span class="fw-600 btn bg-warning">-50%</span>
                                </div>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <span class="fw-600 td-lt">€144.99</span><br>
                                  <span class="fw-600">€44.99</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                    </div>
                  </div>
                  <!-- /.tab item -->

                  <!-- tab item -->
                  <div class="tab-pane fade" id="mp-2-03-c" role="tabpanel" aria-labelledby="mp-2-03-tab">
                    <div class="row">
                      <!-- item -->
                      <div class="col-md-12 mb-4">
                        <a href="store-product.html" class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <img class="img bl-3 text-primary" src="../assets/img/content/cont/POWER_LEVELING_1_50_NEW_WORLD_MMOPILOT.png" alt="Games Store">
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                              <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Integer sagittis semper</h6>
                              <div class="mb-0">
                                <i class="mr-2 fab fa-windows"></i>
                                <i class="mr-2 fab fa-steam"></i>
                                <i class="fab fa-apple"></i>
                              </div>
                              <div class="position-relative">
                                <span class="item_genre small fw-600">
                                  Action, Adventure
                                </span>
                              </div>
                            </div>
                            <div class="item_discount d-none d-sm-block">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right text-secondary px-6">
                                  <span class="fw-600 btn bg-warning">-50%</span>
                                </div>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <span class="fw-600 td-lt">€144.99</span><br>
                                  <span class="fw-600">€44.99</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-4">
                        <a href="store-product.html" class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <img class="img bl-3 text-primary" src="../assets/img/content/cont/POWER_LEVELING_1_60_NEW_WORLD_MMOPILOT.png" alt="Games Store">
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                              <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Integer sagittis semper</h6>
                              <div class="mb-0">
                                <i class="mr-2 fab fa-windows"></i>
                                <i class="mr-2 fab fa-steam"></i>
                                <i class="fab fa-apple"></i>
                              </div>
                              <div class="position-relative">
                                <span class="item_genre small fw-600">
                                  Action, Adventure
                                </span>
                              </div>
                            </div>
                            <div class="item_discount d-none d-sm-block">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right text-secondary px-6">
                                  <span class="fw-600 btn bg-warning">-50%</span>
                                </div>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <span class="fw-600 td-lt">€144.99</span><br>
                                  <span class="fw-600">€44.99</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-4">
                        <a href="store-product.html" class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <img class="img bl-3 text-primary" src="../assets/img/content/cont/POWER_LEVELING_1_60_NEW_WORLD_MMOPILOT.png" alt="Games Store">
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                              <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Integer sagittis semper</h6>
                              <div class="mb-0">
                                <i class="mr-2 fab fa-windows"></i>
                                <i class="mr-2 fab fa-steam"></i>
                                <i class="fab fa-apple"></i>
                              </div>
                              <div class="position-relative">
                                <span class="item_genre small fw-600">
                                  Action, Adventure
                                </span>
                              </div>
                            </div>
                            <div class="item_discount d-none d-sm-block">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right text-secondary px-6">
                                  <span class="fw-600 btn bg-warning">-50%</span>
                                </div>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <span class="fw-600 td-lt">€144.99</span><br>
                                  <span class="fw-600">€44.99</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-4">
                        <a href="store-product.html" class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <img class="img bl-3 text-primary" src="../assets/img/content/cont/POWER_LEVELING_1_50_NEW_WORLD_MMOPILOT.png" alt="Games Store">
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                              <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Integer sagittis semper</h6>
                              <div class="mb-0">
                                <i class="mr-2 fab fa-windows"></i>
                                <i class="mr-2 fab fa-steam"></i>
                                <i class="fab fa-apple"></i>
                              </div>
                              <div class="position-relative">
                                <span class="item_genre small fw-600">
                                  Action, Adventure
                                </span>
                              </div>
                            </div>
                            <div class="item_discount d-none d-sm-block">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right text-secondary px-6">
                                  <span class="fw-600 btn bg-warning">-50%</span>
                                </div>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <span class="fw-600 td-lt">€144.99</span><br>
                                  <span class="fw-600">€44.99</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                      <!-- item -->
                      <div class="col-md-12 mb-4">
                        <a href="store-product.html" class="product-item">
                          <div class="row align-items-center no-gutters">
                            <div class="item_img d-none d-sm-block">
                              <img class="img bl-3 text-primary" src="../assets/img/content/cont/POWER_LEVELING_1_60_NEW_WORLD_MMOPILOT.png" alt="Games Store">
                            </div>
                            <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                              <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">Integer sagittis semper</h6>
                              <div class="mb-0">
                                <i class="mr-2 fab fa-windows"></i>
                                <i class="mr-2 fab fa-steam"></i>
                                <i class="fab fa-apple"></i>
                              </div>
                              <div class="position-relative">
                                <span class="item_genre small fw-600">
                                  Action, Adventure
                                </span>
                              </div>
                            </div>
                            <div class="item_discount d-none d-sm-block">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right text-secondary px-6">
                                  <span class="fw-600 btn bg-warning">-50%</span>
                                </div>
                              </div>
                            </div>
                            <div class="item_price">
                              <div class="row align-items-center h-100 no-gutters">
                                <div class="text-right">
                                  <span class="fw-600 td-lt">€144.99</span><br>
                                  <span class="fw-600">€44.99</span>
                                </div>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                      <!-- /.item -->
                    </div>
                  </div>
                  <!-- /.tab item -->
                </div>
                <!-- /.tab panes -->

                <!-- pagination -->
                <nav class="mt-4 pt-4 border-top border-secondary" aria-label="Page navigation">
                  <ul class="pagination justify-content-end">
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span class="ti-angle-left small-7" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#" aria-label="Next">
                        <span class="ti-angle-right small-7" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- /.pagination -->
              </div>
              <div class="col-lg-4">
                <div class="filters border border-secondary rounded p-4">
                  <ul class="sidebar-nav-light-hover list-unstyled mb-0 text-unset small-3 fw-600">

                    <li class="nav-item text-light transition mb-2 active">
                      <a href="" aria-expanded="false" data-toggle="collapse" class="nav-link py-2 px-3 text-uppercase  collapsed collapser collapser-active nav-link-border">
                          <span class="p-collapsing-title">Platform</span>
                      </a>
                      <div class="collapse nav-collapse show">
                          <ul class="list-unstyled py-2">
                            <li class="nav-item">
                              <div class="nav-link py-1 px-3">
                                  <form>
                                    <div class="custom-control custom-checkbox">
                                      <input class="custom-control-input" type="checkbox" value="" id="PC_check" checked>
                                      <label class="custom-control-label" for="PC_check">
                                        PC
                                      </label>
                                    </div>
                                  </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-1 px-3">
                                  <form>
                                    <div class="custom-control custom-checkbox">
                                      <input class="custom-control-input" type="checkbox" value="" id="MAC_check">
                                      <label class="custom-control-label" for="MAC_check">
                                        MAC
                                      </label>
                                    </div>
                                  </form>
                              </div>
                            </li>
                          </ul>
                      </div>
                    </li>
                    <li class="nav-item text-light transition mb-2">
                      <a href="" aria-expanded="false" data-toggle="collapse" class="nav-link py-2 px-3 text-uppercase  collapsed collapser nav-link-border">
                          <span class="p-collapsing-title">Genre</span>
                      </a>
                      <div class="collapse nav-collapse">
                          <ul class="list-unstyled py-2">
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="Action_check">
                                    <label class="custom-control-label" for="Action_check">
                                      Action
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="Adventure_check">
                                    <label class="custom-control-label" for="Adventure_check">
                                      Adventure
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="Casual_check">
                                    <label class="custom-control-label" for="Casual_check">
                                      Casual
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="Early_access_check">
                                    <label class="custom-control-label" for="Early_access_check">
                                      Early Access
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="Free_to_play_check">
                                    <label class="custom-control-label" for="Free_to_play_check">
                                      Free to Play
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="Indie_check">
                                    <label class="custom-control-label" for="Indie_check">
                                      Indie
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="Massively_multiplayer_check">
                                    <label class="custom-control-label" for="Massively_multiplayer_check">
                                      Massively Multiplayer
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="Racing_check">
                                    <label class="custom-control-label" for="Racing_check">
                                      Racing
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="RPG_check">
                                    <label class="custom-control-label" for="RPG_check">
                                      RPG
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="Simulation_check">
                                    <label class="custom-control-label" for="Simulation_check">
                                      Simulation
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="Sports_check">
                                    <label class="custom-control-label" for="Sports_check">
                                      Sports
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="Strategy_check">
                                    <label class="custom-control-label" for="Strategy_check">
                                      Strategy
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                          </ul>
                      </div>
                    </li>
                    <li class="nav-item text-light transition mb-2">
                      <a href="" aria-expanded="false" data-toggle="collapse" class="nav-link py-2 px-3 text-uppercase  collapsed collapser nav-link-border">
                          <span class="p-collapsing-title">Software</span>
                      </a>
                      <div class="collapse nav-collapse">
                          <ul class="list-unstyled py-2">
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="Animation_modeling_check">
                                    <label class="custom-control-label" for="Animation_modeling_check">
                                      Animation & Modeling
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="Audio_production_check">
                                    <label class="custom-control-label" for="Audio_production_check">
                                      Audio Production
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="Design_check">
                                    <label class="custom-control-label" for="Design_check">
                                      Design
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="Education_check">
                                    <label class="custom-control-label" for="Education_check">
                                      Education
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="Game_development_check">
                                    <label class="custom-control-label" for="Game_development_check">
                                      Game Development
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="Photo_editing_check">
                                    <label class="custom-control-label" for="Photo_editing_check">
                                      Photo Editing
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="Utilities_check">
                                    <label class="custom-control-label" for="Utilities_check">
                                      Utilities
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="Video_production_check">
                                    <label class="custom-control-label" for="Video_production_check">
                                      Video Production
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="Web_publishing_check">
                                    <label class="custom-control-label" for="Web_publishing_check">
                                      Web Publishing
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                          </ul>
                      </div>
                    </li>
                    <li class="nav-item text-light transition mb-2">
                      <a href="" aria-expanded="false" data-toggle="collapse" class="nav-link py-2 px-3 text-uppercase  collapsed collapser nav-link-border">
                          <span class="p-collapsing-title">Supported VR</span>
                      </a>
                      <div class="collapse nav-collapse">
                          <ul class="list-unstyled py-2">
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="VR_check">
                                    <label class="custom-control-label" for="VR_check">
                                      Euismod VR
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="VR_check_2">
                                    <label class="custom-control-label" for="VR_check_2">
                                      Euismod VR
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="VR_check_3">
                                    <label class="custom-control-label" for="VR_check_3">
                                      Euismod VR
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                          </ul>
                      </div>
                    </li>
                    <li class="nav-item text-light transition mb-2">
                      <a href="" aria-expanded="false" data-toggle="collapse" class="nav-link py-2 px-3 text-uppercase  collapsed collapser nav-link-border">
                          <span class="p-collapsing-title">Release Status</span>
                      </a>
                      <div class="collapse nav-collapse">
                          <ul class="list-unstyled py-2">
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="Released_check">
                                    <label class="custom-control-label" for="Released_check">
                                      Released
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="Pre_Purchase_check">
                                    <label class="custom-control-label" for="Pre_Purchase_check">
                                      Pre-Purchase
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                            <li class="nav-item">
                              <div class="nav-link py-2 px-3">
                                <form>
                                  <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" value="" id="Coming_soon_check">
                                    <label class="custom-control-label" for="Coming_soon_check">
                                      Coming Soon
                                    </label>
                                  </div>
                                </form>
                              </div>
                            </li>
                          </ul>
                      </div>
                    </li>
                    <li class="nav-item text-light transition mt-4">
                      <a href="" class="btn btn-warning d-block">Reset Filter</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </section>
      <!-- /.content area -->

    </main>

    <!-- footer -->
    <footer class="footer footer-dark bg-dark py-9">

      <div class="container">
          <div class="row gutters-y">
              <div class="col-6 col-lg-3">
                <a href="./about.html" class="logo d-block mb-2"><img src="../assets/img/pilot baru.png" alt="Wicodus" class="" width="435px" height="116"></a>
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
                  <a class="nav-link" href="../product-category/guildwars-2/gw2-powerleveling-packages.php?id=<?=$data['id']?>">Packages</a>
                  <a class="nav-link" href="../product-category/guildwars-2/gw2-legendary-armour-trinket.php">Legendary Armour & Trinket</a>
                  <a class="nav-link" href="../product-category/guildwars-2/gw2-legendary-weapon.html">Legendary Weapon</a>
                  <a class="nav-link" href="../product-category/guildwars-2/gw2-leveling-and-mastery.html">Leveling & Mastery</a>
                  <a class="nav-link" href="../product-category/guildwars-2/wvw-pvp-leveling-mastery-guild-wars-2.html">WvW & PvP</a>
                  <a class="nav-link" href="../product-category/guildwars-2/fractal-leveling-mastery-guild-wars-2.html">Fractal</a>
                  <a class="nav-link" href="../product-category/guildwars-2/gw2-ascended-and-crafting.html">Ascended & Crafting</a>
                  
                </div>
              </div>

              <div class="col-6 col-lg-2">
                <h6 class="text-uppercase fw-600 mb-4">Albion Online</h6>
                <div class="nav flex-column">
                  <a class="nav-link" href="../product-category/albion.html">Power Leveling</a>
                </div>
              </div>

              <div class="col-6 col-lg-2">
                <h6 class="text-uppercase fw-600 mb-4">New World</h6>
                <div class="nav flex-column">
                  <a class="nav-link" href="../new-world/level.php">Level</a>
                  <a class="nav-link" href="../new-world/life-skill.php">Life Skill</a>
                  <a class="nav-link" href="../new-world/gathering.php">Gathering</a>
                  <a class="nav-link" href="../new-world/trade-skill.php">Trade Skill</a>
                </div>
              </div> 
              
              <div class="col col-lg-3 order-lg-last">
                <div class="mb-6">
                  <h6 class="text-uppercase fw-600 mb-4">All About Our Site</h6>
                  <div class="nav flex-column">
                    <a class="nav-link" href="./about.html">About Us</a>
                    <a class="nav-link" href="contact.html">Contact Us</a>
                    <a class="nav-link" href="contact.html">Return and Refund</a>
                    <a class="nav-link" href="contact.html">Privacy Policy</a>
                    <a class="nav-link" href="contact.html">Terms and Conditions Policy</a>
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
            <form class="input-transparent">
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
                <button class="btn btn-block btn-warning" type="submit">Login</button>
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
          <span aria-hidden="true">×</span>
        </button>
        <hr class="border-light o-20 mt-8 mb-4">
      </div>
      <div class="offcanvas-cart-body flex-1">
        <div class="offcanvas-cart-list row align-items-center no-gutters">
          <div class="ocs-cart-item col-12">
            <div class="row align-items-center no-gutters">
              <div class="col-3 item_img d-none d-sm-block">
                <a href="store-product.html"><img class="img bl-3 text-primary" src="../assets/img/content/cont/cg-h_01.jpg" alt="Product"></a>
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
                    <span class="fw-500 text-warning">€44.99</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="ocs-cart-item col-12">
            <div class="row align-items-center no-gutters">
              <div class="col-3 item_img d-none d-sm-block">
                <a href="store-product.html"><img class="img bl-3 text-primary" src="../assets/img/content/cont/cg-h_01.jpg" alt="Product"></a>
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
                    <span class="fw-500 text-warning">€27.59</span>
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
    <script src="../assets/js/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="../assets/js/bootstrap.min.js"></script>

    <!-- User JS -->
    <script src="../assets/js/scripts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js" id="_mainJS" data-plugins="load"></script>

    <script>
      jQuery(document).ready(function($){

    $('.live-search-list li').each(function(){
    $(this).attr('data-search-term', $(this).text().toLowerCase());
    });

    $('.live-search-box').on('keyup', function(){

    var searchTerm = $(this).val().toLowerCase();

        $('.live-search-list li').each(function(){

            if ($(this).filter('[data-search-term *= ' + searchTerm + ']').length > 0 || searchTerm.length < 1) {
                $(this).show();
            } else {
                $(this).hide();
            }

        });

    });

    });
  </script>
  </body>
</html>