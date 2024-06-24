<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate()
    {
        $userModel = new UserModel();
        $email = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Fetch user by email
        $user = $userModel->where('email', $email)->first();

        // Check if the user exists and the password is correct
        if ($user && password_verify($password, $user['password'])) {
            // Set session data
            session()->set([
                'user_id' => $user['id'],
                'user_name' => $user['name'],
                'is_logged_in' => true
            ]);

            // Redirect to the dashboard
            return redirect()->to('/dashboard');
        } else {
            // Set an error message and reload the login page
            return redirect()->back()->with('error', 'Invalid login credentials');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
