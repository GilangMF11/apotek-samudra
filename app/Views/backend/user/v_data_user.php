<?=$this->extend('layouts/v_wrapper')?>
<?=$this->section('content')?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Users</li>
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
                <a href="user/create"><button class="btn btn-primary" >Tambah Data</button></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                    <tr class="text-center">
                      <th>Username</th>
                      <th>Role</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($users as $u) : ?>
                    <tr>
                      <td><?=$u['username']?></td>
                      <td><?=$u['role']?></td>
                      <td class="text-center">
                        <a href="<?=base_url('user/edit/'.$u['id'])?>" class="btn btn-warning">Edit</a>
                        <a href="<?=base_url('user/delete/'.$u['id'])?>" class="btn btn-danger">Hapus</a>
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
  <!-- Modal Tambah Data -->
  <div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="userModalLabel">Tambah Pengguna</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Form fields for create or edit user -->
          <form id="userForm">
            <div class="form-group">
              <label for="email">Username</label>
              <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
              <label for="confirm_password">Confirm Password</label>
              <input type="password" class="form-control" id="confirm_password" name="confirm_password">
            </div>
            <div class="form-group">
              <label for="role">Role</label>
              <select class="form-control" id="role" name="role">
                <option>-----Pilih Akses-----</option>
                <option value="admin">Admin</option>
                <option value="apoteker">Apoteker</option>
                <option value="kasir">Kasir</option>
              </select>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" id="submitUser">Simpan</button>
        </div>
        </form>
      </div>
    </div>
  </div>

  <script>
    $('#submitUser').on('click', function () {
        // Create an object with the new user data
        var userData = {
            username: $('#username').val(),
            password: $('#password').val(),
            confirm_password: $('#confirm_password').val(),
            role: $('#role').val()
        };

        // Send the AJAX request to add the new user
        $.ajax({
            url: '<?= base_url('user/store') ?>', // Replace with the appropriate URL for adding a new user
            method: 'POST',
            data: userData,
            success: function (response) {
                // Close the modal
                $('#userModal').modal('hide');

                // Reload the page or update the user data in the table
                // based on your application's requirements
            }
        });
    });
  </script>
  <!--/Modal Tambah Data-->
  <?=$this->endSection()?>
