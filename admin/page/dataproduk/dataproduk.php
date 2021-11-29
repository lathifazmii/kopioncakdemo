<!-- Advanced Tables -->
<div class="alert alert-info" role="alert">
  <h4 class="alert-heading"><i class="fa fa-coffee"></i> <b>Data Porduk Kopi Oncak</b></h4>
  <hr>
</div>
                <div class="row">
                    <div class="col-md-12">
                      <a href="index.php?page=tambahdataproduk" class="btn btn-primary btn-lg"><i class="fa fa-plus"></i> Tambah Data Produk <i class="fa fa-coffee"></i></a>
                    </div>
                </div>
<br>
                
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h3><b>Data Produk Kopi Oncak</b></h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover text-center" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Foto Produk</th>
                                            <th>Nama Produk</th>
                                            <th>Harga Produk</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php $nomor=1; ?>
                                      <?php $ambildata=$koneksi->query("SELECT * FROM produk ORDER BY id_produk DESC"); ?> 
                                      <?php while($pecah = $ambildata->fetch_assoc()){ ?>
                                        <tr class="odd gradeX">
                                            <td align="center"><?php echo $nomor; ?></td>
                                            <td align="center">
                                                <img src="../foto_produk/<?php echo $pecah['foto_produk'] ?>" width="100px" alt="">
                                            </td>
                                            <td align="center"><?php echo $pecah['nama_produk']; ?></td>
                                            <td align="center"><?php echo $pecah['harga_produk']; ?></td>
                                            <td class="center">
                                              <a class="btn btn-warning btn-sm" href="index.php?page=ubahdataproduk&id=<?php echo $pecah['id_produk'];?>"><i class="fa fa-edit"></i> Ubah</a>
                                              <a class="btn btn-info btn-sm" href="index.php?page=detaildataproduk&id=<?php echo $pecah['id_produk'];?>"><i class="fa fa-eye"></i> Detail</a>
                                              <a class="btn btn-danger btn-sm" href="index.php?page=hapusdataproduk&id=<?php echo $pecah['id_produk'];?>"><i class="fa fa-eraser"></i> Hapus</a>
                                            </td>
                                        </tr>
                                      <?php $nomor++; ?>
                                      <?php } ?>
                                    </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>

