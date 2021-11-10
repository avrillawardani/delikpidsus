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
                    <h3 class="card-title">Register Perkara Tahap Penyelidikan</h3>
                  </div>
                  <div class="col-2">
                <a class="btn btn-primary icon ion-plus" href="<?php echo base_url();?>index.php/input/RP2"></a>

                <a class="btn btn-outline-primary icon ion-document-text" href="<?php echo base_url();?>index.php/input/RP1/export"></a>
              </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered table-responsive">
                  <thead>
                    <tr>
                      <th rowspan="2">No</th>
                      <th rowspan="2">Tanggal SP Penyelidikan</th>
                      <th rowspan="2">Kasus/Masalah</th>
                      <th rowspan="2">Nama, Pangkat/NIP Jaksa Penyelidik</th>
                      <th rowspan="2">Nama Pelapor/Sumber Laporan, Nomor & Tanggal Laporan</th>
                      <th rowspan="2">Identitas Terlapor/Instansi/Badan Organisasi yang Menjadi Objek LID</th>
                      <th colspan="2">Penyelesaian</th>
                      <th rowspan="2">Keterangan</th>
                      <th style="width: 160px" rowspan="2">Aksi</th>
                    </tr>
                    <tr>
                      <th>Ditutup Tanggal</th>
                      <th>Ditingkatkan ke DIK Tanggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php 
                           $a = 1;
                    foreach ($rp2 as $key){ ?>
                    <tr>
                      <td><?php echo $a; $a++; ?>.</td>
                      <td><?php echo $key->tanggal; ?></td>
                      <td><?php echo $key->kasus; ?></td>
                      <td><?php echo $key->jaksa; ?></td>
                      <td><?php echo $key->pelapor; ?></td>
                      <td><?php echo $key->terlapor; ?></td>
                      <td><?php echo $key->penyelesaian; ?></td>
                      <td>-</td>
                      <td><?php echo $key->keterangan; ?></td>
                      
                      <td>
                        <button class="btn btn-primary far fa-edit"></button>
                        <button class="btn btn-danger fas fa-trash-alt"></button>
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