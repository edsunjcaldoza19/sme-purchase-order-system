<?php include 'includes/head.php' ?>

<body>
    <div class="loader_bg">
        <div class="loader">
        </div>
    </div>
    <div id="app">
        <?php include'includes/sidebar.php'?>
        <div id="main" class="layout-navbar">
        <?php include 'includes/navbar.php'?>
        <div id="main-content">
            <div class="page-heading">
                <h3>Profile Statistics</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-9">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="bg-success card animate__animated animate__fadeInUp">
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
                                                $query = "SELECT * FROM tbl_supplier";
                                                $result=$conn->query($query);
                                                $count = $result->rowCount();
                                                ?>
                                                <h6 class="font-semibold text-white">Suppliers</h6>
                                                <h4 class="font-extrabold text-white mb-0"><?php echo $count; ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="bg-primary card animate__animated animate__fadeInUp animate__delay-1s">
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
                                                <h6 class="text-white font-semibold">Employees</h6>
                                                <h4 class="text-white font-extrabold mb-0"><?php echo $count; ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="bg-danger card animate__animated animate__fadeInUp animate__delay-2s">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
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
                                                <h6 class="text-white font-semibold">Products</h6>
                                                <h4 class="text-white font-extrabold mb-0"><?php echo $count; ?></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-3 col-md-6">

                                <div class="bg-primary card animate__animated animate__fadeInUp animate__delay-3s">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
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
                                                <h6 class="text-white font-semibold">Roles</h6>
                                                <h4 class="text-white font-extrabold mb-0"><?php echo $count; ?></h4>
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
                                    <canvas id="graphCanvas" width="100%" height="50"></canvas>
                                </div>
                                <div class="card-footer small text-muted">
                                    <p>Graph will be updated each time a transaction is made.</p>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-xl-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Latest Comments</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Comment</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    require 'be/db/db_pdo.php';
                                                        $sql = $conn->prepare("SELECT * FROM `tbl_feedback`");
                                                        $sql->execute();

                                                        while($fetch = $sql->fetch()){
                                                    ?>
                                                    <tr>
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="../../assets/images/faces/5.jpg">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0"><?php echo $fetch['fb_title'] ?></p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0"><?php echo $fetch['fb_content'] ?></p>
                                                        </td>
                                                    </tr>
                                                    <?php
                                                        };
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3">
                    <div class="card animate__animated animate__fadeInUp animate__delay-4s">
                        <div class="card-content">
                            <img class="img-fluid w-100" src="../../assets/images/home/home-1.png" alt="Card image cap">
                        </div>
                    </div>
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
                                <div class="recent-message d-flex px-4 py-3">
                                    <div class="avatar avatar-lg">
                                    <?php
                                        $image = (!empty($fetch['employee_image'])) ? 'images/employee/'.$fetch['employee_image'] : 'images/employee/default-img-2021-8.jpg';
                                    ?>
                                        <img src="<?php echo $image; ?>">
                                    </div>

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
