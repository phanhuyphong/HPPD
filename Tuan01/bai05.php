<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>bai05</title>
</head>

<body>
	<?php
    	/*
		Bài 5. Sử dụng ngôn ngữ PHP hiển thị hai số tự nhiên x, y được phát sinh ngẫu nhiên (x >y)
		*/
		
		$dem=0;
		do{
			$a = rand(50,100); $b = rand(50,100);
			$dem++;
		} while($a<=$b);
		echo "a=$a <br> b=$b <br> Số lần phát sinh: $dem"
    ?>
</body>
</html>
