<?php
$judul_loteng ="" ;
if(isset($_POST["judul_loteng"]))
	$judul_loteng =$_POST["judul_loteng"];

include "koneksi.php";
$sql ="select * from loteng where judul like '%".$judul_loteng."%' 
       order by idberita desc";
$hasil = mysqli_query ($koneksi, $sql);
if (!$hasil)
 die("Gagal query...".mysqli_error($koneksi));

 ?>
 <a href="isi_lobar.php" >INPUT BERITA</a>
 <table border="1">
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
 	echo " <a href='edit_loteng.php?idberita=" .$row['idberita'] ." '>
 	               EDIT </a> ";
 	echo " &nbsp;&nbsp;";
 	echo " <a href='hapus_loteng.php?idberita=" .$row['idberita'] ." '>
 	               HAPUS </a> ";
 	 echo " </td> ";              
 	echo " </tr> ";
 }
 ?>
</table>