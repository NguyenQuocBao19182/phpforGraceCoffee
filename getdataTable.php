<?php

require "dbCon.php";
$query = "SELECT * FROM bàn ";

$data = mysqli_query($conect,$query);

// 1.tạo class sanpham
class Ban{
	function Ban($id,$ten){
		$this->ID=$id;
		$this->Ten=$ten;
	}

}
//tạo mảng
$mangBan = array();

//3.them phan tu vao mang
while($row= mysqli_fetch_assoc($data)){
	array_push($mangBan,new Ban($row['idban'],$row['tenban'])); //viết trùng với tên trong DataBase
}




//4.chuyen dinh dang cua mang ->Json
echo json_encode($mangBan)

?>