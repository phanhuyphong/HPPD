<?php
	// include controller Company
	include_once "Controller/cProduct.php";
	// Khai báo biến đại diện cho Controller Product
	$p = new controllProduct();
	$tblProduct = $p->getAllProduct();
	if($tblProduct){
		// Kiem tra ket qua tra ve co du lieu
		if(mysqli_num_rows($tblProduct)>0){
			// Tao bien dem de kiem tra hien thi du lieu
			$dem = 0;
			// Tao table hien thi du lieu
			echo "<table style='width: 100%'>";
			// Duyet tung dong du lieu trong ket qua nhan duoc sau truy van
			while($row = mysqli_fetch_assoc($tblProduct)){
				if($dem==0){
					echo "<tr>";
				}
				 echo "<td style='width:25%; height: 100px'>";
                        echo ("<img src='image/".$row["ProdImage"]."'alt='".$row["ProdName"]."' width='150px' height ='95px'/><br>");
                        echo("<b>".$row["ProdName"]."</b>");
                        echo("<br><i>".$row["ProdPrice"]."</i>");
                    echo "</td>";
				$dem++;
				if($dem%5==0){
					echo "</tr>";
					$dem=0;
				}
			}
			echo "</table>";
		}else {
			echo "0 result";
		}	
	}else{
		echo "Khong co gia tri";
	}
?>