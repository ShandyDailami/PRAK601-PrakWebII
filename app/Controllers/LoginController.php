<?php namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
    protected $model;

    public function __construct()
    {
        $this->model = new UserModel();
        $this->helpers = ['form', 'url'];
    }

    public function index()
    {

        $data = [
            'title' => 'Login'
        ];

        return view('vw_login', $data);
    }

    public function login()
    {
        $data = $this->request->getPost(['username', 'password']);

        if (! $this->validateData($data, [
            'username' => 'required',
            'password' => 'required'
        ])) {
            return $this->index();
        }

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $credentials = ['username' => $username];

        $user = $this->model->where($credentials)
            ->first();

        if (! $user) {
            session()->setFlashdata('error', 'username atau password anda salah.');
            return redirect()->back();
        }

        $passwordCheck = password_verify($password, $user['password']);

        if (! $passwordCheck) {
            session()->setFlashdata('error', 'username atau password anda salah.');
            return redirect()->back();
        }

        $userData = [
            'username' => $user['username'],
            'logged_in' => TRUE
        ];

        session()->set($userData);
        return redirect()->to(base_url('/'));
    }

    public function isLoggedIn()
    {
        return session()->get('logged_in') === TRUE;
    }
}