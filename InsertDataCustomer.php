<?php
include 'koneksi.php';
    $CODE  =$_POST['CUST_CODE'];
    $NAME =$_POST['CUST_NAME'];
    $CITY =$_POST['CUST_CITY'];
    $WORKING_AREA =$_POST['WORKING_AREA'];
    $COUNTRY =$_POST['CUST_COUNTRY'];
    $PHONE_NO =$_POST['PHONE_NO'];


mysqli_query($con, "INSERT INTO `costumer`(`CUST_CODE`, `CUST_NAME`,
`CUST_CITY`, `WORKING_AREA`, `CUST_COUNTRY`, `'PHONE_NO`)
VALUES  (' $CODE','$NAME','$CITY ','$WORKING_AREA','$COUNTRY','$PHONE_NO')");

header("location: customer.php");
?>