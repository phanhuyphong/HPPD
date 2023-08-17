<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>bai02</title>
</head>

<body>
	<?php 
		if(isset($_REQUEST["stn"])&&isset($_REQUEST["sth"])){
			$stn=$_REQUEST["stn"];
			$sth=$_REQUEST["sth"];
			$ptinh=$_REQUEST["ptinh"];
			if($ptinh=="Cộng"){
				$tong = $stn + $sth;
				$kq=round($tong,2);
			} else if($ptinh=="Trừ"){
				$tru = $stn-$sth;
				$kq=round($tru,2);
			} else if($ptinh=="Nhân"){
				$tich=$stn*$sth;
				$kq=round($tich,2);
			} else if($ptinh=="Chia"){
				if($sth==0){
					$kq = "Không thể chia";
				}else{
					$thuong = $stn/$sth;
					$kq=round($thuong,2);
				}
			}
		}
	?>
	
	<center>
    	<form action method="get">
        	<h1>PHÉP TÍNH TRÊN HAI SỐ</h1>
            <table>
            	<tr>
                	<td>Chọn phép tính: </td>
                    <td><?php if(isset($ptinh)) echo $ptinh?></td>
                </tr>
                <tr>
                	<td>Số 1: </td>
                    <td><input type="text" name="stn" value="<?php if(isset($stn)) echo $stn ?>"/></td>
                </tr>
                <tr>
                	<td>Số 2: </td>
                    <td><input type="text" name="sth" value="<?php if(isset($sth)) echo $sth ?>"/></td>
                </tr>
                <tr>
                	<td>Kết quả: </td>
                    <td><input type="text" name="kq" disabled value="<?php if(isset($kq)) echo $kq ?>"/></td>
                </tr>
                <tr>
                	<td></td>
                    <td><a href="bai02.php">Quay lại trang khác</a></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>