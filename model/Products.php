<?php
class ProductsModel
{
    public $db;
    
    public function insertProduct($name,$price,$image,$category_id,$created_at)
    { 
     
        $sql="INSERT INTO products(name,price,image,category_id,created_at) VALUES('$name','$price','$image','$category_id','$created_at');";
        
        $this->db->query($sql);
        
        return 1;
    }

    public function getAllProducts()
    {
        
        $sql = "SELECT * FROM products";
        $row = $this->db->query($sql);

        return $row->fetchAll();
    }
}