<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Check if the user is logged in
        if (!session()->get('is_logged_in')) {
            return redirect()->to('/login');
        }

        return view('dashboard');
    }
}
