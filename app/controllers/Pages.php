<?php

class Pages extends Controller
{
    private $dataModel;
    private $medicine;

    public function __construct()
    {
        $this->dataModel = $this->model('DataModel');
        $this->medicine = $this->dataModel->getData('medicine');
    }

    public function index()
    {
        $params = [
            'title' => "WeCare",
            'medicine' => $this->medicine,
        ];

        $this->view('pages/index', $params);
    }
}
