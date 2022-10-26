<?php
class CategoriesController
{
    public $model;

    public function categoriesAction()
    {
        $message = '';
        $datas = $this->model->getAllCategories();
        if (isset($_POST['submit'])) {
            $categoryname = $_POST['c_name'];
            $image = $_FILES['imageupload'];
            $created = $this->model->created();
            $this->model->insertCategory($categoryname, $image, $created);
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($image["name"]);
            if (move_uploaded_file($image["tmp_name"], 'C:\xampp\htdocs\ARegister\ARegister\uploads/' . basename($image["name"]))) {
                $message = "The file " . htmlspecialchars(basename($image["name"])) . " has been uploaded";
            } else {

                $message = "The file is not uploaded";
            }

            return require_once VIEW_PATH . 'tablecategories.php';
        }

        return require_once VIEW_PATH . 'tablecategories.php';
        exit;
    }

    public function getAllCategories()
    {

        $datas = $this->model->getAllCategories();
        return require_once VIEW_PATH . 'tablecategories.php';
    }

    public function updateCategories()
    {
        $id = $_GET['updateid'];
        return require_once VIEW_PATH . 'updatecategories.php';
    }

    public function updatestoreCategory()
    {
        if (($_GET['action'] == 'storeCategories') && isset($_POST['submit'])) {
            $categoryname = $_POST['c_name'];
            $image = $_FILES['imageupload'];
            $created = $_POST['c_created'];
            $this->model->updatestoreCategory($categoryname, $image, $created);
        }
        $datas = $this->model->getAllCategories();
        return require_once VIEW_PATH . 'tablecategories.php';
    }

    public function deleteCategories()
    {
        if (($_GET['action'] == 'deleteCategories')) {
            $categories_id = $_GET['deleteid'];
            $this->model->deleteCategories($categories_id);
        }
        $datas = $this->model->getAllCategories();
        return require_once VIEW_PATH . 'tablecategories.php';
    }
}
