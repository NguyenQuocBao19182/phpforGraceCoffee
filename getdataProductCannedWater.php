<?php

require "dbCon.php";


$query = "SELECT * FROM tensp where maMuc=6" ;

$data = mysqli_query($conect,$query);

// 1.tạo class sanpham
class SanPham{
	function SanPham($id,$ten,$gia,$maMuc){
		$this->ID=$id;
		$this->Ten=$ten;
		$this->Gia=$gia;
		$this->MaMuc=$maMuc;
	}

}
//tạo mảng
$mangSP = array();

//3.them phan tu vao mang
while($row= mysqli_fetch_assoc($data)){
	array_push($mangSP,new SanPham($row['maSp'],$row['tenSp'],$row['donGia'],$row['maMuc'])); //viết trùng với tên trong DataBase
}




//4.chuyen dinh dang cua mang ->Json
echo json_encode($mangSP)

?>