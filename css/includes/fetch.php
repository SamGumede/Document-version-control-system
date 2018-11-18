<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>All Files</title>
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">  
 
</head>
<body>
    <br>
    <div class="container page-header">
    <h1 class="text-center"><span class="blanc">Documents and files list</span></h1> 
</div>
<div class="container">

 
   
 -->
<a class="btn btn-primary btn-lg float-left" href="../home.php">
<i class="fa fa-home fa-5x"></i>Home</a>

    <!--  -->
    <a class="btn btn-primary btn-lg float-right" href="../uploadhtml.php">
<i class="fa fa-home fa-5x"></i>Back</a>


    <a class="btn   btn-primary btn-lg float-right font-weight-bold" href="../searchhtml.php">
<i class="fa fa-home fa-5x"></i>Search</a>


  

    

  </div>
<br>
    <div class="container">
        <table class="table table-bordered thead-dark">
            <thead class="bg-thead-ligh">
                <tr>
                    <th class="text-center">File number</th>
                    <th class="text-center">Category</th>
                    <th class="text-center">Author</th>
                    <th class="text-center">File Name</th>
                    <th class="text-center">File Size</th>
                   <!--  <th class="text-center">upload date</th>
                    <th class="text-center">upload time</th>
                    <th class="text-center">Up dated by</th> -->
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php
//                 $filename =array();

//                 function file_size($size)
// {
//   $filesizename = array(" Bytes", " KB", " MB", " GB", " TB", " PB", " EB", " ZB", " YB");
//   return $size ? round($size/pow(1024, ($i = floor(log($size, 1024)))), 2) . $filesizename[$i] : '0 Bytes';
// }

                include "config.php";
                $stmt = $db->prepare("select * from addfiles");
                $stmt->execute();
                while($row = $stmt->fetch()){
                ?>
                <tr>
                    <td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['keyword'] ?></td>
                    <td><?php echo $row['author'] ?></td>
                    <td><?php echo $row['filename'] ?></td>
                    <td><?php echo $row['size'] ?></td>
                    <td><?php echo $row['']
                    <td class="text-center"><a href="./download.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Download</a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

   <script src="https://code.jquery.com/jquery-3.1.0.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>