<?php
	include '../includes/head.php';
	require_once '../db/db_pdo.php';

	if(ISSET($_POST['updateSME'])){
		try{
			$smeName = $_POST['smeName'];
            $smeDescription = $_POST['smeDescription'];

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE `tbl_sme` SET `sme_name`='$smeName',
			`sme_description`='$smeDescription'";
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
					title: "SME Information Successfully Updated",
					timer: 3000
				}).then(function(){

					window.location.replace("../../setting.php");

				});

			});

		</script>
	';
	}
?>