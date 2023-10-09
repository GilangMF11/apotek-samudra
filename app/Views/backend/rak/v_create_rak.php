<?=$this->extend('layouts/v_wrapper')?>
<?=$this->section('content')?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah Penyimpanan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Penyimpanan</a></li>
              <li class="breadcrumb-item active">Tambah Penyimpanan</li>
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
              <form action="<?= base_url('rak/store') ?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama Penyimpanan</label>
                    <input type="text" name="nmrak" class="form-control" id="InputKategori" placeholder="Rak Obat" required>
                  </div>
                </div><!-- /.card-body -->
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

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
      $(document).ready(function() {
          // Submit form ketika tombol Submit ditekan
          $('form').submit(function(event) {
              event.preventDefault(); // Mencegah form untuk melakukan submit standar
              $.ajax({
                  url: '<?= base_url('rak/store') ?>', // Ganti URL sesuai dengan endpoint penyimpanan Anda
                  type: 'POST',
                  data: $('form').serialize(),
                  dataType: 'json',
                  success: function(response) {
                      if (response.success) {
                          // Jika penyimpanan berhasil, tampilkan SweetAlert2
                          Swal.fire(
                              'Data Berhasil Tersimpan',
                              '',
                              'success'
                          ).then(function() {
                              // Redirect atau lakukan tindakan lain yang diperlukan
                              window.location.href = '<?= base_url('rak') ?>'; // Ganti URL sesuai dengan halaman yang ingin Anda arahkan
                          });
                      } else {
                          // Jika penyimpanan gagal, tampilkan pesan kesalahan
                          Swal.fire(
                              'Gagal',
                              'Terjadi kesalahan saat menyimpan data.',
                              'error'
                          );
                      }
                  },
                  error: function() {
                      // Jika terjadi kesalahan saat mengirim permintaan ke server, tampilkan pesan kesalahan
                      Swal.fire(
                          'Gagal',
                          'Terjadi kesalahan saat mengirim permintaan ke server.',
                          'error'
                      );
                  }
              });
          });
      });
  </script>

<?=$this->endSection()?>
