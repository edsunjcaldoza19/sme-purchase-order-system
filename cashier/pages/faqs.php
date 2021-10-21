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
                                <h3>FAQS (Frequently Asked Questions)</h3>
                                <p class="text-subtitle text-muted">For users to browse view Frequently Asked Questions</p>
                            </div>
                            <div class="col-12 col-md-6 order-md-2 order-first">
                                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">FAQS</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="section">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="media d-flex align-items-center">
                            <div class="avatar me-3">
                                <img src="../../assets/images/faces/1.jpg" alt="" srcset="">
                                <span class="avatar-status bg-success"></span>
                            </div>
                            <div class="name flex-grow-1">
                                <h6 class="mb-0">FAQS Bot</h6>
                                <span class="text-xs">Online</span>
                            </div>
                            <button class="btn btn-sm">
                                <i data-feather="x"></i>
                            </button>
                        </div>
                    </div>
                    <?php
                                    require 'be/db/db_pdo.php';
                                        $sql = $conn->prepare("SELECT * FROM `tbl_faqs`");
                                        $sql->execute();

                                        while($fetch = $sql->fetch()){
                                ?>
                                <div class="card-body pt-4 bg-grey">
                                    <div class="chat-content">
                                        <div class="chat">
                                            <div class="chat-body">
                                                <div class="chat-message"><?php echo $fetch['faqs_question']; ?></div>
                                            </div>
                                        </div>
                                        <div class="chat chat-left">
                                            <div class="chat-body">
                                                <div class="chat-message"><?php echo $fetch['faqs_answer']; ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                }
                                ?>
                    <div class="card-footer">
                    </div>
                </div>
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
