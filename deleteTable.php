<?php
require "dbCon.php";
$id=$_POST['idTable'];

$query="DELETE from bàn where idban='$id' ";

if(mysqli_query($conect,$query))
{
		echo "success";
}
else
{
	echo "error";
} 
  ?>