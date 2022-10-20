<?php
class ProductsController{
    public $model;
    
    public function productsAction()
    { 
        if(isset($_POST['submit'])){
            $datas = $this->model->getAllProducts();
            //var_dump($datas);
            $name = $_POST['p_name'];
            $price = $_POST['p_price'];
            $image = $_POST['p_image'];
            $category_id=$_POST['c_id'];
            $created_at = $_POST['p_created'];
            $this->model->insertProduct($name,$price,$image,$category_id,$created_at);
             //var_dump("works");
         return require_once VIEW_PATH .'products.html';
        }

        return require_once VIEW_PATH .'products.html';
        exit;
    }

    public function getAllCategories()
    {
        $datas = $this->model->getAllProducts();
        return require_once VIEW_PATH .'products.html';
    }

} 