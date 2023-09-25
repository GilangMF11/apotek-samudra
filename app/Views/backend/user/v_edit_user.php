<?=$this->extend('layouts/v_wrapper')?>
<?=$this->section('content')?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Data</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
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
              <form action="<?= base_url('user/update/'.$user['id']) ?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="<?= $user['username'] ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword2">Confirm Password</label>
                    <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Hak Akses</label>
                    <select name="role" class="form-control">
                      <option value="admin" <?php if ($user['role'] == 'admin') echo 'selected'; ?>>Admin</option>
                      <option value="apoteker" <?php if ($user['role'] == 'apoteker') echo 'selected'; ?>>Apotekter</option>
                      <option value="kasir" <?php if ($user['role'] == 'kasir') echo 'selected'; ?>>Kasir</option>
                    </select>
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
<?=$this->endSection()?>
