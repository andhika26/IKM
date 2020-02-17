<?php 
$koneksi = mysqli_connect("localhost","pppbuluc_ikmuser","ikmpppbulu12","pppbuluc_ikm");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>