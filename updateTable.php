<?php
require "dbCon.php";

$id=$_POST['idTable'];
$soban=$_POST['SoBan'];//phuơng thức post dùng để nhận dữ liệu từ android đưa lên,kèm id


$query="UPDATE bàn set tenban='$soban' where idban='$id' "; //&tenmon là giá trị gán cho post

if(mysqli_query($conect,$query))
{
		echo "success";
}
else
{
	echo "error";
} 
  ?>