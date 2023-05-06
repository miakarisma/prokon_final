<?php namespace App\Controllers;
use App\Models\UserModel;

class Login extends BaseController
{
    public $usermodel;

    public function __construct() {
        $this->usermodel = new UserModel();
    }

    public function index()
    {
        if (session('id_user')) {
            return view('login');
        }
        else {
            
        }
    }

    public function process()
    {
        $email_user = $this->request->getVar('email');
        $nama_user = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $dataUser = $this->usermodel->getEmail($email_user);

        if ($dataUser) {
            if ($password == $dataUser['password']) {
                session()->set([
                    'username' => $dataUser['nama_user'],
                    'email' => $dataUser['email_user'],
                    'logged_in' => TRUE
                ]);
                return redirect()->to(base_url('/page'));
            }
            else {
                session()->setFlashdata('error', 'Username & Password Salah');
                return redirect()->back();
            }
        }
        else {
            session()->setFlashdata('error', 'Username & Password Salah');
            return redirect()->back();
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
}