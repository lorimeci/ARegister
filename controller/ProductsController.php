<?php
class ProductsController
{
    public $model;

    public function productsAction()
    {
        $message = '';
        $datas = $this->model->getAllProducts();
        if (isset($_POST['submit'])) {
            $name = $_POST['p_name'];
            $price = $_POST['p_price'];
            $image = $_FILES['imageupload'];
            $category_id = $_POST['c_id'];
            $this->model->insertProduct($name, $price, $image, $category_id);
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($image["name"]);
            if (move_uploaded_file($image["tmp_name"], 'C:\xampp\htdocs\ARegister\ARegister\uploads/' . basename($image["name"]))) {
                $message = "The file " . htmlspecialchars(basename($image["name"])) . " has been uploaded";
            } else {
                $message = "The file is not uploaded";
            }
            return require_once VIEW_PATH . 'products.php';
        }
        return require_once VIEW_PATH . 'products.php';
        exit;
    }

    public function getAllProducts()
    {
        $datas = $this->model->getAllProducts();
        return require_once VIEW_PATH . 'products.php';
    }

    public function editProducts()
    {
        $id = $_GET['updateid'];
        return require_once VIEW_PATH . 'updateproducts.php';
    }

    public function updateProducts()
    {
        if (($_GET['action'] == 'storeProducts') && isset($_POST['submit'])) {
            $name = $_POST['p_name'];
            $price = $_POST['p_price'];
            $image = $_FILES['imageupload'];
            $category_id = $_POST['c_id'];
            $created_at = $_POST['p_created'];
            $this->model->updateProducts($name, $price, $image, $category_id, $created_at);
        }
        $datas = $this->model->getAllProducts();
        return require_once VIEW_PATH . 'products.php';
    }

    public function deleteProduct()
    {
        if (($_GET['action'] == 'deleteProduct')) {
            $id = $_GET['deleteid'];
            $this->model->deleteProduct($id);
        }
        $datas = $this->model->getAllProducts();
        return require_once VIEW_PATH . 'products.php';
    }
    public function Pagination()
    {
        if (($_GET['action'] == 'getProducts') && isset($_GET['page'])) {
            $page = $_GET['page'];
            $this->model->Pagination();
        } else {
            $page = 1;
        }
        $datas = $this->model->displayPagination();
        return require_once VIEW_PATH . 'products.php';
    }

    public function created()
    {
        $created_at = new \DateTime("now");
        $this->model->created();
    }
}
