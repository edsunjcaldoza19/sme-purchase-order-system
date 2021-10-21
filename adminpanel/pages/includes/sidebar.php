<?php $activePage = basename($_SERVER['PHP_SELF'], ".php"); ?>
<div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header">
        <div class="d-flex justify-content-between">
            <div class="logo">
                <i class="bi bi-person-lines-fill"></i>
                <a href="home.php">Admin</a>
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
            <li class="sidebar-item <?= ($activePage == 'supplier') ? 'active': ''; ?>">
                <a href="supplier.php" class='sidebar-link'>
                    <i class="bi bi-house-fill"></i>
                    <span>Suppliers</span>
                </a>
            </li>
            <li class="sidebar-item has-sub <?= ($activePage == 'product-info' || $activePage == 'product-browse') ? 'active': ''; ?> ">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-cart-check-fill"></i>
                    <span>Products</span>
                </a>
                <ul class="submenu <?= ($activePage == 'product-info' || $activePage == 'product-browse') ? 'active': ''; ?>">
                    <li class="submenu-item <?= ($activePage == 'product-info') ? 'active': ''; ?>">
                        <a href="product-info.php">Product Info</a>
                    </li>
                    <li class="submenu-item <?= ($activePage == 'product-browse') ? 'active': ''; ?>">
                        <a href="product-browse.php">Products Browse</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item <?= ($activePage == 'customer') ? 'active': ''; ?>">
                <a href="customer.php" class='sidebar-link'>
                    <i class="bi bi-people-fill"></i>
                    <span>Customers</span>
                </a>
            </li>
            <li class="sidebar-title">Accounts</li>
            <li class="sidebar-item <?= ($activePage == 'profile') ? 'active': ''; ?>">
                <a href="profile.php" class='sidebar-link'>
                    <i class="bi bi-person-check-fill"></i>
                    <span>Profile</span>
                </a>
            </li>
            <li class="sidebar-item has-sub <?= ($activePage == 'employee-role' || $activePage == 'employee' || $activePage == 'employee-browse' ) ? 'active': ''; ?> ">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-person-lines-fill"></i>
                    <span>Employees</span>
                </a>
                <ul class="submenu <?= ($activePage == 'employee-role' || $activePage == 'employee' || $activePage == 'employee-browse' ) ? 'active': ''; ?>">
                    <li class="submenu-item <?= ($activePage == 'employee-role') ? 'active': ''; ?>">
                        <a href="employee-role.php">Employee Roles</a>
                    </li>
                    <li class="submenu-item <?= ($activePage == 'employee') ? 'active': ''; ?>">
                        <a href="employee.php">Employee Info</a>
                    </li>
                    <li class="submenu-item <?= ($activePage == 'employee-browse') ? 'active': ''; ?>">
                        <a href="employee-browse.php">Browse Employees</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-title">Stats</li>
            <li class="sidebar-item <?= ($activePage == 'order') ? 'active': ''; ?>">
                <a href="order.php" class='sidebar-link'>
                    <i class="bi bi-list-check"></i>
                    <span>Orders History</span>
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