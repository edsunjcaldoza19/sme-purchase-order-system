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
                                        <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Feedbacks</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <section>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>Send Feedback</h3>
                                    <p>Please write your feedback about the system. This includes the feedback title and the content</p>
                                </div>
                                <div class="card-body">
                                    <form action="be/feedback/feedback-add.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label>Feedback Title</label>
                                        <input type="text" class="form-control" name="fbTitle" placeholder="Enter Title" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Feedback Content</label>
                                        <textarea class="form-control" name="fbContent" placeholder="Enter Content" rows="8"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-success" name="addFeedback">Submit feedback</button>
                                    </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <p>Note: Your feedbacks can be viewed by the administrator and other users. Please be polite
                                        with the words that you choose.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3>View Customer Feedbacks</h3>
                                </div>
                                <div class="card-body">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Feedback Title</th>
                                            <th>Feedback Content</th>
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
                                                </tr>
                                            <?php
                                                };
                                            ?>
                                        </tbody>
                                </table>
                                </div>
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
