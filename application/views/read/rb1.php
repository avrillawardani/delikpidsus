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
                      <th rowspan="2">Nomor Urut</th>
                      <th rowspan="2">No. & Tgl. Register benda Sitaan</th>
                      <th rowspan="2">Nama Tersangka</th>
                      <th rowspan="2">No. register Perkara tahap Penyidikan</th>
                      <th rowspan="2">Jumlah dan jenis benda sitaan</th>
                      <th rowspan="2">Tempat penyimpanan</th>
                      <th colspan="3">Penyitaan</th>
                      <th rowspan="2">SP lelang (Ps. 45 KUHAP) No. Tgl.</th>
                      <th rowspan="2">Penetapan Pengadilan No. & Tgl Isi Penetapan</th>
                      <th rowspan="2">Jumlah Hasil lelang Ps. 45 KUHAP</th>
                      <th rowspan="2">Benda sitaan yang disisikan</th>
                      <th rowspan="2">Keterangan</th>
                      <th style="width: 160px" rowspan="2">Aksi</th>
                    </tr>
                   <tr>
                        <th>SP Penyitaan No. Tgl & Petugas yang melaksanakan penyitaan</th>
                        <th>Disita dari</th>
                        <th>Izin/Persetujuan Ketua PN No. & Tgl .</th>
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