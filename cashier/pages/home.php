<?php include 'includes/head.php' ?>

<body>
    <div class="loader_bg">
        <div class="loader">
        </div>
    </div>
    <div id="app">
        <?php include'includes/sidebar.php'?>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

        <div class="page-heading">
            <h3>Profile Statistics</h3>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-9">
                    <div class="row">
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card animate__animated animate__fadeInUp">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon purple">
                                                <i class="iconly-boldAdd-User"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                        <?php
                                            include 'be/db/db_pdo.php';
                                            $query = "SELECT * FROM tbl_supplier";
                                            $result=$conn->query($query);
                                            $count = $result->rowCount();
                                            ?>
                                            <h6 class="text-muted font-semibold">Suppliers</h6>
                                            <h4 class="font-extrabold mb-0"><?php echo $count; ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card animate__animated animate__fadeInUp animate__delay-1s">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon blue">
                                                <i class="iconly-boldUser"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                        <?php
                                            include 'be/db/db_pdo.php';
                                            $query = "SELECT * FROM tbl_employee";
                                            $result=$conn->query($query);
                                            $count = $result->rowCount();
                                            ?>
                                            <h6 class="text-muted font-semibold">Employees</h6>
                                            <h4 class="font-extrabold mb-0"><?php echo $count; ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card animate__animated animate__fadeInUp animate__delay-2s">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon green">
                                                <i class="iconly-boldAdd-User"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                        <?php
                                            include 'be/db/db_pdo.php';
                                            $query = "SELECT * FROM tbl_product";
                                            $result=$conn->query($query);
                                            $count = $result->rowCount();
                                            ?>
                                            <h6 class="text-muted font-semibold">Products</h6>
                                            <h4 class="font-extrabold mb-0"><?php echo $count; ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3 col-md-6">
                            <div class="card animate__animated animate__fadeInUp animate__delay-3s">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="stats-icon red">
                                                <i class="iconly-boldBookmark"></i>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                        <?php
                                            include 'be/db/db_pdo.php';
                                            $query = "SELECT * FROM tbl_employee_role";
                                            $result=$conn->query($query);
                                            $count = $result->rowCount();
                                            ?>
                                            <h6 class="text-muted font-semibold">Roles</h6>
                                            <h4 class="font-extrabold mb-0"><?php echo $count; ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <h3>Product Stock</h3>
                                    <p>This graph displays the number of stocks available per product. Lowest Stock Available
                                        will be displayed at the left side of the graph.
                                    </p>
                                </div>
                                <div class="card-body">
                                    <canvas id="graphCanvas" width="100%" height="40"></canvas>
                                </div>
                                <div class="card-footer small text-muted">
                                    <p>Graph will be updated each time a transaction is made.</p>
                                </div>
                                </div>
                            </div>
                    </div>

                </div>
                <div class="col-12 col-lg-3">
                <div class="card animate__animated animate__fadeInUp">
                            <div class="card-header">
                                <h4>Recent Employees</h4>
                            </div>
                            <div class="card-body pb-4">
                            <?php
                                require 'be/db/db_pdo.php';
                                    $sql = $conn->prepare("SELECT *, tbl_employee.id FROM
                                    tbl_employee LEFT JOIN tbl_employee_role ON
                                    tbl_employee_role.id=tbl_employee.employee_role_id LIMIT 4"
                                    );
                                    $sql->execute();

                                    while($fetch = $sql->fetch()){
                            ?>
                                    <div class="name ms-4">
                                        <h5 class="mb-1" style="white-space: nowrap; width: 100%; overflow: hidden; text-overflow: ellipsis;"><?php echo $fetch['employee_name'];?></h5>
                                        <h6 class="text-muted mb-0" style="white-space: nowrap; width: 100%; overflow: hidden; text-overflow: ellipsis;"><?php echo $fetch['employee_email']; ?></h6>
                                    </div>
                                <?php
                                    }
                                ?>
                                <div class="px-4">
                                    <a href="employee.php" class='btn btn-block btn-xl btn-light-primary font-bold mt-3'>View Employees</a>
                                </div>
                            </div>
                        </div>
                </div>
            </section>
        </div>

    <?php
        include 'includes/footer.php';
    ?>
        </div>
    </div>
    <?php include 'includes/scripts.php' ?>
    <script>
        $(document).ready(function () {
          showGraph();
      });


    function showGraph()
    {
        {
            $.post("data.php",
            function (data)
            {
                console.log(data);
                var productName = [];
                var productQuantity = [];

                for (var i in data) {
                    productName.push(data[i].product_name);
                    productQuantity.push(data[i].product_stock);
                }

                var chartdata = {
                    labels: productName,
                    datasets: [
                        {
                            label: 'Product Stock',
                            backgroundColor: "rgba(2,117,216)",
                            borderColor: "rgba(2,117,216,1)",
                            pointBackgroundColor: "rgba(2,117,216,1)",
                            pointBorderColor: "rgba(255,255,255,0.8)",
                            pointRadius: 7,
                            pointHoverRadius: 10,
                            pointHoverBackgroundColor: "rgba(2,117,216,1)",
                            pointHitRadius: 5,
                            pointBorderWidth: 2,
                            data: productQuantity
                        }
                    ]
                };

                var graphTarget = $("#graphCanvas");

                var barGraph = new Chart(graphTarget, {
                    type: 'bar',
                    data: chartdata,
                    options: {
                    scales: {
                        xAxes: [{
                        time: {
                            unit: 'date'
                        },
                        gridLines: {
                            display: false
                        },
                        ticks: {
                            maxTicksLimit: 10
                        }
                        }],
                        yAxes: [{
                        ticks: {
                            min: 0,
                            maxTicksLimit: 10
                        },
                        gridLines: {
                            color: "rgba(0, 0, 0, .125)",
                        }
                        }],
                    },
                    legend: {
                        display: false
                    }
                    }
                });
            });
        }
    }
    </script>
</body>

</html>
