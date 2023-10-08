<?=$this->extend('layouts/v_wrapper')?>
<?=$this->section('content')?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Supplier</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Supplier</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <?php if (!empty(session()->getFlashdata('message'))) : ?>
              <div class="alert alert-success">
                  <?= session()->getFlashdata('message');?>
              </div>
            <?php endif ?>

            <div class="card">
              <div class="card-header">
                <a href="supplier/create"><button class="btn btn-primary">Tambah Data</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr class="text-center">
                            <th style="width: 20px;">No</th>
                            <th>Pemasok</th>
                            <th>Alamat</th>
                            <th>No. Telp</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter = 1; // Inisialisasi counter ?>
                        <?php foreach($supplier as $u) : ?>
                            <tr>
                                <td><?= $counter++ ?></td>
                                <td><?= $u['nmsupplier'] ?></td>
                                <td><?= $u['alamat'] ?></td>
                                <td><?= $u['notelp'] ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('supplier/edit/' . $u['id']) ?>" class="btn btn-warning">Edit</a>
                                    <a href="<?= base_url('supplier/delete/' . $u['id']) ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <?=$this->endSection()?>
