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
                    <h3 class="card-title">Register Penghentian Penuntutan dan Penyampingan Perkara Demi Kepentingan Umum</h3>
                  </div>
                  <div class="col-2">
                    <div class="col-2">
                <a class="btn btn-primary icon ion-plus" href="<?php echo base_url();?>index.php/input/RP3"></a>

                <a class="btn btn-outline-primary icon ion-document-text" href=""></a>
              </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-responsive">
                  <thead>
                    <tr>
                      <th rowspan="2">No.</th>
                      <th rowspan="2">Identitas Tersangka</th>
                      <th rowspan="2">Register perkara tahap penyidikan</th>
                      <th rowspan="2">Pasal yang disangkakan</th>
                      <th rowspan="2">Jenis penahanan</th>
                      <th rowspan="2">Ditahan sejak Tanggal</th>
                      <th colspan="2">Perpanjangan penahanan</th>
                      <th rowspan="2">Pengalihan Jenis Penahanan Tanggal</th>
                      <th rowspan="2">Dikeluarkan/Keluar Demi Hukum</th>
                      <th colspan="3">Penangguhan</th>
                      <th rowspan="2">Penyelesaian</th>
                      <th rowspan="2">Keterangan</th>
                      <th style="width: 160px" rowspan="2">Aksi</th>
                    </tr>
                    <tr>
                      <th rowspan="1">Psl. 24 (2) KUHAP sejak tgl.</th>
                      <th rowspan="1">Psl. 29 KUHAP Sejak Tgl.</th>
                      <th rowspan="1">Pengangguhan No. Tgl .</th>
                      <th rowspan="1">Tanpa/ Dengan jaminan</th>
                      <th colspan="1">Pencabutan sejakl Tgl.</th>
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
                      <td>diashdiahidai</td>
                      <td>diashdiahidai</td>
                      <td>diashdiahidai</td>
                      <td>diashdiahidai</td>
                      <td>diashdiahidai</td>
                      <td>diashdiahidai</td>
                      <td>diashdiahidai</td>
                       <td>diashdiahidai</td>
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