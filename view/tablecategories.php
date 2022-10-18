<?php 
    require_once  ROOT_PATH .'../src/DatabaseConnection.php';
    require_once  ROOT_PATH .'../src/config.php';
    $config=[
        'server'=>'localhost',
        'dbname'=>'aregister',
        'dbpass'=>'',
        'dbuser'=>'root',
        ];
    $db=DatabaseConnection::connect($config);
    
    //var_dump($config);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Add Categories </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary my-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
        New Category
    </button>
    <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body">

                    <div class="container my-5">
                        <form method="post">
                            <div class="form-group">
                                <label class="form-label">Category Name</label>
                                <input type="text" class="form-control" placeholder="Enter categories name " name="c_name" />

                            </div>
                            <div class="form-group">
                                <label class="form-label">Image</label>
                                <input type="text" class="form-control" placeholder="Enter your image" name="c_image">

                            </div>
                            <div class="form-group">
                                <label class="form-label">Created At</label>
                                <input type="text" class="form-control" placeholder="Created at " name="c_created">

                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
                <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Created_at</th>
                <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
            <?php 
             
        
             ?>


<!--                 <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                </tr> -->
            </tbody>
            </table>

           
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</html>