<?php
include 'koneksi.php';
if(isset($_POST['bsimpan'])){
    mysqli_query($con,"update customer set 
    CUST_CODE='$_POST['CUST_CODE]',
    CUST_NAME= '$_POST['CUST_NAME']',
    CUST_CITY= '$_POST['CUST_CITY']',
    WORKING_AREA= '$_POST['WORKING_AREA']
    CUST_COUNTRY='$_POST['CUST_COUNTRY']',
    PHONE_NO='$_POST['PHONE_NO']'");

    echo "Data Customer Telah di ubah";
    echo "<meta http-equiv=refresh content=8;URL='customer.php'>";
    header("Location: customer.php");
    
    }
    

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="text-center">CUSTOMER</h1>

    <!-- awal card -->
    <div class="card mt-3">
    <div class="card-header bg-primary text-white">
        Daftar Produk
    </div>
    <div class="card-body">
        <from method="post" action= "index.html"
        action="InsertDataCostumer.php" method="POST">
            <div class="form-group">
                <label>Code</label>
                <input type="text" name="CUST_CODE"class="form-control" placeholder="Inputkan Code Customer"
                disini! "required">
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="CUST_NAME"class="form-control" placeholder="Inputkan Nama Customer"
                disini! "required">
            </div>
            <div class="form-group">
                <label>City</label>
                <input type="text" name="CUST_CITY" class="form-control" placeholder="Inputkan Kota Customer"
                disini! "required">
            </div>
            <div class="form-group">
                <label>Working Area</label>
                <input type="text" name="WORKING_AREA" class="form-control" placeholder="Inputkan Working Area Customer"
                disini! "required">
            </div>
            <div class="form-group">
                <label>Country</label>
                <input type="text" name= class="CUST_COUNTRY" class="form-control" placeholder="Inputkan Country Customer"
                disini! "required">
            </div>
            <div class="form-group">
                <label>Phone No</label>
                <input type="text" name= class="PHONE_NO" class="form-control" placeholder="Inputkan Phone Number Customer"
                disini! "required">
            </div>
<br>
            <button type="submit" class="btn btn-success" name="bsimpan">Simpan</button>
            <button type="reset" class="btn btn-danger" name="bsimpan">Kosongkan</button>
        </from>
    </div>
</div>
<!-- akhir card -->

</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>

