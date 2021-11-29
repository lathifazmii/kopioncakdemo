<!-- Advanced Tables -->
<div class="alert alert-info" role="alert">
  <h4 class="alert-heading"><i class="fa fa-coffee"></i> <b>Data Forum Diskusi Pecinta Kopi</b></h4>
  <hr>
</div>
                
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h3><b>Forum Diskusi Pecinta Kopi</b></h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Email</th>
                                            <th>Isi Forum</th>
                                            <th>Balasan Forum</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php $nomor=1; ?>
                                      <?php $ambildata=$koneksi->query("SELECT * FROM forum ORDER BY id_forum DESC"); ?> 
                                      <?php while($pecah = $ambildata->fetch_assoc()){ ?>
                                        <tr class="odd gradeX">
                                            <td align="center"><?php echo $nomor; ?></td>
                                            <td align="center"><?php echo $pecah['email']; ?></td>
                                            <td><?php echo $pecah['isi_forum']; ?></td>
                                            <td><?php echo $pecah['isi_balasan']; ?></td>
                                            <td class="center">
                                              <a class="btn btn-warning btn-sm" href="index.php?page=balasforum&id=<?php echo $pecah['id_forum'];?>"><i class="fa fa-edit"></i> Balas Komentar</a><br><br>
                                              <a class="btn btn-danger btn-sm" href="index.php?page=hapusdataforum&id=<?php echo $pecah['id_forum'];?>"><i class="fa fa-eraser"></i> Hapus</a>
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

