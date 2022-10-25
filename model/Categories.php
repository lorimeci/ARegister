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
        $id=$_GET['updateid'];
      
        $sql="SELECT * FROM categories WHERE categories_id=$id;";
        $stmt = $this->db->query($sql);
        $data=[':id'=>$id];
        return $stmt->fetchAll(); 
        
       
    
    }
    public function updatestoreCategory($categoryname,$image,$created){
        $id=$_GET['updateid'];
        $filePath = 'uploads/' . $image['name'];
       $sql="UPDATE categories SET categories_id='' name='$categoryname',image='$filePath',created_at='$created' WHERE categories_id=$id;";
       $this->db->query($sql); 
        return 1; 
    }

    public function deleteCategories($categories_id)
    {
        $sql="DELETE FROM categories WHERE categories_id='$categories_id'";
        $this->db->query($sql);
    
    }
    
    public function Pagination()
    {
        $sql = "SELECT (*) FROM categories";
        $result = $this->db->query($sql);

         if ($result->fetchColumn() > 0) {
            echo $result;
         }
    }
}