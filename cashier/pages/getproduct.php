<?php
    include_once 'be/db/db_pdo.php';

    $id = $_GET["id"];
    $select = $conn->prepare("SELECT * FROM tbl_product WHERE id = :ppid ");
    $select->bindParam(":ppid", $id);
    $select->execute();
    $row = $select->fetch(PDO::FETCH_ASSOC);
    $response=$row;
    header('Content-Type: application/json');
    echo json_encode($response);
?>