<?php 
// query ambil data
$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

//echo "<pre>";
//print_r($detail);
//echo "</pre>";
?>

<div class="card-body"><br>
<b><h3 align="center">Detail Data Produk</h3></b><b><h4 align="center">Kopi Oncak</h4></b><br><br>
<div class="row">
<div class="col-md-6">
    <table class="table table-bordered">
       <tr>
          <th width="120px">Nama Produk :</th>
          <td><?php echo $pecah['nama_produk']; ?></td>
       </tr>
       <tr>
          <th>Harga Produk :</th>
          <td>Rp. <?php echo $pecah['harga_produk']; ?>,</td>
       </tr>
       <tr>
          <th>No. WhatsApp :</th>
          <td>+<?php echo $pecah['nomor_whatsapp']; ?></td>
       </tr>
    </table>
    <div class="form-group">
       <label for="exampleInputEmail3">Text Pesan :</label>
       <input type="text" class="form-control" name="pesan" value="<?php echo $pecah['pesan']?>" readonly>
    </div>
    <div class="form-group">
       <label for="exampleInputEmail3">Deskripsi Porduk :</label>
       <textarea class="form-control" readonly><?php echo $pecah['deskripsi_produk']; ?></textarea>
    </div>
</div>
    <div class="col-md-6">
       <img src="../foto_produk/<?php echo $pecah['foto_produk']; ?>" alt="" width="400px" class="img-responsive">
    </div>
</div>
</div> 