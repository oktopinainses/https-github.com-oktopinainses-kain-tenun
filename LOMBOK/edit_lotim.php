<?php
	$idberita = $_GET["idberita"];
	include "koneksi.php";
	$sql = "select * from lotim where idberita = '$idberita'";
	$hasil = mysqli_query($koneksi, $sql);
	if (!$hasil) die ("Gagal query..");

	$data = mysqli_fetch_array($hasil);
	$judul = $data["judul"];
	$foto = $data["foto"];
	?>
<h2>.::EDIT BERITA::.</h2>
<form action='simpan_lotim.php' method='post' enctype='multipart/form-data'>
	<input type ="hidden" name="idberita" value="<?php echo $idberita;?>" />
	<table border='1'>
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
