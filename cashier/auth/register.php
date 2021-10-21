<?php
	session_start();
	include 'includes/head.php';
    require '../auth/db_mysqli.php';
    require '../auth/db_pdo.php';

	if(ISSET($_POST['cashierSignUp'])){
        $name = $_POST['cashierName'];
        $email = $_POST['cashierEmail'];
        $username = $_POST['cashierUsername'];
        $password = $_POST['cashierPassword'];
        $confirm = $_POST['cashierConfirm'];

		if($name != "" || $email != "" ||$username != "" || $password != "" || $confirm != ""){
			try{
                if($password == $confirm){
                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $sql = "INSERT INTO `tbl_account_cashier` VALUES ('', '$username', '$password', '$name', '$email')";
                    $conn->exec($sql);
                    echo '
                    <script>
                        $(document).ready(function(){
                            Swal.fire({
                                icon: "success",
                                title: "Cashier Account Successfully Created. You can now Login",
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