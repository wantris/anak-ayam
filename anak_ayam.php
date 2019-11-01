<!DOCTYPE html> <!-- mengidentifikasi jenis dokumen HTML --> 
<html><!-- tag pembuka HTML --> 
<head> <!-- tag pembuka head --> 
	<title>Anak Ayam</title> <!-- memberikan judul pada laman web --> 
	<style type="text/css"> /* memberikan tag sytle dengan tipe css untuk memperindah tampilan laman */ 
		.ganjil{ /*membuat selector ganjil*/  
			color: orange; /* agar warna text menjadi orange */  
		}
		.genap{ /* membuat selector genap */ 
			color: blue; /* agar warna text pada selector menjadi biru */ 
		}
	</style> <!-- tag penutup style --> 
</head> <!-- tag penutup head -->
<body> <!--Tag untuk membuat tubuh dari sebuah halaman -->

</body> <!-- tag penutup body -->
</html> <!-- tag penutup html -->
<?php //untuk membuka atau memulai program php
	$anak_ayam = 8; //membuat variabel anak_ayam dengan nilai = 8
	echo "Tek-kotek kotek kotek anak ayam turun $anak_ayam <br>"; //menampilkan string ditambah nilai dari variabel anak_ayam
	for($i = $anak_ayam-1; $i>=0 ; $i--){ //membuat perulangan dengan nilai variabel i = anak_ayam - 1 dan nilai menjadi menurun 
		if($i%2 == 1){ //kondisi jika variabel i bernilai ganjil
			echo "<p class='ganjil'>Mati satu tinggal $i </p><br>"; //menampikan string dengan class ganjil dan memanggil nilai variabel i bernilai ganjil
		}elseif($i == 0){ //kondisi dimana nilai variabel i bernilai 0
			echo "Mati satu habis semua T_T hiks"; //menampilkan string 
		}else{
			echo "<p class='genap'>Mati satu tinggal $i </p>"; //menampilkan string dengan class genap dan variabel i bernilai genap
		}

	}
?>