<?php 

include('../includes/connect.php');

if (isset($_POST['insert_cat'])) {
    $kategori_title = $_POST['kategori_title'];

    //select data from database
    $select_query="SELECT * FROM kategori WHERE kategori_title= '$kategori_title'";
    $result_select = mysqli_query($con,  $select_query);
    $number=mysqli_num_rows($result_select);

    if($number>0){
        echo "<script>alert('Kategori ini sudah ada di database')</script>";
    }else {
        $insert_query = "INSERT INTO kategori (kategori_title) VALUES ('$kategori_title')";
        $result = mysqli_query($con, $insert_query);
    
        if ($result) {
            echo "<script>alert('Kategori berhasil dikirim')</script>";
        }
    }
     
   
}


?>
<h2 class="text-center">Masukkan Kategori</h2>
<form actions="" method ="post" class="mb-2">
    <div class="input-group w-90 mb-2">
    <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></i></span>
    <input type="text" class="form-control" name="kategori_title" placeholder="Input Kategori" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group w-10 mb-2 m-auto"> 
    <input type="submit" class="bg-info border-0 p-2 my-3" value="Masukkan Kategori" name="insert_cat"  >
    
    </div>

</form >