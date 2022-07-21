<?php
	echo "<head><title>My Guest Book</title></head>";
	$fp = fopen("pesanan.txt","a+");
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$nomor = $_POST['nomor'];
	$paket = $_POST['paket'];
	fputs($fp,"$nama|$alamat|$nomor|$paket\n");
	fclose($fp);

	echo "Terimakasih telah memesan laundry kami<br>";
	echo "Harap menunggu kurir sedang menuju lokasi anda<br>";
	echo "<a href=index.html> kembali ke website</a><br>";
?>