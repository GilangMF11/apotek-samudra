<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UnitController extends BaseController
{
    public function index()
    {
        $unitModel = new \App\Models\UnitModel();
        $data['unit'] = $unitModel->orderBy('nmunit', 'ASC')->findAll();
        
        return view('backend/unit/v_data_unit', $data);
    }
    
    public function create()
    {
        return view('backend/unit/v_create_unit');
    }
    
    public function store()
    {
        $unitModel = new \App\Models\UnitModel();
        $unitModel->save([
            'nmunit' => $this->request->getPost('nmunit')
        ]);
        
        return redirect()->to('/unit')->with('message', 'Unit created successfully.');
    }
    
    public function edit($id)
    {
        $unitModel = new \App\Models\UnitModel();
        $data['unit'] = $unitModel->find($id);
        
        return view('backend/unit/v_edit_unit', $data);
    }
    
    public function update($id)
    {
        $unitModel = new \App\Models\UnitModel();
        $unitModel->update($id, [
            'nmunit' => $this->request->getPost('nmunit')
        ]);
        
        return redirect()->to('/unit')->with('message', 'Unit updated successfully.');
    }
    
    public function delete($id)
    {
        $unitModel = new \App\Models\UnitModel();
        $unitModel->delete($id);
        
        return redirect()->to('/unit')->with('message', 'Unit deleted successfully.');
    }
}
