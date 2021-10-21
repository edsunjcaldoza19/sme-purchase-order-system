<?php
	require 'be/db/db_pdo.php';
	session_start();

	if(!ISSET($_SESSION['cst_id'])){
		header('location:../auth-login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SME - System</title>


    <link href="../assets/fonts/nunito.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.css">
    <!-- Datatables -->
    <link rel="stylesheet" href="../assets/vendors/simple-datatables/style.css">
    <!-- BoldIcons -->
    <link rel="stylesheet" href="../assets/vendors/iconly/bold.css">
    <!-- Sweet Alert -->
    <link rel="stylesheet" href="../assets/vendors/sweetalert2/sweetalert2.min.css">
    <!-- Sidebar Scrollbar Replace Default Scroll -->
    <link rel="stylesheet" href="../assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <!-- Include Choices CSS -->
    <link rel="stylesheet" href="../assets/vendors/choices.js/choices.min.css" />
    <!-- Toastify -->
    <link rel="stylesheet" href="../assets/vendors/toastify/toastify.css">
    <!-- Chats -->
    <link rel="stylesheet" href="../assets/css/widgets/chat.css">
    <!-- File Pond -->
    <link href="../assets/vendors/filepond/filepond.css" rel="stylesheet">
    <link href="../assets/vendors/filepond/filepond-plugin-image-preview.css" rel="stylesheet">
    <!-- J Query -->
    <script src="../assets/vendors//jquery/jquery.min.js"></script>
    <!-- Animate.css -->
    <link rel="stylesheet" href="../assets/css/animate.css">

    <link rel="stylesheet" href="../assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/app.css">
    <link rel="shortcut icon" href="../assets/images/favicon.svg" type="image/x-icon">
</head>