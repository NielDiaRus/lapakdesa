<!--connect file-->

<?php
    include('includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lapak Desa </title>

    <!-- boostrap css link -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--css file-->
    <link rel="stylesheet" href="style.css">


</head>
<body>

<!-- navbar -->
<div class="container-fluid p-0">
    <!--first child-->
    <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="image/logo-no-background.png" alt="" class="logo">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i><sup> 1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total Price</a>
        </li>
       
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!-- second child -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <ul class="navbar-nav me-auto">
    <li class="nav-item">
          <a class="nav-link" href="#">Selamat Datang</a>
        </li>
    <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>
    </ul>
</nav>

<!-- third child-->
<div class="bg-light">
    <h3 class="text-center">
        Semua Produk
    </h3>
    <p class="text-center">
        Selamat Datang di Lapak Desa Tulung Agung
    </p>
</div>

<!--fourth child-->
<div class="row">
    <div class="col-md-10">
        <!--produk-->
        <div class="row">
            <div class="col-md-4 mb-2">
                <div class="card" >
                <img src="image/bibitpadi.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-info">Beli</a>
                    <a href="#" class="btn btn-secondary">Lihat Keterangan</a>
                </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card" >
                <img src="image/pAKAN AYAM.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-info">Beli</a>
                    <a href="#" class="btn btn-secondary">Lihat Keterangan</a>
                </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card" >
                <img src="image/pupuk tani.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-info">Beli</a>
                    <a href="#" class="btn btn-secondary">Lihat Keterangan</a>
                </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card" >
                <img src="image/bibitpadi.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-info">Beli</a>
                    <a href="#" class="btn btn-secondary">Lihat Keterangan</a>
                </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card" >
                <img src="image/bibitpadi.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-info">Beli</a>
                    <a href="#" class="btn btn-secondary">Lihat Keterangan</a>
                </div>
                </div>
            </div>
            <div class="col-md-4 mb-2">
                <div class="card" >
                <img src="image/bibitpadi.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-info">Beli</a>
                    <a href="#" class="btn btn-secondary">Lihat Keterangan</a>
                </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="col-md-2 bg-secondary p-0">
        <!--sidenav-->
        <ul class="navbar-nav me-auto text-center">
            <li class="nav-item bg-info">
                <a href="" class="nav-link text-light"><h4>Kategori</h4></a>
            </li>
            <?php
                $select_kategori="SELECT*FROM kategori";

                $result_kategori=mysqli_query($con,$select_kategori);
                // $row_data=mysqli_fetch_assoc($result_kategori);
                
                while ($row_data = mysqli_fetch_assoc($result_kategori)) {
                    $kategori_title = $row_data['kategori_title']; // Ganti 'brand_title' menjadi 'kategori_title'
                    $kategori_id = $row_data['kategori_id'];
                
                    echo "<li class='nav-item'>
                            <a href='index.php?kategori=$kategori_id' class='nav-link text-light'>$kategori_title</a>
                          </li>";
                }
                ?>

          
        </ul>
    </div>
    

</div>



<!--last child-->
<div class="bg-info p-3 text-center ">
    <p>Lapak Desa by-KSI OYE
</div>
</div>


        <!--boost strap js link-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
</body>

</html>