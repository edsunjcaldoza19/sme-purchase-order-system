<?php
	include '../includes/head.php';
	require_once '../db/db_pdo.php';

	if(ISSET($_POST['updateProduct'])){
		try{
			$id = $_POST['id'];
			$prodName = $_POST['prodName'];
            $prodDescription = $_POST['prodDescription'];
            $prodSupplier = $_POST['prodSupplier'];
            $prodPrice = $_POST['prodPrice'];
            $prodStock = $_POST['prodStock'];
            $prodManuDate = $_POST['prodManuDate'];
            $prodExpDate = $_POST['prodExpDate'];

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE `tbl_product` SET `product_name`='$prodName',
			`product_description`='$prodDescription',`product_price`='$prodPrice',
			`product_stock`='$prodStock',`product_manufacture_date`='$prodManuDate',
			`product_expiration_date`='$prodExpDate',`product_supplier_id`='$prodSupplier'
			WHERE `id` = '$id'";
			$conn->exec($sql);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
		$conn = null;
		echo '
		<script>

			$(document).ready(function(){

				Swal.fire({
					icon: "success",
					title: "Product Successfully Updated",
					timer: 3000
				}).then(function(){

					window.location.replace("../../product-info.php");

				});

			});

		</script>
	';
	}
?>