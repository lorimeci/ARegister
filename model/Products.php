<?php
class ProductsModel
{
    public $db;

    public function insertProduct($name, $price, $image, $category_id, $created_at)
    {
        $filePath = 'uploads/' . $image['name'];
        $sql = "INSERT INTO products(name,price,image,category_id,created_at) VALUES('$name','$price','$filePath','$category_id','$created_at');";

        $this->db->query($sql);

        return 1;
    }

    public function getAllProducts()
    {

        $sql = "SELECT * FROM products";
        $row = $this->db->query($sql);

        return $row->fetchAll();
    }
    public function deleteProduct($id)
    {
        $sql = "DELETE FROM products WHERE id='$id'";
        $this->db->query($sql);
    }
}
