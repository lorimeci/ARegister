<?php
class CategoriesController{
    public $model;
    
    public function categoriesAction()
    { 
        $datas = $this->model->getAllCategories();
        if(isset($_POST['submit'])){
            $categoryname = $_POST['c_name'];
            $image = $_POST['c_image'];
            $created = $_POST['c_created'];
            $this->model->insertCategory($categoryname,$image,$created);
             //var_dump("works"); //you got it before . it should enter here. the problem was that you not submit the form.
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