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
    public function updateCategories($categoryname,$image,$created)
    {
        $id=$_GET['updateid'];
        $query="SELECT * FROM categories WHERE categories_id=$id ;";
        $row = $this->db->query($query);
        return $row->fetchAll();

        $filePath = 'uploads/' . $image['name'];
        $sql="UPDATE categories(categories_id,name,image,created_at) SET categories_id=$id,name='$categoryname',image='$filePath',created_at='$created' WHERE categories_id=$id;";
        $result=$this->db->query($sql);
        if($result)
        {
            echo "Updated successfuly";
        }else{

            die();
        }
        
        return 1;

    }
    public function deleteCategories($categories_id)
    {
        
        $sql="DELETE FROM categories WHERE categories_id='$categories_id'";
        var_dump("ketu do te shfaqet sql query ".$sql ."</br>" );
        $result=$this->db->query($sql);
        var_dump("ketu do te shfaqet result query :->" .$result ."<br>" );
        if($result){
            //header("Location:/ARegister/ARegister/?action=getCategories");
           echo "Deleted successfuly";
        }else{
            die();
        }

    }
}