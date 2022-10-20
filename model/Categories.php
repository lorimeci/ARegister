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
}