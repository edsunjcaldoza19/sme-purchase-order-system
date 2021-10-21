<?php include 'includes/head.php'?>

<body>
    <div class="loader_bg">
        <div class="loader">
        </div>
    </div>
    <div id="app">
        <?php include 'includes/sidebar.php'?>
        <div id="main" class="layout-navbar">
            <?php include 'includes/navbar.php'?>
            <div id="main-content">
                <div class="page-heading">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-12 col-md-6 order-md-1 order-last">
                                <h3>Feedback</h3>
                                <p class="text-subtitle text-muted">For users to browse view feedbacks</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <div class="breadcrumb-item">
                                            <p id="datetime" class="default-datetime">0:00</p>
                                        </div>
                                        <li class="breadcrumb-item active" aria-current="page">Feedbacks</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="section">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Feedback Title</th>
                                            <th>Feedback Content</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <!-- populate table with db data -->
                                            <?php
                                            require 'be/db/db_pdo.php';
                                                $sql = $conn->prepare("SELECT * FROM `tbl_feedback`");
                                                $sql->execute();

                                                while($fetch = $sql->fetch()){
                                            ?>
                                                <tr>
                                                    <td><?php echo $fetch['fb_title']?></td>
                                                    <td><?php echo $fetch['fb_content']?></td>
                                                    <td>
                                                        <button class="btn btn-danger btn-sm card-dashboard-button" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo $fetch['id']?>">Delete</button>
                                                    </td>
                                                </tr>
                                            <?php
                                                include 'includes/modals/feedback/delete.php';
                                                };
                                            ?>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                <?php
                    include 'includes/footer.php';
                ?>
                <!-- main-content -->
            </div>
        <!-- main -->
        </div>
    <!-- app -->
    </div>
    <?php include 'includes/scripts.php' ?>
</body>

</html>
