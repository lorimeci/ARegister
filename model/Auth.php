<?php
class AuthModel{
    public $db;

    public function checkLogin($email,$password){
        $sql="SELECT count(*) FROM  users WHERE email='{$email}'AND pwd='{$password}'";
        $stmt=$this->db->prepare($sql)->execute();
        return $stmt;
       
    }
    public function checkRegister($name,$phone,$email,$password,$confirmpassword){
 
        $sql="INSERT INTO users (name,phone,email,pwd,confirmpwd) VALUES('".$name."','".$phone."','".$email."','".$password."','".$confirmpassword."')";
        $this->db->query($sql);
        return 1;
       
    }


}