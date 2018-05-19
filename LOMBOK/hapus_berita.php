<!DOCTYPE html>
<html>
	<head>
		<title>
			RADAR BERITA LOMBOK
		</title>
			<link rel="stylesheet" href="style1.css" />
	</head>
	<body>
		<div id="wrap">
			<div id="header">
				<div id="logo"><img src="logo-11.png" width="" height="">
			</div>
			</div>
			<div style="clear: both">
			</div>
			<div id="tengah">
				<div id="menu">
					<ul id="float">
						<li><a href="templat.php">Home</a></li>
				        <li><a href="berita_lobar.php">Lombok Barat</a></li>
				        <li><a href="berita_loteng.php">Lombok Tengah</a></li>
				        <li><a href="berita_lotim.php">Lombok Timur</a></li>
				        <li><a href="berita_lout.php">Lombok Utara</a></li>
				        <li><a href="contact.php">Contact Us</a></li>
					</ul>
				</div>
			</div>
			<div id="content"><font color="black"><center><hr/>
	  <h1>HAPUS BERITA </h1></center><P/></font><hr/>
	  <blockquote><br />
		    <div id="Berita">
			    <div id="Berita2">
<?php
	$idberita = $_GET['idberita'] ;
	include "koneksi.php" ;
	$sql = "select * from berita where idberita = '$idberita' ";
	$hasil = mysqli_query($koneksi, $sql);
	if (!$hasil) die ('Gagal query ...');

	$data = mysqli_fetch_array($hasil) ;
	$judul = $data['judul'];
	$foto = $data['foto'];

	echo "<h2>Konfirmasi Hapus</h2>" ;
	echo "Judul : ".$judul."<br/>";
	echo "Foto : <img src='thumb/t_".$foto."' /><br/><br/>";
	echo "APAKAH BERITA INI AKAN DIHAPUS? <br/>";
	echo "<a href='hapus_berita.php?idberita=$idberita&hapus=1'> YA </a>";
	echo "&nbsp;&nbsp;" ;
	echo "<a href='tampil_berita.php'> TIDAK </a> <br/><br/>" ;

	if (isset($_GET['hapus'])){
		$sql = "delete from berita where idberita = '$idberita'";
		$hasil = mysqli_query($koneksi, $sql);
		if(!$hasil){
			echo "Gagal Hapus Berita: $judul ..<br/>" ;
			echo "<a href='tampil_berita.php>Kembali ke Daftar Berita</a>";
		} else{
			$gbr = "pict/$foto";
			if (file_exists($gbr)) unlink($gbr);
			$gbr = "thumb/t_$foto";
			if(file_exists($gbr)) unlink($gbr);
			header('location:berita_tampil.php');
		}
		}
	?>
</div>
		  	</div>
		</blockquote>
    <p/></font>	</div>
  <p>&nbsp;</p>			  
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
  <p>&nbsp;</p>
	<div id="footer">
	  <p style="font:11px verdana">&nbsp;</P>
		<p style="font:11px verdana"><center/>
		
		</p>
	</div>
</div>
</body>
</html>
