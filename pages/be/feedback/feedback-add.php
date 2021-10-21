<?php
	include '../includes/head.php';
	require_once '../db/db_pdo.php';

	if(ISSET($_POST['addFeedback'])){
		try{
			$fbTitle = $_POST['fbTitle'];
            $fbContent = $_POST['fbContent'];

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO `tbl_feedback`(`id`, `fb_title`, `fb_content`) VALUES ('','$fbTitle','$fbContent')";
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
					title: "Feedback Successfully Sent",
					timer: 3000
				}).then(function(){

					window.location.replace("../../feedback.php");

				});

			});

		</script>
	';

	}
?>
