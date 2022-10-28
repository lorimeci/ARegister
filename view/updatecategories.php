<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Update Category </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.css" />
</head>


<body>

    <div class="container my-5">
        <h3 class="text-center">Update Category</h3>
        <!-- ?action=updateCategories&updateid=<php echo $data['categories_id'];?> 
        ?action=storeCategories-->

        <form method="POST" id="myform" action="?action=storeCategories" enctype="multipart/form-data">
            <input type="hidden" name="submit" value="1">

            <input type="hidden" name="cat_id" value="<?php echo $_GET['updateid']; ?>">
            <div class="form-group">
                <input type="hidden" class="form-control" value="1" name="id" />
            </div>
            <div class="form-group">
                <label class="form-label">Category Name</label>
                <input type="text" class="form-control" placeholder="Enter name here" value="<?php echo $_GET['name']; ?>" name="c_name" />
            </div>
            <div class="form-group">
                <label class="form-label">Select Image to Upload: </label>
                <input type="file" class="form-control" name="imageupload" value="">

            </div>
            <div class="form-group">
                <label class="form-label">Created At</label>
                <input type="text" class="form-control" placeholder="Created_at" value="<?php echo $_GET['created_at']; ?>" name="c_created">
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-primary mt-2">Update the form </button>
            </div>
        </form>
    </div>

</body>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"> </script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

</html>