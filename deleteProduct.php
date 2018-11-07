<?php
require "dbCon.php";
$id=$_POST['idMon'];

$query="DELETE from tensp where maSp='$id'";

if(mysqli_query($conect,$query))
{
		echo "success";
}
else
{
	echo "error";
} 
  ?>