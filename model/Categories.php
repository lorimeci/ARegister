<?php
class CategoriesModel
{
    public $db;

    public function insertCategory($categoryname, $image)
    {
        $filePath = 'uploads/' . $image['name'];
        $created_at = date("Y-m-d H:i:s");
        $sql = "INSERT INTO categories(name,image,created_at) VALUES('$categoryname','$filePath', '$created_at');";
        $this->db->query($sql);

        return 1;
    }

    public function getAllCategories()
    {
        $sql = "SELECT * FROM categories ";
        $row = $this->db->query($sql);
        return $row->fetchAll();
    }

    public function editCategories($id)
    {
        $id = $_GET['updateid'];
        $sql = "SELECT * FROM categories WHERE categories_id=$id;";
        $stmt = $this->db->query($sql);
        return $stmt->fetchAll();
    }

    public function updatestoreCategory($categoryname, $image, $created)
    {
        $id = $_POST['cat_id'];
        $filePath = 'uploads/' . $image['name'];
        $sql = "UPDATE categories SET  name= '$categoryname', image='$filePath', created_at='$created' WHERE categories_id='$id';";
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
        $page = $_GET['page'];
        $num_per_page = 2;
        $start_from = ($page - 1) * $num_per_page;
        $sql = "SELECT * FROM categories  ";
        $result = $this->db->query($sql);
        $total_records = $result->rowCount();
        $total_pages = ceil($total_records / $num_per_page);
        echo "<br>";
        for ($i = 1; $i <= $total_pages; $i++) {
            echo '<button class="btn btn-dark mx-1 mt-3"><a href="?action=getCategories&page=' . $i . '" class="text-light"> ' . $i . '</a></button>';
        }
        echo "<br>";
    }

    public function displayPagination()
    {

        $page = $_GET['page'];
        $num_per_page = 2;
        $start_from = ($page - 1) * $num_per_page;
        $sql = "SELECT * FROM categories LIMIT $start_from,$num_per_page";
        $result = $this->db->query($sql);
        return $result->fetchAll();
    }
 
}
