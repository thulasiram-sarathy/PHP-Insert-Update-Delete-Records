<?php 
require('config.php');
$id=$_REQUEST['id'];
$query = "SELECT * from sample where id='".$id."'"; 
$result = mysql_query($query) or die ( mysql_error());
$row = mysql_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Data</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p><a href="insert.php">Insert New Data</a></p>
<h1>Update Data</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$name =$_REQUEST['name'];
$city =$_REQUEST['city'];
$phone =$_REQUEST['phone'];
$update="update sample set  name='".$name."',city='".$city."', phone='".$phone."' where id='".$id."'";
mysql_query($update) or die(mysql_error());
$status = "Data Updated. </br></br><a href='index.php'>View Data</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
header("Location: index.php");
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p><input type="text" name="name" placeholder="Enter Name" required value="<?php echo $row['name'];?>" /></p>
<p><input type="text" name="city" placeholder="Enter City" required value="<?php echo $row['city'];?>" /></p>
<p><input type="text" name="phone" placeholder="Enter Phone" required value="<?php echo $row['phone'];?>" /></p>
<p><input name="submit" type="submit" value="Update" /></p>
</form>
<?php } ?>
</div>
</div>
</body>
</html>
