<?php 
          // jika ada tombol daftar (ditekan tombol daftar)
          if (isset($_POST["simpan"]))
          {
            //mengambil isian nama,email,password,alamat,telepon
            $nama_produk = $_POST["nama_produk"];
            
            $foto_produk = $_FILES['foto_produk']['name'];
            $lokasi = $_FILES['foto_produk']['tmp_name'];
            move_uploaded_file($lokasi, "../foto_produk/" .$foto_produk);
            $harga_produk = $_POST["harga_produk"];
            $deskripsi_produk = $_POST["deskripsi_produk"];
            $nomor_whatsapp = $_POST["nomor_whatsapp"];
            $pesan = $_POST["pesan"];

            {
              //  query insert ke tabel pelangggan
              $koneksi->query("INSERT INTO produk (nama_produk,foto_produk,harga_produk,deskripsi_produk,nomor_whatsapp,pesan)
                VALUES ('$nama_produk','$foto_produk','$harga_produk','$deskripsi_produk','$nomor_whatsapp','$pesan')");
              echo "<script>alert('Data Produk Tersimpan');</script>";
              echo "<script>location='?page=dataproduk';</script>";
            }

          }


          ?>