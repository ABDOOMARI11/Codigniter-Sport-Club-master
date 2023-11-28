<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;


class Auth extends BaseController
{
    public function signIn()
    {
        $data = [];
        $data['main_content'] = 'Pages/SignIn';
        echo view('InnerPages/template', $data);
    }
    public function signUp()
    {
        $data = [];
        $data['main_content'] = 'Pages/SignUp';
        echo view('InnerPages/template', $data);
    }
    public function create()
    {
        if ($this->request->getMethod() == 'post') {
            $user = new UserModel();
            $data = [
                'PseudoNom' => $this->request->getPost('PseudoNom'),
                'Nom' => $this->request->getPost('Nom'),
                'Prenom' => $this->request->getPost('Prenom'),
                'Adresse' => $this->request->getPost('Adresse'),
                'Sexe' => $this->request->getPost('Sexe'),
                'Profession' => $this->request->getPost('Profession'),
                'DateNaissance' => $this->request->getPost('DateNaissance'),
                'Password' => password_hash($this->request->getPost('Password'), PASSWORD_DEFAULT),
            ];
            $user->insert($data);
            return redirect()->to(base_url('/sign-in'));
        }
    }

    public function login()
    {
        if ($this->request->getMethod() == 'post') {
            $user = new UserModel();
            $username = $this->request->getPost('PseudoNom');
            $password = $this->request->getPost('Password');
            $Cuser = $user->where('PseudoNom', $username)->first();

            if ($username === 'admin' && $password === 'admin') {
                session()->set('PseudoNom', "admin");
                return redirect()->to(base_url('/list-reclame'));
            }

            if ($Cuser && password_verify($password, $Cuser['Password'])) {
                session()->set('PseudoNom', $Cuser['PseudoNom']);
                return redirect()->to(base_url('/list-reclame'));
            }
            return redirect()->to(base_url('/sign-in'))->with('session', ['error' => 'Nom d\'utilisateur ou mot de passe incorrect']);
        }
    }
    public function logout()
    {
        session()->remove('PseudoNom');
        session()->destroy();
        return redirect()->to(base_url('/sign-in'));
    }
}
