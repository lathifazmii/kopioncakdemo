<div class="alert alert-info" role="alert">
  <h4 class="alert-heading"><i class="fa fa-coffee"></i> <b>Form Tambah Data Porduk Kopi Oncak</b></h4>
  <hr>
</div>

                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             <h3><b>Form Tambah Data Produk</b></h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <form action="?page=prosestambahdataproduk" method="post" enctype="multipart/form-data">
                             <div class="form-group">
                                <label>Nama Produk</label>
                                <input class="form-control" type="text" placeholder="Masukkan Nama Produk" name="nama_produk" />
                             </div>
                              <div class="form-group">
                                <label>Upload Foto Produk</label>
                                <input class="form-control" type="file" name="foto_produk" />
                             </div>
                             <div class="form-group">
                                <label>Harga Produk</label>
                                <input class="form-control" type="number" placeholder="Masukkan Harga Produk" name="harga_produk" />
                             </div>
                             <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea class="form-control" rows="5px" name="deskripsi_produk" ></textarea>
                             </div>
                             <div class="form-group">
                                <label>Nomor WhatsApp Bisnis</label>
                                <input class="form-control" type="number" placeholder="Masukkan Nomor WhatsApp" name="nomor_whatsapp" />
                             </div>
                            <div class="form-group">
                                <label>Text Pesan</label>
                                <input class="form-control" type="text" placeholder="Masukkan Text Pesan" name="pesan" />
                             </div>
                             <!-- /.card-body -->
                            <div class="card-footer">
                              <button class="btn btn-warning" name="simpan">Simpan Data</button>
                              <a href="index.php?page=dataportofolio" class="btn btn-primary">Kembali</a>
                            </div>
                            </form>
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
          