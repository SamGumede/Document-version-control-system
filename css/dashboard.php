<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Dashborad</title>
<style type="text/css">
body {
	/*margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image: url(../images/bg.gif);*/
}
</style>
    
<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
<div id="container">
    <div id="header">
       <div id="title"> <div id="heading">Document Version Control</div>

        <div id="quick_links">
      <ul>
        <li><a class="home" href="index.php">Home</a></li>
        <li>|</li>

        <li><a class="home" href="index.php">Projects</a></li>
        <li>|</li>
      
        <li><a class="logout" href="../logout.php"> Welcome<?php echo $_SESSION["name"]; ?>! Click to <a href="logout.php">Logout</a></li>
        <li>|</li>
        
      </ul>
    </div>

      </div>
  <div id="content_panel">
    <div id="heading" >Documents<hr size="0" color="#FFFFFF" ice:repeating=""/></div> 

    <label>
    <div id="table">
    	<span><table border="1" bgcolor="#006699" >
				<tr>
                	<th width="100px"> file name</th>
					<th width="100px">posted by</th>
					<th width="100px">file size</th>
					<th width="100px">Updated by</th>
					<th width="100px">Updated date</th>
                    
				</tr>
			</table></span>



</body>
</html>