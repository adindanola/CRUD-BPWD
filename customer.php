<?php include 'koneksi.php';
if(isset($_GET['bhapus'])){
    mysqli_query($con,"delete from customer where CUST_CODE='$_GET[bhapus]'");
    echo "Data telah Terhapus";
    echo "<meta http-equiv=refresh content=8;URL='customer.php'>";
    header("Location: customer.php");
    
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <body>
    <div class="container">
    <a href="FormBarang.php"></a>
    <h1 class="text-center">DATA CUSTOMER</h1>

<!-- Awal Cards -->
    <div class="card mt-3">
    <div class="card-header bg-primary text-white">
    Identitas Customer Kami
    </div>
    <div class="card-body">
  <table class="table table-bordered table-striped" >
        <tr>
            <th align="center">No</th>
            <th>CUST CODE</th>
            <th>CUST NAME</th>
            <th>CUST CITY</th>
            <th>WORKING AREA</th>
            <th>CUST COUNTRY</th>
            <th>PHONE NO</th>
            <th>Aksi</th>
        </tr>
        <?php
$i = 0;
$query = mysqli_query($con, "SELECT * FROM customer");
while ($m = mysqli_fetch_array($query)) {
    $i++;
    ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$m['CUST_CODE']?></td>
            <td><?=$m['CUST_NAME']?></td>
            <td><?=$m['CUST_CITY']?></td>
            <td><?=$m['WORKING_AREA']?></td>
            <td><?=$m['CUST_COUNTRY']?></td>
            <td><?=$m['PHONE_NO']?></td>
            <td>
            <a href="FromUpdateProduk.php?id=<?php
            print $m['CUST_CODE']
            ?>"><button type="submit" class="btn btn-warning" name="bsimpan">Edit</button> </a>
            
            <a href="HapusDataCustomer.php?id=<?php 
            print $m['CUST_CODE']
            ?>"><button type="reset" class="btn btn-danger mt-2" name="bhapus">Hapus</button></a>
            </td>

    </tr>
    <?php 
}?>
    </table>
    </body>
    </html>
  </div>
</div>
</div>


        
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>