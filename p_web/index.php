<?php

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Home - Portofolio Saya</title>
	<link rel="stylesheet" href="load.css"/>
	
	<style>
		.headerstyle {
			color: black;
			font-size: 5 vw;
		}
	</style>
</head>

<body>
    <nav>
        <b>MENU:</b>
        <a href="index.html">Home</a> |
        <a href="#biodata">Biodata</a> |
        <a href="layanan.html">Layanan</a> |
        <a href=".galeri">Galeri</a> |
        <a href="#kontak">Kontak</a> |
    </nav>
    <hr>
    <h1 class="headerstyle">Selamat Datang di Website Saya</h1>
    <p style="background-color: black; color: white; width: 38vw; border: 2px solid; border-radius: 30px 25px 14px 17px; margin: 5px; padding: 20px;">Halo! Ini adalah proyek 5 file HTML pertama saya untuk tugas sekolah/kuliah.</p>
	<div>
		 <img src="gambar_1.jpg" alt="Foto Profil" width="400px">
		 <img src="gambar_2.jpg" alt="Foto Profil" width="400px">
	</div>
	<p id="biodata"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	<p id="kontak"> Lorem ipsum dolor sit amet </p>
	<p class="galeri"> Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
	
	<div style="display: flex; flex-direction: row; border: 2vw; height: 10vh;">
		<div style="width: 30vw; background-color: red; ">
			<center>ini warna merah</center>
		</div>
		<div style="width: 70vw; background-color: blue; ">
			<center>ini warna biru</center> 
		</div>
	</div>
</body>

</html>