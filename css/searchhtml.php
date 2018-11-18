<!DOCTYPE html>
<html>
<head>
	<title>Search Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">	
</head>
<body>
	<br>
	<div class="container page-header">
    <h1 class="text-center"><span class="blanc">Search a document</span></h1>     
  </div>
  <br>
  <div class="container jumbotron">
  	<div>
  <h2></h2></div>
  		<form action="includes/search.php" method="POST" >
		<input type="text" name="search" class="form-control" placeholder="search by document name or category or author " required><br>

		<button type="submit" name="submit"class="btn btn-primary btn-lg float-left font-weight-light">
          <i class="fa fa-search  fa-5x""></i>search</i></button>  

		<a class="btn   btn-primary btn-lg float-right font-weight-light" href="index.php">
<i class="fa fa-home fa-5x"></i>Home</a> 
	</form>

</div>
<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>