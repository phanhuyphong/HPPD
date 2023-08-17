<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>bai08</title>

<style>
	table, th, td {
		border:0.5px solid;
	}
	td{
		text-align:right;
		width:15px;		
	}
</style>
</head>

<body>
	<table>
    	<tr>
        	<th>i</th>
            <th>i<sup>2</sup></th>
        </tr>
        <?php
    		for($i=0;$i<=10;$i++){
				echo "<tr>";
				echo "<td>$i</td>";
				echo "<td>".pow($i,2)."</td>";
				echo "</tr>";
			}
   		?>
    </table>
</body>
</html>
