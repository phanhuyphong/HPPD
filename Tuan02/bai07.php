<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>bai06</title>
</head>

<body>
	<?php
		if(isset($_POST["toan"])&&isset($_POST["ly"]) && isset($_POST["hoa"])){
			$toan = $_POST["toan"];
			$ly = $_POST["ly"];
			$hoa = $_POST["hoa"];
			$tong = $toan + $ly + $hoa;
			$dc = 20;
			if($toan>0&&$ly>0&&$hoa>0&&$tong>=$dc)
				$kq="Đậu";
			else
				$kq="Rớt";
		}
	?>
    <center>
        <h1>KẾT QUẢ HỌC TẬP</h1>
		<form action="" name="" method="post">
			<table>
				<tr>
					<td>Toán: </td>
					<td><input type="text" name="toan" value = "<?php if(isset($toan)) echo $toan ?>" /></td>
				</tr>
				<tr>
					<td>Lý: </td>
					<td><input type="text" name="ly" value = "<?php if(isset($ly)) echo $ly ?>" /></td>
				</tr>
				<tr>
					<td>Hóa: </td>
					<td><input type="text" name="hoa" value = "<?php if(isset($hoa)) echo $hoa ?>" /></td>
				</tr>
				<tr>
					<td>Điểm chuẩn: </td>
					<td><input type="number" name="dc" style = "color: red;" value = "<?php if(isset($dc)) echo $dc ?>" /></td>
				</tr>
				<tr>
					<td>Tổng điểm: </td>
					<td><input type="text" name="tong" disabled value = "<?php if(isset($tong)) echo $tong ?>"/></td>
				</tr>
				<tr>
					<td>Kết quả thi: </td>
					<td><input type="text" name="kq" disabled value = "<?php if(isset($kq)) echo $kq ?>" /></td>
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
