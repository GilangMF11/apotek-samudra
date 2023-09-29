<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TransaksiController extends BaseController
{
    public function index()
    {
        $obatModel = new \App\Models\ObatModel();
        $data['obat'] = $obatModel->findAll();
        
        return view('backend/obat/v_data_obat', $data);
    }
    
    public function create()
    {
        $obatModel = new \App\Models\ObatModel();
        $data['obat'] = $obatModel->orderBy('nmobat', 'ASC')->findAll(); // Ambil semua data obat dari tabel tbobat

        return view('backend/transaksi/v_create_transaksi', $data);
    }
    
    public function store()
    {
        // Validasi input sesuai kebutuhan Anda, misalnya, validasi nama pembeli dan tanggal transaksi.

        // Simpan data transaksi ke database
        $transaksiModel = new \App\Models\TransaksiModel();
        $dataTransaksi = [
            'nmcustomer' => $this->request->getPost('nmcustomer'),
            'tanggaltransaksi' => $this->request->getPost('tgltransaksi'),
            'kdobat' => $this->request->getPost('kdobat'),
            'qty' => $this->request->getPost('qty'),
            'banyak' => $this->request->getPost('banyak'),
            'harga' => $this->request->getPost('harga'),
            'total_harga' => $this->request->getPost('total_harga'),
        ];
        $transaksiModel->save($dataTransaksi);
        $idTransaksi = $transaksiModel->insertID();

        // Simpan detail transaksi ke database
        $detailTransaksiModel = new \App\Models\DetailTransaksiModel();
        $kdobat = $this->request->getPost('kdobat');
        $qty = $this->request->getPost('qty');
        $harga = $this->request->getPost('harga');

        foreach ($kdobat as $key => $obat) {
            $dataDetailTransaksi = [
                'id_transaksi' => $idTransaksi,
                'kdobat' => $obat,
                'qty' => $qty[$key],
                'harga' => $harga[$key],
                // Anda dapat menambahkan lebih banyak field detail transaksi sesuai kebutuhan.
            ];
            $detailTransaksiModel->save($dataDetailTransaksi);
        }

        // Redirect atau tampilkan pesan sukses
        return redirect()->to('/transaksi')->with('success', 'Transaksi berhasil disimpan.');
    }
    public function edit($kdobat)
    {

    }
    
    public function update($kdobat)
    {
        $obatModel = new \App\Models\ObatModel();
        $obatModel->update($kdobat, [
            'nmobat' => $this->request->getPost('nmobat'),
            'kdbatch' => $this->request->getPost('kdbatch'),
            'tglproduksi' => $this->request->getPost('tglproduksi'),
            'tglexp' => $this->request->getPost('tglexp'),
            'rak' => $this->request->getPost('rak'),
            'unit' => $this->request->getPost('unit'),
            'rak' => $this->request->getPost('rak'),
            'kategori' => $this->request->getPost('kategori'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'qty' => $this->request->getPost('qty'),
            'hrgbeli' => $this->request->getPost('hrgbeli'),
            'hrgjual' => $this->request->getPost('hrgjual'),
            'pemasok' => $this->request->getPost('pemasok'),
        ]);
        
        return redirect()->to('/obat')->with('message', 'Obat Updated successfully.');
    }
    
    public function delete($kdobat)
    {
        $obatModel = new \App\Models\ObatModel();
        $obatModel->delete($kdobat);
        
        return redirect()->to('/obat')->with('message', 'rak deleted successfully.');
    }
}
