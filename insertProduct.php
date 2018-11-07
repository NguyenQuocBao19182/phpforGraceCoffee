<?php 
require "dbCon.php";

$tensp=$_POST['tenMon'];//phuơng thức post dùng để đưa dữ liệu,kèm id
$dongia=$_POST['gia'];
$mamuc=$_POST['maMuc'];

$query="INSERT INTO tensp VALUES (null,'$tensp','$dongia','$mamuc')"; //lấy giá trị đã gán ở post

if(mysqli_query($conect,$query	)){
	//thanh cong
echo "success";
}

else{
	echo "error";
}

 ?>