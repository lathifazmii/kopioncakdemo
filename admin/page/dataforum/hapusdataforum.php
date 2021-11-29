<?php

$ambil = $koneksi->query("SELECT * FROM forum WHERE id_forum='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM forum WHERE id_forum='$_GET[id]'");

echo "<script>alert('Data Forum Terhapus');</script>";
echo "<script>location='index.php?page=dataforum';</script>";

?>