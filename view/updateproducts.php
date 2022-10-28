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
        <h3 class="text-center">Update Product</h3>
        <form method="POST" id="myform" action="?action=storeProducts" enctype="multipart/form-data">
            <input type="hidden" name="submit" value="1">
            <input type="hidden" name="cat_id" value="<?php echo $_GET['updateid']; ?>">
            <div class="form-group">
                                <label class="form-label">Product Name</label>
                                <input type="text" class="form-control" placeholder="Enter product name " name="p_name" value="<?php echo $_GET['name']; ?>" />

                            </div>
                            <div class="form-group">
                                <label class="form-label">Price</label>
                                <input type="text" class="form-control" placeholder="Price" name="p_price" value="<?php echo $_GET['price']; ?>">

                            </div>
                            <div class="form-group">
                                <label class="form-label">Select Image to Upload: </label>
                                <input type="file" class="form-control" name="imageupload">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Category id </label>
                                <input type="text" class="form-control" placeholder="Category Id" name="c_id" value="<?php echo $_GET['category_id']; ?>">

                            </div>
                            <div class="form-group">
                                <label class="form-label">Created At</label>
                                <input type="text" class="form-control" placeholder="Created at " name="p_created" value="<?php echo $_GET['created_at']; ?>">

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