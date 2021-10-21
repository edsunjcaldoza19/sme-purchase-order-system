<?php
	include '../includes/head.php';
	require_once '../db/db_pdo.php';

	if(ISSET($_POST['deleteEmployee'])){
		try{
			$id = $_POST['id'];
			$filePath = "../../images/employee/".basename($_POST['fileToRemove']);

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "DELETE FROM `tbl_employee` WHERE `id` = '$id'";
			$conn->exec($sql);

			if(file_exists($filePath)){
				unlink($filePath);
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
					title: "Employee Successfully Deleted",
					timer: 3000
				}).then(function(){

					window.location.replace("../../employee.php");

				});

			});

		</script>
	';
	}
?>