<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Add Categories </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.3.1/dt-1.10.25/datatables.min.css"/>
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
                        <form method="post" id="myform" action="">
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
                            <div class="modal-footer">
                             <a href="?action=create_category" class="btn btn-primary" onclick="document.getElementById('myform').submit()" data-dismiss="modal">Submit</a>  
<!--                             <button type="submit" name="submit"   class="btn btn-danger" data-dismiss="modal">
                            <a href="?action=create_category" class="text-white" onclick="document.getElementById('myform').submit()">Submit </a> </button>  -->
                            <button type="submit" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    

                <table class="table" id="datatable">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Image</th>
                <th scope="col">Created_at</th>
                <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if(isset($datas)) {
            foreach ($datas as $data) {
            ?>

                <tr>
                <td><?php echo $data['categories_id']; ?></td>
                <td><?php echo $data['name'] ?></td>
                <td><?php echo $data['image'] ?></td>
                <td><?php echo $data['created_at'] ?></td>
                <td>  
                <button class="btn btn-primary"> <a href=""  class="text-light">Update</a></button>
                <button class="btn btn-danger"> <a href="" class="text-light">Delete</a></button>
                </td>
                </tr>
              
                <?php  }}?>
  
             </tbody>
            </table>
            <nav aria-label="Page navigation example">
            <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
        </nav>

           
</body>
<script
  src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.3.1/dt-1.10.25/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="text/javascript">
 $(document).ready(function () {
  $('#datatble').DataTable();
});
</script>

</html>