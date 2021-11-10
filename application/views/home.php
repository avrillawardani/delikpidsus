
  <!-- Content Wrapper. Contains page content -->
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
          <div class="col-12">
            <div class="card">
              <div class="card-header justify-content-center">
                <div class="row">
                  <div class="col-10">
                <h3 class="card-title">Register Penerimaan Laporan</h3>
              </div>
              <div class="col-2">
                <button class="btn btn-outline-primary fa fa-plus-alt">Tambah Baru</button>
              </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No. Urut</th>
                      <th>Nama Penerima/Sumber Laporan Tanggal Penerimaan Laporan</th>
                      <th>Isi Ringkas Laporan/Kejadian</th>
                      <th>Identitas Terlapor/Calon Tersangka (kalau ada)</th>
                      <th>Diteruskan/Petunjuk Pimpinan</th>
                      <th>Keterangan</th>
                      <th style="width: 160px">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                           $a = 1;
                          { ?>
                    <tr>
                      <td><?php echo $a; $a++; ?>.</td>
                      <td>iiiiii</td>
                      <td>
                        12345
                      </td>
                      <td>09212818219</td>
                      <td>hdaahakksakj</td>
                      <td>diashdiahidai</td>
                      <td>
                        <button class="btn btn-primary far fa-edit"></button>
                        <button class="btn btn-danger fas fa-trash-alt"></button>
                        <button class="btn btn-success fas fa-file-alt"></button>
                        <button class="btn btn-dark fas fa-paper-plane"></button>
                      </td>
                    </tr>
                      <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
              </div>
            </div>
            <!-- /.card -->

           
          </div>
          <!-- /.col --> 
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 