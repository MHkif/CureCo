<?php

class Admin extends Controller
{

    private $adminModel;
    private $dataModel;
    private $medicine;

    public function __construct()
    {
        $this->adminModel = $this->model("AdminUser");
        $this->dataModel = $this->model("DataModel");
        $this->medicine = $this->dataModel->getData('medicine');
    }

    public function dashboard()
    {
        // if (!isAdminLoggedIn()) {
        //     redirect('pages/');
        // }

        $params = [];

        $this->view('admin/dashboard', $params, "dashboardLayout");
    }

    public function medicinePanel()
    {
        // if (!isAdminLoggedIn()) {
        //     redirect('pages/');
        // }

        $params = [
            'medicines' => $this->medicine,
        ];

        $this->view('admin/medicinePanel', $params, "dashboardLayout");
    }

    public function register()
    {
        // Check for POST
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form


            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            // Init data
            $data = [
                'fName' => trim($_POST['fName']),
                'lName' => trim($_POST['lName']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'confirm_password' => trim($_POST['confirm_password']),
                'fName_err' => '',
                'lName_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            // Validate Email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            } else {
                // Check email
                if ($this->adminModel->findUserByEmail($data['email'])) {
                    $data['email_err'] = 'Email is already taken';
                }
            }

            // Validate Name
            if (empty($data['fName'])) {
                $data['fName_err'] = 'Please enter your First Name';
            }
            if (empty($data['lName'])) {
                $data['lName_err'] = 'Please enter your Last Name';
            }

            // Validate Password
            if (empty($data['password'])) {
                $data['password_err'] = 'Pleae enter Password';
            } elseif (strlen($data['password']) < 6) {
                $data['password_err'] = 'Password must be at least 6 characters';
            }

            // Validate Confirm Password
            if (empty($data['confirm_password'])) {
                $data['confirm_password_err'] = 'Please Confirm Password';
            } else {
                if ($data['password'] != $data['confirm_password']) {
                    $data['confirm_password_err'] = 'Passwords do not match';
                }
            }

            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])) {
                // Validated

                // Hash Password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                // Register User
                if ($this->adminModel->register($data)) {
                    //   flash('register_success', 'You are registered and can log in');
                    redirect('admin/login');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('admin/register', $data);
            }
        } else {
            // Init data
            $data = [
                'fName' => '',
                'lName' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            // Load view
            $this->view('admin/register', $data);
        }
    }


    public function login()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => '',
            ];
            // print_r($data);
            // exit;


            // Validate Email
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter Email';
            }

            // Validate Password
            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter Password';
            }

            // Check for user/email
            if ($this->adminModel->findUserByEmail($data['email'])) {
                var_dump('User Found');
                // Here we have a user but we need to check his password

            } else {
                // User not found
                $data['email_err'] = 'User Not Found';
                var_dump('User Not Found Redirecting to pages');
                // here you have to passe data Not Found
                // redirect('pages');
            }

            // Make sure errors are empty
            if (empty($data['email_err']) && empty($data['password_err'])) {
                // Validated
                // Check and set logged in user
                $loggedInUser = $this->adminModel->login($data['email'], $data['password']);

                if ($loggedInUser) {
                    // Create Session

                    $this->createUserSession($loggedInUser, "admin");
                } else {
                    $data['password_err'] = 'Password incorrect';
                    var_dump('Password incorrect');
                    // here you have to passe data Password incorrect
                    // redirect('pages');
                }
            } else {
                // Load view with errors
                // $this->view('admin/login', $data);
                var_dump('Email & Password  incorrect');
                // redirect('pages/');
                // Show Modal
            }
        } else {
            // Init data
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];

            // Load view
            $this->view('pages', $data);
        }
    }



    public function createUserSession($model, $user)
    {


        // echo '<pre>';
        // var_dump($user);
        // echo ' Here is An Admin';
        // echo '</pre>';
        // exit;
        $_SESSION[$user . '_id'] = $model->id;
        $_SESSION[$user . '_email'] = $model->email;
        $_SESSION[$user . '_name'] = $model->name;
        redirect("$user/dashboard");
    }
    public function logout($user)
    {

        // $checkUser = $this->userModel->checkUser($loggedInUser->id);

        unset($_SESSION[$user . '_id']);
        unset($_SESSION[$user . '_email']);
        unset($_SESSION[$user . '_name']);


        session_destroy();
        redirect('pages');
    }
}
