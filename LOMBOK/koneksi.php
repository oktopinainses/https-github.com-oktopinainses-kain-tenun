<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "lombok";

$koneksi = mysqli_connect ($host, $user, $pass);
if (!$koneksi)
	die("Gagal Koneksi...");
$hasil = mysqli_select_db($koneksi, $dbName);
if (!$hasil) {
	$hasil = mysqli_query($koneksi, "CREATE DATABASE $dbName");
	if (!$hasil)
	      die("Gagal Buat Database");
	else
	      $hasil = mysqli_select_db($koneksi, $dbName);
	      if(!$hasil) die ("Gagal Konek Database");
}
	$sqlBerita = "CREATE TABLE IF NOT EXISTS berita (
				idberita int auto_increment not null primary key,
				judul varchar(40) not null,
				foto varchar(100) not null default'')";
	mysqli_query ($koneksi, $sqlBerita) or die ("Gagal Buat Tabel Berita")   ;
	
	$sqlLobar = "CREATE TABLE IF NOT EXISTS lobar (
				idberita int auto_increment not null primary key,
				judul varchar(40) not null,
				foto varchar(100) not null default'')";
	mysqli_query ($koneksi, $sqlLobar) or die ("Gagal Buat Tabel Berita lombok barat")   ;

	$sqlLotim = "CREATE TABLE IF NOT EXISTS lotim (
				idberita int auto_increment not null primary key,
				judul varchar(40) not null,
				foto varchar(100) not null default'')";
	mysqli_query ($koneksi, $sqlLotim) or die ("Gagal Buat Tabel Berita lombok timur")   ;

	$sqlLoteng = "CREATE TABLE IF NOT EXISTS loteng (
				idberita int auto_increment not null primary key,
				judul varchar(40) not null,
				foto varchar(100) not null default'')";
	mysqli_query ($koneksi, $sqlLoteng) or die ("Gagal Buat Tabel Berita lombok tengah")   ;

	$sqlLout = "CREATE TABLE IF NOT EXISTS lout (
				idberita int auto_increment not null primary key,
				judul varchar(40) not null,
				foto varchar(100) not null default'')";
	mysqli_query ($koneksi, $sqlLout) or die ("Gagal Buat Tabel Berita lombok barat")   ;
	
?>      
