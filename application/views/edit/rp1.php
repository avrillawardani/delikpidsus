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
                <h3 class="card-title">Register Penerimaan Laporan</h3>
              </div>
              <!-- /.card-header -->
              <?php foreach($jaksa as $x) {?>
              <!-- form start -->
              <form method="POST" action="<?php echo base_url();?>index.php/Input/RP1/updaterp1">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNama">Nama Penerima/Sumber Laporan Tanggal Penerimaan Laporan</label>
                    <input type="text" class="form-control" name="sumber_penerima" placeholder="Masukkan Nama">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputIsi">Isi Ringkas Laporan/Kejadian</label>
                    <input type="text" name="isi_ringkas" class="form-control" placeholder="Isi Ringkas Laporan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputIdentitas">Identitas Terlapor/Calon Tersangka (kalau ada)</label>
                    <input type="text" name="identitas_terlapor" class="form-control" placeholder="Identitas Terlapor">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputIdentitas">Diteruskan/Petunjuk Pimpinan</label>
                    <select name="pilihan" class="form-control">
                      <option>--Pilih Salah Satu--</option>
                      <option value="Diteruskan">Diteruskan</option>
                      <option value="Diarsipkan">Diarsipkan</option>
                    </select>
                  </div>
                  <!-- <div class="card card-warning">
                    <div class="card-header">
                      <div class="card-title">
                        <label>Diteruskan/Petunjuk Pimpinan</label>
                      </div>
                    </div>
                    <div class="card-body">
                      <div class="form-group">
                        <input type="radio" class="form_radio" id="exampleInputIdentitas" placeholder="Identitas Terlapor" name="radio" value="diteruskan">
                        <label>Diteruskan</label>
                      </div>
                      <div class="form-group">
                        <input type="radio"  class="form_radio" id="exampleInputIdentitas" placeholder="Identitas Terlapor" name="radio" value="">
                        <label for="exampleInputIdentitas">Petunjuk Pimpinan</label>
                        <input style="display:none;" type="text" class="form-control" id="otherAnswer5" placeholder="Petunjuk Pimpinan" name="diteruskan_petunjukpimpinan">
                      </div>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputKeterangan">Keterangan</label>
                    <input type="text" class="form-control" name="ket" placeholder="Keterangan">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" value="simpan" name="simpan" class="btn btn-primary">Simpan</button>
                </div>
              </form>
              <?php } ?>
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