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
        $page = $_GET['page'];
        $num_per_page = 2;
        $start_from = ($page - 1) *$num_per_page;
        var_Dump("start from ".$start_from."<br>");
        $sql = "SELECT * FROM categories  ";
        //VAR_DUMP($sql);
        $result = $this->db->query($sql);
        $total_records = $result->rowCount();
        var_Dump("total row records  from db ".$total_records."<br>");
        $total_pages = ceil($total_records / $num_per_page);
        var_Dump("total pages ,number of 1 2 3 is -> ".$total_pages."<br>");
        echo "<br>";
        for($i = 1 ;$i <= $total_pages ; $i++)
        {
         echo '<button class="btn btn-dark mx-1 mt-3"><a href="?action=getCategories&page='.$i.'" class="text-light"> '.$i.'</a></button>';
        }
        echo "<br>";
       

       
    }

    public function displayPagination(){

    ECHO "<BR>"."JEMI TE DISPLAY PAGINATION"."<BR>";
      $page = $_GET['page'];
      var_dump("var dump page ".$page."<br>");
     $sql = "SELECT * FROM categories LIMIT 0,2" ;
        $result = $this->db->query($sql);
        var_dump($result);
        return $result->fetchAll(); 
        
          
    }

    public function created()
    {
        $created_at = new \DateTime("now");
        $this->db->$created_at;
    }
}
