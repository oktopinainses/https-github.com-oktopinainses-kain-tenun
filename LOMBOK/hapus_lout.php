<?php
	$idberita = $_GET['idberita'] ;
	include "koneksi.php" ;
	$sql = "select * from lout where idberita = '$idberita' ";
	$hasil = mysqli_query($koneksi, $sql);
	if (!$hasil) die ('Gagal query ...');

	$data = mysqli_fetch_array($hasil) ;
	$judul = $data['judul'];
	$foto = $data['foto'];

	echo "<h2>Konfirmasi Hapus</h2>" ;
	echo "Judul : ".$judul."<br/>";
	echo "Foto : <img src='thumb/t_".$foto."' /><br/><br/>";
	echo "APAKAH BERITA INI AKAN DIHAPUS? <br/>";
	echo "<a href='hapus_lout.php?idberita=$idberita&hapus=1'> YA </a>";
	echo "&nbsp;&nbsp;" ;
	echo "<a href='tampil_lout.php'> TIDAK </a> <br/><br/>" ;

	if (isset($_GET['hapus'])){
		$sql = "delete from lout where idberita = '$idberita'";
		$hasil = mysqli_query($koneksi, $sql);
		if(!$hasil){
			echo "Gagal Hapus Berita: $judul ..<br/>" ;
			echo "<a href='tampil_lout.php>Kembali ke Daftar Berita</a>";
		} else{
			$gbr = "pict/$foto";
			if (file_exists($gbr)) unlink($gbr);
			$gbr = "thumb/t_$foto";
			if(file_exists($gbr)) unlink($gbr);
			header('location:tampil_lout.php');
		}
		}
	?>