<?php

    include '../includes/head.php';
    require_once '../db/db_mysqli.php';
	require_once '../db/db_pdo.php';

    if(isset($_POST['addEmployee'])){
        try{
                //pathinfo
                $target="../../images/employee/".basename($_FILES['image']['name']);
                $image=$_FILES['image']['name'];

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

            $query="INSERT INTO tbl_employee(`employee_image`, `employee_name`, `employee_role_id`,
            `employee_address`, `employee_age`, `employee_date_birth`,
            `employee_place_birth`, `employee_nationality`, `employee_religion`,
            `employee_email`, `employee_contact`, `employee_telephone`)
            VALUES ('$image', '$name', '$role', '$address', '$age', '$dateOfBirth', '$placeOfBirth',
            '$nationality', '$religion', '$email', '$contact', '$telephone')";

            $query_run = mysqli_query($connection, $query);
            //Move to path
            if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
            $msg="Image uploaded successfully";
            }
            if($query_run){
                echo '
            <script>

                $(document).ready(function(){

                    Swal.fire({
                        icon: "success",
                        title: "Employee Successfully Added",
                        timer: 3000
                    }).then(function(){

                        window.location.replace("../../employee.php");

                    });

                });

            </script>
        ';

            }
            else{
                echo '<script> alert("Data not Saved");</script>';
            }

        }catch(exception $e){

        }

    }
    ?>