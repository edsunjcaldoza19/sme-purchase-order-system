<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <i class="bi bi-person-lines-fill"></i>
                <a href="home.php">Cashier</a>
            </div>
            <div class="toggler">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            <li class="sidebar-title">Menu</li>
            <li class="sidebar-item <?= ($activePage == 'home') ? 'active': ''; ?>">
                <a href="home.php" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="sidebar-item <?= ($activePage == 'product-browse') ? 'active': ''; ?>">
                <a href="product-browse.php" class='sidebar-link'>
                    <i class="bi bi-cart-check-fill"></i>
                    <?php
                        include 'be/db/db_pdo.php';
                        $query = "SELECT * FROM tbl_product";
                        $result=$conn->query($query);
                        $count = $result->rowCount();
                    ?>
                    <span>Products</span><span class="badge bg-success"><?php echo $count; ?></span>
                </a>
            </li>
            <li class="sidebar-item <?= ($activePage == 'recent') ? 'active': ''; ?>">
                <a href="recent.php" class='sidebar-link'>
                    <i class="bi bi-clock"></i>
                    <?php
                        include 'be/db/db_pdo.php';
                        $query = "SELECT * FROM tbl_order";
                        $result=$conn->query($query);
                        $count = $result->rowCount();
                    ?>
                    <span>Recent</span><span class="badge bg-danger"><?php echo $count; ?></span>
                </a>
            </li>
            <li class="sidebar-title">Order</li>
            <li class="sidebar-item <?= ($activePage == 'transaction') ? 'active': ''; ?>">
                <a href="transaction.php" class='sidebar-link'>
                    <i class="bi bi-list-check"></i>
                    <span>Transaction</span>
                </a>
            </li>
            <li class="sidebar-title">Others</li>
            <li class="sidebar-item <?= ($activePage == 'faqs') ? 'active': ''; ?>">
                <a href="faqs.php" class='sidebar-link'>
                    <i class="bi bi-question-circle-fill"></i>
                    <span>FAQS</span>
                </a>
            </li>
            <li class="sidebar-item <?= ($activePage == 'feedback') ? 'active': ''; ?>">
                <a href="feedback.php" class='sidebar-link'>
                    <i class="bi bi-file-check-fill"></i>
                    <span>Customer Feedbacks</span>
                </a>
            </li>
            <li class="sidebar-item <?= ($activePage == 'setting') ? 'active': ''; ?>">
                <a href="setting.php" class='sidebar-link'>
                    <i class="bi bi-gear-fill"></i>
                    <span>Settings</span>
                </a>
            </li>
            <li class="sidebar-title">Exit</li>
            <li class="sidebar-item">
                <a href="be/auth/logout.php" class='sidebar-link'>
                    <i class="bi bi-reply-all-fill"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
        </div>