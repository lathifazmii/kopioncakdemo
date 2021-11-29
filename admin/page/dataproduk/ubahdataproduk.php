<?php 
// query ambil data
$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

//echo "<pre>";
//print_r($detail);
//echo "</pre>";
?>
<div class="alert alert-info" role="alert">
  <h4 class="alert-heading"><i class="fa fa-coffee"></i> <b>Form Ubah Data Porduk Kopi Oncak</b></h4>
  <hr>
</div>

                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h3><b>Form Ubah Data Produk</b></h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <form action="?page=prosesubahdataproduk&id=<?php echo $pecah['id_produk'];?>" method="post" enctype="multipart/form-data">
                             <div class="form-group">
                                <label>Nama Produk</label>
                                <input class="form-control" placeholder="Masukkan Nama Produk" name="nama_produk" value="<?php echo $pecah['nama_produk'] ?>" />
                             </div>
                              <div class="form-group">
                                <img src="../foto_produk/<?php echo $pecah['foto_produk'] ?>" width="200px"><br><br>
                                <label>Ubah Foto Produk</label><br>
                                <input class="form-control" type="file" name="foto_produk" />
                             </div>
                             <div class="form-group">
                                <label>Harga Produk</label>
                                <input class="form-control" placeholder="PLease Enter Keyword" type="number" name="harga_produk" value="<?php echo $pecah['harga_produk'] ?>" />
                             </div>
                             <div class="form-group">
                                <label>Deskripsi Produk</label>
                                <textarea class="form-control" rows="5px" name="deskripsi_produk"><?php echo $pecah['deskripsi_produk']; ?></textarea>
                             </div>
                             <div class="form-group">
                                <label>No. WhatsApp</label>
                                <input class="form-control" placeholder="PLease Enter Keyword" type="number" name="nomor_whatsapp" value="<?php echo $pecah['nomor_whatsapp'] ?>" />
                             </div>
                             <div class="form-group">
                                <label>Text Pesan</label>
                                <input class="form-control" placeholder="PLease Enter Keyword" type="text" name="pesan" value="<?php echo $pecah['pesan']; ?>" />
                             </div>
                             <!-- /.card-body -->
                            <div class="card-footer">
                              <button class="btn btn-warning" name="ubah">Update Data</button>
                              <a href="index.php?page=dataproduk" class="btn btn-primary">Kembali</a>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->