<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>bai03</title>
</head>

<body>
	<?php
    	/*
		Bài 3. Sử dụng ngôn ngữ PHP viết trang Web thực hiện các phép tính cộng, trừ, nhân, chia, chia lấy
		dư và xuất kết quả ra màn hình từ hai biến cho trước.
		*/
		
		$a = 5; $b = 10;
		echo "a = $a, b = $b <br>";
		$tong = $a+$b;
		echo "$a+$b=$tong <br>";
		$hieu = $a-$b;
		echo "$a-$b=$hieu <br>";
		$tich = $a*$b;
		echo "$a*$b=$tich <br>";
		if($b==0){
			echo "Không thể chia";
		}else{
			$thuong = $a/$b;
			echo "$a/$b=$thuong <br>";
			$du = $a%$b;
			echo "$a%$b=$du <br>";
		}
    ?>
</body>
</html>
