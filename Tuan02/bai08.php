<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>bai06</title>
</head>

<body>
	<?php
		if(isset($_POST["bd"])&&isset($_POST["kt"])){
			$bd = $_POST["bd"];
			$kt = $_POST["kt"];
			if($bd>=10 && $bd<24 && $kt>10 &&$kt<=24){
				if($kt>$bd){
					if($bd>=10&&$kt<17)
						$tong = ($kt - $bd)*20000;
					else if($bd>=17 && $kt<=24)
						$tong = ($kt - $bd)*45000;
				}
				else if($bd>$kt)
					$tong = "Giờ bắt đầu phải nhỏ hơn giờ kết thúc";
			} else if($bd<10 || $kt>24){
				$tong = "Đây là giờ nghỉ";
			}
		}
	?>
    <center>
        <h1>TÍNH TIỀN KARAOKE</h1>
		<form action="" name="" method="post">
			<table>
				<tr>
					<td>Giờ bắt đầu: </td>
					<td><input type="text" name="bd" value = "<?php if(isset($bd)) echo $bd ?>" /> (h)</td>
				</tr>
				<tr>
					<td>Giờ kết thúc: </td>
					<td><input type="text" name="kt" value = "<?php if(isset($kt)) echo $kt ?>" /> (h)</td>
				</tr>
				<tr>
					<td>Tiền thanh toán: </td>
					<td><input type="text" name="tt" disabled value = "<?php if(isset($tong)) echo $tong ?>"/></td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="btnTinh" value="Xem kết quả">
					</td>
				</tr>
			</table>
		</form>
 	</center>
</body>
</html>
