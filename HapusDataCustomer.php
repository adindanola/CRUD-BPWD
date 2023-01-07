<?php
include "koneksi.php";

if(isset($_GET['bhapus'])){
mysqli_query($con,"delete from customer where CUST_CODE='$_GET[bhapus]'");
echo "Data telah Terhapus";
echo "<meta http-equiv=refresh content=8;URL='customer.php'>";
header("Location: customer.php");

}


?>