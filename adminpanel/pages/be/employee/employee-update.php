<?php
    include '../includes/head.php';
	require_once '../db/db_pdo.php';

	if(ISSET($_POST['updateEmployee'])){
		try{
            $id = $_POST['id'];
			$name = $_POST['employeeName'];
            $role = $_POST['employeeRole'];
            $address = $_POST['employeeAddress'];
            $age = $_POST['employeeAge'];
            $dateOfBirth = $_POST['employeeDateOfBirth'];
            $placeOfBirth = $_POST['employeePlaceOfBirth'];
            $nationality = $_POST['employeeNationality'];
            $religion = $_POST['employeeReligion'];

            $email = $_POST['employeeEmail'];
            $contact = $_POST['employeeContactNumber'];
            $telephone = $_POST['employeeTelephoneNumber'];

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE `tbl_employee` SET `employee_name`='$name',
            `employee_role_id`='$role',`employee_address`='$address',
            `employee_age`='$age',`employee_date_birth`='$dateOfBirth',
            `employee_place_birth`='$placeOfBirth',`employee_nationality`='$nationality',
            `employee_religion`='$religion',`employee_email`='$email',
            `employee_contact`='$contact',`employee_telephone`='$telephone' WHERE `id` = '$id'";

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
					title: "Employee Successfully Updated",
					timer: 3000
				}).then(function(){

					window.location.replace("../../employee.php");

				});

			});

		</script>
	';
	}
?>
