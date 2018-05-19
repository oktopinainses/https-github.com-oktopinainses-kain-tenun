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
	  <h1>SIMPAN EDIT BERITA </h1></center><P/></font><hr/>
	  <blockquote><br />
		    <div id="Berita">
			    <div id="Berita2">
<?php
	if(isset($_POST['idberita'])){
		$idberita = $_POST['idberita'];
		$foto_lama = $_POST['foto_lama'];
		$simpan = "EDIT";
	}else {
		$simpan = "BARU";
	}
	
	$judul   = $_POST['judul'];

	$foto 	 = $_FILES['foto']['name'];
	$tmpName = $_FILES['foto']['tmp_name'];
	$size 	 = $_FILES['foto']['size'];
	$type 	 = $_FILES['foto']['type'];
	
	$maxsize     = 1000000;
	$typeYgBoleh = array("image/jpeg","image/png","image/pjpeg");
	
	$dirFoto	 = "pict";
	if(!is_dir($dirFoto))
		mkdir($dirFoto);
	$fileTujuanFoto = $dirFoto."/".$foto;
	
	$dirThumb	 = "thumb";
	if(!is_dir($dirThumb))
		mkdir($dirThumb);
	$fileTujuanThumb = $dirThumb."/t_".$foto;
	
	$dataValid   = "YA";
	
	if ($size > 0){
		if ($size > $maxsize){
			echo "Ukuran file terlalu besar </br>";
			$dataValid = "TIDAK";
		}
		if (!in_array($type, $typeYgBoleh)){
			echo "Ukuran file tidak Dikenal </br>";
			$dataValid = "TIDAK";
		}
	}
	
	if (strlen(trim($judul))==0) {
		echo "Judul Berita Harus Diisi </br>";
		$dataValid = "TIDAK";
	}	
	if ($dataValid == "TIDAK") {
		echo "Masih Ada Kesalahan, Silahkan Perbaiki! </br>";
		echo "<input type = 'button' value = 'Kembali' 
				onClick = 'self.history.back()'>";
		exit;
	}
	
	include "koneksi.php";
	
	if ($simpan == "EDIT") {
		if($size == 0) {
			$foto = $foto_lama;
		}
		$sql = "update berita set 
				judul = '$judul',
				foto = '$foto'
				where idberita = $idberita ";
	} else {
		$sql = "insert into berita
				(judul, foto)
				values
				('$judul','$foto')";
	}
	
	$hasil = mysqli_query($koneksi, $sql);

	if (!$hasil) {
		echo "Gagal Simpan, Silahkan Ulangi! </br>";
		echo mysqli_error($koneksi);
		echo "<br/> <input type='button' value='Kembali'
				onClick='self.history.back()'>";
				exit;
	}else {
		echo "Simpan data Berhasil" ;
	}

	if ($size >0) {
		if (!move_uploaded_file($tmpName, $fileTujuanFoto)){
		echo "Gagal Upload Gambar..</br>";
		echo "<a href = 'berita_tampil.php'>Daftar Berita</a>";
		exit;
		} else {
			buat_thumbnail($fileTujuanFoto, $fileTujuanThumb);
		}
	}
	
	echo "<br/>Data sudah disimpan dan file berhasil diupload <br/>";
	function buat_thumbnail($file_src, $file_dst){
		list($w_src, $h_src, $type) = getImageSize($file_src);
		switch ($type){
			case 1 :
			$img_src = imagecreatefromgif($file_src);
			break;
			case 2 :
			$img_src = imagecreatefromjpeg($file_src);
			break;
			case 3 : 
			$img_src = imagecreatefrompng($file_src);
			break;
		}
		$thumb = 100;
		if ($w_src > $h_src){
			$w_dst = $thumb;
			$h_dst = round($thumb / $w_src * $h_src);
		} else {
			$w_dst = round($thumb / $h_src * $w_src);
			$h_dst = $thumb;
		}
		$img_dst = imagecreatetruecolor($w_dst, $h_dst);
		imagecopyresampled($img_dst, $img_src, 0, 0, 0, 0, $w_dst, $h_dst, $w_src, $h_src);
		imagejpeg($img_dst, $file_dst);
		imagedestroy($img_src);
		imagedestroy($img_dst);
	}
?>
<hr/>
<a href="berita_tampil.php" /> DAFTAR BERITA </a>
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

