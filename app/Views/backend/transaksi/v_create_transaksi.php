<?= $this->extend('layouts/v_wrapper') ?>

<?= $this->section('content') ?>

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
                        <li class="breadcrumb-item"><a href="<?= site_url('dashboard') ?>">Home</a></li>
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
                    <!-- Form Tambah Transaksi -->
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
                                        <input type="date" name="tgltransaksi" class="form-control" required>
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
                                            <th style="width: 200px;">Sub Total</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="width: 250px;">
                                                <select name="kdobat[]" id="kdobat_0" class="form-control text-center" required>
                                                    <?php foreach ($obat as $obat_item) : ?>
                                                        <option value="<?= $obat_item['kdobat'] ?>"><?= $obat_item['nmobat'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center" name="qty[]" id="qty_0" value="<?= $obat_item['qty'] ?>" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center" name="unit[]" id="unit_0" value="<?= $obat_item['unit'] ?>" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center" name="harga[]" id="harga_0" value="<?= $obat_item['hrgjual'] ?>" readonly>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center" name="banyak[]" id="banyak_0" oninput="hitungSubtotal(0)">
                                            </td>
                                            <td>
                                                <input type="text" class="form-control text-center" name="subtotal[]" id="subtotal_0" readonly>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger remove-row">Hapus</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="5" class="fw-bold text-end">
                                                <h5 class="text-center">Total</h5>
                                            </td>
                                            <td colspan="2">
                                                <input type="text" class="form-control" name="total" id="total" readonly>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="fw-bold text-end">
                                                <h5 class="text-center">Bayar</h5>
                                            </td>
                                            <td colspan="2">
                                                <input type="text" class="form-control" name="bayar" id="bayar" oninput="hitungKembali()">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="5" class="fw-bold text-end">
                                                <h5 class="text-center">Kembali</h5>
                                            </td>
                                            <td colspan="2">
                                                <input type="text" class="form-control" name="kembali" id="kembali" readonly>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div><!-- /.card-body -->
                            <div id="btn-trans" class="card-footer text-center" style="position: sticky;">
                                <a href="<?= site_url('dashboard') ?>"><button type="button" class="btn btn-danger">Batal</button></a>
                                <button type="button" class="btn btn-primary" id="addRow">+ Tambah Produk</button>
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
<style>
    #btn-trans {
        position: sticky;
        bottom: 0;
        z-index: 1000; /* Sesuaikan dengan kebutuhan Anda */
        background-color: #fff; /* Sesuaikan dengan warna latar belakang yang Anda inginkan */
        padding: 10px 0;
    }
</style>
<!-- Tambahkan script ini di bawah konten HTML Anda -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Mendefinisikan ID baris terakhir yang ditambahkan
        let lastRowID = 0;

        // Menambahkan baris baru saat tombol "+ Tambah Produk" ditekan
        $('#addRow').on('click', function() {
            lastRowID++; // Increment ID
            let newRow = `
                <tr>
                    <td style="width: 250px;">
                        <select name="kdobat[]" id="kdobat_${lastRowID}" class="form-control text-center" required>
                            <?php foreach ($obat as $obat_item) : ?>
                                <option value="<?= $obat_item['kdobat'] ?>"><?= $obat_item['nmobat'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                    <td>
                        <input type="text" class="form-control text-center" name="qty[]" id="qty_${lastRowID}" value="<?= $obat_item['qty'] ?>" readonly>
                    </td>
                    <td>
                        <input type="text" class="form-control text-center" name="unit[]" id="unit_${lastRowID}" value="<?= $obat_item['unit'] ?>" readonly>
                    </td>
                    <td>
                        <input type="text" class="form-control text-center" name="harga[]" id="harga_${lastRowID}" value="<?= $obat_item['hrgjual'] ?>" readonly>
                    </td>
                    <td>
                        <input type="text" class="form-control text-center" name="banyak[]" id="banyak_${lastRowID}" oninput="hitungSubtotal(${lastRowID})">
                    </td>
                    <td>
                        <input type="text" class="form-control text-center" name="subtotal[]" id="subtotal_${lastRowID}" readonly>
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

        // Fungsi untuk menghitung subtotal
        function hitungSubtotal(rowID) {
            let banyak = parseInt($('#banyak_' + rowID).val()) || 0;
            let harga = parseInt($('#harga_' + rowID).val()) || 0;
            let subtotal = banyak * harga;
            $('#subtotal_' + rowID).val(subtotal);
            hitungTotal();
        }

        // Fungsi untuk menghitung total
        function hitungTotal() {
            let total = 0;
            $('input[name^="subtotal"]').each(function() {
                total += parseFloat($(this).val()) || 0;
            });
            $('#total').val(total);
            hitungKembali();
        }

        // Fungsi untuk menghitung kembali
        function hitungKembali() {
            let total = parseFloat($('#total').val()) || 0;
            let bayar = parseFloat($('#bayar').val()) || 0;
            let kembali = bayar - total;
            $('#kembali').val(kembali);
        }

        // Panggil fungsi hitungTotal saat input banyak berubah
        $('#transaksiTable').on('input', 'input[name^="banyak"]', function() {
            let rowID = $(this).closest('tr').index();
            hitungSubtotal(rowID);
        });

        // Panggil fungsi hitungKembali saat input bayar berubah
        $('#bayar').on('input', function() {
            hitungKembali();
        });
    });
</script>

<?= $this->endSection() ?>
