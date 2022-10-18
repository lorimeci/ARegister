<?php
if(isset($_GET['action'])){
    $request=$_GET['action'];
    if($request == 'home'){
        $route="UserController@loginAction";

    }
    if($request == 'login'){
        $route="AuthController@loginAction";

    }
    if($request == 'logout'){ 
        $route="AuthController@logoutAction";

    }
    if($request == 'register'){
        $route="AuthController@registerAction";
     
    }
 
    if($request == 'categories'){
        $route="CategoriesController@categoriesAction";
     
    }
    if($request == 'products'){
        $route="ProductsController@productsAction";
     
    }




}