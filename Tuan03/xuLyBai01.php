<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>bai01</title>
</head>

<body>
    <?php
		if(isset($_REQUEST["btnSub"])){
			echo "Your First Name is: ".$_REQUEST["FName"]."<br>";
			echo "Your Last Name is: ".$_REQUEST["LName"]."<br>";
		}else{
			echo header("refresh: 0; url='bai01.php'");
		}
	?>
</body>
</html>