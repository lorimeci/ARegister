<?php
class CategoriesModel
{
    public $db;

    public function insertCategory($categoryname, $image, $created)
    {
        $filePath = 'uploads/' . $image['name'];
        $sql = "INSERT INTO categories(name,image,created_at) VALUES('$categoryname','$filePath','$created');";
        $this->db->query($sql);

        return 1;
    }

    public function getAllCategories()
    {
        $sql = "SELECT * FROM categories";
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
        //$id=$_GET['updateid'];
        $filePath = 'uploads/' . $image['name'];
        //WHERE categories_id=$id
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
        //$start_from=$start_from($page-1)*3;
        $num_per_page = 3;
        $page = $_GET["page"];
        $start_from = ($page - 1) * 3;
        
        $sql = "SELECT * FROM categories limit $start_from, $num_per_page";
        $result = $this->db->query($sql);
        $num_per_page = 3;
        $total_records = $result->rowCount();
        $total_pages = ($total_records / $num_per_page);
        for($i=1;$i<=$total_pages;$i++){
         echo "<a href='?action=getCategories&page=".$i."'>".$i."</a>";
        }

 
    }
    public function created()
    {
        $created_at = new \DateTime("now");
        $this->db->$created_at;
    }
}
