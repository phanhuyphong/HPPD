<?php
	include_once "ketnoi.php";
	class modelProduct{
		function SelectAllProduct(){
			$p = new clsKetNoi();
			if($p->ketnoiDB($conn)){
				$query = "SELECT * FROM product";
				$tblProduct = mysqli_query($conn, $query);
				$p->dongKetNoiDB($conn);
				return $tblProduct;
			}else{
				return false;
			}
		}
	}
?>