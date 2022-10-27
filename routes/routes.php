<?php
if (isset($_GET['action'])) {
    $request = $_GET['action'];
    if ($request == 'home') {
        $route = "UserController@loginAction";
    }

    if ($request == 'login') {
        $route = "AuthController@loginAction";
    }

    if ($request == 'logout') {
        $route = "AuthController@logoutAction";
    }

    if ($request == 'register') {
        $route = "AuthController@registerAction";
    }

    if ($request == 'create_category') {
        $route = "CategoriesController@categoriesAction";
    }

    if ($request == 'getCategories') {
        $route = "CategoriesController@getAllCategories";
    }
    
    if ($request == 'getCategories') {
        $route = "CategoriesController@Pagination";
    }

    if ($request == 'create_product') {
        $route = "ProductsController@productsAction";
    }

    if ($request == 'getProducts') {
        $route = "ProductsController@getAllProducts";
    }
    if ($request == 'updateCategories') {
        $route = "CategoriesController@updateCategories";
    }

    if ($request == 'deleteCategories') {
        $route = "CategoriesController@deleteCategories";
    }

    if ($request == 'storeCategories') {
        $route = "CategoriesController@updatestoreCategory";
    }

    if ($request == 'deleteProduct') {
        $route = "ProductsController@deleteProduct";
    }
    if ($request == 'updateProducts') {
        $route = "ProductsController@editProducts";
    }
    if ($request == 'storeProducts') {
        $route = "ProductsController@updateProducts";
    }

}
