<!doctype html>
<html lang="en">
<!--
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Categories List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>


<body>
 Button trigger modal 
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

 Modal 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        <form method="post">
            <div class="form-group">
                <label class="form-label">Category Name</label>
                <input type="text" class="form-control" placeholder="Enter categories name " name="c_name">

            </div>
            <div class="form-group">
                <label class="form-label">Image</label>
                <input type="text" class="form-control" placeholder="Enter your image" name="c_image">

            </div>
            <div class="form-group">
                <label class="form-label">Created At</label>
                <input type="text" class="form-control" placeholder="Created at" name="c_created">

            </div>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</body>

</html>