<?php
class ProductsController
{
    public $model;

    public function productsAction()
    {
        $message = '';
        if (isset($_POST['submit'])) {
            $datas = $this->model->getAllProducts();
            $name = $_POST['p_name'];
            $price = $_POST['p_price'];
            $image = $_FILES['imageupload'];
            $category_id = $_POST['c_id'];
            $created_at = $_POST['p_created'];
            $this->model->insertProduct($name, $price, $image, $category_id, $created_at);
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($image["name"]);
            if (move_uploaded_file($image["tmp_name"], 'C:\xampp\htdocs\ARegister\ARegister\uploads/' . basename($image["name"]))) {
                $message = "The file " . htmlspecialchars(basename($image["name"])) . " has been uploaded";
            } else {
                $message = "The file is not uploaded";
            }

            return require_once VIEW_PATH . 'products.html';
        }

        return require_once VIEW_PATH . 'products.html';
        exit;
    }

    public function getAllProducts()
    {
        $datas = $this->model->getAllProducts();
        return require_once VIEW_PATH . 'products.html';
    }

    public function deleteProduct()
    {
        if (($_GET['action'] == 'deleteProduct')) {
            
            $id = $_GET['deleteid'];

            $this->model->deleteProduct($id);
        }
        $datas = $this->model->getAllProducts();
        return require_once VIEW_PATH . 'products.html';
    }
}
