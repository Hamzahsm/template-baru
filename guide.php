<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guide - MMOPILOT</title>
 
    <!-- CSS -->
    <link href="assets/css/fonts/etline-font.min.css" rel="stylesheet">
    <link href="assets/css/fonts/fontawesome/all.min.css" rel="stylesheet">
    <link href="assets/css/fonts/pe-icon-7-stroke.css" rel="stylesheet">
    <link href="assets/css/fonts/themify-icons.css" rel="stylesheet">

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
            <a class="navbar-brand logo" href="./index.php">
              <img src="assets/img/pilot baru.png" alt="Wicodus" class="" width="435px" height="116">
            </a>
          </div>
          <div class="col-4 d-none d-lg-block mx-auto">

            <!-- <form class="input-group border-0 bg-transparent">
              <input class="form-control" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-sm btn-warning text-secondary my-0 mx-0" type="submit"><i class="fas fa-search"></i></button>
              </div>
            </form> -->


            <form class="input-group border-0 bg-transparent">
              <input class="form-control live-search-box" type="search" placeholder="Search" aria-label="Search" name="search" id="search" autocomplete="off">
              <div class="input-group-append">
                <button class="btn btn-sm btn-warning text-secondary my-0 mx-0" type="submit"><i class="fas fa-search"></i></button>
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
                <a class="dropdown-item" href="./store.html">New World</a>
                <a class="dropdown-item" href="./store.html">Guild Wars 2</a>
                <a class="dropdown-item" href="./store.html">Albion Online</a>
                <a class="dropdown-item" href="./store.html">All Product</a>
              </div>
            </li>
            <li class="nav-item ">
              <a class="nav-link " href="./guide.php">Guide </a>
            </li>
            <li class="nav-item ">
              <a class="nav-link" href="./contact.html">Contact </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Catalog</a>
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
    <header class="news-header p-relative">
      <div class="overlay br-n bs-c bp-r pe-n" data-parallax="scroll" data-z-index="1" data-image-src="assets/img/content/carousel/choose-3.png"></div>
      <div class="position-relative zi-1 d-flex align-items-end h-100">
        <div class="release-subheader">
          <div class="release-container">
            <div class="text-light pl-xl-2 py-7 w-100">
              <div class="d-flex align-items-center">
                <div class="p-relative mr-6 d-none d-md-block">
                  <div class="badges badges-left badges-bottom text-white">
                    <div class="XL-rating_circle-wrapper"> 
                      <span class="XL-rating_circle-foreground">
                          <span class="rating_circle-number">9.8</span>
                      </span> 
                      <span class="XL-rating_circle" data-rating-total="9"></span>
                    </div>
                  </div>
                </div>
                <div class="flex-1">
                  <h3 class="mb-0">Guild Wars 2 Crystal Oasis All Achievements, Bounties, And Adventures Guide</h3>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb-product breadcrumb breadcrumb-nowrap breadcrumb-angle bg-transparent pl-0 pb-0 pr-0 mb-0">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Guide</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Guild Wars 2</li>
                    </ol>
                  </nav>
                </div>
                <div class="release-soc-container pl-4">
                  <div class="">
                    <a href="#" class="release-soc bg-warning text-secondary">
                      <i class="fab fa-facebook-f"></i>
                    </a>
                  </div>
                  <div class="">
                    <a href="#" class="release-soc bg-warning text-secondary">
                      <i class="fab fa-twitter"></i>
                    </a>
                  </div>
                  <div class="">
                    <a href="#" class="release-soc bg-warning text-secondary">
                      <i class="fab fa-google-plus-g"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- /.header -->

    <!-- main content -->
    <main class="main-content position-relative">

      <!-- overlay -->
      <div class="overlay pe-n br-n bp-c bs-c o-30" style="background-image: url(assets/img/bg/bg_shape.png);"></div>
      <!-- /.overlay -->

      <!-- content area -->
      <div class="content-section news-section carousel-spotlight ig-carousel text-light">
        <div class="container">
          <div class="position-relative">
            <div class="row">
              <div class="col-lg-8 mb-9 mb-lg-0">

                <!-- post content -->
                <div class="entry-content border border-secondary px-4 py-4">
                  <div class="review d-flex mb-6 ml-md--6">
                    <div class="autor-post">
                      <div class="autor-btn-se">
                        <span class="autor-name-ft">ADMIN MMOPILOT</span>
                      </div>
                    </div>
                    <div class="post-date-se small text-warning mr-4 mr-md-7">
                      <span class="autor-date-ft">29th February 2020</span>
                    </div>
                  </div>
                  <p class="lead-1">
                    After the Path of fire update, you can visit the new zone in the crystal oasis known Crystal Oasis. In this zone, you can find numerous things to do including the achievements, collectible, bounties, and adventures. As one of the advantages location, you will need to complete the story of Sparking the flame mission from the path of fire expansion.

                    As you finish the mission, you will need to use an item Invitation to “lily of the Elon” to enter the area. You can reach the area through the Lion’s Arch using the Lionguard Aircrew at the Sanctum harbor. As long as you unlocked the zone, then you will be able to access the Guild wars 2 crystal oasis. Here are the list of activities and the guide for you.
                  </p>
                  <p class="lead-1">
                    
                    General Achievement At The Crystal Oasis
                    The general achievement for the guild wars 2 Crystal Oasis come in many different forms and designs. However, as the general ones it is relatively straight forward and easy to finish. Most of them demand you to move around the location, completing hearth, minigames, or finding out some information around the area. Here are the details for you.

                    1. Renowned Adventurer: Crystal Oasis
                    This particular achievement is pretty much just like any other renowned adventurer mission. All you need to do is completing all four hearts around the areas. Upon finishing it, you will get the reward of 12 adventure point.
                  </p>

                  <p class="lead-1">
                    2. Just a Sip
                    This mission will take you to a mini game located at Amnoon. Just like any other general achievements, all you need is complete the said mini game before the limit runs out. In this case you have to listen to what the chef asks and then grab that item and throw at him before the time limit runs out and you fail.
                    
                    It may take a couple attempts, try not to throw the food to him when he is moving as you can miss easily. As you finish the mission, you will be rewarded with 5 AP and 1 mastery.
                    
                    Read more : What you sould know about world in guild wars 2 
                    
                    3. A Trip Down Memory Lane
                    At Hatari Tablelands is a mastery minigame with the NPC Pahan. It is basically a set of six orbs, and they light up in specific order. You have to watch the order he lights them up and then repeat it in the same order. There are three rounds of this, with each round being progressively harder. The reward is 3 AP and 1 mastery point.
                  </p>
                  <div>
                    <hr class="mb-4 border-light o-10">
                    <div class="d-flex flex-column flex-md-row">
                      <div class="order-md-2 mb-4 mb-md-0">
                          <span class="mr-2"><i class="fas fa-thumbs-up text-warning mr-1"></i>25</span>
                          <span><i class="fas fa-comments text-warning mr-1"></i>18</span>
                      </div>
                      <div class="tags_cloud order-md-1 flex-1">
                        <a href="#" class="badge text-uppercase fw-600 pl-0 py-2">
                          Tags:
                        </a>
                        <a href="#" class="badge badge-warning px-4 py-2">
                          <i class="fas fa-tags"></i> Guide
                        </a>
                        <a href="#" class="badge badge-warning px-4 py-2">
                          <i class="fas fa-tags"></i> MMORPG
                        </a>
                        <a href="#" class="badge badge-warning px-4 py-2">
                          <i class="fas fa-tags"></i> Guild Wars 2
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.post content -->

                <!-- prev/next article -->
                <div class="entry-content border border-secondary px-4 py-4 mt-8">
                  <div class="row">
                    <div class="col-6">
                      <div class="pr-4">
                        <small class="text-warning">Previous article</small>
                        <a href="#" class="d-block">Guild Wars 2 Shadow Provisions achievement in the Desolation</a>
                      </div>
                    </div>
                    <div class="col-6">
                      <div class="pl-4 text-right">
                        <small class="text-warning">Next article</small>
                        <a href="#" class="d-block">GW 2 Dhuum Raid Boss Guide And What To Do</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.prev/next article -->

                <!-- comments -->
                <div class="comments mt-8">
                  <!-- comment-item -->
                  <div class="comment-item">
                    <div class="comment-img">
                      <img src="assets/img/apple-touch-icon.png" class="rounded" alt="User">
                    </div>
                    <div class="comment-main ml-3 ml-md-4"> 
                      <div class="d-md-flex comment-header px-4 py-3">
                        <div class="d-flex align-items-center flex-1">
                          <h6 class="comment-username fw-500 mb-0"><a href="#">Dewei Tsou</a></h6>
                        </div>
                        <div>
                          <a href="#" class="comment-metadata text-warning small">April 10, 2020 at 08:00 AM</a>
                        </div>
                      </div>
                      <div class="mb-6 p-4">
                        <p class="small-2 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam maximus lacus non tincidunt volutpat. Nullam volutpat mi nec nulla finibus tincidunt.</p>
                      </div>
                      <a href="#">
                        <div class="comment-reply text-right">
                          <span class="comment-reply-link">Reply</span>
                        </div>
                      </a>
                    </div>
                  </div>
                  <!-- /.comment-item -->
                </div>
                <!-- /.comments -->

                <!-- leave a comment -->
                <div class="mt-8">
                  <div class="entry-content border px-4 py-6 border-secondary">
                    <h4 class="mb-4">Leave a Comment</h4>
                    <hr class="w-10 border-top-2 mt-5 mb-7 ml-0 mr-auto border-warning">
                    <form action="#" method="POST" data-form="mailer" class="input-transparent">
                      <div class="form-row">
                        <div class="form-group col-md-6">
                          <input class="form-control form-control" type="text" name="name" placeholder="Name" required="">
                        </div>
      
                        <div class="form-group col-md-6">
                          <input class="form-control form-control" type="email" name="email" placeholder="Email Address" required="">
                        </div>

                        <div class="form-group col-12">
                          <input class="form-control form-control" type="text" placeholder="Enter Website*">
                        </div>
                      </div>
      
                      <div class="form-group">
                        <textarea class="form-control form-control" rows="4" placeholder="Your Message" name="message" required=""></textarea>
                      </div>
                      <button class="btn btn-warning" type="submit">Send Message</button>
                    </form>
                  </div>
                </div>
                <!-- /.leave a comment -->

                <!-- related posts -->
                <div class="mt-8">
                  <h4 class="mb-0">Related Posts</h4>
                  <hr class="w-10 border-top-2 mt-5 mb-7 ml-0 mr-auto border-warning">
                  <div class="row gutters-y">
                    <div class="col-sm-6 col-lg-4">
                      <img src="assets/img/content/23 sep pendek.png" alt="Game" class="d-block mb-3">
                      <a href="#" class="d-block text-uppercase fw-500 lh-5 mb-2">Magnis developers speak out on 'death march'</a>
                      <span class="time d-block small-4"><i class="text-warning fas fa-calendar-alt"></i> 12 Apr, 2020</span>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <img src="assets/img/content/27 september pendek.png" alt="Game" class="d-block mb-3">
                      <a href="#" class="d-block text-uppercase fw-500 lh-5 mb-2">Magnis developers speak out on 'death march'</a>
                      <span class="time d-block small-4"><i class="text-warning fas fa-calendar-alt"></i> 14 Apr, 2020</span>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <img src="assets/img/content/18 sep pendek tiga.png" alt="Game" class="d-block mb-3">
                      <a href="#" class="d-block text-uppercase fw-500 lh-5 mb-2">Magnis developers speak out on 'death march'</a>
                      <span class="time d-block small-4"><i class="text-warning fas fa-calendar-alt"></i> 17 Apr, 2020</span>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <img src="assets/img/content/mage.jpg" alt="Game" class="d-block mb-3">
                      <a href="#" class="d-block text-uppercase fw-500 lh-5 mb-2">Magnis developers speak out on 'death march'</a>
                      <span class="time d-block small-4"><i class="text-warning fas fa-calendar-alt"></i> 18 Apr, 2020</span>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <img src="assets/img/content/23 sep pendek.png" alt="Game" class="d-block mb-3">
                      <a href="#" class="d-block text-uppercase fw-500 lh-5 mb-2">Magnis developers speak out on 'death march'</a>
                      <span class="time d-block small-4"><i class="text-warning fas fa-calendar-alt"></i> 22 Apr, 2020</span>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <img src="assets/img/content/27 september pendek.png" alt="Game" class="d-block mb-3">
                      <a href="#" class="d-block text-uppercase fw-500 lh-5 mb-2">Magnis developers speak out on 'death march'</a>
                      <span class="time d-block small-4"><i class="text-warning fas fa-calendar-alt"></i> 25 Apr, 2020</span>
                    </div>
                  </div>
                </div>
                <!-- /.related posts -->

              </div>
              <div class="col-lg-4">
                <div class="rounded mb-4">
                  <form class="input-group border-0 input-transparent bg-transparent">
                    <input class="form-control border border-secondary border-right-0" type="search" placeholder="Type something.." aria-label="Search">
                    <div class="input-group-append">
                      <button class="btn btn-sm btn-warning text-secondary my-0 mx-0" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                  </form>
                </div>
                <div class="archive border border-secondary rounded mb-4">
                  <div class="bg-secondary px-4 py-1"><span class="fw-600 ls-1 text-uppercase small">Latest Articles</span></div>
                  <div class="py-6 py-xl-5 px-4">
                    <div class="row gutters-y">
                      <div class="col-md-6 col-lg-12">
                        <!-- news-item -->
                        <div class="news-item">
                          <div class="row no-gutters">
                            <div class="col-lg-5 mb-5 mb-lg-0">
                              <div class="rounded overflow-h">
                                <div>
                                  <img src="assets/img/content/carousel/1.png" alt="News">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-7">
                              <div class="text-gray pl-lg-3">
                                <div class="lh-1"><a href="news.html" class="badge badge-secondary mb-2">Articles</a></div>
                                <h6 class="text-uppercase mb-0 small-2 fw-400"><a href="news-article.html">Lorem ipsum dolor sit amet, consectetur</a></h6>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.news-item -->
                      </div>
                      <div class="col-md-6 col-lg-12">
                        <!-- news-item -->
                        <div class="news-item">
                          <div class="row no-gutters">
                            <div class="col-lg-5 mb-5 mb-lg-0">
                              <div class="rounded overflow-h">
                                <div>
                                  <img src="assets/img/content/carousel/choose-3.png" alt="News">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-7">
                              <div class="text-gray pl-lg-3">
                                <div class="lh-1"><a href="news.html" class="badge badge-warning mb-2">News</a></div>
                                <h6 class="text-uppercase mb-0 small-2 fw-400"><a href="news-article.html">Lorem ipsum dolor sit amet, consectetur</a></h6>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.news-item -->
                      </div>
                      <div class="col-md-6 col-lg-12">
                        <!-- news-item -->
                        <div class="news-item">
                          <div class="row no-gutters">
                            <div class="col-lg-5 mb-5 mb-lg-0">
                              <div class="rounded overflow-h">
                                <div>
                                  <img src="assets/img/content/carousel/choose.png" alt="News">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-7">
                              <div class="text-gray pl-lg-3">
                                <div class="lh-1"><a href="news.html" class="badge badge-warning mb-2">News</a></div>
                                <h6 class="text-uppercase mb-0 small-2 fw-400"><a href="news-article.html">Lorem ipsum dolor sit amet, consectetur</a></h6>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.news-item -->
                      </div>
                      <div class="col-md-6 col-lg-12">
                        <!-- news-item -->
                        <div class="news-item">
                          <div class="row no-gutters">
                            <div class="col-lg-5 mb-5 mb-lg-0">
                              <div class="rounded overflow-h">
                                <div>
                                  <img src="assets/img/content/carousel/1.png" alt="News">
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-7">
                              <div class="text-gray pl-lg-3">
                                <div class="lh-1"><a href="news.html" class="badge badge-secondary mb-2">Articles</a></div>
                                <h6 class="text-uppercase mb-0 small-2 fw-400"><a href="news-article.html">Lorem ipsum dolor sit amet, consectetur</a></h6>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- /.news-item -->
                      </div>
                    </div>
                  </div>
                </div>
                <div class="archive border border-secondary rounded mb-4">
                  <div class="bg-secondary px-4 py-1"><span class="fw-600 ls-1 text-uppercase small">Timeline</span></div>
                  <div class="pl-6 py-6">
                    <!-- item -->
                    <div class="timeline-item" data-time="24 Mar 2020">
                      <span class="d-inline-block fw-500 text-warning mb-2">News</span>
                      <p class="small-1 lh-5 mb-0">
                        Nulla ullamcorper tempus ex commodo iaculis.
                      </p>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="timeline-item" data-time="28 Feb 2020">
                      <span class="d-inline-block fw-500 text-warning mb-2">Articles</span>
                      <p class="small-1 lh-5 mb-0">
                        Nulla ullamcorper tempus ex commodo iaculis.
                      </p>
                    </div>
                    <!-- /.item -->
                    <!-- item -->
                    <div class="timeline-item pb-0" data-time="19 Feb 2020">
                      <span class="d-inline-block fw-500 text-warning mb-2">News</span>
                      <p class="small-1 lh-5 mb-0">
                        Nulla ullamcorper tempus ex commodo iaculis.
                      </p>
                    </div>
                    <!-- /.item -->
                  </div>
                </div>
                <div class="filters border border-secondary rounded p-4 mb-4">
                  <ul class="sidebar-nav-light-hover list-unstyled mb-0 text-unset small-3 fw-600">

                    <li class="nav-item text-light transition mb-2 active">
                      <a href="" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                        <span class="p-collapsing-title">News</span>
                      </a>
                    </li>
                    <li class="nav-item text-light transition mb-2">
                      <a href="" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                        <span class="p-collapsing-title">Reviews</span>
                      </a>
                    </li>
                    <li class="nav-item text-light transition mb-2">
                      <a href="" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                        <span class="p-collapsing-title">PC</span>
                      </a>
                    </li>
                    <li class="nav-item text-light transition mb-2">
                      <a href="" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                        <span class="p-collapsing-title">Platform</span>
                      </a>
                    </li>
                    <li class="nav-item text-light transition mb-2">
                      <a href="" aria-expanded="false" class="nav-link py-2 px-3 text-uppercase nav-link-border">
                        <span class="p-collapsing-title">Xbox</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="archive border border-secondary rounded">
                  <div class="bg-secondary px-4 py-1"><span class="fw-600 ls-1 text-uppercase small">Achive</span></div>
                  <div class="p-4">
                    <ul class="list-unstyled small mb-0">
                      <li><a href="">2020</a></li>
                      <li><a href="">2019</a></li>
                      <li><a href="">2018</a></li>
                      <li><a href="">2017</a></li>
                      <li><a href="">2016</a></li>
                      <li><a href="">2015</a></li>
                      <li><a href="">2014</a></li>
                      <li><a href="">2013</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>
      <!-- /.content area -->

    </main>
    <!-- /.main content -->

    <!-- footer -->
    <footer class="footer footer-dark bg-dark py-9">
      <div class="container">
          <div class="row gutters-y">
              <div class="col-6 col-lg-3">
                <a href="#" class="logo d-block mb-4"><img src="assets/img/pilot baru.png" alt="Wicodus" class="" width="435px" height="116"> </a>
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
                  <a class="nav-link" href="./store.html">Packages</a>
                  <a class="nav-link" href="./store.html">Legendary Armour & Trinket</a>
                  <a class="nav-link" href="./store.html">Legendary Weapon</a>
                  <a class="nav-link" href="./store.html">Leveling & Mastery</a>
                  <a class="nav-link" href="./store.html">WvW & PvP</a>
                  <a class="nav-link" href="./store.html">Fractal</a>
                  <a class="nav-link" href="./store.html">Ascended & Crafting</a>
                  
                </div>
              </div>

              <div class="col-6 col-lg-2">
                <h6 class="text-uppercase fw-600 mb-4">Albion Online</h6>
                <div class="nav flex-column">
                  <a class="nav-link" href="news.html">Power Leveling</a>
                </div>
              </div>

              <div class="col-6 col-lg-2">
                <h6 class="text-uppercase fw-600 mb-4">New World</h6>
                <div class="nav flex-column">
                  <a class="nav-link" href="./store.html">Level</a>
                  <a class="nav-link" href="./store.html">Life Skill</a>
                  <a class="nav-link" href="./store.html">Gathering</a>
                  <a class="nav-link" href="./store.html">Trade Skill</a>
                </div>
              </div>
              
              <div class="col col-lg-3 order-lg-last">
                <div class="mb-6">
                  <h6 class="text-uppercase fw-600 mb-4">All About Our Site</h6>
                  <div class="nav flex-column">
                    <a class="nav-link" href="contact.html">About Us</a>
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

    <!-- sign up -->
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
    <!-- /.sign up -->

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