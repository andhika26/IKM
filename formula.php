
<?php
//koneksi
include ("koneksi.php");
$tahun = date('Y');

//ambil data koresponden
$hitung = mysqli_query($koneksi, "SELECT koresponden FROM koresponden WHERE tahun='$tahun'") or die (mysqli_error());
$r = mysqli_fetch_array($hitung);
//echo "Jumlah Koresponden = ".$r[0]." Orang <br>";

//ambil data koresponden
$hitung1 = mysqli_query($koneksi, "SELECT batas FROM bataskonversi WHERE tahun='$tahun'") or die (mysqli_error());
$r2 = mysqli_fetch_array($hitung1);
//echo "Batas Konversi = ".$r2[0]." Orang <br>";
	
//ambil data koresponden
$query = mysqli_query($koneksi, "SELECT SUM(r1),SUM(r2),SUM(r3),SUM(r4),SUM(r5),SUM(r6),SUM(r7),SUM(r8),SUM(r9),SUM(r10),COUNT(id) FROM formulaikm WHERE tahun='$tahun'") or die (mysqli_error());		
if(mysqli_num_rows($query) == 0){
	echo "<br><font color='red'><br><b>Pencarian Data Tidak Ditemukan</b></font>";
		}else{
	$rr = mysqli_fetch_array($query);  
//echo "Jumlah Koresponden Masuk = ".$jumlah = $rr[10]." Orang <br>";
$sisa = $r[0] - $rr[10];
//echo "Jumlah Koresponden Sisa = ".$sisa." Orang <br>";
$hitbobot = ($r[0]/10)-1;
$bobot = 1/$hitbobot;
//echo "Bobot Formulasi : ".$bobot."<br><br>";
$kategori = ((($rr[3]/$rr[10])*$bobot)+(($rr[1]/$rr[10])*$bobot)+(($rr[2]/$rr[10])*$bobot)+(($rr[3]/$rr[10])*$bobot)+(($rr[4]/$rr[10])*$bobot)+(($rr[5]/$rr[10])*$bobot)+(($rr[6]/$rr[10])*$bobot)+(($rr[7]/$rr[10])*$bobot)+(($rr[8]/$rr[10])*$bobot)+(($rr[9]/$rr[10])*$bobot))*$r2[0];

}
?>
