<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Users extends BaseController
{
    private $session;
    // ===============================================================
    public function __construct()
    {

        $this->session = session();
    }

    // ===============================================================
    public function index()
    {
        // Check if there is an active session
        if ($this->checkSession()) {
            // Active login
        } else {
            // Show login form
            $this->login();
        }
    }

    // ===============================================================
    public function login()
    {
        $error = '';
        $data = array();
        $request = \Config\Services::request();

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Check fields
            $username = $request->getPost('text_username');
            $password = $request->getPost('text_password');

            if ($username == '' || $password == '') {
                $error = "Erro no preenchimento dos campos!";
            }

            // Check databse
        }

        if ($error != '') {
            $data['error'] = $error;
        }

        // Show if login page
        echo view('users/login', $data);
    }

    // ===============================================================
    public function checkSession()
    {
        // Check if sessions exists
        return $this->session->has("id_user");
    }
}
