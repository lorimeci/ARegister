<?php
class CategoriesController{
    public $model;
    
    public function categoriesAction()
    { 
        if(isset($_POST['submit'])){
            $datas = $this->model->getAllCategories();
            var_dump($datas);
            $categoryname = $_POST['c_name'];
            $image = $_POST['c_image'];
            $created = $_POST['c_created'];
            $this->model->insertCategory($categoryname,$image,$created);
             //var_dump("works");
         return require_once VIEW_PATH .'tablecategories.php';
        }

        return require_once VIEW_PATH .'tablecategories.php';
        exit;
    }

    public function getAllCategories()
    {

        $datas = $this->model->getAllCategories();
        return require_once VIEW_PATH .'tablecategories.php';
    }

} 