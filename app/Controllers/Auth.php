<?php namespace App\Controllers;

class Auth extends BaseController
{
    public function login()
    {
        // Check if user is a developer or in development environment
        if (ENVIRONMENT === 'development' || is_developer()) {
            session()->set('isLoggedIn', true);
            return redirect()->to('/');
        }
    
        // If not a developer, proceed with regular login flow
        return $this->showLoginForm();
    }
    
    public function attemptLogin()
    {
        // Check if user is a developer or in development environment
        if (ENVIRONMENT === 'development' || is_developer()) {
            session()->set('isLoggedIn', true);
            return redirect()->to('/');
        }
    
        // If not a developer, proceed with regular login flow
        return $this->validateLogin();
    }
    
    private function showLoginForm()
    {
        // Tampilkan form login
        return view('auth/login');
    }
    
    private function validateLogin()
    {
        // Perform login validation
        // ...
    
        // If login successful, set session isLoggedIn and redirect to homepage
        session()->set('isLoggedIn', true);
        return redirect()->to('/');
    }
    

    public function logout()
    {
        // Hapus session isLoggedIn dan redirect ke halaman login
        session()->remove('isLoggedIn');
        return redirect()->to('/login');
    }
}