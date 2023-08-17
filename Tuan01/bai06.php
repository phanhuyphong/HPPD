<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>bai06</title>
</head>

<body>
	<?php
    	/*
		Bài 6. Sử dụng ngôn ngữ PHP tạo ngẫu nhiên 02 số tự nhiên. Viết hàm tính BCNN($x,$y),
		UCLN($x,$y). Xuất kết quả ra màn hình.
		*/
		
		$a = rand(1,100); $b = rand(1,100);
		echo "a = $a; b = $b <br>";
		function UCLN($x,$y){
			if($y == 0) return $x;
			return UCLN ($y, $x % $y);
		}
		
		function BCNN($x,$y){
			return $x*$y/UCLN($x, $y);
		}
		
		echo "UCLN($a, $b) =".UCLN($a, $b)."<br>";
		echo "BCNN($a, $b) =".BCNN($a, $b)."<br>";
    ?>
</body>
</html>
