<?php
	include '../includes/head.php';
	require_once '../db/db_pdo.php';

	if(ISSET($_POST['addRole'])){
		try{
			$roleName = $_POST['roleName'];
            $roleDescription = $_POST['roleDescription'];
            $roleSalary = $_POST['roleSalary'];

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO tbl_employee_role(`role_name`, `role_description`, `role_salary`)
            VALUES ('$roleName', '$roleDescription', '$roleSalary')";
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
					title: "Employee Role Successfully Added",
					timer: 3000
				}).then(function(){

					window.location.replace("../../employee-role.php");

				});

			});

		</script>
	';
	}
?>
