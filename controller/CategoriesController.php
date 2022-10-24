<?php
class CategoriesController{
    public $model;
    
    public function categoriesAction()
    { 
        $message='';
        $datas = $this->model->getAllCategories();
        if(isset($_POST['submit'])){
            $categoryname = $_POST['c_name'];
            $image = $_FILES['imageupload'];
            $created = $_POST['c_created'];
            $this->model->insertCategory($categoryname,$image,$created);
             //var_dump("works"); //you got it before . it should enter here. the problem was that you not submit the form.
             $target_dir = "uploads/";
             $target_file = $target_dir . basename($image["name"]);
             //var_dump('target file: ' . $target_file);
            if(move_uploaded_file($image["tmp_name"], 'C:\xampp\htdocs\ARegister\ARegister\uploads/'.basename($image["name"])))
            {
                $message="The file " .htmlspecialchars(basename($image["name"])). " has been uploaded";
            }else{

               $message="The file is not uploaded";
            }

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

    public function updateCategories()
    {
        echo "Jemi te update categories ";
        var_dump($_GET);
        if(($_GET['action'] == 'updateCategories')){
            var_dump($_GET);

         $datas = $this->model->getAllCategories();
         return require_once VIEW_PATH .'tablecategories.php';
        }   
    }

    public function deleteCategories()
    {
       
            if(($_GET['action'] == 'deleteCategories')){
                //var_dump($_GET);
                $categories_id=$_GET['deleteid'];
                //var_dump($categories_id);
                //var_dump("ketu do shfaqet categories_id:" .$categories_id."</br>" );
                $this->model->deleteCategories($categories_id);
               
            }
            $datas = $this->model->getAllCategories();
            return require_once VIEW_PATH .'tablecategories.php';
        
       
    }

} 