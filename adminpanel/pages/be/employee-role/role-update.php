<?php
	include '../includes/head.php';
	require_once '../db/db_pdo.php';

	if(ISSET($_POST['updateRole'])){
		try{
            $id = $_POST['id'];
			$roleName = $_POST['roleName'];
            $roleDescription = $_POST['roleDescription'];
            $roleSalary = $_POST['roleSalary'];

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE `tbl_employee_role`SET `role_name` = '$roleName', `role_description` = '$roleDescription',
			`role_salary` = '$roleSalary' WHERE `id` = '$id'";
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
					title: "Role Successfully Updated",
					timer: 3000
				}).then(function(){

					window.location.replace("../../employee-role.php");

				});

			});

		</script>
	';
	}
?>