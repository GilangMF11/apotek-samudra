<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SupplierController extends BaseController
{
    public function index()
    {
        $supplierModel = new \App\Models\SupplierModel();
        $data['supplier'] = $supplierModel->orderBy('nmsupplier', 'ASC')->findAll();
        
        return view('backend/supplier/v_data_supplier', $data);
    }
    
    public function create()
    {
        return view('backend/supplier/v_create_supplier');
    }
    
    public function store()
    {
        $supplierModel = new \App\Models\SupplierModel();
        $supplierModel->save([
            'nmsupplier' => $this->request->getPost('nmsupplier'),
            'alamat' => $this->request->getPost('alamat'),
            'notelp' => $this->request->getPost('notelp'),
        ]);
        
        return redirect()->to('/supplier')->with('message', 'supplier Created successfully.');
    }
    
    public function edit($id)
    {
        $supplierModel = new \App\Models\SupplierModel();
        $data['supplier'] = $supplierModel->find($id);
        
        return view('backend/supplier/v_edit_supplier', $data);
    }
    
    public function update($id)
    {
        $supplierModel = new \App\Models\SupplierModel();
        $supplierModel->update($id, [
            'nmsupplier' => $this->request->getPost('nmsupplier'),
            'alamat' => $this->request->getPost('alamat'),
            'notelp' => $this->request->getPost('notelp')
        ]);
        
        return redirect()->to('/supplier')->with('message', 'Supplier Updated Successfully.');
    }
    
    public function delete($id)
    {
        $supplierModel = new \App\Models\SupplierModel();
        $supplierModel->delete($id);
        
        return redirect()->to('/supplier')->with('message', 'Supplier Deleted successfully.');
    }
}
