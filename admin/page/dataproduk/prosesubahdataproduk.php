<?php 
if (isset($_POST['ubah']))
	{

	$foto_produk=$_FILES['foto_produk']['name'];
	$lokasifoto_produk = $_FILES['foto_produk']['tmp_name'];

	// jk foto dirubah
	if (!empty($lokasifoto_produk)) 
	{
		move_uploaded_file($lokasifoto_produk, "../foto_produk/$foto_produk");

		$koneksi->query("UPDATE produk SET nama_produk='$_POST[nama_produk]',foto_produk='$foto_produk',harga_produk='$_POST[harga_produk]',deskripsi_produk='$_POST[deskripsi_produk]',nomor_whatsapp='$_POST[nomor_whatsapp]',pesan='$_POST[pesan]'
			WHERE id_produk='$_GET[id]'");
	}
	else
	{
		$koneksi->query("UPDATE produk SET nama_produk='$_POST[nama_produk]',foto_produk='$foto_produk',harga_produk='$_POST[harga_produk]',deskripsi_produk='$_POST[deskripsi_produk]',nomor_whatsapp='$_POST[nomor_whatsapp]',pesan='$_POST[pesan]'
			WHERE id_produk='$_GET[id]'");
	}	
	echo "<script>alert('Data Porduk Terupdate');</script>";
	echo "<script>location='index.php?page=dataproduk';</script>";
	}

?>