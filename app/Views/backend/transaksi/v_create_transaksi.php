<?=$this->extend('layouts/v_wrapper')?>
<?=$this->section('content')?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Transaksi Apotek Samudra Farma</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url()?>/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Transaksi</li>
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
              <form action="<?= base_url('transaksi/store') ?>" method="POST">
                <div class="card-body">
                    <div style="width: 250px;">
                        <div class="form-group">
                            <label for="">Nama Pembeli</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Transaksi</label>
                            <input type="date" name="" id="" class="form-control">
                        </div>
                    </div>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr class="text-center">
                            <td>Obat yang dijual</td>
                            <td>Stok</td>
                            <td>Unit Obat</td>
                            <td>Harga Satuan</td>
                            <td>Banyak</td>
                            <td>Sub Total</td>
                            <td>Aksi</td>
                        </tr>
                    </thead>
                    <tbody>
                        <td>
                            <select name="" id="" class="form-control">
                            <Option></Option>
                            </select>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="" readonly>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="" readonly>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="" readonly>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="" readonly>
                        </td>
                        <td>
                            <input type="text" class="form-control" name="" readonly>
                        </td>
                        <td>
                            <a href=""><button class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tbody>
                  </table>
                <!-- /.card-body -->
                <div class="card-footer text-center">
                <button type="button" class="btn btn-danger">Batal</button>
                <button type="button" class="btn btn-primary"> + Tambah Produk</button>
                <button type="submit" class="btn btn-success">Simpan</button>
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
