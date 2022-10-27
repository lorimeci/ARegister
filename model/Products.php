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
    public function editProducts($id)
    {
        $id = $_GET['updateid'];

        $sql = "SELECT * FROM products WHERE id=$id;";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll();
    }

    public function updateProducts($name, $price, $image, $category_id, $created_at)
    {
        $id = $_POST['cat_id'];
        $filePath = 'uploads/' . $image['name'];
        $sql = "UPDATE products SET  name= '$name',price= '$price', image='$filePath',category_id= '$category_id', created_at='$created_at' WHERE id='$id';";
        $this->db->query($sql);
        return 1;
    }
}
