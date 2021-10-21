<?php
	include '../includes/head.php';
	require_once '../db/db_pdo.php';

	if(ISSET($_POST['updateSupplier'])){
		try{
			$id = $_POST['id'];
			$supplierName = $_POST['supplierName'];
			$supplierAddress = $_POST['supplierAddress'];
			$supplierManufacturer = $_POST['supplierManufacturer'];
            $supplierDescription = $_POST['supplierDescription'];

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE `tbl_supplier`SET `supplier_name` = '$supplierName', `supplier_address` = '$supplierAddress',
            `supplier_manufacturer` = '$supplierManufacturer', `supplier_description` = '$supplierDescription' WHERE `id` = '$id'";
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
					title: "Supplier Successfully Updated",
					timer: 3000
				}).then(function(){

					window.location.replace("../../supplier.php");

				});

			});

		</script>
	';
	}
?>