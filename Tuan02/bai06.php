<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>bai06</title>
</head>

<body>
	<?php
		if(isset($_POST["hk1"])&&isset($_POST["hk2"])){
			$hk1 = $_POST["hk1"];
			$hk2 = $_POST["hk2"];
			$tb = round(($hk1+2*$hk2)/3,2);
			if($tb>=5)
				$kq = "Được lên lớp";
			else
				$kq = "Ở lại lớp";
			
			if($tb>=8)
				$xeploai = "Giỏi";
			else if($tb>6.5 && $tb<8)
				$xeploai = "Khá";
			else if($tb>=5 && $tb<6.5)
				$xeploai = "Trung bình";
			else
				$xeploai = "Yếu";
		}
	?>
    <center>
        <h1>KẾT QUẢ HỌC TẬP</h1>
		<form action="" name="" method="post">
			<table>
				<tr>
					<td>Điểm HK1: </td>
					<td><input type="text" name="hk1" value = "<?php if(isset($hk1)) echo $hk1 ?>" /></td>
				</tr>
				<tr>
					<td>Điểm HK2: </td>
					<td><input type="text" name="hk2" value = "<?php if(isset($hk2)) echo $hk2 ?>" /></td>
				</tr>
				<tr>
					<td>Điểm trung bình: </td>
					<td><input type="text" name="tb" disabled value = "<?php if(isset($tb)) echo $tb ?>" /></td>
				</tr>
				<tr>
					<td>Kết quả: </td>
					<td><input type="text" name="kq" disabled value = "<?php if(isset($kq)) echo $kq ?>" /></td>
				</tr>
				<tr>
					<td>Xếp loại học lực: </td>
					<td><input type="text" name="xeploai" disabled value = "<?php if(isset($xeploai)) echo $xeploai ?>" /></td>
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
