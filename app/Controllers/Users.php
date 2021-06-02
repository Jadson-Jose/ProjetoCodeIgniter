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
        // Show if login page
        echo view('users/login');
    }

    // ===============================================================
    public function checkSession()
    {
        // Check if sessions exists
        return $this->session->has("id_user");
    }
}
