<?php
	include '../includes/head.php';
	require_once '../db/db_pdo.php';

	if(ISSET($_POST['addProduct'])){
		try{
			//Image Path Info
			$target="../../images/product/".basename($_FILES['image']['name']);
			$image=$_FILES['image']['name'];
			/**Product Info */
			$prodName = $_POST['prodName'];
            $prodDescription = $_POST['prodDescription'];
            $prodSupplier = $_POST['prodSupplier'];
            $prodPrice = $_POST['prodPrice'];
            $prodStock = $_POST['prodStock'];
            $prodManuDate = $_POST['prodManuDate'];
            $prodExpDate = $_POST['prodExpDate'];

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO tbl_product(`product_image`, `product_name`, `product_description`, `product_supplier_id`,
            `product_price`, `product_stock`, `product_manufacture_date`, `product_expiration_date`)
            VALUES ('$image', '$prodName', '$prodDescription', '$prodSupplier', '$prodPrice', '$prodStock', '$prodManuDate',
            '$prodExpDate')";
			//Move to path
            if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
				$msg="Image uploaded successfully";
				}
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
					title: "Product Successfully Added",
					timer: 3000
				}).then(function(){

					window.location.replace("../../product-info.php");

				});

			});

		</script>
	';
	}
?>
