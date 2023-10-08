<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RakModel;
use App\Models\UnitModel;
use App\Models\KategoriModel;
use App\Models\SupplierModel;
use App\Models\ObatModel;

class ObatController extends BaseController
{
    public function index()
    {
        $obatModel = new \App\Models\ObatModel();
        $data['obat'] = $obatModel->orderBy('nmobat', 'ASC')->findAll();
        
        return view('backend/obat/v_data_obat', $data);
    }
    
    public function create()
    {

        // Load model untuk dropdown
        $rakModel = new RakModel();
        $unitModel = new UnitModel();
        $kategoriModel = new KategoriModel();
        $supplierModel = new SupplierModel();

        $data['rak'] = $rakModel->orderBy('nmrak', 'ASC')->findAll();
        $data['unit'] = $unitModel->orderBy('nmunit', 'ASC')->findAll();
        $data['kategori'] = $kategoriModel->orderBy('nmkategori', 'ASC')->findAll();
        $data['supplier'] = $supplierModel->orderBy('nmsupplier', 'ASC')->findAll();
        return view('backend/obat/v_create_obat', $data);
    }
    
    public function store()
    {
        $obatModel = new \App\Models\ObatModel();
            $obatModel->save([
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
        
        return redirect()->to('/obat')->with('message', 'Obat Created Successfully.');
    }
    
    public function edit($kdobat)
    {
        $obatModel = new \App\Models\ObatModel();
        $data['obat'] = $obatModel->find($kdobat);
        // Load model untuk dropdown
        $rakModel = new RakModel();
        $unitModel = new UnitModel();
        $kategoriModel = new KategoriModel();
        $supplierModel = new SupplierModel();
        
        $data['rak'] = $rakModel->orderBy('nmrak', 'ASC')->findAll();
        $data['unit'] = $unitModel->orderBy('nmunit', 'ASC')->findAll();
        $data['kategori'] = $kategoriModel->orderBy('nmkategori', 'ASC')->findAll();
        $data['supplier'] = $supplierModel->orderBy('nmsupplier', 'ASC')->findAll();

        
        return view('backend/obat/v_edit_obat', $data);
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
