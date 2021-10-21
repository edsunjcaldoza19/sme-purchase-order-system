<?php
    session_start();
	include '../includes/head.php';
	require_once '../db/db_pdo.php';

	if(ISSET($_POST['saveOrder'])){
		try{
            //Order Information
            $orderID = $_POST['orderRandomID'];
			$orderCashier = $_SESSION['cashier_name'];
			$orderDate = $_POST['orderDate'];
			$orderTime = $_POST['orderTime'];
            $orderTotal = $_POST['total'];
            $orderChange = $_POST['due'];
            $orderReceived = $_POST['paid'];
            //Order Details - Product Information
            $orderProduct = $_POST['productid'];
            $orderQuantity = $_POST['quantity'];
			$orderStock = $_POST['productStock'];
			$orderSubTotal = $_POST['producttotal'];

			//SQL Save Order
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO `tbl_order`(`order_transaction_id`,
            `order_cashier`, `order_total`, `order_money_received`, `order_change`,
			`order_date`, `order_time`)
            VALUES ('$orderID', '$orderCashier', '$orderTotal', '$orderReceived', '$orderChange',
			 '$orderDate', '$orderTime')";
			$conn->exec($sql);

            for($i=0; $i<count($orderQuantity); $i++){

				$updateQuantity = $orderStock[$i] - $orderQuantity[$i];

                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql1 = "INSERT INTO `tbl_order_details`(`order_id`, `order_product_id`,
                `order_quantity`, `order_subtotal`)
                VALUES ('$orderID', '$orderProduct[$i]', '$orderQuantity[$i]', '$orderSubTotal[$i]')";
                $conn->exec($sql1);
				//Update Stock based on the number of quantity ordered..
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $sql3 = "UPDATE `tbl_product` SET `product_stock`='$updateQuantity' WHERE `id` = $orderProduct[$i]";
                $conn->exec($sql3);
            }


		}catch(PDOException $e){
			echo $e->getMessage();
		}
		$conn = null;
		echo '
		<script>
			$(document).ready(function(){
				Swal.fire({
					icon: "success",
					title: "Order Successfully Added",
					timer: 3000
				}).then(function(){

					window.location.replace("../../transaction.php");

				});

			});

		</script>
	';
	}
?>
