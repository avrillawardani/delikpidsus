<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>ADMIN DELIK PIDSUS</h1>
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
                <h3 class="card-title">Input Admin Baru</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="<?php echo base_url();?>index.php/Input_admin/input_admin">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputNama">Masukkan Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Masukkan Username Baru">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputIsi">Masukkan Password</label>
                    <input type="text" name="password" class="form-control" placeholder="Masukkan Password Baru">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" value="simpan" name="simpan" class="btn btn-primary">Simpan</button>
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