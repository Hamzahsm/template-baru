<?php

$id = $_GET['id'];

// $conn = mysqli_connect("localhost", "u705028021_loginsystem", "Loginsystem321", "u705028021_loginsystem");
$conn = mysqli_connect("localhost", "u705028021_templatepilot", "templatepilot123NEW", "u705028021_templatepilot");
$query    = mysqli_query($conn, "SELECT * FROM pilot_products WHERE id= $id ");
$result    = mysqli_fetch_array($query);

?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="<?php echo $result['focuskeyword']; ?>">
    <title>Product - MMOPILOT</title>

    <!-- CSS -->
    <link href="assets/css/fonts/etline-font.min.css" rel="stylesheet">
    <link href="assets/css/fonts/fontawesome/all.min.css" rel="stylesheet">
    <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="assets/css/fonts/themify-icons.css" rel="stylesheet">

    <link href="assets/plugins/owl.carousel/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/plugins/slick/slick.css" rel="stylesheet">

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
  </head>
  <body class="page-body">

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark border-nav zi-3">
      <div class="container">
        <div class="row">
          <div class="col-4 col-sm-3 col-md-2 mr-auto">
            <a class="navbar-brand logo" href="./index.php">
              <img src="assets/img/pilot baru.png" alt="Wicodus" class="logo-light mx-auto">
            </a>
          </div>
          <div class="col-4 d-none d-lg-block mx-auto">
            <form class="input-group border-0 bg-transparent">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sm btn-warning text-secondary my-0 mx-0" type="submit"><i class="fas fa-search"></i></button>
              </div>
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

    <!-- main content -->
    <main class="main-content">

      <!-- overlay -->
      <div class="overlay overflow-hidden pe-n"><img src="assets/img/bg/bg_shape.png" alt="background shape"></div>
      <!-- /.overlay -->

      <!-- content area -->
      <div class="content-section text-light pt-8">
        <div class="container">
          <div class="row gutters-y">
            <div class="col-12">
              <header>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb-product breadcrumb-nowrap breadcrumb breadcrumb-angle bg-transparent pl-0 pr-0 mb-0">
                    <li class="breadcrumb-item"><a href="#">All Games</a></li>
                    <li class="breadcrumb-item"><a href="#">MMORPG</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><?php echo $result['category']; ?></li>
                  </ol>
                </nav>
                <h3 class="product_name mb-4"><?php echo $result['title']; ?></h3>
                <div class="d-flex flex-wrap align-items-center">
                  <div class="review d-flex">
                    <div class="review_score">
                      <div class="review_score-btn">9.7</div>
                    </div>
                    <div class="star_rating-se text-warning mr-7">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                    </div>
                  </div>
                  <ul class="tag-list d-none d-md-flex flex-wrap list-unstyled mb-0">
                    <li class="tag-item"><a href="" class="badge badge-warning fw-600"><?php echo $result['category']; ?></a></li>
                    <li class="tag-item"><a href="" class="badge badge-warning fw-600"><?php echo $result['tags'] ?></a></li>
                    <li class="tag-item"><a href="" class="text-unset release-date"><i class="far fa-clock text-warning mr-1"></i><?php echo $result['date']; ?></a></li>
                  </ul>
                </div>
              </header>
            </div>
            <div class="col-lg-8">
              <div class="row">
                <div class="col-12">
                  <div class="product-body">
                    <!-- carousel wrapper-->
                    <div class="carousel-product">
                      <div class="slider text-secondary" data-slick="product-body">
                        <img src="./dashboard/image-products/<?php echo $result['image']; ?>" alt="Game" width="1900" height="1080">
                      </div>
                    </div>
                    <!-- /.carousel wrapper -->

                    <div class="alert alert-no-border alert-share d-flex mb-6" role="alert">
                      <span class="flex-1 fw-600 text-uppercase text-warning">Share:</span>
                      <div class="social-buttons text-unset">
                        <a class="social-twitter mx-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="social-dribbble mx-2" href="#"><i class="fab fa-dribbble"></i></a>
                        <a class="social-instagram ml-2" href="#"><i class="fab fa-instagram"></i></a>
                      </div>
                    </div>
                    <div id="about" class="about mb-8">
                      <h6 class="mb-4 fw-400 ls-1 text-uppercase">Deskripsi</h6>
                      <hr class="border-secondary my-2">
                      <div>
                        <div class="collapse readmore" id="collapseSummary">
                          <p><?php echo $result['deskripsi']; ?></p>
                        </div>
                        <a class="readmore-btn collapsed" data-toggle="collapse" href="#collapseSummary" aria-expanded="false" aria-controls="collapseSummary"></a>
                      </div>
                    </div>

                    <!-- system requirements -->
                    <div id="system_requirements" class="mb-8">
                      <h6 class="mb-4 fw-400 ls-1 text-uppercase">Requirements</h6>
                      <hr class="border-secondary my-2">
                      <div>
                        <ul class="sreq_nav nav nav-tabs-minimal text-center mb-4" role="tablist">
                          <li class="nav-item">
                            <a class="py-2 px-7 nav-link active show" id="fillup-home-tab" data-toggle="tab" href="#fillup-1" role="tab" aria-controls="fillup-home-tab" aria-selected="true"><i class="fab fa-windows"></i> PC</a>
                          </li>
                          <li class="nav-item">
                            <a class="py-2 px-7 nav-link" id="fillup-profile-tab" data-toggle="tab" href="#fillup-2" role="tab" aria-controls="fillup-profile-tab" aria-selected="false"><i class="fas fa-apple-alt"></i> MAC</a>
                          </li>
                        </ul>
                        <div class="tab-content" id="fillupTabContent">
                          <div class="tab-pane fade active show" id="fillup-1" role="tabpanel" aria-labelledby="fillup-home-tab">
                            <div class="row">
                              <div class="col-xs-12 col-lg-6 mb-6 mb-lg-0">
                                <div class="row">
                                  <div class="col-12">
                                    <span class="d-inline-block text-uppercase fw-500 mb-3 text-info">Minimum Requirements:</span>
                                  </div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">OS:</strong></div>
                                  <div class="col-sm-8">Lorem ipsum dolor sit amet, consectetur.</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Processor:</strong></div>
                                  <div class="col-sm-8">Lorem ipsum dolor sit amet, consectetur.</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Memory:</strong></div>
                                  <div class="col-sm-8">6 GB RAM</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Graphics:</strong></div>
                                  <div class="col-sm-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Disk Space:</strong></div>
                                  <div class="col-sm-8">42 GB available space</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Architecture:</strong></div>
                                  <div class="col-sm-8">Requires a 64-bit processor and OS</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">API:</strong></div>
                                  <div class="col-sm-8">Lorem ipsum.</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Miscellaneous:</strong></div>
                                  <div class="col-sm-8">Video Preset: Lowest (720p)</div>
                                </div>
                              </div>
                              <div class="col-xs-12 col-lg-6">
                                <div class="row">
                                  <div class="col-12">
                                    <span class="d-inline-block text-uppercase fw-500 mb-3 text-warning">Recommended Requirements:</span>
                                  </div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">OS:</strong></div>
                                  <div class="col-sm-8">Lorem ipsum dolor sit amet, consectetur.</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Processor:</strong></div>
                                  <div class="col-sm-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Memory:</strong></div>
                                  <div class="col-sm-8">8 GB RAM</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Graphics:</strong></div>
                                  <div class="col-sm-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Disk Space:</strong></div>
                                  <div class="col-sm-8">42 GB available space</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Architecture:</strong></div>
                                  <div class="col-sm-8">Requires a 64-bit processor and OS</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">API:</strong></div>
                                  <div class="col-sm-8">Lorem ipsum.</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Miscellaneous:</strong></div>
                                  <div class="col-sm-8">Video Preset: High (1080p)</div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="fillup-2" role="tabpanel" aria-labelledby="fillup-profile-tab">
                            <div class="row">
                              <div class="col-xs-12 col-lg-6 mb-6 mb-lg-0">
                                <div class="row">
                                  <div class="col-12">
                                    <span class="d-inline-block text-uppercase fw-500 mb-3 text-info">Minimum Requirements:</span>
                                  </div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">OS:</strong></div>
                                  <div class="col-sm-8">Lorem ipsum dolor.</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Processor:</strong></div>
                                  <div class="col-sm-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Memory:</strong></div>
                                  <div class="col-sm-8">6 GB RAM</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Graphics:</strong></div>
                                  <div class="col-sm-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Disk Space:</strong></div>
                                  <div class="col-sm-8">42 GB available space</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Architecture:</strong></div>
                                  <div class="col-sm-8">Requires a 64-bit processor and OS</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">API:</strong></div>
                                  <div class="col-sm-8">Lorem ipsum.</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Miscellaneous:</strong></div>
                                  <div class="col-sm-8">Video Preset: Lowest (720p)</div>
                                </div>
                                
                              </div>
                              <div class="col-xs-12 col-lg-6">
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-12">
                                    <span class="d-inline-block text-uppercase fw-500 mb-3 text-warning">Recommended Requirements:</span>
                                  </div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">OS:</strong></div>
                                  <div class="col-sm-8">Lorem ipsum.</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Processor:</strong></div>
                                  <div class="col-sm-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Memory:</strong></div>
                                  <div class="col-sm-8">8 GB RAM</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Graphics:</strong></div>
                                  <div class="col-sm-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Disk Space:</strong></div>
                                  <div class="col-sm-8">42 GB available space</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Architecture:</strong></div>
                                  <div class="col-sm-8">Requires a 64-bit processor and OS</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">API:</strong></div>
                                  <div class="col-sm-8">Lorem ipsum.</div>
                                </div>
                                <div class="row mb-4 mb-sm-0">
                                  <div class="col-sm-4"><strong class="fw-500">Miscellaneous:</strong></div>
                                  <div class="col-sm-8">Video Preset: High (1080p)</div>
                                </div>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <!-- <div class="mb-6">
                      <h6 class="mb-0 fw-400 ls-1 text-uppercase">More like this</h6>
                      <hr class="border-secondary my-2">
                      <div>
                        <div class="owl-carousel carousel_sm" data-carousel-items="1, 2, 3, 3" data-carousel-margin="10" data-carousel-nav="false" data-carousel-dots="true">
                          <div class="item">
                            <a href="#">
                              <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url(assets/img/content/satu.png);">
                                <div class="position-absolute w-100 l-0 b-0 bg-dark_A-80 text-light">
                                  <div class="px-4 py-3 lh-1">
                                    <h6 class="mb-1 small-1 text-light text-uppercase">satu</h6>
                                    <div class="price d-flex flex-wrap align-items-center">
                                      <span class="discount_final text-warning small-2">€99.99</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="item">
                            <a href="#">
                              <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url(assets/img/content/cont/satu.png);">
                                <div class="position-absolute w-100 l-0 b-0 bg-dark_A-80 text-light">
                                  <div class="px-4 py-3 lh-1">
                                    <h6 class="mb-1 small-1 text-light text-uppercase">Dua</h6>
                                    <div class="price d-flex flex-wrap align-items-center">
                                      <span class="discount_final text-warning small-2">€70.99</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="item">
                            <a href="#">
                              <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url(assets/img/content/cont/satu.jpg);">
                                <div class="position-absolute w-100 l-0 b-0 bg-dark_A-80 text-light">
                                  <div class="px-4 py-3 lh-1">
                                    <h6 class="mb-1 small-1 text-light text-uppercase">Tiga</h6>
                                    <div class="price d-flex flex-wrap align-items-center">
                                      <span class="discount_final text-warning small-2">€50.99</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="item">
                            <a href="#">
                              <div class="d-flex h-100 bs-c br-n bp-c ar-8_5 position-relative" style="background-image: url(assets/img/content/cont/cg-c_02.jpg);">
                                <div class="position-absolute w-100 l-0 b-0 bg-dark_A-80 text-light">
                                  <div class="px-4 py-3 lh-1">
                                    <h6 class="mb-1 small-1 text-light text-uppercase">Phasellus</h6>
                                    <div class="price d-flex flex-wrap align-items-center">
                                      <span class="discount_final text-warning small-2">€99.99</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div> -->
                    <div class="mb-0">
                      <div>
                        <div>
                          <p class="small">Duis sit amet lectus pharetra, placerat ante et, varius urna. Praesent euismod lacinia lacus, at posuere quam vestibulum ut. Vivamus eu ligula at massa laoreet commodo. In consequat aliquet scelerisque. Proin dapibus velit quis suscipit interdum. Vestibulum eu sapien eget lorem volutpat dapibus molestie a metus. Proin in turpis a arcu luctus euismod. Sed vitae ante at leo bibendum blandit nec vel mauris. Ut laoreet bibendum lobortis.</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="bg-dark_A-20 p-4 mb-4">
                <img src="./dashboard/image-products/<?php echo $result['image']; ?>" alt="<?php echo $result['alttext']; ?>" class="mb-3" width="325" height="150">
                <!-- <p>Sed neque nibh, vehicula vel molestie eget, venenatis in odio. Nulla nec metus sagittis, scelerisque leo eu, vestibulum justo. Mauris rhoncus arcu eu sagittis consequat.</p> -->
                <p><?php echo $result['shortdescription']; ?></p>
                <div class="price-wrapper">
                  <div class="mb-3">
                    <div class="price">
                        <div class="price-prev"><?php echo $result['regularprice']; ?></div>
                        <div class="price-current"><?php echo $result['saleprice']; ?></div>
                      </div>
                    <div class="discount">
                        Save: $20.00 (33%)
                    </div>
                  </div>
                  <div class="price-box mb-4">
                      <div class="mr-4">
                        <div class="quantity-group input-group">
                            <input type="text" class="form-control form-control-sm h-auto" value="1">
                        </div>
                      </div>
                    <div class="flex-1"><a href="" class="btn btn-block btn-warning"><i class="fas fa-shopping-cart"></i> Add to Cart</a></div>
                  </div>
                </div>
                <div>
                  <div class="row mb-4">
                    <form class="col mb-3 mb-md-0">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" value="" id="comp_check">
                          <label class="custom-control-label fw-600 text-uppercase small-5" for="comp_check">
                            Add To Compare
                          </label>
                        </div>
                    </form>
                    <form class="col-sm-auto">
                        <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" value="" id="gift_check">
                          <label class="custom-control-label fw-600 text-uppercase small-5" for="gift_check">
                            Buy as gift
                          </label>
                        </div>
                    </form>
                  </div>
                  <a href="" class="btn btn-block btn-secondary"><i class="fas fa-heart"></i> Add to wishlist</a>
                </div>
              </div>
              <div class="bg-dark_A-20 p-4">
                <h6 class="mb-3">Game Information</h6>
                <hr class="border-secondary mt-2 mb-4">
                <ul class="list-unstyled mb-3">
                  <li>
                    <span class="platform">Platform:</span> 
                    <span class="platform-item btn btn-sm btn-outline-warning"><i class="fab fa-windows"></i> Platform #1</span>
                  </li>
                </ul>
                <ul class="list-unstyled mb-3">
                  <li class="developer-wrapper">
                    <a href="" class="developer">Developer:</a>
                    <a href="" class="developer-item btn btn-sm btn-secondary">Aenean dignissim</a>
                  </li>
                </ul>
                <ul class="list-unstyled small-2 mb-3">
                  <li class="developer-wrapper">
                    <a href="" class="developer">Genres:</a>
                    <a href="">Indie</a>,
                    <a href="">Simulation</a>,
                    <a href="">Strategy</a>
                  </li>
                </ul>
                <ul class="list-unstyled small-2 mb-3">
                  <li class="developer-wrapper">
                    <a href="" class="developer">Languages:</a>
                    <hr class="my-2 border-secondary">
                    <div>
                      <div class="d-flex align-items-center">
                        <span class="flex-1">English</span>
                        <span class="text-warning ti-check"></span>
                      </div>
                      <hr class="my-2 border-secondary">
                      <div class="d-flex align-items-center">
                        <span class="flex-1">German</span>
                        <span class="text-warning ti-check"></span>
                      </div>
                      <hr class="my-2 border-secondary">
                      <div class="d-flex align-items-center">
                        <span class="flex-1">French</span>
                        <span class="text-warning ti-check"></span>
                      </div>
                      <hr class="my-2 border-secondary">
                      <div class="d-flex align-items-center">
                        <span class="flex-1">Polish</span>
                        <span class="text-warning ti-check"></span>
                      </div>
                      <hr class="my-2 border-secondary">
                      <div class="d-flex align-items-center">
                        <span class="flex-1">Russian</span>
                        <span class="text-warning ti-check"></span>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /.content area -->

      <!-- featured -->
      <section class="container text-light">
        <div class="border border-secondary py-5 px-2">
          <div class="mx-3 mb-6">
            <h6 class="mb-4 fw-400 ls-1 text-uppercase">Featured & Recommended</h6>
            <hr class="border-secondary my-2">
          </div>
          <div class="owl-carousel" data-carousel-items="1, 3, 6">
            <!-- item -->
            <div class="item mx-3">
              <img src="assets/img/content/img_01.jpg" alt="Game" class="mb-3">
              <a href="#" class="text-uppercase fw-500 small-2 mb-0">Nunc consectetur</a>
              <span class="time d-block small-4">05/08/2020</span>
              <span class="d-block small text-warning"><i class="far fa-eye"></i> 23</span>
            </div>
            <!-- /.item -->
          </div>
        </div>
      </section>
      <!-- /.featured -->

      <!-- content area -->
      <section class="review-box content-section text-light">
        <div class="container">
          <div class="row">
            <div class="col-lg-8">
              <div class="mb-8">
                <h6 class="mb-4 fw-400 ls-1 text-uppercase">Reviews</h6>
                <hr class="border-secondary mt-2 mb-6">
                <div class="row">
                  <!-- Item -->
                  <div class="col-12 mb-7">
                    <div class="d-flex flex-wrap flex-sm-nowrap">
                      <div><img src="assets/img/avatar/1.jpg" class="d-none d-sm-block avatar rounded" alt="Avatar"></div>
                      <div class="review-item ml-sm-4">
                        <div class="small d-flex align-items-start">
                          <!-- user -->
                          <span class="name text-lt badge badge-info fw-600 small-4">metus</span>
                          <!-- /.user -->
                          <!-- time -->
                          <div class="time ml-2">05/08/2020</div>
                          <!-- /.time -->
                          <!-- star -->
                          <div class="ml-2 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </div>
                          <!-- /.star -->
                          <!-- info -->
                          <div class="ml-auto">
                            <div class="d-flex small-1">
                              <div class="mr-2"><a href="" class="text-info"><i class="fas fa-thumbs-up"></i></a></div>
                              <div class="mr-2"><a href="" class="text-info"><i class="fas fa-thumbs-down"></i></a></div>
                              <div class="dropdown">
                                  <a class="dropdown-toggle text-info" href="#" id="dropdownShare_01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fas fa-share-alt"></i></a>
                                  <div class="dropdown-menu dropdown-menu-share" aria-labelledby="dropdownShare_01">
                                    <a class="dropdown-item" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="dropdown-item" href="#"><i class="fab fa-dribbble"></i></a>
                                    <a class="dropdown-item" href="#"><i class="fab fa-instagram"></i></a>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.info -->
                        </div>
                        <div>
                          <span class="d-block lead-2 mb-2">Class aptent taciti sociosqu ad litora torquent per conubia nostra</span>
                          <div class="collapse readmore r-fade">
                            <p class="mb-0 small-3">Vestibulum vitae sem eget tortor dignissim convallis. Sed a vehicula tortor. Etiam semper gravida erat eget tristique. Integer suscipit finibus diam, vestibulum lobortis eros lobortis eu.Sed blandit tincidunt nibh, nec ullamcorper lacus porttitor a. Cras vitae justo nisi. Cras in congue turpis. Cras cursus vestibulum diam, vel mollis diam tempus ac. Duis euismod diam et ante egestas, sed porttitor orci euismod. In quis ligula fermentum, elementum quam quis, pellentesque lorem. Vivamus eget ligula ante. Aliquam porttitor nisl sit amet malesuada finibus. Etiam sit amet porttitor purus. Etiam at aliquam massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse cursus sollicitudin malesuada.</p>
                          </div>
                          <a class="readmore-btn collapsed collapser" data-toggle="collapse" aria-expanded="false" href=""></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.Item -->
                  <!-- Item -->
                  <div class="col-12 mb-7">
                    <div class="d-flex flex-wrap flex-sm-nowrap">
                      <div><img src="assets/img/avatar/1.jpg" class="d-none d-sm-block avatar rounded" alt="Avatar"></div>
                      <div class="review-item ml-sm-4">
                        <div class="small d-flex align-items-start">
                          <!-- user -->
                          <span class="name text-lt badge badge-info fw-600 small-4">metus</span>
                          <!-- /.user -->
                          <!-- time -->
                          <div class="time ml-2">05/08/2020</div>
                          <!-- /.time -->
                          <!-- star -->
                          <div class="ml-2 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </div>
                          <!-- /.star -->
                          <!-- info -->
                          <div class="ml-auto">
                            <div class="d-flex small-1">
                              <div class="mr-2"><a href="" class="text-info"><i class="fas fa-thumbs-up"></i></a></div>
                              <div class="mr-2"><a href="" class="text-info"><i class="fas fa-thumbs-down"></i></a></div>
                              <div class="dropdown">
                                  <a class="dropdown-toggle text-info" href="#" id="dropdownShare_02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fas fa-share-alt"></i></a>
                                  <div class="dropdown-menu dropdown-menu-share" aria-labelledby="dropdownShare_02">
                                    <a class="dropdown-item" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="dropdown-item" href="#"><i class="fab fa-dribbble"></i></a>
                                    <a class="dropdown-item" href="#"><i class="fab fa-instagram"></i></a>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.info -->
                        </div>
                        <div>
                          <span class="d-block lead-2 mb-2">Class aptent taciti sociosqu ad litora torquent per conubia nostra</span>
                          <div class="collapse readmore r-fade">
                            <p class="mb-0 small-3">Vestibulum vitae sem eget tortor dignissim convallis. Sed a vehicula tortor. Etiam semper gravida erat eget tristique. Integer suscipit finibus diam, vestibulum lobortis eros lobortis eu.Sed blandit tincidunt nibh, nec ullamcorper lacus porttitor a. Cras vitae justo nisi. Cras in congue turpis. Cras cursus vestibulum diam, vel mollis diam tempus ac. Duis euismod diam et ante egestas, sed porttitor orci euismod. In quis ligula fermentum, elementum quam quis, pellentesque lorem. Vivamus eget ligula ante. Aliquam porttitor nisl sit amet malesuada finibus. Etiam sit amet porttitor purus. Etiam at aliquam massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse cursus sollicitudin malesuada.</p>
                          </div>
                          <a class="readmore-btn collapsed collapser" data-toggle="collapse" aria-expanded="false" href=""></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.Item -->
                  <!-- Item -->
                  <div class="col-12 mb-7">
                    <div class="d-flex flex-wrap flex-sm-nowrap">
                      <div><img src="assets/img/avatar/1.jpg" class="d-none d-sm-block avatar rounded" alt="Avatar"></div>
                      <div class="review-item ml-sm-4">
                        <div class="small d-flex align-items-start">
                          <!-- user -->
                          <span class="name text-lt badge badge-info fw-600 small-4">metus</span>
                          <!-- /.user -->
                          <!-- time -->
                          <div class="time ml-2">05/08/2020</div>
                          <!-- /.time -->
                          <!-- star -->
                          <div class="ml-2 text-warning">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                          </div>
                          <!-- /.star -->
                          <!-- info -->
                          <div class="ml-auto">
                            <div class="d-flex small-1">
                              <div class="mr-2"><a href="" class="text-info"><i class="fas fa-thumbs-up"></i></a></div>
                              <div class="mr-2"><a href="" class="text-info"><i class="fas fa-thumbs-down"></i></a></div>
                              <div class="dropdown">
                                  <a class="dropdown-toggle text-info" href="#" id="dropdownShare_03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fas fa-share-alt"></i></a>
                                  <div class="dropdown-menu dropdown-menu-share" aria-labelledby="dropdownShare_03">
                                    <a class="dropdown-item" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="dropdown-item" href="#"><i class="fab fa-dribbble"></i></a>
                                    <a class="dropdown-item" href="#"><i class="fab fa-instagram"></i></a>
                                  </div>
                              </div>
                            </div>
                          </div>
                          <!-- /.info -->
                        </div>
                        <div>
                          <span class="d-block lead-2 mb-2">Class aptent taciti sociosqu ad litora torquent per conubia nostra</span>
                          <div class="collapse readmore r-fade">
                            <p class="mb-0 small-3">Vestibulum vitae sem eget tortor dignissim convallis. Sed a vehicula tortor. Etiam semper gravida erat eget tristique. Integer suscipit finibus diam, vestibulum lobortis eros lobortis eu.Sed blandit tincidunt nibh, nec ullamcorper lacus porttitor a. Cras vitae justo nisi. Cras in congue turpis. Cras cursus vestibulum diam, vel mollis diam tempus ac. Duis euismod diam et ante egestas, sed porttitor orci euismod. In quis ligula fermentum, elementum quam quis, pellentesque lorem. Vivamus eget ligula ante. Aliquam porttitor nisl sit amet malesuada finibus. Etiam sit amet porttitor purus. Etiam at aliquam massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse cursus sollicitudin malesuada.</p>
                          </div>
                          <a class="readmore-btn collapsed collapser" data-toggle="collapse" aria-expanded="false" href=""></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.Item -->
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div>
                <h6 class="mb-4 fw-400 ls-1 text-uppercase">Best reviews</h6>
                <div class="border border-secondary rounded p-4">
                  <!-- Item -->
                  <div class="review-item mb-5">
                    <div class="small d-flex">
                      <div class="flex-1">
                        <span class="name badge badge-warning fw-600 small-4">metus</span>
                        <span class="time ml-2">05/08/2020</span>
                      </div>
                      <a href="" class="text-info"><i class="fas fa-thumbs-up"></i> 135</a>
                    </div>
                    <div>
                      <span class="lead-2">Sociosqu ad litora torquent</span>
                      <div class="collapse readmore r-fade">
                        <p class="mb-0 small-3">Vestibulum vitae sem eget tortor dignissim convallis. Sed a vehicula tortor. Etiam semper gravida erat eget tristique. Integer suscipit finibus diam, vestibulum lobortis eros lobortis eu.Sed blandit tincidunt nibh, nec ullamcorper lacus porttitor a. Cras vitae justo nisi. Cras in congue turpis. Cras cursus vestibulum diam.</p>
                      </div>
                      <a class="readmore-btn collapsed collapser" data-toggle="collapse" aria-expanded="false" href=""></a>
                    </div>
                  </div>
                  <hr class="border-secondary mt-0 mb-5">
                  <!-- /.Item -->
                  <!-- Item -->
                  <div class="review-item mb-5">
                    <div class="small d-flex">
                      <div class="flex-1">
                        <span class="name badge badge-warning fw-600 small-4">metus</span>
                        <span class="time ml-2">05/08/2020</span>
                      </div>
                      <a href="" class="text-info"><i class="fas fa-thumbs-up"></i> 135</a>
                    </div>
                    <div>
                      <span class="lead-2">Sociosqu ad litora torquent</span>
                      <div class="collapse readmore r-fade">
                        <p class="mb-0 small-3">Vestibulum vitae sem eget tortor dignissim convallis. Sed a vehicula tortor. Etiam semper gravida erat eget tristique. Integer suscipit finibus diam, vestibulum lobortis eros lobortis eu.Sed blandit tincidunt nibh, nec ullamcorper lacus porttitor a. Cras vitae justo nisi. Cras in congue turpis. Cras cursus vestibulum diam.</p>
                      </div>
                      <a class="readmore-btn collapsed collapser" data-toggle="collapse" aria-expanded="false" href=""></a>
                    </div>
                  </div>
                  <hr class="border-secondary mt-0 mb-5">
                  <!-- /.Item -->
                  <!-- Item -->
                  <div class="review-item mb-0">
                    <div class="small d-flex">
                      <div class="flex-1">
                        <span class="name badge badge-warning fw-600 small-4">metus</span>
                        <span class="time ml-2">05/08/2020</span>
                      </div>
                      <a href="" class="text-info"><i class="fas fa-thumbs-up"></i> 135</a>
                    </div>
                    <div>
                      <span class="lead-2">Sociosqu ad litora torquent</span>
                      <div class="collapse readmore r-fade">
                        <p class="mb-0 small-3">Vestibulum vitae sem eget tortor dignissim convallis. Sed a vehicula tortor. Etiam semper gravida erat eget tristique. Integer suscipit finibus diam, vestibulum lobortis eros lobortis eu.Sed blandit tincidunt nibh, nec ullamcorper lacus porttitor a. Cras vitae justo nisi. Cras in congue turpis. Cras cursus vestibulum diam.</p>
                      </div>
                      <a class="readmore-btn collapsed collapser" data-toggle="collapse" aria-expanded="false" href=""></a>
                    </div>
                  </div>
                  <!-- /.Item -->

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- /.content area -->

    </main>
    <!-- /.main content -->

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
                    <span class="fw-500 text-warning">€44.99</span>
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
    <script src="assets/js/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- User JS -->
    <script src="assets/js/scripts.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js" id="_mainJS" data-plugins="load"></script>
  </body>
</html>