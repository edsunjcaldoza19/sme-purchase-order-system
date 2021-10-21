-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 06:11 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sme-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account_admin`
--

CREATE TABLE `tbl_account_admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_mobile` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_account_admin`
--

INSERT INTO `tbl_account_admin` (`id`, `admin_name`, `admin_username`, `admin_password`, `admin_email`, `admin_mobile`) VALUES
(1, 'Administrator', 'admin', 'admin', 'example@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account_cashier`
--

CREATE TABLE `tbl_account_cashier` (
  `id` int(11) NOT NULL,
  `cashier_username` varchar(100) NOT NULL,
  `cashier_password` varchar(100) NOT NULL,
  `cashier_name` varchar(200) NOT NULL,
  `cashier_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_account_cashier`
--

INSERT INTO `tbl_account_cashier` (`id`, `cashier_username`, `cashier_password`, `cashier_name`, `cashier_email`) VALUES
(1, 'username', 'password', 'Edsun1', 'edsuncaldoza@gmail.com'),
(10, 'Edsun19', 'edsuncaldoza', 'Edsun', 'edsunjcaldoza@gmail.com'),
(11, '123', '123', 'Edsun', 'edsun@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account_customer`
--

CREATE TABLE `tbl_account_customer` (
  `id` int(11) NOT NULL,
  `cst_name` varchar(100) NOT NULL,
  `cst_email` varchar(100) NOT NULL,
  `cst_gender` varchar(11) NOT NULL,
  `cst_birthdate` varchar(50) NOT NULL,
  `cst_username` varchar(100) NOT NULL,
  `cst_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_account_customer`
--

INSERT INTO `tbl_account_customer` (`id`, `cst_name`, `cst_email`, `cst_gender`, `cst_birthdate`, `cst_username`, `cst_password`) VALUES
(1, 'Edsun', 'edsun@sample.com', 'Male', '2001-02-19', 'EdsunCaldoza', 'edsun'),
(2, 'EJ', 'ej@gmail.com', 'Male', '2002-02-01', 'edsun', 'edsun'),
(3, 'user11', 'user1@gmail.com', 'Male', '2021-08-10', 'user', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee`
--

CREATE TABLE `tbl_employee` (
  `id` int(11) NOT NULL,
  `employee_image` varchar(100) NOT NULL,
  `employee_name` varchar(100) NOT NULL,
  `employee_role_id` int(11) NOT NULL,
  `employee_address` varchar(200) NOT NULL,
  `employee_age` int(11) NOT NULL,
  `employee_date_birth` date NOT NULL,
  `employee_place_birth` varchar(200) NOT NULL,
  `employee_nationality` varchar(100) NOT NULL,
  `employee_religion` varchar(100) NOT NULL,
  `employee_email` varchar(100) NOT NULL,
  `employee_contact` varchar(20) NOT NULL,
  `employee_telephone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_employee`
--

INSERT INTO `tbl_employee` (`id`, `employee_image`, `employee_name`, `employee_role_id`, `employee_address`, `employee_age`, `employee_date_birth`, `employee_place_birth`, `employee_nationality`, `employee_religion`, `employee_email`, `employee_contact`, `employee_telephone`) VALUES
(39, 'demo-pic21.jpg', 'Jane Doe', 4, 'Jaro', 22, '2021-08-27', 'Carigara, Leyte', 'Filipino', 'Catholic', 'admin@example.com', '09123456789', '09123456789'),
(41, 'c34505eb63edc65300a690f1ad903799.jpg', 'Jane Doe', 8, 'Hiagsam', 18, '2021-08-18', 'Carigara, Leyte', 'Filipino', 'Roman Catholic', 'edsunjcaldoza@gmail.com', '12345678912', '09123456789');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employee_role`
--

CREATE TABLE `tbl_employee_role` (
  `id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `role_description` varchar(1000) NOT NULL,
  `role_salary` double(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_employee_role`
--

INSERT INTO `tbl_employee_role` (`id`, `role_name`, `role_description`, `role_salary`) VALUES
(2, 'Sales Lady', 'Serves customer requests', 115000.00),
(4, 'Branch Manager', 'Manages Branch', 50000.00),
(8, 'Cashier', 'Accepts Customer Trasactions', 25000.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faqs`
--

CREATE TABLE `tbl_faqs` (
  `id` int(11) NOT NULL,
  `faqs_question` varchar(1000) NOT NULL,
  `faqs_answer` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_faqs`
--

INSERT INTO `tbl_faqs` (`id`, `faqs_question`, `faqs_answer`) VALUES
(1, 'What is SME?', 'Small and Mid Sized Enterprise'),
(2, 'How to purchase order?', 'Select items and input quantity. System will automatically calculate the total amount of bill ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `id` int(11) NOT NULL,
  `fb_title` varchar(50) NOT NULL,
  `fb_content` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`id`, `fb_title`, `fb_content`) VALUES
(2, 'Sample Title', 'Sample Content');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `order_transaction_id` varchar(25) NOT NULL,
  `order_customer_id` int(11) NOT NULL,
  `order_cashier` varchar(100) NOT NULL,
  `order_date` varchar(11) NOT NULL,
  `order_time` varchar(11) NOT NULL,
  `order_total` decimal(11,2) NOT NULL,
  `order_money_received` decimal(11,2) NOT NULL,
  `order_change` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `order_transaction_id`, `order_customer_id`, `order_cashier`, `order_date`, `order_time`, `order_total`, `order_money_received`, `order_change`) VALUES
(37, 'cgP1QWPMOho9KnNGpzRy', 0, 'Edsun', '11-08-21', '05:09:53', '10000.00', '10000.00', '0.00'),
(38, 'N0prFnqKjgXwEHx8kcHH', 1, 'Edsun', '11-08-21', '05:30:11', '10000.00', '10000.00', '0.00'),
(39, 'AzZlxBJHxSj4cRRGgxtm', 1, 'Edsun', '11-08-21', '07:54:35', '20000.00', '20000.00', '0.00'),
(40, 'QHZDc4WzjrfNJFn3v9WV', 2, 'Edsun', '11-08-21', '08:11:53', '100000.00', '100000.00', '0.00'),
(41, 'CyQkGw6wvr4XSil7oAy3', 3, 'Edsun', '17-08-21', '04:39:18', '30000.00', '30000.00', '0.00'),
(42, 'Cb4XCkhU7tXBwFcYxn3c', 0, 'Edsun', '18-08-21', '10:07:39', '30000.00', '50000.00', '20000.00'),
(43, 'EKnMY9fE78T8tW31NrR8', 3, 'Edsun', '18-08-21', '10:13:18', '15000.00', '15000.00', '0.00'),
(45, 'YbZcult3yiveI48Ysk9S', 1, 'Edsun', '18-08-21', '10:14:17', '50000.00', '50000.00', '0.00'),
(46, 'HvUJufCVp5LG5cP07DDz', 1, 'Edsun', '20-08-21', '07:15:15', '45000.00', '45000.00', '0.00'),
(47, 'Cz4Iu5y35JrKodAns3I4', 1, 'Edsun1', '13-09-21', '05:37:00', '80000.00', '100000.00', '20000.00'),
(48, 'FVs8J7cTwf3n2WRuiqhv', 1, 'Edsun1', '19-10-21', '06:02:05', '20000.00', '20000.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_details`
--

CREATE TABLE `tbl_order_details` (
  `id` int(11) NOT NULL,
  `order_id` varchar(25) NOT NULL,
  `order_product_id` int(11) NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `order_subtotal` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`id`, `order_id`, `order_product_id`, `order_quantity`, `order_subtotal`) VALUES
(51, 'cgP1QWPMOho9KnNGpzRy', 11, 1, '10000.00'),
(52, 'N0prFnqKjgXwEHx8kcHH', 11, 1, '10000.00'),
(53, 'AzZlxBJHxSj4cRRGgxtm', 11, 2, '20000.00'),
(54, 'QHZDc4WzjrfNJFn3v9WV', 11, 10, '100000.00'),
(55, 'CyQkGw6wvr4XSil7oAy3', 15, 2, '10000.00'),
(56, 'CyQkGw6wvr4XSil7oAy3', 11, 2, '20000.00'),
(57, 'Cb4XCkhU7tXBwFcYxn3c', 11, 2, '20000.00'),
(58, 'Cb4XCkhU7tXBwFcYxn3c', 15, 2, '10000.00'),
(63, 'YbZcult3yiveI48Ysk9S', 11, 5, '50000.00'),
(64, 'HvUJufCVp5LG5cP07DDz', 15, 1, '5000.00'),
(65, 'HvUJufCVp5LG5cP07DDz', 10, 1, '40000.00'),
(66, 'Cz4Iu5y35JrKodAns3I4', 13, 2, '80000.00'),
(67, 'FVs8J7cTwf3n2WRuiqhv', 15, 4, '20000.00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `product_image` varchar(1000) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_description` varchar(1000) NOT NULL,
  `product_price` decimal(11,2) NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_manufacture_date` date NOT NULL,
  `product_expiration_date` date NOT NULL,
  `product_supplier_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `product_image`, `product_name`, `product_description`, `product_price`, `product_stock`, `product_manufacture_date`, `product_expiration_date`, `product_supplier_id`) VALUES
(10, '762ba2bf06f1b06afe05db59024a6990.jpg', 'ASUS ROG - STRIX GL702', 'ASUS LAPTOPSample Description LOL', '40000.00', 483, '2021-08-03', '0000-00-00', 8),
(11, 'vivo-v19-neo-pre-order-ph-2.png', 'VIVO Y91', 'Sample Description', '10000.00', 60, '2021-08-02', '0000-00-00', 8),
(13, 'Portfolio.jpg', 'Asus Laptop X540U', 'Sample Description 1', '40000.00', 482, '2021-08-01', '0000-00-00', 8),
(15, '83fd14b65eaf5e29e95fcc6103b66e7d.jpg', 'Real Me Phone C11', 'C11', '5000.00', 90, '2021-08-24', '2021-08-17', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sme`
--

CREATE TABLE `tbl_sme` (
  `id` int(11) NOT NULL,
  `sme_name` varchar(50) NOT NULL,
  `sme_description` varchar(1000) NOT NULL,
  `sme_logo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sme`
--

INSERT INTO `tbl_sme` (`id`, `sme_name`, `sme_description`, `sme_logo`) VALUES
(1, 'SME - Gadget Shop', 'SME Online System is used to create purchase order requests and check account payment monitoring.', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supplier`
--

CREATE TABLE `tbl_supplier` (
  `id` int(11) NOT NULL,
  `supplier_name` varchar(100) NOT NULL,
  `supplier_address` varchar(100) NOT NULL,
  `supplier_manufacturer` varchar(100) NOT NULL,
  `supplier_description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_supplier`
--

INSERT INTO `tbl_supplier` (`id`, `supplier_name`, `supplier_address`, `supplier_manufacturer`, `supplier_description`) VALUES
(8, 'Max Kellerman', 'Brgy. 2 Jaro, Leyte', 'Johnson and Johnson', 'School Supplies'),
(9, 'Edsun Caldoza', 'Brgy. Hiagsam Jaro, Leyte', 'Free HT', 'Supplies School Supplies'),
(14, 'John Doe', 'Tacloban, City', 'Sample Manufacturer', 'Supplies Laptop and Phones'),
(15, 'John Doe', 'Hiagsam', 'Paid HT 1', 'Supplies  Laptops 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_account_admin`
--
ALTER TABLE `tbl_account_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_account_cashier`
--
ALTER TABLE `tbl_account_cashier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_account_customer`
--
ALTER TABLE `tbl_account_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_employee_role`
--
ALTER TABLE `tbl_employee_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_faqs`
--
ALTER TABLE `tbl_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sme`
--
ALTER TABLE `tbl_sme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_account_admin`
--
ALTER TABLE `tbl_account_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_account_cashier`
--
ALTER TABLE `tbl_account_cashier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_account_customer`
--
ALTER TABLE `tbl_account_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_employee`
--
ALTER TABLE `tbl_employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `tbl_employee_role`
--
ALTER TABLE `tbl_employee_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_faqs`
--
ALTER TABLE `tbl_faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `tbl_order_details`
--
ALTER TABLE `tbl_order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tbl_sme`
--
ALTER TABLE `tbl_sme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_supplier`
--
ALTER TABLE `tbl_supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
