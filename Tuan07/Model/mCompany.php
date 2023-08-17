<?php
	// include file ketnoi
	include_once "ketnoi.php";
	
	class modelCompany{
		function SelectAllCompany(){
			// Khai báo biến tạo kết nối
			// Tạo đối tượng clsketnoi tu file ketnoi.php
			$p = new clsKetNoi();
			// Gọi hàm ketnoiDB; thực hiện kết nối đến CSDL và kiểm tra kết nối được không
			if($p->ketnoiDB($conn)){
				// lệnh truy vấn toàn bộ dữ liệu bảng Company
				$string = "SELECT * FROM company";
				//thực thi lệnh truy vấn, kết quả trả về là 1 table chứa toàn bộ dữ liệu bảng company
				$table = mysqli_query($conn,$string);
				$p->dongKetNoiDB($conn);
				return $table;
			}else{
				return false;
			}
		}	
	}
?>