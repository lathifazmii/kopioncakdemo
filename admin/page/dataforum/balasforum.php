<?php 
// query ambil data
$ambil = $koneksi->query("SELECT * FROM forum WHERE id_forum='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

//echo "<pre>";
//print_r($detail);
//echo "</pre>";
?>
<div class="alert alert-info" role="alert">
  <h4 class="alert-heading"><i class="fa fa-coffee"></i> <b>Balas Forum Diskusi</b></h4>
  <hr>
</div>

                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h3><b>Form Balas Forum Diskusi</b></h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <form action="?page=prosesbalasforum&id=<?php echo $pecah['id_forum'];?>" method="post" enctype="multipart/form-data">
                             <div class="form-group">
                                <label>Email Pelanggan</label>
                                <input class="form-control" placeholder="Masukkan Nama Produk" name="email" value="<?php echo $pecah['email'] ?>" readonly />
                             </div>
                             <div class="form-group">
                                <label>Isi Forum Pelanggan</label>
                                <textarea class="form-control" rows="5px" name="isi_forum" readonly><?php echo $pecah['isi_forum']; ?></textarea>
                             </div>
                             <div class="form-group">
                                <label>Balas Forum</label>
                                <textarea class="form-control" rows="5px" name="isi_balasan" placeholder="Masukkan Isi Balasan"><?php echo $pecah['isi_balasan']; ?></textarea>
                             </div>
                             <div class="form-group">
                                 <label>Balas Forum Select Option</label>
                                 <select class="form-control" name="isi_balasan">
                                     <option value="">----Pilih Balasan----</option>
                                     <option>Terimakasih kritik dan sarannya kami akan selalu mengoptimalkan pelayanan kami</option>
                                     <option>Terimakasih atas kepercayaan anda terhadap pelayanan kami silahkan order kembali</option>
                                 </select>
                             </div>
                             <!-- /.card-body -->
                            <div class="card-footer">
                              <button class="btn btn-danger" name="balas">Submit</button>
                              <a href="index.php?page=dataforum" class="btn btn-primary">Kembali</a>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->