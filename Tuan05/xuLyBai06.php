<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>xuLyBai06</title>
</head>

<body>
	<center>
    	<?php
			if(isset($_REQUEST['btnSubmit'])){
				$fullname = $_REQUEST['fullname'];
				$password = $_REQUEST['password'];
				$repassword = $_REQUEST['repassword'];
				$email = $_REQUEST['email'];
				$tel = $_REQUEST['tel'];
				$address = $_REQUEST['address'];
				
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					echo "<p style='color: red'>Email không hợp lệ</p>";
				} else if(strlen($password)<8|| !preg_match('/[A-Za-z]/', $password) 
							|| !preg_match('/[0-9]/', $password)){
					echo "<p style='color: red'>Mật khẩu phải có ít nhất 8 kí tự, phải có chữ và số</p>";
				}else if($password!=$repassword){
					echo "<p style='color: red'>Mật khẩu nhập lại không khớp</p>";
				} else if(empty($fullname)||empty($tel)||empty($address)){
					echo "<p>Không được để trống</p>";
				}else{
					$data = "$fullname | $password | $repassword | $email | $tel | $address\n";
					$file = fopen('data.txt', 'a');
					fwrite($file, $data);
					fclose($file);
					echo "<p style='color:green'>Đăng ký thành công</p>";
				}
			}else{
				header("refresh: 0, url='bai06.php'");
			}
		?>
        
        <form action="#" name="xuly" method="post">
			<table border="1">
            	<tr>
                	<td colspan="6" align="center"><h2>DANH SÁCH TÀI KHOẢN</h2></td>
                </tr>
                <tr>
                	<th>FullName</th>
                    <th>PassWord</th>
                    <th>Re-PassWord</th>
                    <th>Email</th>
                    <th>Telephone</th>
                    <th>Address</th>
                </tr>
                <?php
					$file = fopen('data.txt', 'r');
					if($file){
						while(($line = fgets($file)) !=false){
							$data = explode("|", $line);
							echo "<tr>";
							echo "<td>$data[0]</td>";
							echo "<td>$data[1]</td>";
							echo "<td>$data[2]</td>";
							echo "<td>$data[3]</td>";
							echo "<td>$data[4]</td>";
							echo "<td>$data[5]</td>";
							echo "</tr>";
						}
						fclose($file);
					}else{
						echo "Không tìm thấy tệp data.txt";
					}
				?>
                
            </table><br />
            <a href="bai06.php">Nhập TK</a>
    </center>
</body>
</html>