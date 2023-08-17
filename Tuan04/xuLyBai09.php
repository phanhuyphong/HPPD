<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>xuLyBai09.php</title>
</head>

<body>
	<center>
    	<?php
		if(isset($_REQUEST['btnSubmit'])){
			$hoten = $_REQUEST['hoten'];
			$ngaysinh = $_REQUEST['ngaysinh'];
			$lop = $_REQUEST['lop'];
			$diachi = $_REQUEST['diachi'];
			
			$sinhvien = "$hoten | $ngaysinh | $lop | $diachi\n";
			$file = fopen('sinhvien.txt', 'a');
			fwrite($file, $sinhvien);
			fclose($file);
			
			// echo "Đã lưu thông tin sinh viên thành công";
		}
	?>
    	<form action="#" name="xuly" method="post">
			<table border="1">
            	<tr>
                	<td colspan="4" align="center"><h2>DANH SÁCH SINH VIÊN</h2></td>
                </tr>
                <tr>
                	<th>Họ Và Tên</th>
                    <th>Ngày Sinh</th>
                    <th>Lớp</th>
                    <th>Địa Chỉ</th>
                </tr>
                <?php
					$file = fopen('sinhvien.txt', 'r');
					if($file){
						while(($line = fgets($file)) !=false){
							$sinhvien = explode("|", $line);
							echo "<tr>";
							echo "<td>$sinhvien[0]</td>";
							echo "<td>$sinhvien[1]</td>";
							echo "<td>$sinhvien[2]</td>";
							echo "<td>$sinhvien[3]</td>";
							echo "</tr>";
						}
						fclose($file);
					}else{
						echo "Không tìm thấy tệp sinhvien.txt";
					}
				?>
                
            </table><br />
            <a href="bai09.php">Nhập SV</a>
        </form>
    </center>
</body>
</html>