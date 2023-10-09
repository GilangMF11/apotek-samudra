<?=$this->extend('layouts/v_wrapper')?>
<?=$this->section('content')?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Penyimpanan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Penyimpanan</li>
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
                <a href="rak/create"><button class="btn btn-primary" >Tambah Data</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr class="text-center">
                            <th style="width: 20px;">No</th>
                            <th>Penyimpanan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter = 1; // Inisialisasi counter ?>
                        <?php foreach($rak as $u) : ?>
                            <tr>
                                <td class="text-center"><?= $counter++ ?></td>
                                <td><?= $u['nmrak'] ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url('rak/edit/' . $u['id_rak']) ?>" class="btn btn-warning">Edit</a>
                                    
                                    <!-- Tambahkan tautan Hapus dengan JavaScript -->
                                    <a href="#" class="btn btn-danger" onclick="hapusRak(<?= $u['id_rak'] ?>)">Hapus</a>
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

  <!-- Tambahkan script SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <!-- Tambahkan script JavaScript untuk menampilkan SweetAlert2 -->
  <script>
      // Fungsi untuk menampilkan SweetAlert2 saat Hapus diklik
      function hapusRak(idRak) {
          Swal.fire({
              title: 'Apakah Anda yakin?',
              text: "Anda tidak akan dapat mengembalikan ini!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3085d6',
              cancelButtonColor: '#d33',
              confirmButtonText: 'Ya, Hapus!'
          }).then((result) => {
              if (result.isConfirmed) {
                  // Jika pengguna mengonfirmasi, maka arahkan ke tautan hapus di sini
                  window.location.href = '<?= base_url('rak/delete/') ?>' + idRak;
              }
          });
      }
  </script>

<?=$this->endSection()?>
