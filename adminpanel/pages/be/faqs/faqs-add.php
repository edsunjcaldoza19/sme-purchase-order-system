<?php
	include '../includes/head.php';
	require_once '../db/db_pdo.php';

	if(ISSET($_POST['addFaqs'])){
		try{
			$faqsQuestion = $_POST['faqsQuestion'];
            $faqsAnswer = $_POST['faqsAnswer'];

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO tbl_faqs(`faqs_question`, `faqs_answer`)
            VALUES ('$faqsQuestion', '$faqsAnswer')";
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
					title: "FAQS Successfully Added",
					timer: 3000
				}).then(function(){

					window.location.replace("../../faqs.php");

				});

			});

		</script>
	';
	}
?>
