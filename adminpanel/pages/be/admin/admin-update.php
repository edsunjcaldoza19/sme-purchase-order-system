<?php
	include '../includes/head.php';
	require_once '../db/db_pdo.php';

	if(ISSET($_POST['updateAdmin'])){
		try{
			$id = $_POST['adminId'];
            $name = $_POST['adminName'];
            $username = $_POST['adminUsername'];
            $password = $_POST['adminPassword'];
            $email = $_POST['adminEmail'];
            $mobile = $_POST['adminMobile'];

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE `tbl_account_admin` SET `admin_name`='$name',
            `admin_username`='$username',`admin_password`='$password',`admin_email`='$email',
            `admin_mobile`='$mobile' WHERE `id` = '$id'";
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
					title: "Admin Information Successfully Updated",
					timer: 3000
				}).then(function(){

					window.location.replace("../../profile.php");

				});

			});

		</script>
	';
	}
?>