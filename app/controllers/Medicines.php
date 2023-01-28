<?php

class Medicines extends Controller
{

    private $dataModel;
    private $medicine;
    private $prodModel;
    private $expired_Medicines;


    public function __construct()
    {
        $this->dataModel = $this->model('DataModel');
        $this->prodModel = $this->model('ProductModel');
        $this->medicine = $this->prodModel->getMedicines();
        $this->expired_Medicines =  $this->prodModel->getMedicines(' AND medicine.expired_date < now()');
    }

    public function searchMedicine()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $searched = trim($_POST['searched']);

            $medicines = $this->prodModel->search($searched);
            if ($medicines) {


                $params = [
                    'medicines' => $this->medicine,
                    'expired_medicines' => $medicines,
                ];
                $this->view('admin/medicinePanel', $params, "dashboardLayout");
            } else {

                $params = [
                    'medicines' => $this->medicine,
                    'expired_medicines' => $medicines,

                ];
                $this->view('admin/medicinePanel', $params, "dashboardLayout");
            }
        }
    }

    public function sortPrice($data)
    {
        $num = $data[0];

        if ($num == 0) {
            $medicines = $this->prodModel->getMedicines(' ORDER BY Price ASC;');
            if ($medicines) {
                $params = [
                    'expired_medicines' => $medicines,
                    'medicines' => $this->medicine,
                ];
                die('HERE');
                
                $this->view('admin/medicinePanel', $params, "dashboardLayout");
              
            } else {

                $params = [
                    'expired_medicines' => $this->expired_Medicines,
                    'medicines' => $this->medicine,

                ];
                $this->view('admin/medicinePanel', $params, "dashboardLayout");
            }
        } elseif ($num == 1) {
            $medicines = $this->prodModel->getMedicines(' ORDER BY Price DESC;');
            if ($medicines) {


                $params = [
                    'expired_medicines' => $medicines,
                    'medicines' => $this->medicine,

                ];
                $this->view('admin/medicinePanel', $params, "dashboardLayout");
            } else {

                $params = [
                    'medicines' => $this->medicine,
                    'expired_medicines' => $this->expired_Medicines,

                ];
                $this->view('admin/medicinePanel', $params, "dashboardLayout");
            }
        } else {
            die('Not Found');
        }
    }
}
