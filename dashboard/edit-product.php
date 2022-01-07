<?php

$id = $_GET['id'];

// $conn = mysqli_connect("localhost", "u705028021_loginsystem", "Loginsystem321", "u705028021_loginsystem");
$conn = mysqli_connect("localhost", "u705028021_templatepilot", "templatepilot123NEW", "u705028021_templatepilot");
$query    = mysqli_query($conn, "SELECT * FROM pilot_products WHERE id= $id ");
$result    = mysqli_fetch_array($query);

?>

<?php

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $deskripsi = $_POST['deskripsi'];
    $regularprice = $_POST['regularprice'];
    $saleprice = $_POST['saleprice'];
    $category = $_POST['category'];
    $tags = $_POST['tags'];

    // query start here
    $query = "UPDATE pilot_products SET 
        title = '$title',
        slug = '$slug',
        deskripsi = '$deskripsi',
        regularprice = '$regularprice',
        saleprice = '$saleprice',
        category = '$category',
        tags = '$tags' WHERE id = '$id'";

    // $result = mysqli_query($con, $query)  or die (mysqli_error($con)) ;

    $result = mysqli_query($conn, $query);

    if ($result) {
        echo "<script>alert('Data Berhasil di update');
            document.location.href='./products.php'; </script>";
    } else {
        echo "<script>alert('Data Gagal Di Update');
        document.location.href='./products.php';</script>";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title> Edit Posts - Mmopilot </title>

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
                            <a class="nav-link active" href="./index.php">
                                <span data-feather="file-plus"></span>
                                Post
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./products.php">
                                <span data-feather="shopping-cart"></span>
                                Products
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">EDIT YOUR POST</h1>
                </div>

                <!-- main content -->

                <form action="" method="POST">
                    <div class="row">
                        <div class="col-8">
                            <label for="" class="form-label fw-bold mt-3">Title</label>
                            <input type="text" id="" name="title" autocomplete="off" class="form-control" value="<?php echo $result['title']; ?>">

                            <label for="" class="form-label fw-bold mt-3">Slug</label>
                            <input type="text" name="slug" autocomplete="off" class="form-control" value="<?php echo $result['slug']; ?>">

                            <label for="" class="form-label fw-bold mt-3">Deskripsi</label>
                            <textarea name="deskripsi" id="" cols="100" rows="18" class="mt-1"><?php echo $result['deskripsi']; ?></textarea> <br><br>

                            <label for="" class="form-label fw-bold mt-3">Regular Price</label>
                            <input type="text" id="" name="regularpricce" autocomplete="off" class="form-control" value="<?php echo $result['regularprice']; ?>">

                            <label for="" class="form-label fw-bold mt-3">Sale Price</label>
                            <input type="text" id="" name="saleprice" autocomplete="off" class="form-control" value="<?php echo $result['saleprice']; ?>">

                            <label for="" class="form-label fw-bold mt-3">Category</label>
                            <input type="text" id="" name="category" autocomplete="off" class="form-control" value="<?php echo $result['category']; ?>">

                            <label for="" class="form-label fw-bold mt-3">Tags</label>
                            <input type="text" id="" name="tags" autocomplete="off" class="form-control" value="<?php echo $result['tags']; ?>">

                            <div class="form-group mb-4 mt-5 text-center">
                                <button type="submit" name="submit" class="btn btn-primary">Update</button>
                            </div>
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