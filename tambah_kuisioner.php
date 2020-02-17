<?php
 
if (isset($_POST['simpan'])) {
	if (empty($_POST['nama'])) {
			echo "<script type='text/javascript'>alert('Nama Masih Kosong');window.history.go(-1);</script>";
	}
	else
	{

        include("koneksi.php");
        date_default_timezone_set("Asia/jakarta");
		//dataagenda
           $nama = $_POST['nama'];
           $pendidikan = $_POST['pendidikan'];
           $desa = $_POST['desa'];
           $tanggal = date('Y-m-d H:i:s');
           $r1 = $_POST['p1'];
           $r2 = $_POST['p2'];
           $r3 = $_POST['p3'];
           $r4 = $_POST['p4'];
           $r5 = $_POST['p5'];
           $r6 = $_POST['p6'];
           $r7 = $_POST['p7'];
           $r8 = $_POST['p8'];
           $r9 = $_POST['p9'];
           $r10 = $_POST['p10'];
           $tahun = date('Y');

     
                // SQL query untuk memeriksa apakah users terdapat di database?
         $query = mysqli_query($koneksi,"INSERT INTO formulaikm VALUES ('','$nama','$pendidikan','$tanggal','$desa','$r1','$r2','$r3','$r4','$r5','$r6','$r7','$r8','$r9','$r10','$tahun')");      
		
		
			if ($query) {
				
				echo "<script type='text/javascript'>alert('SUKSES, Data Kuisioner Atas Nama $nama Sudah Tersimpan dan Terkirim [KLIK OK]');document.location='./index.php'</script>";
				} else {
				 echo "<script type='text/javascript'>alert('Maaf! Data Gagal Tersimpan');window.history.go(-1);</script>";
                }
                
        
	}
}
?>