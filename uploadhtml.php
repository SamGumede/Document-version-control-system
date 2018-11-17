<!DOCTYPE html>
<html>
<head>
  <title>Upload Files</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">	
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<br><br>
	<div class="container page-header">
    <h1 class="text-center"><span class="blanc">Upload file</span></h1> 
   </div>
  <br>
  <div class="container jumbotron">   
  <div class="form-group">
  <form action="includes/upload.php" method="POST" enctype="multipart/form-data">
  	<h3>Category:</h3>
  	<input type="text" name="keyword" class="form-control" placeholder="Category name" required>
    <h3>Author:</h3>
    <input type="text" name="author" class="form-control" placeholder="Author" required>
    <br>
    <input type="file" name="file" class="form-control" required><br>

<!-- <button type="submit" name="submit" class="btn btn-lg btn-success">UPLOAD FILES!</button>
       -->
<button type="submit" name="submit"class="btn  btn-primary btn-lg float-left font-weight-bold">
<i class="fa fa-upload fa-5x""></i>Upload file</i></button>  

<a class="btn btn-primary btn-lg float-center font-weight-bold" href="includes/fetch.php" >
<i class="fa fa-reorder fa-5x"></i> View files</a>

<a class="btn   btn-primary btn-lg float-right font-weight-bold" href="index.php">
<i class="fa fa-home fa-5x"></i>Home</a>

   
  </form>	
</div>
</div>

<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>