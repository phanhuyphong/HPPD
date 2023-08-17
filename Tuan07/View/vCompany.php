<?php
	// include controller Company
	include_once "Controller/cCompany.php";
	// Tạo mới đối tượng controller company
	$p = new controllerCompany();
	// Gọi hàm lấy toàn bộ dữ liệu Company
	$tblCompany = $p ->getAllCompany();
	if($tblCompany){
		// Kiểm tra kết quả nhận được có dữ liệu (bảng Company có dữ liệu)
		if(mysqli_num_rows($tblCompany)>0){
			//Duyệt từng dòng dữ liệu trong kết quả nhận được
			while($row = mysqli_fetch_assoc($tblCompany)){
				// Hiển thị kết quả nhận được
				echo "<a href='index.php?Comp=".$row['CompID']."'>".$row['CompName'].".<br></a>";
			}
		}else {
			echo "0 result";
		}	
	}else{
		echo "error";
	}
?>