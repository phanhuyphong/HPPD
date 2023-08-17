<?php
	// include model Product
	include_once "Model/mProduct.php";
	class ControllProduct{
		function getAllProduct(){
            $p = new modelProduct();
            $tblProduct = $p->SelectAllProduct();
            return $tblProduct;
        }
	}
?>