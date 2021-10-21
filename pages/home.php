<?php include 'includes/head.php' ?>

<body>
    <div class="loader_bg">
        <div class="loader">
        </div>
    </div>
    <div id="app">
        <?php include'includes/sidebar.php'?>
        </div>
        <div id="main" class="layout-navbar">
        <?php include 'includes/navbar.php'?>
            <div id="main-content">

        <div class="page-heading">
            <h2>Welcome <?php echo $_SESSION['cst_name']; ?>!</h2>
        </div>
        <div class="page-content">
            <section class="row">
                <div class="card">
                    <div class="card-header">
                        <h1 style="text-align: center;">Start Browsing our Products</h1>

                    </div>
                    <div class="card-body">
                        <img src="../assets/images/home/cst_home1.png" width="100%" height="100%">

                    </div>
                </div>

            </section>
        </div>


    <?php
        include 'includes/footer.php';
    ?>
    </div>
        </div>
    </div>
    <?php include 'includes/scripts.php' ?>
</body>

</html>
