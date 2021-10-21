<?php
include '../includes/head.php';
require '../db/db_mysqli.php';

if(isset($_POST['addSupplier'])){
    try{
        /* Add a new supplier to the database */

        $supplierName = $_POST['supplierName'];
        $supplierAddress = $_POST['supplierAddress'];
        $supplierManufacturer = $_POST['supplierManufacturer'];
        $supplierDescription = $_POST['supplierDescription'];

        $query="INSERT INTO tbl_supplier(`supplier_name`, `supplier_address`, `supplier_manufacturer`, `supplier_description`)
        VALUES('$supplierName', '$supplierAddress', '$supplierManufacturer', '$supplierDescription')";
        $query_run = mysqli_query($connection, $query);

        if($query_run){
            echo '
            <script>

                $(document).ready(function(){

                    Swal.fire({
                        icon: "success",
                        title: "Supplier Successfully Added",
                        timer: 3000
                    }).then(function(){

                        window.location.replace("../../supplier.php");

                    });

                });

            </script>
        ';
            sleep(2);

        }
        else{
            echo '<script> alert("Data not Saved");</script>';
        }
    }catch(exception $e){


    }

}

?>
