<?php
	include 'includes/head.php';
	session_start();

	require_once 'db_pdo.php';

	if(ISSET($_POST['login'])){
		if($_POST['username'] != "" || $_POST['password'] != ""){
			$username = $_POST['username'];
			// md5 encrypted
			// $password = md5($_POST['password']);
			$password = $_POST['password'];
			$sql = "SELECT * FROM `tbl_account_cashier` WHERE `cashier_username`=? AND `cashier_password`=? ";
			$query = $conn->prepare($sql);
			$query->execute(array($username,$password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				$_SESSION['cashier_id'] = $fetch['id'];
				$_SESSION['cashier_name'] = $fetch['cashier_name'];
				$_SESSION['cashier_email'] = $fetch['cashier_email'];
				echo '
					<script>
						$(document).ready(function(){
							Swal.fire({
								icon: "success",
								title: "Login Successful. Please Wait...",
								text: "SME Purchase Order and Management System",
								timer: 3000,
								showConfirmButton: false
							}).then(function(){

								window.location.replace("../pages/home.php");

							});

						});
					</script>
				';
			} else{
				echo '
					<script>
						$(document).ready(function(){
							Swal.fire({
								icon: "error",
								title: "Invalid User Credentials Please Login Again",
								timer: 2000
							}).then(function(){

								window.location.replace("../auth-login.php");

							});

						});
					</script>
				';
			}
		}else{
			echo '
					<script>
						$(document).ready(function(){
							Swal.fire({
								icon: "error",
								title: "Please input username and Password First",
								timer: 2000
							}).then(function(){

								window.location.replace("../auth-login.php");

							});

						});
					</script>
				';
		}
	}
?>