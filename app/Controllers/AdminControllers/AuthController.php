<?php

namespace App\Controllers\AdminControllers;
use App\Controllers\BaseController; 
use App\Models\UserModel;
use App\Models\CarouselModel;
use App\Models\EventModel;
use App\Models\PostModel;
use App\Models\NewsNoticeModel;


class AuthController extends BaseController
{
    public function index()
    {
        // Initialize models
        $carouselModel = new CarouselModel();
        $eventModel = new EventModel();
        $blogModel = new PostModel();
        $newsNoticeModel = new NewsNoticeModel();

        // Get counts of various items
        $data['carouselCount'] = $carouselModel->countAll();
        $data['eventCount'] = $eventModel->countAll();
        $data['blogCount'] = $blogModel->countAll();
        $data['newsNoticeCount'] = $newsNoticeModel->countAll();

        // Get latest items
        $data['latestCarouselItems'] = $carouselModel->orderBy('id', 'DESC')->findAll(3); // Get the latest 3 carousel items
        $data['latestEvents'] = $eventModel->orderBy('event_date', 'DESC')->findAll(3); // Get the latest 3 events
        $data['latestBlogs'] = $blogModel->orderBy('id', 'DESC')->findAll(3); // Get the latest 3 blog posts

        // Load the dashboard view
        return view('admin/dashboard', $data);
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

    public function logout(){
        // Destroy the session
        session()->destroy();
        // Optionally, you can also set a flashdata message
        session()->setFlashdata('success', 'You have successfully logged out.');
        // Redirect to the login page or any other page
        return redirect()->to('/admin/login');
    }
    
}
