<?php
	include '../includes/head.php';
	require_once '../db/db_pdo.php';

	if(ISSET($_POST['cashierUpdate'])){
		try{
            $id = $_POST['cashierID'];
			$name = $_POST['cashierName'];
            $email = $_POST['cashierEmail'];
            $username = $_POST['cashierUsername'];
            $password = $_POST['cashierPassword'];

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE `tbl_account_cashier` SET `cashier_username`='$username',
            `cashier_password`='$password',`cashier_name`='$name',`cashier_email`='$email' WHERE `id` = '$id'";
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
					title: "Account Successfully Updated",
					timer: 3000
				}).then(function(){

					window.location.replace("../../setting.php");

				});

			});

		</script>
	';
	}
?>