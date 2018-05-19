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
	  <h1>BERITA LOMBOK BARAT</h1></center><P/></font><hr/>
	  <blockquote><br />
		    <div id="Berita">
			    <div id="Berita2">
					<?php
					$judul_berita ="" ;
					if(isset($_POST["judul_berita"]))
						$judul_berita =$_POST["judul_berita"];

					include "koneksi.php";
					$sql ="select * from lobar where judul like '%".$judul_berita."%' 
					       order by idberita desc";
					$hasil = mysqli_query ($koneksi, $sql);
					if (!$hasil)
					 die("Gagal query...".mysqli_error($koneksi));

					 ?>
					 <table border="1" align="center">
					 <tr>
					 	<th>Foto</th>
					 	<th>Judul Berita</th>
					 	<th>Operasi</th>
					 </tr>
					 <?php
					 $no = 0;
					 while($row = mysqli_fetch_assoc($hasil)){
					 	echo " <tr> ";
					 	echo " <td> <a href='pict/{$row['foto']}' />
					 	       <img src='thumb/t_{$row['foto']}' widht='100' />
					 	        </a> </td>" ;
					 	echo " <td> ".$row['judul']." </td> ";
					 	echo " <td> ";
					 	echo " &nbsp;&nbsp;";
					 	echo " <a href='edit_berita.php?idberita=" .$row['idberita'] ." '>
					 	               EDIT </a> ";
					 	echo " &nbsp;&nbsp;";
					 	echo " <a href='hapus_berita.php?idberita=" .$row['idberita'] ." '>
					 	               HAPUS </a> ";
					 	 echo " </td> ";              
					 	echo " </tr> ";
					 }
					 ?>
					</table>
					<p/>
					 <center><a href='isi_berita.php?idberita=" .$row['idberita'] ." '>
					 	               TAMBAH BERITA </a></center>
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