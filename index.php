<?php
    session_start();

    define('ROOT_PATH', dirname(__FILE__,2).DIRECTORY_SEPARATOR.'ARegister');
    define('VIEW_PATH', dirname( __FILE__, 2 ).DIRECTORY_SEPARATOR.'ARegister'.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR);
    define('MODULE_PATH', dirname( __FILE__, 2 ).DIRECTORY_SEPARATOR.'ARegister'.DIRECTORY_SEPARATOR.'model'.DIRECTORY_SEPARATOR );

    require_once  ROOT_PATH .'/src/DatabaseConnection.php';
    require_once  ROOT_PATH .'/src/config.php';
    require_once  ROOT_PATH .'/controller/AuthController.php';
    require_once  ROOT_PATH .'/controller/UserController.php';
    require_once  ROOT_PATH .'/controller/CategoriesController.php';
    require_once  ROOT_PATH .'/model/User.php';
    require_once  ROOT_PATH .'/model/Auth.php';
    require_once  ROOT_PATH .'/model/Categories.php';
    require_once ROOT_PATH .'/routes/routes.php';
/* 
    spl_autoload_register(function($class_name){
         if(file_exists(__DIR__.'controller/'.$class_name.'.php')){
         require __DIR__.'/controller/'.$class_name.'.php';

         }  
        if(file_exists(__DIR__.'/model/'.$class_name.'.php')){
            require __DIR__.'/model/'.$class_name.'.php';
   
       } 
        
    });
     */
    
    $db=DatabaseConnection::connect($config);
       var_dump($db);
    if(!empty($route)){
        $routes=explode('@',$route);
        $controller=ucfirst($routes[0]);
        //var_dump($controller);
        $model=ucfirst(str_replace('Controller','',$routes[0])).'Model';
        //var_dump($model);
        $action=lcfirst($routes[1]);
        //var_dump($action);
    }else{
        $controller='UserController';
        $model='UserModel';
        $action='loginAction';
    }
  
  
    $userController = new $controller();
    var_dump($userController);
    $usermodel=new $model();
    var_dump($usermodel);
    $userController->model=$usermodel;
    $usermodel->db=$db;
    $index=$userController->$action(); 

