<?php

$con = mysqli_connect("localhost", "u705028021_templatepilot", "templatepilot123NEW", "u705028021_templatepilot");

if (isset($_POST['publish'])) {
  global $con;
  $nama = $_POST['nama'];
  $slug = $_POST['slug'];
  $category = $_POST['category'];
  $parentcategory = $_POST['parentcategory'];
  $deskripsi = $_POST['deskripsi'];
  $metadescription = $_POST['metadescription'];
  $focuskeyword = $_POST['focuskeyword'];
  $date = date("Y-m-d");

  $query = "INSERT INTO pilot_categories (nama, slug, category, parentcategory, deskripsi, metadescription, focuskeyword, date ) VALUES ('$nama', '$slug', '$category', '$parentcategory',  '$deskripsi', '$metadescription', '$focuskeyword', '$date')";

  $query_run = mysqli_query($con, $query);

  if ($query_run) {
    echo "<script>alert('Category Berhasil Ditambahkan! ');
    document.location.href = 'categories.php';</script>";  
  } else {
    echo "<script>alert('Oops, Category gagal ditambahkan!');
    document.location.href = 'tambah-category.php';</script>";
  }
};  

?> 

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Tambah Category - Mmopilot </title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



  <!-- Bootstrap core CSS -->
  <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./dashboard.css">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="dashboard.css" rel="stylesheet">
</head>

<body>

  <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fw-bold" href="#">MMOPILOT</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <a class="nav-link px-3" href="../index.php">Sign out</a>
      </div>
    </div>
  </header>

  <div class="container-fluid">
    <div class="row">
      <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-3">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="./index.php">
                <span data-feather="file-plus"></span>
                Post
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./products.php">
                <span data-feather="shopping-cart"></span>
                Products
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="./categories.php">
                <span data-feather="file-text"></span>
                Categories
              </a>
            </li>

          </ul>
        </div>
      </nav>

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">TAMBAH CATEGORY BARU</h1>
        </div>

        <!-- main content -->
        <form action="tambah-category.php" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col-8 mb-5">
              <h5>Nama</h5>
              <input type="text" name="nama" autocomplete="off" class="form-control">

              <h5 class="mt-3">Slug</h5>
              <input type="text" name="slug" autocomplete="off" class="form-control" >

              <h5 class="mt-3">Category</h5>
              <select name="category" id="" class="form-control">
                <option value="Category belum dipilih">--Pilih--</option>
                <option value="Albion Online">Albion Online</option>
                <option value="Guild Wars 2">Guild Wars 2</option>
                <option value="New World">New World</option>
              </select>

              <h5 class="mt-3">Parent Category</h5>
              <input type="radio" class="form-check-input" value="Yes" name="parentcategory"> 
              <label for="">Yes</label>
              
              <input type="radio" class="form-check-input" value="No" name="parentcategory">
              <label for="">No</label>

              <h5 class="mt-3">Deskripsi</h5>
              <textarea name="deskripsi" id="" cols="100" rows="18"></textarea>

              <h5 class="mt-3">Meta Description</h5>
              <textarea name="metadescription" id="" cols="100" rows="5"></textarea>

              <h5 class="mt-3">Focus Keyword</h5>
              <input type="text" name="focuskeyword" class="form-control">

              <button type="submit" class="btn btn-primary mt-3" name="publish">Publish</button>
            </div>
            <div class="col-4">

            </div>
          </div>
        </form>
        <!-- end main content -->


      </main>
    </div>
  </div>


  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
  <script src="dashboard.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <script src="./dashboard.js"></script>
</body>

</html>
