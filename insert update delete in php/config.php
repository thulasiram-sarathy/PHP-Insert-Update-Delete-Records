<?php
$connection = mysql_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('samplephp');
if (!$select_db){
    die("No database selected" . mysql_error());
}
?>