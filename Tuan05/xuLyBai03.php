<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>xuLyBai03</title>
</head>

<body>
	<?php
		if(isset($_REQUEST['btnSubmit'])){
			if(empty($_REQUEST['user'])&&empty($_REQUEST['password'])){
				echo "Vui lòng nhập dữ liệu. <a href='bai03.php'>NHẬP LẠI</a>";	
			} else if($_REQUEST['user']=='admin'&&$_REQUEST['password']=='1234567'){
				$_SESSION['username']=$username;
				echo "<script>alert('Đăng nhập thành công')</script>";
			}else{
				echo "Nhập sai dữ liệu. <a href='bai03.php'>NHẬP LẠI</a>";
			}
		}else{
			header("refresh: 0, url='bai03.php'");	
		}
	?>
</body>
</html>

