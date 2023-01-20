<?php

abstract class Controller
{
    // abstract public function modelAbstract($model);
    public function model($model)
    {

        require_once "../app/models/$model.php";
        return new $model();
    }

    public function view($view, $params = [], $layout = "main")
    {
        if (file_exists("../app/views/$view.php")) {
            // require_once '../app/views/' . $view . '.php';
            $layoutContent = $this->renderLayout($layout);
            $viewContent = $this->renderViewOnly($view, $params);
            echo str_replace('{{content}}', $viewContent, $layoutContent);
        } else {
            // View does not exist
            // desplay 404 Page
            die('View does not exist');
        }
    }



    public function renderView($view, $params = [], $layout = "main")
    {
        $layoutContent = $this->renderLayout($layout);
        $viewContent = $this->renderViewOnly($view, $params);
        return str_replace('{{content}}', $viewContent, $layoutContent);
    }


    public function renderViewOnly($view, $params = [])
    {
        extract($params);
        ob_start();
        include_once  "../app/views/$view.php";
        return ob_get_clean();
    }


    protected function renderLayout($layout = "main")
    {
        
        // if (!isAdminLoggedIn()) {
        //     $layout = "dashboardLayout";
        // }
        
        ob_start();
        include_once "../app/views/layouts/$layout.php";
        return ob_get_clean();
    }
}
