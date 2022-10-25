<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Update Category </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.css"/>
</head>


<body>
    
<div class="container my-5">
    <h3 class="text-center">Update Category</h3>
    <form method="POST" id="myform" action="?action=updateCategories&updateid=<?php echo $data['categories_id'];?>"  enctype="multipart/form-data">
     <input type="hidden" name="submit" value="1">
        <div class="form-group">
            <label class="form-label">Category Name</label>
            <input type="text" class="form-control" placeholder="Enter category name "  name="c_name"  />
        </div> 
        <div class="form-group">
            <label class="form-label">Select Image to Upload: </label>
            <input type="file" class="form-control" name="imageupload" >
                                
        </div> 
         <div class="form-group">
            <label class="form-label">Created At</label>
            <input type="text" class="form-control" placeholder="Created at " name="c_created" >

        </div>
        <div class="modal-footer">
        <a class="btn btn-primary" href="?action=storeCategories" class="btn btn-primary " >Update</a>
        </div>
   
    </form>
</div>
                  
</body>

<script src="https://code.jquery.com/jquery-3.6.1.min.js"> </script>
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.12.1/datatables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</html>