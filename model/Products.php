<?php
class ProductsModel
{
    public $db;

    public function insertProduct($name, $price, $image, $category_id)
    {
        $filePath = 'uploads/' . $image['name'];
        $created_at = date("Y-m-d H:i:s");
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

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM products WHERE id='$id'";
        $this->db->query($sql);
    }

    public function Pagination()
    {
        $page = $_GET['page'];
        $num_per_page = 2;
        $start_from = ($page - 1) * $num_per_page;
        $sql = "SELECT * FROM products  ";
        $result = $this->db->query($sql);
        $total_records = $result->rowCount();
        $total_pages = ceil($total_records / $num_per_page);
        echo "<br>";
        for ($i = 1; $i <= $total_pages; $i++) {
            echo '<button class="btn btn-dark mx-1 mt-3"><a href="?action=getProducts&page=' . $i . '" class="text-light"> ' . $i . '</a></button>';
        }
        echo "<br>";
    }

    public function displayPagination()
    {
        $page = $_GET['page'];
        $num_per_page = 2;
        $start_from = ($page - 1) * $num_per_page;
        $sql = "SELECT * FROM products LIMIT $start_from,$num_per_page";
        $result = $this->db->query($sql);
        return $result->fetchAll();
    }

    public function created()
    {
        $created_at = new \DateTime("now");
        $this->db->$created_at;
    }
}
