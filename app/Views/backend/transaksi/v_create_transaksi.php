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
                                        <input type="text" name="nmpembeli" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Tanggal Transaksi</label>
                                        <input type="date" name="tgltransaksi" id="" class="form-control" required>
                                    </div>
                                </div>
                                <table id="transaksiTable" class="table table-bordered table-hover">
                                    <thead>
                                        <tr class="text-center">
                                            <th>Obat yang dijual</th>
                                            <th>Stok</th>
                                            <th>Unit Obat</th>
                                            <th>Harga Satuan</th>
                                            <th>Banyak</th>
                                            <th>Sub Total</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width: 250px;">
                                            <select name="kdobat[]" id="kdobat_0" class="form-control text-center" required>
                                                <?php foreach ($obat as $obat) : ?>
                                                    <option value="<?= $obat['kdobat'] ?>"><?= $obat['nmobat'] ?></option>
                                                <?php endforeach; ?>
                                            </select>

                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center" name="qty[]" id="qty_0" value="<?= $obat['qty'] ?>" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center" name="unit[]" id="unit_0" value="<?= $obat['unit'] ?>" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center" name="harga[]" id="harga_0" value="<?= $obat['hrgjual'] ;?>" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center" name="banyak[]" id="banyak_0" >
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center" name="subtotal[]" id="subtotal_0" readonly>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger remove-row">Hapus</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div><!-- /.card-body -->
                            <div class="card-footer text-center">
                                <a href="<?= base_url()?>dashboard"><button type="button" class="btn btn-danger">Batal</button></a>
                                <button type="button" class="btn btn-primary" id="addRow">+ Tambah Transaksi</button>
                                <a href="<?= base_url()?>transaksi/store"><button type="submit" class="btn btn-success">Simpan</button></a>
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

<!-- Tambahkan script ini di bawah konten HTML Anda -->
<script>
    $(document).ready(function() {
        // Mendefinisikan ID baris terakhir yang ditambahkan
        let lastRowID = 0;

        // Menambahkan baris baru saat tombol "+ Tambah Transaksi" ditekan
        $('#addRow').on('click', function() {
            lastRowID++; // Increment ID
            let newRow = `
                <tr>
                    <td>
                        <select name="kdobat[]" id="kdobat_${lastRowID}" class="form-control">
                            <option></option>
                        </select>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="qty[]" id="qty_${lastRowID}" readonly>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="unit[]" id="unit_${lastRowID}" readonly>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="harga[]" id="harga_${lastRowID}" readonly>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="banyak[]" id="banyak_${lastRowID}" readonly>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="subtotal[]" id="subtotal_${lastRowID}" readonly>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger remove-row">Hapus</button>
                    </td>
                </tr>
            `;
            $('#transaksiTable tbody').append(newRow);
        });

        // Menghapus baris saat tombol "Hapus" ditekan
        $('#transaksiTable').on('click', '.remove-row', function() {
            $(this).closest('tr').remove();
        });
    });
</script>

<?=$this->endSection()?>
