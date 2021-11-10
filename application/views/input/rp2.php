  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>REGISTER PIDSUS</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Register Perkara Tahap Penyelidikan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputIsi">Tanggal SP Penyelidikan</label>
                    <input type="date" class="form-control" id="tanggal"name="tanggal">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputIdentitas">Kasus/Masalah</label>
                    <input type="identitas" class="form-control" id="exampleInputIdentitas" placeholder="Identitas Terlapor" name="kasus">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputIdentitas">Nama Pelapor/Sumber Laporan Nomor & Tanggal Laporan</label>
                    <input type="identitas" name="pelapor" class="form-control" id="exampleInputIdentitas" placeholder="Identitas Terlapor">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputIdentitas">Identitas Terlapor/Instansi/Badan Organisasi yang Menjadi Objek Penyelidikan</label>
                    <input type="identitas" name="terlapor" class="form-control" id="exampleInputIdentitas" placeholder="Identitas Terlapor">
                  </div>
                   <div class="form-group">
                    <label for="exampleInputLanjutan">Penyelesaian</label>
                    <select type="isi" class="form-control" id="exampleInputIdentitas" placeholder="Identitas Terlapor">
                      <option>-pilih-</option>
                      <option>Ditutup Tanggal</option>
                      <option>Ditingkatkan ke Penyelidikan Tanggal</option>
                    </select>
                  </div>
                   <div class="form-group">
                    <label for="exampleInputKeterangan">Keterangan</label>
                    <input type="keterangan" class="form-control" id="exampleInputKeterangan" placeholder="Keterangan">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
         
          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->