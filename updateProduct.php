<?php
require "dbCon.php";

$id=$_POST['idMon'];
$tenmon=$_POST['NameMon'];//phuơng thức post dùng để nhận dữ liệu từ android đưa lên,kèm id
$giamon=$_POST['PriceMon'];

$query="UPDATE tensp set tenSp='$tenmon',donGia='$giamon' where maSp='$id' "; //&tenmon là giá trị gán cho post

if(mysqli_query($conect,$query))
{
		echo "success";
}
else
{
	echo "error";
} 
  ?>