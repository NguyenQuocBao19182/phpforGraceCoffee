<?php

require "dbCon.php";
$query = "SELECT * FROM mục ";

$data = mysqli_query($conect,$query);

// 1.tạo class muc
class Muc{
	function Muc($id,$ten){
		$this->ID=$id;
		$this->Ten=$ten;
		
	}

}
//tạo mảng
$mangMuc = array();

//3.them phan tu vao mang
while($row= mysqli_fetch_assoc($data)){
	array_push($mangMuc,new Muc($row['maMuc'],$row['tenMuc'])); //viết trùng với tên trong DataBase
}




//4.chuyen dinh dang cua mang ->Json
echo json_encode($mangMuc)

?>