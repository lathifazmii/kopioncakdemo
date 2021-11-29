<?php 
if (isset($_POST['balas']))
	
	{
	$koneksi->query("UPDATE forum SET isi_balasan='$_POST[isi_balasan]'
			WHERE id_forum='$_GET[id]'");
	echo "<script>alert('Pesan Terkirim');</script>";
	echo "<script>location='index.php?page=dataforum';</script>";
	}

?>