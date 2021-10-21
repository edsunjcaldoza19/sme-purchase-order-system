<?php
	include '../includes/head.php';
	require_once '../db/db_pdo.php';

	if(ISSET($_POST['customerUpdate'])){
		try{
            $id = $_POST['cstID'];
			$name = $_POST['cstName'];
            $email = $_POST['cstEmail'];
			$gender = $_POST['cstGender'];
			$birthdate = $_POST['cstBirthdate'];
            $username = $_POST['cstUsername'];
            $password = $_POST['cstPassword'];

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE `tbl_account_customer` SET
			`cst_name`='$name',`cst_email`='$email',`cst_gender`='$gender',
			`cst_birthdate`='$birthdate',`cst_username`='$username',`cst_password`='$password'
			WHERE `id` = '$id'";
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