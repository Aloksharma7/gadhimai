<?php

namespace App\Controllers\AdminControllers;
use App\Controllers\BaseController; 
use App\Models\UserModel;


class AuthController extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
        // echo "admin area";
    }

    public function login()
    {
        // Load the form helper for validation
        helper(['form']);
    
        if ($this->request->getMethod() === 'POST') {
    
            // Validation rules for login
            $validationRules = [
                'email'    => 'required|valid_email',
                'password' => 'required'
            ];
    
            // Validate the input data
            if (!$this->validate($validationRules)) {
                // If validation fails, return to the login form with error messages
                return view('admin/login', [
                    'validation' => $this->validator
                ]);
            }
    
            // Retrieve email and password from the request
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password'); // This is the plain-text password
            // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
            // Initialize UserModel to interact with the database
            $userModel = new UserModel();
    
            // Find the user by email
            $user = $userModel->where('email', $email)->first();
    
            // Debugging output (you can remove this)
            // echo $email. '<br/>';
            // echo $password. '<br/>';
            // echo '<pre>';
            // print_r($user);
            // echo '</pre>';
            // if(password_verify($password, $user['password'])){
            //     echo "good";
            // }
            // exit();
    
            // Check if the user exists and verify the password
            if ($user && password_verify($password, $user['password'])) { // Compare plain-text password with hashed password
                // Success: Set session data and redirect to the admin area
                session()->set([
                    'isLoggedIn' => true,
                    'email' => $user['email'],
                    'username' => $user['username']
                ]);
                
                return redirect()->to('/admin');
            } else {
                // Failure: Show error message
                session()->setFlashdata('error', 'Invalid email or password.');
                return redirect()->to('/admin/login');
            }
        }
    
        return view('admin/login');
    }
    

    public function register(){

        helper(['form']);

        if ($this->request->getMethod() === 'POST') {
            
            // Validation Rules to check the corrcet gmail and password
            $validationRules = [
                'username' => 'required|min_length[3]',
                'email'    => 'required|valid_email',
                'password' => 'required|min_length[6]'
            ];

            // Validate the input data
            if (!$this->validate($validationRules)) {
                // If validation fails, return to the form with error messages
                return view('admin/register', [
                    'validation' => $this->validator // Pass validation errors to the view
                ]);
            }

            // Retrieve form data using $this->request->getPost()
            $email = $this->request->getPost('email');
            $password = $this->request->getPost('password');

            // Hash the password
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            // echo " Registration Successful";

            $user = new UserModel();
            $data = [
                'username' => $this->request->getPost('username'),
                'email' => $this->request->getPost('email'),
                'password' => $hashedPassword,
            ];

            $user->save($data);

        }

        return view('admin/register');
    }
}
