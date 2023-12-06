<?php 
    include('../includes/connect.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Product</title>

      <!-- boostrap css link -->

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- font awesome link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--css file-->
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">
    <div class="container m-3 ">
        <h1 class="text-center">
            Masukkan Produk </h1>
            <!--form-->
            <form action="" method="post" enctype="multipart/form-data">
                <!--title-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_title" class="form-label">Nama Produk</label>
                    <input  type="text" name="product_title" id="product_title" class="form-control" placeholder="Masukkan nama produk" autocomplete="off" requiered="required"> 
                </div>

                <!--description-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="deskripsi"class="form-label">Deskripsi</label>
                    <input  type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukkan deskripsi produk" autocomplete="off" requiered="required"> 
                </div>

                 <!--Kata Kunci-->
                 <div class="form-outline mb-4 w-50 m-auto">
                    <label for="kata_kunci"class="form-label">Kata Kunci</label>
                    <input  type="text" name="kata_kunci" id="kata_kunci" class="form-control" placeholder="Masukkan kata kunci produk" autocomplete="off" requiered="required"> 
                </div>

                 <!--Kategori-->
                 <div class="form-outline mb-4 w-50 m-auto">
                    <select name="proudct_categories" id="" class ="form-select">
                        <option value="">Pilih Kategori</option>
                        <?php 
                            $select_query="SELECT * FROM kategori";
                            $result_query=mysqli_query($con,$select_query); 
                        ?>
                    </select>
                </div>

                 <!--Image 1-->
                 <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_image1"class="form-label">Gambar Produk 1</label>
                    <input  type="file" name="product_image1" id="product_image1" class="form-control" required="required""> 
                </div>

                 <!--Image 2-->
                 <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_image2"class="form-label">Gambar Produk 2</label>
                    <input  type="file" name="product_image2" id="product_image2" class="form-control" required="required""> 
                </div>

                 <!--Image 3-->
                 <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_image3"class="form-label">Gambar Produk 3</label>
                    <input  type="file" name="product_image3" id="product_image3" class="form-control" required="required""> 
                </div>

                <!--Price-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <label for="product_price"class="form-label">Harga Produk</label>
                    <input  type="text" name="product_price" id="product_price" class="form-control" placeholder="Masukkan harga produk" autocomplete="off" requiered="required"> 
                </div>

                
                <!--submit-->
                <div class="form-outline mb-4 w-50 m-auto">
                    <input type="submit" name="insert_product" class="btn btn-info" value="Kirim Produk">
                </div>

            </form>

    </div>

    
</body>
</html>