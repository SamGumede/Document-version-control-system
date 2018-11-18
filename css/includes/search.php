<!DOCTYPE html>
<html>
<head>
	<title>Search Results</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">	
</head>
<body>
	<br>
	<div class="container page-header">
    <h1 class="text-center"><span class="blanc">Results</span></h1>

    <a class="btn   btn-primary btn-lg float-left font-weight-light" href="index.php">
<i class="fa fa-home fa-5x"></i>Home</a> 
	</form>
   

    <a class="btn   btn-primary btn-lg float-right font-weight-light" href="../searchhtml.php">
<i class="fa fa-home fa-5x"></i>Back</a>       
  </div>
  <br>
	<div class="container">
		 <table class="table table-bordered thead-dark">
            <thead class="bg-thead-ligh">
                <tr>
                    <th class="text-center">Keywords / Document type</th>
                     <th class="text-center">Author</th>
                    <th class="text-center">File Name</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>

<?php
	include "dbconnect.php";
	if(isset($_POST['submit-search'])) {
		$search = mysqli_real_escape_string($conn, $_POST['search']);
		$sql = "SELECT * FROM addfiles WHERE keyword LIKE '%$search%' OR filename LIKE '%$search%' OR author LIKE '%$search%'";
		$result = mysqli_query($conn, $sql);
		$queryResult = mysqli_num_rows($result);
		echo "<h2 class='blanc'> There are ".$queryResult." matching files! </h2>";
		if ($queryResult > 0) {
			while ($row = mysqli_fetch_assoc($result)){
				?>
					<tr>
                    <td class="bg-white font-weight-bold text-center"><?php echo $row['keyword'] ?> :-</td>
                    <td class="bg-white font-weight-bold"><?php echo $row['author'] ?></td>
                    <td class="bg-white font-weight-bold"><?php echo $row['filename'] ?></td>
                    <td class="text-center bg-white font-weight-bold"><a href="download.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Download</a></td>
                </tr>
                <?php	
			}
		}else{
			echo "There are no results matching your search!";
		}
	}



?>
</tbody>
</table>


<script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

