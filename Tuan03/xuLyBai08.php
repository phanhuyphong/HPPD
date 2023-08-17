<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bai08</title>
</head>

<body>
	<?php
		if(isset($_REQUEST['btnSubmit'])){
			$hinh = $_REQUEST['anh'];
			$kthuoc = $_REQUEST['kthuoc'];
			echo "<img src='$hinh' width='$kthuoc' />";
		}else{
			echo header("refresh: 0, url='bai08.php'");
		}
	?>
</body>
</html>