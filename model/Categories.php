<?php
class CategoriesModel{
    public $db;
    
    public function insertCategory($categoryname,$image,$created){
        $sql="INSERT INTO categories(name,image,created_at) VALUES('$categoryname','$image','$created');";
        $this->db->query($sql);
        
        return 1;
    
    }
    

}