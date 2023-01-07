<?php
// membuat koneksi ke mysql
$con = mysqli_connect("localhost", "root", "", "bpwd_uas");
// Mengecek apakah koneksi gagal?
if (mysqli_connect_errno($con)) {
    echo "Failed to connect to MySQL: " .
    mysqli_connect_error();
} else {
    // echo "Berhasil Terhubung!";
}