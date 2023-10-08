<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RakController extends BaseController
{
    public function index()
    {
        $rakModel = new \App\Models\RakModel();
        $data['rak'] = $rakModel->orderBy('nmrak', 'ASC')->findAll();
        
        return view('backend/rak/v_data_rak', $data);
    }
    
    public function create()
    {
        return view('backend/rak/v_create_rak');
    }
    
    public function store()
    {
        $rakModel = new \App\Models\RakModel();
        $rakModel->save([
            'nmrak' => $this->request->getPost('nmrak')
        ]);
        
        return redirect()->to('/rak')->with('message', 'rak created successfully.');
    }
    
    public function edit($id)
    {
        $rakModel = new \App\Models\RakModel();
        $data['rak'] = $rakModel->find($id);
        
        return view('backend/rak/v_edit_rak', $data);
    }
    
    public function update($id)
    {
        $rakModel = new \App\Models\RakModel();
        $rakModel->update($id, [
            'nmrak' => $this->request->getPost('nmrak')
        ]);
        
        return redirect()->to('/rak')->with('message', 'rak updated successfully.');
    }
    
    public function delete($id)
    {
        $rakModel = new \App\Models\RakModel();
        $rakModel->delete($id);
        
        return redirect()->to('/rak')->with('message', 'rak deleted successfully.');
    }
}
