<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bai06</title>
</head>

<body>
	<?php
		$tenSv = "Ngọc";
		$hotenSV = "Nguyễn Thị Kim Ngọc";
		$thoiGian = time() + 3600; //Thời gian tồn tại của cookie là 1 giờ (3600 giây)
		setcookie($tenSv, $hotenSV, $thoiGian);
		
		if(isset($_COOKIE[$tenSv])){
			echo "<b>Tên Sinh Viên: </b>".$tenSv."<br>";
			echo "<b>Họ Tên Sinh Viên: </b>".$hotenSV;
		}else{
			echo "Cookie không tồn tại";
		}
	?>
</body>
</html>