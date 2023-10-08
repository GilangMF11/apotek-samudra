<?=$this->extend('layouts/v_wrapper')?>
<?=$this->section('content')?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Obat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Obat</a></li>
              <li class="breadcrumb-item active">Tambah Obat</li>
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
              <form action="<?= base_url('obat/store') ?>" method="POST">
                <div class="card-body">

                  <div class="form-group">
                    <label>Nama Obat</label>
                    <input type="text" name="nmobat" class="form-control" id="InputKategori" placeholder="Nama Obat" required>
                  </div>

                    <div class="form-group">
                      <label>Kode Batch</label>
                      <input type="text" class="form-control" name="kdbatch" placeholder="" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Tanggal Diproduksi</label>
                      <input type="date" class="form-control" name="tglproduksi" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Tanggal Kadaluarsa</label>
                      <input type="date" class="form-control" name="tglexp" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Penyimpanan</label>
                      <select class="form-control" name="rak" id="">
                        <?php foreach ($rak as $rakItem): ?>
                          <option value="<?= $rakItem['nmrak'] ?>"><?= $rakItem['nmrak'] ?></option>
                          <?php endforeach; ?>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Unit</label>
                      <select class="form-control" name="unit" id="">
                        <?php foreach ($unit as $unitItem): ?>
                          <option value="<?= $unitItem['nmunit'] ?>"><?= $unitItem['nmunit'] ?></option>
                          <?php endforeach; ?>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>kategori</label>
                      <select class="form-control" name="kategori" id="">
                        <?php foreach ($kategori as $kategoriItem): ?>
                          <option value="<?= $kategoriItem['nmkategori'] ?>"><?= $kategoriItem['nmkategori'] ?></option>
                          <?php endforeach; ?>
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label>Deskripsi</label>
                      <input type="text" class="form-control" name="deskripsi" placeholder="" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Stok</label>
                      <input type="text" class="form-control" name="qty" placeholder="Stok" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Harga Beli</label>
                      <input type="number" class="form-control" name="hrgbeli" placeholder="" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Harga Jual</label>
                      <input type="number" class="form-control" name="hrgjual" placeholder="" required>
                    </div>
                    
                    <div class="form-group">
                      <label>Pemasok</label>
                      <select class="form-control" name="pemasok" id="">
                        <?php foreach ($supplier as $supplierItem): ?>
                          <option value="<?= $supplierItem['nmsupplier'] ?>"><?= $supplierItem['nmsupplier'] ?></option>
                          <?php endforeach; ?>
                      </select>
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
