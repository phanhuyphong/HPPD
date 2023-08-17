<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>xuLyBai06</title>
</head>

<body>
	<?php
		if(isset($_REQUEST['btnSubmit'])){
			$username=$_REQUEST['username'];
			$password=$_REQUEST['password'];
			if($username=='admin'&&$password=='123456'){
				$_SESSION['username']=$username;
				echo "Đăng nhập thành công !!!!";
			}else{
				echo "Đăng nhập không thành công. <a href='bai06.php'>Đăng nhập lại!</a>";
			}
		}
	?>
</body>
</html>