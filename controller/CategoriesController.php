<?php
class CategoriesController{
    public $model;
    
    public function categoriesAction() {
        if(isset($_POST['submit'])){
            $categoryname=$_POST['c_name'];
            $image=$_POST['c_image'];
            $created=$_POST['c_created'];
            $this->model->insertCategory($categoryname,$image,$created);
         return require_once VIEW_PATH .'tablecategories.php';
        }
       return require_once VIEW_PATH .'tablecategories.php';
        exit;
    }

} 