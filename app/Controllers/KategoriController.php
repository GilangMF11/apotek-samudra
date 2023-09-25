<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class KategoriController extends BaseController
{
    public function index()
    {
        $kategoriModel = new \App\Models\KategoriModel();
        $data['kategori'] = $kategoriModel->orderBy('nmkategori', 'ASC')->findAll();
        
        return view('backend/kategori/v_data_kategori', $data);
    }
    
    public function create()
    {
        return view('backend/kategori/v_create_kategori');
    }
    
    public function store()
    {
        $kategoriModel = new \App\Models\KategoriModel();
        $kategoriModel->save([
            'nmkategori' => $this->request->getPost('nmkategori')
        ]);
        
        return redirect()->to('/kategori')->with('message', 'Kategori created successfully.');
    }
    
    public function edit($id)
    {
        $kategoriModel = new \App\Models\KategoriModel();
        $data['kategori'] = $kategoriModel->find($id);
        
        return view('backend/kategori/v_edit_kategori', $data);
    }
    
    public function update($id)
    {
        $kategoriModel = new \App\Models\KategoriModel();
        $kategoriModel->update($id, [
            'nmkategori' => $this->request->getPost('nmkategori')
        ]);
        
        return redirect()->to('/kategori')->with('message', 'Kategori updated successfully.');
    }
    
    public function delete($id)
    {
        $kategoriModel = new \App\Models\KategoriModel();
        $kategoriModel->delete($id);
        
        return redirect()->to('/kategori')->with('message', 'Kategori deleted successfully.');
    }
}
