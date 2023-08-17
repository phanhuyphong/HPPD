<?php
	session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bai08</title>
</head>

<body>
	<?php
		function count_visit(){
			// Kiểm tra và khởi tạo biến session "count"
			if(!isset($_SESSION['count'])){
				$_SESSION['count']=0;
			}
			
			// Tăng giá trị biến session "count"
			$_SESSION['count']++;
			
			// Lưu giá trị của biến session xuống filetext
			$file = 'count.txt';
			$handle = fopen($file, 'w');
			fwrite($handle, $_SESSION['count']);
			fclose($handle);
			
			// Đóng session
			session_write_close();
			
			// Trả về giá trị của biến session "count"
			return $_SESSION['count'];
		}
	?>
    
    <?php
		// Gọi hàm đếm số lần truy cập và lưu kết quả xuống filetext
		$count = count_visit();
		
		// Hiển thị thông báo về số lần truy cập
		echo "Số lần truy cập: ".$count;
	?>
</body>
</html>