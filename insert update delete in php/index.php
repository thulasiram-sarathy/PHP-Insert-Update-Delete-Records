<?php 
require('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>View Data</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<center><p><a href="insert.php">Insert New Data</a></p>
<h2>View Data</h2></center>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr><th><strong>No</strong></th><th><strong>Name</strong></th><th><strong>City</strong></th><th><strong>Phone</strong></th><th><strong>Update</strong></th><th><strong>Delete</strong></th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from sample ORDER BY id asc;";
$result = mysql_query($sel_query);
while($row = mysql_fetch_assoc($result)) { ?>
<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["name"]; ?></td><td align="center"><?php echo $row["city"]; ?></td><td align="center"><?php echo $row["phone"]; ?></td><td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Update</a></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
<?php $count++; } ?>
</tbody>
</table>
</div>
</body>
</html>
