<?php
	include '../includes/head.php';
	require_once '../db/db_pdo.php';

	if(ISSET($_POST['deleteFeedback'])){
		try{
			$id = $_POST['id'];
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "DELETE FROM `tbl_feedback` WHERE `id` = '$id'";
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
					title: "Feedback Successfully Deleted",
					timer: 3000
				}).then(function(){

					window.location.replace("../../feedback.php");

				});

			});

		</script>
	';
	}
?>