<?php
class CategoriesModel
{
    public $db;
    
    public function insertCategory($categoryname,$image,$created)
    { 
        $filePath = 'uploads/' . $image['name'];
        $sql="INSERT INTO categories(name,image,created_at) VALUES('$categoryname','$filePath','$created');";
        $this->db->query($sql);
        
        return 1;
    }

    public function getAllCategories()
    {
        $sql = "SELECT * FROM categories";
        $row = $this->db->query($sql);

        return $row->fetchAll();
    }

    public function updateCategories($id)
    {
        $id = $_GET['updateid'];
      
        $sql = "SELECT * FROM categories WHERE categories_id=$id;";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll(); 
        
    }

    public function updatestoreCategory($categoryname, $image, $created)
    {
        $id= $_POST['cat_id'];
        //$id=$_GET['updateid'];
        $filePath = 'uploads/' . $image['name'];
        //WHERE categories_id=$id
       $sql="UPDATE categories SET  name= '$categoryname', image='$filePath', created_at='$created' WHERE categories_id='$id';";
       $this->db->query($sql); 
       return 1; 
      
    }

    public function deleteCategories($categories_id)
    {
        $sql = "DELETE FROM categories WHERE categories_id='$categories_id'";
        $this->db->query($sql);
    
    }
    
    public function Pagination()
    {

        $sql = "SELECT (*) FROM categories";
        $result = $this->db->query($sql);
        $num_per_page = 05;
        $total_records = $result->fetchColumn();
        echo $total_records; 
        $total_pages = ($total_records/$num_per_page);
        echo $total_pages;

/*          if ($result->fetchColumn() > 0) {
            echo $result;
         } */
    }
    public function created()
    {
      $created_at = new \DateTime("now");
      $this->db-> $created_at;
    }
}