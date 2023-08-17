<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
	<table class="main">
    	<tr>
        	<td colspan="2">DANH SÁCH SẢN PHẨM</td>
        </tr>
        <tr>
        	<td colspan="2">Trang chủ | Quản lý</td>
        </tr>
        <tr>
        	<td class="left">
            	<?php
					include_once "View/vCompany.php";
				?>
            </td>
            <td class="right" style="border: 1px solid; box-sizing: border-box;">
				<?php
					include_once "View/vProduct.php";
				?>
			</td>
        </tr>
        <tr>
        	<td colspan="2">Footer</td>
        </tr>
    </table>
</body>
</html>