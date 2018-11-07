<?php 
require "dbCon.php";

//phuơng thức post dùng để đưa dữ liệu,kèm id
$soban=$_POST['numberTable'];


$query="INSERT INTO bàn VALUES (null,'$soban')"; //lấy giá trị đã gán ở post

if(mysqli_query($conect,$query	)){
	//thanh cong
echo "success";
}

else{
	echo "error";
}

 ?>