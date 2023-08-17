<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bai09</title>
</head>

<body>
	<center>
    	<form action="xuLyBai09.php" name="bai09" method="post">
        	<table>
            	<tr>
                	<td colspan="2" align="center"><h2>Nhập thông tin sinh viên</h2></td>
                </tr>
                <tr>
                	<td><label>Họ Tên: </label></td>
                    <td><input type="text" name="hoten" required="required"/></td>
                </tr>
                <tr>
                	<td><label>Ngày, Tháng, Năm Sinh: </label></td>
                    <td><input type="text" name="ngaysinh" required="required"/></td>
                </tr>
                <tr>
                	<td><label>Lớp: </label></td>
                    <td><input type="text" name="lop" required="required"/></td>
                </tr>
                <tr>
                	<td><label>Địa Chỉ: </label></td>
                    <td><input type="text" name="diachi" required="required"/></td>
                </tr>
                <tr>
                	<td colspan="2" align="center"><input type="submit" name="btnSubmit" value="Lưu"/></td>
                </tr>
            </table>
        </form>
    </center>
    
    
</body>
</html>