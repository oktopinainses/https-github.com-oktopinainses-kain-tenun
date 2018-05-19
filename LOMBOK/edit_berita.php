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
	  <h1>EDIT BERITA </h1></center><P/></font><hr/>
	  <blockquote><br />
		    <div id="Berita">
			    <div id="Berita2">
<?php
	$idberita = $_GET["idberita"];
	include "koneksi.php";
	$sql = "select * from berita where idberita = '$idberita'";
	$hasil = mysqli_query($koneksi, $sql);
	if (!$hasil) die ("Gagal query..");

	$data = mysqli_fetch_array($hasil);
	$judul = $data["judul"];
	$foto = $data["foto"];
	?>
<form action='simpan_berita.php' method='post' enctype='multipart/form-data'>
	<input type ="hidden" name="idberita" value="<?php echo $idberita;?>" />
	<table border='1' align="center">
<tr>
	<td>Judul</td>
	<td><input type="text" name="judul" value="<?php echo $judul;?>" /></td>
</tr>
<tr>	
	<td>Gambar</td>
	<td><input type="file" name="foto">
		<input type="hidden" name="foto_lama" value="<?php echo $foto;?>" /> <br/>
		<img src="<?php echo "thumb/t_".$foto; ?>"width="100px" />
	</td>
	</tr>
	<tr>
	<td colspan="2" align="center">
		<input type="submit" value="Simpan" name="proses" />
		<input type="reset" value="Reset" name="reset" />
</td>
</tr>
</table>
</form>
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
