<?php
class AuthController{
    public $model;

    public function checkUserAccess()
    {
     if(!isset($_SESSION['userLogInStatus'])){
        require_once VIEW_PATH .'login.html';
        exit;
     }
    }
    public function loginAction()
    {
        if(isset($_POST['LoginSubmit'])){
            $email=$_POST['email'];
            $password=$_POST['password'];
            $checkuserLogin=$this->model->checkLogin($email,$password);
           if($checkuserLogin == 1 ){
            $_SESSION['userLoginStatus']=1;
            return require_once VIEW_PATH .'dashboard.html';
           } 
        }
        if(!isset($_SESSION['userLogInStatus'])){
                
        return require_once VIEW_PATH .'login.html';
        }else{

        return require_once VIEW_PATH .'dashboard.html';
        }

    }
    public function logoutAction()
    {
        unset($_SESSION['userLoginStatus']);
        require_once VIEW_PATH .'login.html';
    }
    public function registerAction()
    {
        if(isset($_POST['RegisterSubmit'])){
            $name=$_POST['name'];
            $phone=$_POST['phone'];
            $email=$_POST['email'];
            $password=$_POST['password'];
            $confirmpassword=$_POST['confirmpassword'];
            $this->model->checkRegister($name,$phone,$email,$password,$confirmpassword);
            
            $_SESSION['userLoginStatus']=1;

           
        }
        if(!isset($_SESSION['userLogInStatus'])){
                
            require_once VIEW_PATH .'registration.html';
    
            }else{
    
            require_once VIEW_PATH .'dashboard.html';
        }
    }


}