<?php
require('config.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$name =$_REQUEST['name'];
$city =$_REQUEST['city'];
$phone = $_REQUEST['phone'];
$ins_query="insert into sample(`name`,`city`,`phone`)values('$name','$city','$phone')";
mysql_query($ins_query) or die(mysql_error());
$status = "New Record Inserted Successfully.</br></br><a href='index.php'>View Inserted Record</a>";
header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Data</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<center><p><a href="index.php">View Data</a></p></center>
<div>
<h2>Insert New Data</h2></center>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="name" placeholder="Enter Name" required /></p>
<p><input type="text" name="city" placeholder="Enter City" required /></p>
<p><input type="text" name="phone" placeholder="Enter Phone" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>
