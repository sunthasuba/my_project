<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth/login'); // Loads the login view located at app/Views/auth/login.php
    }
    

}

