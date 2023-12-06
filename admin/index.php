<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <!--bootstrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!--css file -->
    <link rel="stylesheet" href="../style.css">
    <style>
        .admin_image{
            width:100px;
            object-fit: contain;
        }
    </style>

    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <!-- navbar-->
    <div class="container-fluid p-0">
        <!--first child-->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
            <div class="container-fluid">
                <img src="../image/logo-no-background.png" alt="" class="logo">
                <nav class="navbar navbar-expand-lg">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="" class="nav-link"><b>Selamat Datang<b></a>
                        </li>
                    </ul>

                </nav>

            </div>

        </nav>

        <!--second child-->
        <div class="bg-light">
            <h3 class="text-center p-2">Manajemen Produk</h3>
        </div>

        <!--third child-->
        <div class="row">
            <div class="col-md-12 bg-secondary p-1 d-flex align-items-center ">
                <div class="p-3">
                    <a href="#">
                        <img src="../image/E-bunite pembasmi hama.jpg" alt="" class="admin_image"
                    </a>
                    <p class="text-light text-center">
                        Nama Admin                   </p>
                </div>
            
                
                <div class="button text-center">
                    <button class="my-3"><a href="masukkan_produk.php" class="nav-link text-light bg-info my-1">Masukkan Produk</a>
                    </button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Detail Produk</a>
                    </button>
                    <button><a href="index.php?insert_kategori" class="nav-link text-light bg-info my-1">Masukkan Kategori</a>
                    </button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Lihat Kategori</a>
                    </button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Pesanan</a>
                    </button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Pembayaran</a>
                    </button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Daftar Pengguna</a>
                    </button>
                    <button><a href="" class="nav-link text-light bg-info my-1">Logout</a>
                    </button>
                </div>
            </div>
        </div>

    <!--fourth child-->
    <div class="container my-3">
        <?php
        if (isset($_GET['insert_kategori'])){
            include('insert_kategori.php');
        }
        ?>
    </div>
    
    <!--last child-->
    <div class="bg-info p-3 text-center footer">
        <p>Lapak Desa by-KSI OYE
    </div>
    </div>


    </div>
    
    <!--bootstrap js link -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>