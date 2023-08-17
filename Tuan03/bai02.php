<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>bai02</title>
</head>

<body>
	<?php
		$stn=$_REQUEST["stn"];
		$sth=$_REQUEST["sth"];
    ?>
    <center>
        <form action="xuLyBai02.php" method="get">
        	<h1>PHÉP TÍNH TRÊN HAI SỐ</h1>
            <table>
            	<tr>
                	<td>Chọn phép tính: </td>
                    <td>
                    	<input type="radio" name="ptinh" value="Cộng"/> Cộng
                        <input type="radio" name="ptinh" value="Trừ"/> Trừ
                        <input type="radio" name="ptinh" value="Nhân" /> Nhân
                        <input type="radio" name="ptinh" value="Chia"/> Chia
                    </td>
                </tr>
                <tr>
                	<td>Số thứ nhất: </td>
                    <td><input type="text" name="stn"></td>
                </tr>
                <tr>
                	<td>Số thứ hai: </td>
                    <td><input type="text" name="sth"></td>
                </tr>
                <tr>
                	<td colspan="2" align="center">
                    	<input type="submit" name="btnSub" value="Tính" />
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>