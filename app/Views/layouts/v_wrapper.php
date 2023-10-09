<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Apotek Samudra Farma</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>template/dist/css/adminlte.min.css">
  <link rel="icon" href="<?= base_url() ?>template/dist/img/logo.jpg" class="rounded-favicon">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>template/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>template/dist/css/adminlte.min.css">
  <!-- Tambahkan ini ke dalam bagian head HTML Anda -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">

</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<?=$this->include('layouts/v_header')?>
<?=$this->include('layouts/v_sidebar')?>
<?=$this->rendersection('content')?>


<?=$this->include('layouts/v_footer')?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->


<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="<?php echo base_url()?>template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url()?>template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="<?php echo base_url()?>template/dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="<?php echo base_url()?>template/plugins/chart.js/Chart.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()?>template/dist/js/pages/dashboard3.js"></script>

<!-- jQuery -->
<script src="<?php echo base_url()?>template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?php echo base_url()?>template/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>template/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url()?>template/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url()?>template/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url()?>template/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url()?>template/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url()?>template/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url()?>template/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url()?>template/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url()?>template/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url()?>template/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url()?>template/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>template/dist/js/adminlte.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>

<style>
  .rounded-favicon{
    border-radius: 50%;
  }
</style>