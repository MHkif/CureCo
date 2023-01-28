<?php

class Admin extends Controller
{

    private $adminModel;
    private $dataModel;
    private $medicine;
    private $prodModel;
    private $expired_Medicines;
    private $dispensers;
    private $available_medicines;
    private $medicineCount;
    private $dispenserCount;
    private $clientCount;
    private $availableCount;
    private $expiredCount;
    private $clients;
    private $categories;
    private $sortAvalAsc;
    private $sortAvalDesc;
    private $sortDateAsc;
    private $sortDateDesc;

    public function __construct()
    {
        // if (!isAdminLoggedIn()) {
        //     redirect('pages/');
        // }
        $this->adminModel = $this->model("AdminUser");
        $this->prodModel = $this->model("ProductModel");
        $this->dataModel = $this->model("DataModel");
        $this->medicine = $this->prodModel->getMedicines();
        $this->medicineCount = $this->prodModel->tableCount();
        $this->expiredCount = $this->prodModel->tableCountAvilable("expiredCount", "medicine", 'WHERE expired_date < now() ');
        $this->availableCount = $this->prodModel->tableCountAvilable("expiredCount", "medicine", 'WHERE expired_date > now() ');
        $this->expired_Medicines =  $this->prodModel->getMedicines(' AND medicine.expired_date < now()');
        $this->available_medicines =  $this->prodModel->getMedicines(' AND medicine.expired_date > now()');
        $this->dispenserCount = $this->prodModel->tableCount("dispenserCount", "dispenser");
        $this->dispensers = $this->dataModel->getData('dispenser');
        $this->clientCount = $this->prodModel->tableCount("clientCount", "client");
        $this->clients = $this->dataModel->getData('client');
        $this->categories = $this->dataModel->getData('category');
        $this->sortAvalAsc = $this->prodModel->getMedicines(' AND medicine.expired_date > now() ORDER BY Price ASC;');
        $this->sortAvalDesc = $this->prodModel->getMedicines(' AND medicine.expired_date > now() ORDER BY Price DESC;');
        $this->sortDateAsc = $this->prodModel->getMedicines(' AND medicine.expired_date > now() ORDER BY created_date ASC;');
        $this->sortDateDesc = $this->prodModel->getMedicines(' AND medicine.expired_date > now() ORDER BY created_date DESC;');
    }

    public function dashboard()
    {
        if (!isAdminLoggedIn()) {
            redirect('pages/');
        }
        $params = [

            'dispenserCount' => $this->dispenserCount,
            'medicineCount' => intval($this->medicineCount),
            'availableCount' => intval($this->availableCount),
            'expiredCount' => intval($this->expiredCount),
            'clientCount' => intval($this->clientCount),
            'medicines' => $this->medicine,
            'expired_medicines' => $this->expired_Medicines,
            'dispensers' => $this->dispensers,
            'available_medicines' => $this->available_medicines,
        ];

        $this->view('admin/dashboard', $params, "dashboardLayout");
    }

    public function auth()
    {

        $params = [
            'title' => SITENAME,
        ];
        $this->view('admin/auth', $params, "emptyLayout");
    }

    public function medicinePanel()
    {
        if (!isAdminLoggedIn()) {
            redirect('pages/');
        }

        $params = [
            'categories' => $this->categories,
            'medicineCount' => intval($this->medicineCount),
            'medicines' => $this->medicine,
        ];

        $this->view('admin/medicinePanel', $params, "dashboardLayout");
    }

    public function dispenserPanel()
    {
        if (!isAdminLoggedIn()) {
            redirect('pages/');
        }


        $params = [
            'dispenserCount' => intval($this->dispenserCount),
            'dispensers' => $this->dispensers,
        ];

        $this->view('admin/dispenserPanel', $params, "dashboardLayout");
    }

    public function customerPanel()
    {
        if (!isAdminLoggedIn()) {
            redirect('pages/');
        }


        $params = [
            'clientCount' => intval($this->clientCount),
            'clients' => $this->clients,
        ];

        $this->view('admin/customerPanel', $params, "dashboardLayout");
    }

    public function editPanel($data)
    {
        if (!isAdminLoggedIn()) {
            redirect('pages/');
        }

        $id = $data[0];
        $prod =  $this->model("ProductModel")->getMedicineById($id);


        $params = [
            'categories' => $this->categories,
            'prod' => $prod,
        ];



        $this->view('admin/editPanel', $params, 'formLayout');
    }

    public function searchMedicine()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $searched = trim($_POST['searched']);

            $medicines = $this->prodModel->search($searched);
            if ($medicines) {


                $params = [
                    'medicines' => $medicines,
                    'medicineCount' => intval($this->medicineCount),

                ];
                $this->view('admin/medicinePanel', $params, "dashboardLayout");
            } else {

                $params = [
                    'medicines' => $this->medicine,
                    'medicineCount' => intval($this->medicineCount),


                ];
                $this->view('admin/medicinePanel', $params, "dashboardLayout");
            }
        }
    }

    public function sortMedicine($data)
    {

        $num = $data[0];
        if ($num == 0) {
            $medicines = $this->prodModel->getMedicines(' ORDER BY Price ASC;');
            if ($medicines) {

                $params = [
                    'medicines' => $medicines,
                    'dispensers' => $this->dispensers,
                    'availableCount' => intval($this->availableCount),
                    'expiredCount' => intval($this->expiredCount),
                    'medicineCount' => intval($this->medicineCount),


                ];

                $this->view('admin/medicinePanel', $params, "dashboardLayout");
                die('here4');
            } else {

                $params = [
                    'medicines' => $this->medicine,
                    'medicineCount' => intval($this->medicineCount),
                    'availableCount' => intval($this->availableCount),
                    'dispensers' => $this->dispensers,
                    'expiredCount' => intval($this->expiredCount),

                ];
                $this->view('admin/medicinePanel', $params, "dashboardLayout");
            }
        } elseif ($num == 1) {
            $medicines = $this->prodModel->getMedicines(' ORDER BY Price DESC;');
            if ($medicines) {


                $params = [
                    'medicines' => $medicines,
                    'dispensers' => $this->dispensers,
                    'availableCount' => intval($this->availableCount),
                    'expiredCount' => intval($this->expiredCount),
                    'medicineCount' => intval($this->medicineCount),

                ];
                $this->view('admin/medicinePanel', $params, "dashboardLayout");
            } else {

                $params = [
                    'medicines' => $this->medicine,
                    'dispensers' => $this->dispensers,
                    'availableCount' => intval($this->availableCount),
                    'expiredCount' => intval($this->expiredCount),
                    'medicineCount' => intval($this->medicineCount),

                ];
                $this->view('admin/medicinePanel', $params, "dashboardLayout");
            }
        } elseif ($num == 2) {
            $medicines = $this->prodModel->getMedicines(' ORDER BY created_date ASC;');
            if ($medicines) {


                $params = [
                    'medicines' => $medicines,
                    'dispensers' => $this->dispensers,
                    'availableCount' => intval($this->availableCount),
                    'expiredCount' => intval($this->expiredCount),
                    'medicineCount' => intval($this->medicineCount),
                ];
                $this->view('admin/medicinePanel', $params, "dashboardLayout");
            } else {

                $params = [
                    'medicines' => $this->medicine,
                    'dispensers' => $this->dispensers,
                    'availableCount' => intval($this->availableCount),
                    'expiredCount' => intval($this->expiredCount),
                    'medicineCount' => intval($this->medicineCount),

                ];
                $this->view('admin/medicinePanel', $params, "dashboardLayout");
            }
        } elseif ($num == 3) {
            $medicines = $this->prodModel->getMedicines(' ORDER BY created_date DESC;');
            if ($medicines) {


                $params = [
                    'medicines' => $medicines,
                    'dispensers' => $this->dispensers,
                    'availableCount' => intval($this->availableCount),
                    'expiredCount' => intval($this->expiredCount),
                    'medicineCount' => intval($this->medicineCount),

                ];
                $this->view('admin/medicinePanel', $params, "dashboardLayout");
            } else {

                $params = [
                    'medicines' => $this->medicine,
                    'dispensers' => $this->dispensers,
                    'availableCount' => intval($this->availableCount),
                    'expiredCount' => intval($this->expiredCount),
                    'medicineCount' => intval($this->medicineCount),

                ];
                $this->view('admin/medicinePanel', $params, "dashboardLayout");
            }
        } else {
            die('Not Found');
        }
    }

    public function sortDarshboard($data)
    {
        $num = $data[0];
        if ($num == 0) {
            if ($this->sortAvalAsc) {


                $params = [
                    'expired_medicines' => $this->expired_Medicines,
                    'medicines' => $this->medicine,
                    'dispensers' => $this->dispensers,
                    'available_medicines' => $this->sortAvalAsc,
                    'availableCount' => intval($this->availableCount),
                    'expiredCount' => intval($this->expiredCount),
                    'medicineCount' => intval($this->medicineCount),
                    'dispenserCount' => intval($this->dispenserCount),
                    'clientCount' => intval($this->clientCount),
                ];
                $this->view('admin/dashboard', $params, "dashboardLayout");
            } else {

                $params = [



                    'expired_medicines' => $this->expired_Medicines,
                    'medicines' => $this->medicine,
                    'dispensers' => $this->dispensers,
                    'available_medicines' => $this->available_medicines,
                    'availableCount' => intval($this->availableCount),
                    'expiredCount' => intval($this->expiredCount),
                    'medicineCount' => intval($this->medicineCount),
                    'dispenserCount' => intval($this->dispenserCount),
                    'clientCount' => intval($this->clientCount),

                ];
                $this->view('admin/dashboard', $params, "dashboardLayout");
            }
        } elseif ($num == 1) {
            if ($this->sortAvalDesc) {


                $params = [
                    'expired_medicines' => $this->expired_Medicines,
                    'medicines' => $this->medicine,
                    'dispensers' => $this->dispensers,
                    'available_medicines' => $this->sortAvalDesc,
                    'availableCount' => intval($this->availableCount),
                    'expiredCount' => intval($this->expiredCount),
                    'medicineCount' => intval($this->medicineCount),
                    'dispenserCount' => intval($this->dispenserCount),
                    'clientCount' => intval($this->clientCount),

                ];
                $this->view('admin/dashboard', $params, "dashboardLayout");
            } else {

                $params = [
                    'expired_medicines' => $this->expired_Medicines,
                    'medicines' => $this->medicine,
                    'dispensers' => $this->dispensers,
                    'available_medicines' => $this->available_medicines,
                    'availableCount' => intval($this->availableCount),
                    'expiredCount' => intval($this->expiredCount),
                    'medicineCount' => intval($this->medicineCount),
                    'dispenserCount' => intval($this->dispenserCount),
                    'clientCount' => intval($this->clientCount),

                ];
                $this->view('admin/dashboard', $params, "dashboardLayout");
            }
        } elseif ($num == 2) {
            if ($this->sortDateAsc) {


                $params = [
                    'expired_medicines' => $this->expired_Medicines,
                    'medicines' => $this->medicine,
                    'dispensers' => $this->dispensers,
                    'available_medicines' => $this->sortDateAsc,
                    'availableCount' => intval($this->availableCount),
                    'expiredCount' => intval($this->expiredCount),
                    'medicineCount' => intval($this->medicineCount),
                    'dispenserCount' => intval($this->dispenserCount),
                    'clientCount' => intval($this->clientCount),

                ];
                $this->view('admin/dashboard', $params, "dashboardLayout");
            } else {

                $params = [
                    'expired_medicines' => $this->expired_Medicines,
                    'medicines' => $this->medicine,
                    'dispensers' => $this->dispensers,
                    'available_medicines' => $this->available_medicines,
                    'availableCount' => intval($this->availableCount),
                    'expiredCount' => intval($this->expiredCount),
                    'medicineCount' => intval($this->medicineCount),
                    'dispenserCount' => intval($this->dispenserCount),
                    'clientCount' => intval($this->clientCount),

                ];
                $this->view('admin/dashboard', $params, "dashboardLayout");
            }
        } elseif ($num == 3) {
            if ($this->sortDateDesc) {


                $params = [
                    'expired_medicines' => $this->expired_Medicines,
                    'medicines' => $this->medicine,
                    'dispensers' => $this->dispensers,
                    'available_medicines' => $this->sortDateDesc,
                    'availableCount' => intval($this->availableCount),
                    'expiredCount' => intval($this->expiredCount),
                    'medicineCount' => intval($this->medicineCount),
                    'dispenserCount' => intval($this->dispenserCount),
                    'clientCount' => intval($this->clientCount),

                ];
                $this->view('admin/dashboard', $params, "dashboardLayout");
            } else {

                $params = [
                    'expired_medicines' => $this->expired_Medicines,
                    'medicines' => $this->medicine,
                    'dispensers' => $this->dispensers,
                    'available_medicines' => $this->available_medicines,
                    'availableCount' => intval($this->availableCount),
                    'expiredCount' => intval($this->expiredCount),
                    'medicineCount' => intval($this->medicineCount),
                    'dispenserCount' => intval($this->dispenserCount),
                    'clientCount' => intval($this->clientCount),

                ];
                $this->view('admin/dashboard', $params, "dashboardLayout");
            }
        } else {
            die('Not Found');
        }
    }

    public function searchDashboard()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $searched = trim($_POST['searched']);

            $medicines = $this->prodModel->search($searched);
            if ($medicines) {


                $params = [

                    'medicines' => $medicines,
                    'dispenserCount' => $this->dispenserCount,
                    'medicineCount' => intval($this->medicineCount),
                    'availableCount' => intval($this->availableCount),
                    'expiredCount' => intval($this->expiredCount),
                    'clientCount' => intval($this->clientCount),
                    'expired_medicines' => $medicines,
                    'dispensers' => $this->dispensers,
                    'available_medicines' => $medicines,
                ];
                $this->view('admin/dashboard', $params, "dashboardLayout");
            } else {

                $params = [
                    'medicines' => $this->medicine,
                    'dispenserCount' => $this->dispenserCount,
                    'medicineCount' => intval($this->medicineCount),
                    'availableCount' => intval($this->availableCount),
                    'expiredCount' => intval($this->expiredCount),
                    'clientCount' => intval($this->clientCount),
                    'expired_medicines' => $this->expired_Medicines,
                    'dispensers' => $this->dispensers,
                    'available_medicines' => $this->available_medicines,

                ];
                $this->view('admin/dashboard', $params, "dashboardLayout");
            }
        }
    }


    public function update($data)
    {
        // die(print_r($_POST['category']));
        $id = $data[0];
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            $params = [
                'name' => trim($_POST['name']),
                'category' => trim($_POST['category']),
                'mein' => trim($_POST['mein']),
                'price' => trim($_POST['price']),
                'image' => $_FILES['image']['name'],

            ];


            if (empty($params['image'])) {
                if ($this->prodModel->editWithoutImage($id, $params)) {
                    redirect('admin/medicinePanel');
                } else {
                    die('Somthing wrong');
                }
            } else {
                if ($this->prodModel->editWithImage($id, $params)) {
                    move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/medicine' . $params['image']);
                    redirect('admin/medicinePanel');
                } else {
                    die('Somthing went wrong');
                }
            }
        }
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

    public function addForm()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            for ($i = 1; $i <= (int) $_POST['total']; $i++) {
                $filename = $_FILES['image' . $i]['name'];
                $imageEx = explode('.', $filename);
                $imageEx = strtolower(end($imageEx));
                $newImageName = uniqid();
                $newImageName .= '.' . $imageEx;
                move_uploaded_file($_FILES['image' . $i]['tmp_name'], './uploads/medicine/' . $filename);

                $data = array(
                    'name' => $_POST['name' . $i],
                    'category' => $_POST['category' . $i],
                    'contenance' => $_POST['capacity' . $i],
                    'image' => $filename,
                    'price' => $_POST['price' . $i],
                    'expired' =>  $_POST['expired' . $i]
                );

                if ($this->prodModel->add($data)) {
                    redirect('admin/medicinePanel');
                } else {
                    die('Here We Go Again');
                }
            }
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



    public function delete($data)
    {
        $id = $data[0];

        if (!empty($id)) {
            // die('INSIDE :' . $id);
            if ($this->prodModel->deleteMedicine($id)) {
                redirect('admin/medicinePanel');
            } else {
                redirect('admin/medicinePanel');
            }
        } else {
            die("error : EMPTY ID");
        }
    }
}
