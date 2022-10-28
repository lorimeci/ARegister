<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Add Products </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.3.1/dt-1.10.25/datatables.min.css" />
</head>


<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary my-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
        New Product
    </button>
    <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="container my-5">
                        <?php if(!empty($message)){ ?>
                        <div class="alert alert-primary" role="alert" id="msg">
                            <?php echo $message; ?>
                        </div>
                        <?php } ?>
                        <form method="post" id="myform" action="?action=create_product" enctype="multipart/form-data">
                            <input type="hidden" name="submit" value="1">
                            <div class="form-group">
                                <label class="form-label">Product Name</label>
                                <input type="text" class="form-control" placeholder="Enter product name " name="p_name" />

                            </div>
                            <div class="form-group">
                                <label class="form-label">Price</label>
                                <input type="text" class="form-control" placeholder="Price" name="p_price">

                            </div>
                            <div class="form-group">
                                <label class="form-label">Select Image to Upload: </label>
                                <input type="file" class="form-control" name="imageupload">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Category id</label>
                                <input type="text" class="form-control" placeholder="Category Id" name="c_id">

                            </div>

                            <div class="modal-footer">

                                <button type="submit" name="submit" class="btn btn-primary" data-dismiss="modal">Submit </button>

                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
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
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Category_id</th>
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
                    <td>
                        <?php echo $data['id']; ?>
                    </td>
                    <td>
                        <?php echo $data['name'] ?>
                    </td>
                    <td>
                        <?php echo $data['price'] ?>
                    </td>

                    <td> <img src="<?php echo $data['image'] ?>" weight="80" width="80"></td>

                    <td>
                        <?php echo $data['category_id'] ?>
                    </td>
                    <td>
                        <?php echo $data['created_at'] ?>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="?action=updateProducts&updateid=<?php echo $data['id']; ?>&name=<?php echo $data['name']; ?>&price=<?php echo $data['price']; ?>&category_id=<?php echo $data['category_id'] ?>&created_at=<?php echo $data['created_at']; ?>" class="btn btn-primary"> Update</a>
                        <a class="btn btn-danger" href="?action=deleteProduct&deleteid=<?php echo $data['id'];?> " class="btn btn-danger"> Delete</a>
                    </td>
                </tr>

                <?php  }}?>

        </tbody>
    </table>
<!--     <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item"><a class="page-link" href="#">Previous</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">Next</a></li>
        </ul>
    </nav> -->


</body>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.3.1/dt-1.10.25/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
<script src="text/javascript">
    $(document).ready(function() {
        $('#datatble').DataTable();
    });
</script>

</html>