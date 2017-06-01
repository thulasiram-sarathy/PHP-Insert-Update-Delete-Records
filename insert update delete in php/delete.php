<?php 
require('config.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM sample WHERE id=$id"; 
$result = mysql_query($query) or die ( mysql_error());
header("Location: index.php"); 
 ?>
