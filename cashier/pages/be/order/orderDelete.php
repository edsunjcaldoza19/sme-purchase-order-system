<?php
	include '../includes/head.php';
	require_once '../db/db_pdo.php';

	if(ISSET($_POST['deleteOrder'])){
		try{
			$id = $_POST['id'];
            $transactionID = $_POST['transactionID'];

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$order = "DELETE FROM `tbl_order` WHERE `id` = '$id'";
			$conn->exec($order);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$orderDetails = "DELETE FROM `tbl_order_details` WHERE `order_id` = '$transactionID'";
			$conn->exec($orderDetails);

		}catch(PDOException $e){
			echo $e->getMessage();
		}
		$conn = null;
		echo '
		<script>

			$(document).ready(function(){

				Swal.fire({
					icon: "success",
					title: "Order and Order Details Successfully Deleted",
					timer: 3000
				}).then(function(){

					window.location.replace("../../recent.php");

				});

			});

		</script>
	';
	}
?>