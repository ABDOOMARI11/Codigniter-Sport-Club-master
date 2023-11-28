<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ReclamationModel;

class ReclamationController extends BaseController
{

    public function index()
    {
        $data = [];
        $data['main_content'] = 'Pages/Reclamation';
        echo view('InnerPages/template', $data);
    }
    public function create()
    {
        if ($this->request->getMethod() == 'post') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'CorpReclamation' => 'required',
                'DateReclamation' => 'required',
            ]);

            if ($validation->withRequest($this->request)->run()) {
                $model = new ReclamationModel();
                // Rest of your code
                $currentDateTime = date('Y-m-d H:i:s');
                $data = [
                    'CorpReclamation' => $this->request->getPost('CorpReclamation'),
                    'DateReclamation' => $currentDateTime,
                    'PseudoNom' => session()->get('PseudoNom'),
                ];
                if ($model->insert($data)) {
                    return redirect()->to('/reclame')->with('message', 'Réclamation bien ajoutée');
                } else {
                    return redirect()->to('/reclame')->with('message', "Echec d'insertion");
                }
            } else {
                return redirect()->to('/reclame')->with('message', $validation->getErrors());
            }
        }

        return view('create');
    }

    public function listreclamation()
    {
        $data = [];
        $Reclam = new ReclamationModel();
        $session = session()->get('PseudoNom');
        if ($session == "admin") {
            $data['data'] = $Reclam->findAll();
        } else {
            $data['data'] = $Reclam->where('PseudoNom', $session)->findAll();
        }
        $data['main_content'] = 'Pages/ListReclamation';
        echo view('InnerPages/template', $data);
    }


    public function delete($id)
    {
        $Reclam = new ReclamationModel();
        $Reclam->where('NumReclamation', $id)->delete();
        return redirect()->to(base_url('/list-reclame'));
    }



    public function edit($id)
    {
        $data = [];
        $Reclam = new ReclamationModel();
        $data['data'] = $Reclam->find($id);
        $data['main_content'] = 'Pages/Reclamation';
        $data['public'] = 'public';
        $data['node_modules'] = 'node_modules';

        echo view('InnerPages/template_date', $data);
    }


     public function update($id)
    {
        $model = new ReclamationModel();

        if ($this->request->getMethod() == 'put') {
            $validation = \Config\Services::validation();
            $validation->setRules([
                'CorpReclamation' => 'required',
                'DateReclamation' => 'required',
            ]);

            if ($validation->withRequest($this->request)->run()) {
                $existingRecord = $model->find($id);
                // Rest of your code
                $data = [
                    'CorpReclamation' => $this->request->getPost('CorpReclamation'),
                    'DateReclamation' => date('Y-m-d H:i:s'),
                    'PseudoNom' => session()->get('PseudoNom'),
                ];

                if ($model->update($id, $data)) {
                    return redirect()->to('/reclame')->with('message', 'Réclamation mise à jour avec succès');
                } else {
                    return redirect()->to('/reclame')->with('message', "Echec de la mise à jour");
                }
            } else {
                return redirect()->to('/reclame')->with('message', $validation->getErrors());
            }
        }

        $data['record'] = $model->find($id);
        // Rest of your code
        if (!$data['record']) {
            return redirect()->to('/reclame')->with('message', 'Record not found');
        }
        return redirect()->to(base_url('/list-reclame'));
    }
}
