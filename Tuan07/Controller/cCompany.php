<?php
	// include model Company
	include_once "Model/mCompany.php";
	class controllerCompany{
		function getAllCompany(){
			// Tạo đối tượng đại diện cho modelCompany	
			$p = new modelCompany();
			//Gọi hàm truy vấn tất cả Company
			$tblCompany = $p->SelectAllCompany();
			// trả dữ liệu để dùng trong View
			return $tblCompany;
		}	
	}
?>