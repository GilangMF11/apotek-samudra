<?=$this->extend('layouts/v_wrapper')?>
<?=$this->section('content')?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data Supplier</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Supplier</a></li>
              <li class="breadcrumb-item active">Edit Data</li>
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
            <div class="card card-primary">
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= base_url('supplier/update/'.$supplier['id']) ?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Supplier</label>
                    <input type="text" name="nmsupplier" class="form-control" placeholder="Nama Supplier" value="<?= $supplier['nmsupplier'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?= $supplier['alamat'] ?>">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">No Telpon</label>
                    <input type="text" name="notelp" class="form-control" placeholder="No. Telp" value="<?= $supplier['notelp'] ?>">
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
