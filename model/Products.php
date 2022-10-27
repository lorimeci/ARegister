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
    public function Pagination()
    {
        $page = $_GET['page'];
        $num_per_page = 1;
        $start_from = ($page - 1) *$num_per_page;
        //limit $start_from, $num_per_page
        $sql = "SELECT * FROM products LIMIT " .$start_from. ',' .$num_per_page;
        //VAR_DUMP($sql);
        $result = $this->db->query($sql);
        $num_per_page = 2;
        $total_records = $result->rowCount();
        $total_pages = ceil($total_records / $num_per_page);
        var_Dump($total_pages);

        for($i = 1 ;$i <= $total_pages ; $i++)
        {
         echo '<button class="btn btn-dark mx-1 mt-7"><a href="?action=getProducts&page='.$i.'" class="text-light"> '.$i.'</a></button>';
        }

 
    }
}
