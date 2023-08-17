<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>bai07</title>
</head>

<body>
	<?php
    	/*
		Bài 7. Viết trang PHP hiển thị dãy số từ 1 đến 100 sao cho số chẵn là chữ in đậm, số lẽ là chữ in
		thường.
		*/
		
		for($i=1;$i<=100;$i++){
			if($i%2==0){
				echo "<b> $i </b>";
			}else{
				echo $i;
			}
		}
    ?>
</body>
</html>
