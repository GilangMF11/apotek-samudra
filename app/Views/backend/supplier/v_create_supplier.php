<?=$this->extend('layouts/v_wrapper')?>
<?=$this->section('content')?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Supplier</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Supplier</a></li>
              <li class="breadcrumb-item active">Tambah Supplier</li>
            </ol>
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
            <!-- jquery Tambah Pengguna -->
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('supplier/store') ?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Supplier</label>
                    <input type="text" name="nmsupplier" class="form-control" id="InputKategori" placeholder="Nama supplier" required>
                  </div>
                
                
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="InputKategori" placeholder="Alamat" required>
                  </div>

                <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="text" name="notelp" class="form-control" id="InputKategori" placeholder="No Telp" required>
                  </div>

                  </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div><!-- /.card -->
          </div><!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">
          </div><!--/.col (right) -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section><!-- /.content -->
  </div>
<?=$this->endSection()?>
