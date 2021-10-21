<?php
	session_start();
	include 'includes/head.php';
    require '../includes/db_pdo.php';

	if(ISSET($_POST['customerSignUp'])){
        $name = $_POST['cstName'];
        $email = $_POST['cstEmail'];
        $gender = $_POST['cstGender'];
        $birthdate = $_POST['cstBirthdate'];
        $username = $_POST['cstUsername'];
        $password = $_POST['cstPassword'];
        $confirm = $_POST['cstConfirm'];

		if($name != "" || $email != "" ||$username != "" || $password != "" || $confirm != ""){
			try{
                if($password == $confirm){
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "INSERT INTO `tbl_account_customer` VALUES ('', '$name', '$email', '$gender', '$birthdate', '$username', '$password')";
                    $conn->exec($sql);
                    echo '
                    <script>
                        $(document).ready(function(){
                            Swal.fire({
                                icon: "success",
                                title: "Customer Account Successfully Created. You are now eligible to view your recent purchases",
                                timer: 3000
                            }).then(function(){

                                window.location.replace("../auth-login.php");

                            });
                        });

                    </script>
                ';
                }
                else{
                    echo '
                    <script>
                        $(document).ready(function(){

                            Swal.fire({
                                icon: "error",
                                title: "Password Mismatch. Please try again",
                                timer: 2000
                            }).then(function(){

                                window.location.replace("../auth-register.php");

                            });
                        });

                    </script>
                ';
                }

			}catch(PDOException $e){
				echo $e->getMessage();
			}
			$conn = null;
		}else{
			echo '
                    <script>
                        $(document).ready(function(){

                            Swal.fire({
                                icon: "error",
                                title: "Please fill out the required fields",
                                timer: 2000
                            }).then(function(){
                                window.location.replace("../auth-register.php");

                            });
                        });

                    </script>
                ';
		}
	}
?>