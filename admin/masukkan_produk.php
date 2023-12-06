<?php 
    include('../includes/connect.php');

    if(isset($_POST['submit_produk'])){
        $product_title = mysqli_real_escape_string($con, $_POST['product_title']);
        $deskripsi = mysqli_real_escape_string($con, $_POST['deskripsi']);
        $kata_kunci = mysqli_real_escape_string($con, $_POST['kata_kunci']);
        $kategori_id = mysqli_real_escape_string($con, $_POST['kategori_title']);
        $harga_produk = mysqli_real_escape_string($con, $_POST['harga_produk']);
        $produk_status = 'true';
    
        // accessing images
        $gambar_produk1 = $_FILES['gambar_produk1']['name'];
        $gambar_produk2 = $_FILES['gambar_produk2']['name'];
        $gambar_produk3 = $_FILES['gambar_produk3']['name'];
    
        // temporary files
        $temp_image1 = $_FILES['gambar_produk1']['tmp_name'];
        $temp_image2 = $_FILES['gambar_produk2']['tmp_name'];
        $temp_image3 = $_FILES['gambar_produk3']['tmp_name'];
    
        // checking empty condition
        if ($product_title == '' or $deskripsi == '' or $kata_kunci == '' or $kategori_id == '' or $harga_produk == '' or $gambar_produk1 == '' or $gambar_produk2 == '' or $gambar_produk3 == '') {
            echo "<script>alert('Tolong isi semua baris form')</script>";
            exit();
        } else {
            move_uploaded_file($temp_image1, "./gambar_produk/$gambar_produk1");  
             move_uploaded_file($temp_image2, "./gambar_produk/$gambar_produk2");
            move_uploaded_file($temp_image3, "./gambar_produk/$gambar_produk3");
            
            // insert query
            $submit_produk = "INSERT INTO produk (product_title, deskripsi, kata_kunci, kategori_id, harga_produk, gambar_produk1, gambar_produk2, gambar_produk3, date, status) VALUES ('$product_title', '$deskripsi', '$kata_kunci', '$kategori_id', '$harga_produk', '$gambar_produk1', '$gambar_produk2', '$gambar_produk3', NOW(), '$produk_status')";
             $result_query = mysqli_query($con, $submit_produk);
    
            if($result_query){
                echo "<script>alert('Sukses menambahkan barang')</script>";
            } else {
                echo "<script>alert('Gagal menambahkan barang')</script>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masukkan Produk-Admin Dashboard</title>

    <!-- boostrap css link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- css file -->
    <link rel="stylesheet" href="../style.css">
</head>
<body class="bg-light">
    <div class="container">
        <h1 class="text-center mt-3">
            Masukkan Produk
        </h1>
        <!--produk-->
        <form action="" method="post" enctype="multipart/form-data">
            <!--title-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-label">Nama Produk</label>
                <input type="text" name="product_title" id="product_title" class="form-control" placeholder="Masukkan nama produk" autocomplete="off" required="required">
            </div>

            <!--description-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="deskripsi" class="form-label">Deskripsi Produk</label>
                <input type="text" name="deskripsi" id="deskripsi" class="form-control" placeholder="Masukkan deskripsi produk" autocomplete="off" required="required">
            </div>

            <!--Kata kunci produk-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="kata_kunci" class="form-label">Kata Kunci Produk</label>
                <input type="text" name="kata_kunci" id="kata_kunci" class="form-control" placeholder="Masukkan kata kunci produk" autocomplete="off" required="required">
            </div>

            <!--select kategori-->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="kategori_title" id="" class="form-select">
                    <option value="">Pilih Kategori</option>
                    <?php
                        $select_query = "SELECT * FROM kategori";
                        $result_query = mysqli_query($con, $select_query);
                        while ($row = mysqli_fetch_assoc($result_query)) {
                            $kategori_title = $row ['kategori_title'];
                            $kategori_id = $row['kategori_id'];
                            echo "<option value='$kategori_id'>$kategori_title</option>";
                        }
                    ?>
                </select>
            </div>

            <!--image1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="gambar_produk1" class="aform-label">Gambar Produk 1</label>
                <input type="file" name="gambar_produk1" id="gambar_produk1" class="form-control" required="required">
            </div>

            <!--image2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="gambar_produk2" class="form-label">Gambar Produk 2</label>
                <input type="file" name="gambar_produk2" id="gambar_produk2" class="form-control" required="required">
            </div>

            <!--image3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="gambar_produk3" class="form-label">Gambar Produk3</label>
                <input type="file" name="gambar_produk3" id="gambar_produk3" class="form-control" required="required">
            </div>

            <!--price-->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="harga_produk" class="form-label">Harga Produk</label>
                <input type="text" name="harga_produk" id="harga_produk" class="form-control" placeholder="Masukkan harga produk" autocomplete="off" required="required">
            </div>

            <!--submit-->
            <div class="form-outline mb-4 w-50 m-auto">
                    <input type="submit" name="submit_produk" class="btn btn-info" value="Kirim Produk">
                </div>

            </form>

    </div>

    
</body>
</html>
            
