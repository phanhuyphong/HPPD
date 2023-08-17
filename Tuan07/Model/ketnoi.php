<?php
    // Kết nối đến MySQL
    class clsKetNoi{
        function ketnoiDB(& $conn){
        $host = "localhost";
        $username = "userngoc";
        $password = "123456";
        $dbname = "kimngoc";
        $conn = mysqli_connect($host,$username,$password,$dbname);
        if($conn){
            return mysqli_select_db($conn, $dbname);
       	}
		 else{
            echo "Chưa kết nối";
        }
        }
        function dongKetNoiDB($conn){
            mysqli_close($conn);
        }
    }
        
?>