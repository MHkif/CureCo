<?php

class Pages extends Controller
{
    private $dataModel;
    private $medicine;
    private $prodModel;
    public function __construct()
    {
        $this->dataModel = $this->model('DataModel');
        $this->medicine = $this->dataModel->getData('medicine');
        $this->prodModel = $this->model('ProductModel');
    }

    public function index()
    {
        $vitamines =   $this->dataModel->getDataWhere('medicine', 'Where category =1');
        $bain =   $this->dataModel->getDataWhere('medicine', 'Where category =2');
        $Pain = $this->dataModel->getDataWhere('medicine', 'Where category =3');
        $vitality =   $this->dataModel->getDataWhere('medicine', 'Where category =4');
        $minerals =   $this->dataModel->getDataWhere('medicine', 'Where category =5');
        $stress =    $this->dataModel->getDataWhere('medicine', 'Where category =6');






        $params = [
            'title' => "WeCare",
            'medicine' => $this->medicine,
            'vitamines' => $vitamines,
            'bain' => $bain,
            'pain' => $Pain,
            'vitality' => $vitality,
            'minerals' => $minerals,
            'stress' => $stress,
        ];

        $this->view('pages/index', $params);
    }

    public function medicines()
    {
        $vitamines =   $this->dataModel->getDataWhere('medicine', 'Where category =1');
        $bain =   $this->dataModel->getDataWhere('medicine', 'Where category =2');
        $Pain = $this->dataModel->getDataWhere('medicine', 'Where category =3');
        $vitality =   $this->dataModel->getDataWhere('medicine', 'Where category =4');
        $minerals =   $this->dataModel->getDataWhere('medicine', 'Where category =5');
        $stress =    $this->dataModel->getDataWhere('medicine', 'Where category =6');






        $params = [
            'title' => "WeCare",
            'medicine' => $this->medicine,
            'vitamines' => $vitamines,
            'bain' => $bain,
            'pain' => $Pain,
            'vitality' => $vitality,
            'minerals' => $minerals,
            'stress' => $stress,
        ];

        $this->view('pages/medicine', $params);
    }
}
