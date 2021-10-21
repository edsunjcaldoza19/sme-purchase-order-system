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
                            <h3>Settings</h3>
                            <p class="text-subtitle text-muted">For users to browse view settings</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <div class="breadcrumb-item">
                                            <p id="datetime" class="default-datetime">0:00</p>
                                        </div>
                                    <li class="breadcrumb-item active" aria-current="page">Settings</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>UPDATE INFORMATION</h4>
                            <hr>
                        </div>
                        <div class="card-body">
                            <?php
                                require 'be/db/db_pdo.php';
                                $sql = $conn->prepare("SELECT * FROM `tbl_sme`");
                                $sql->execute();
                                $fetch = $sql->fetch()
                            ?>
                            <form action="be/sme/sme-update.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="smeName" placeholder="Enter Name...">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control" name="smeDescription" placeholder="Enter Description"></textarea>
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-success btn-sm" name="updateSME">Update Information</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>SME Information</h4>
                            <hr>
                        </div>
                        <div class="card-body">
                            <h4><?php echo $fetch['sme_name'] ?></h4>
                            <p><?php echo $fetch['sme_description'] ?></p>

                        </div>
                    </div>
                </div>
                </div>
            </section>
    <?php
        include 'includes/footer.php';
    ?>
            </div>
        </div>
    </div>
    <?php include 'includes/scripts.php' ?>
</body>

</html>
