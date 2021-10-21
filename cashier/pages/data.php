<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost","root","","sme-db");

$sqlQuery = "SELECT * FROM tbl_product ORDER BY product_stock ASC";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>
