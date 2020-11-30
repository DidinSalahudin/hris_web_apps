-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 02:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hris`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_code` varchar(10) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_username` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL,
  `admin_create_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_code`, `admin_name`, `admin_username`, `admin_email`, `admin_password`, `admin_status`, `admin_create_date`) VALUES
(1, 'AD001', 'Administrator', 'Admin', 'admin@admin.com', '$2y$10$w2ajkwmhr2lp4CIsOmxi/O2n0sLaK612aRgmvk36VZUsQvtnD9vdS', 1, '2020-07-26');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `employee_code` varchar(10) DEFAULT NULL,
  `attendance_date` date DEFAULT NULL,
  `attendance_schedule_in` time DEFAULT NULL,
  `attendance_schedule_out` time DEFAULT NULL,
  `attendance_check_in` time DEFAULT NULL,
  `attendance_check_out` time DEFAULT NULL,
  `attendance_type` int(11) DEFAULT NULL COMMENT '1="Hadir",2="Alpa",3="Off", 4="Lain-lain"',
  `attendance_timeoff_type` int(11) DEFAULT NULL,
  `attendance_create_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `employee_code`, `attendance_date`, `attendance_schedule_in`, `attendance_schedule_out`, `attendance_check_in`, `attendance_check_out`, `attendance_type`, `attendance_timeoff_type`, `attendance_create_date`) VALUES
(1, 'WL00001', '2020-07-01', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(2, 'WL00001', '2020-07-02', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(3, 'WL00001', '2020-07-03', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(4, 'WL00001', '2020-07-04', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(5, 'WL00001', '2020-07-05', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(6, 'WL00001', '2020-07-06', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(7, 'WL00001', '2020-07-07', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(8, 'WL00001', '2020-07-08', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(9, 'WL00001', '2020-07-09', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(10, 'WL00001', '2020-07-10', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(11, 'WL00001', '2020-07-11', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(12, 'WL00001', '2020-07-12', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(13, 'WL00001', '2020-07-13', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(14, 'WL00001', '2020-07-14', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(15, 'WL00001', '2020-07-15', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(16, 'WL00001', '2020-07-16', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(17, 'WL00001', '2020-07-17', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(18, 'WL00001', '2020-07-18', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(19, 'WL00001', '2020-07-19', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(20, 'WL00001', '2020-07-20', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(21, 'WL00001', '2020-07-21', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(22, 'WL00001', '2020-07-22', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(23, 'WL00001', '2020-07-23', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(24, 'WL00001', '2020-07-24', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(25, 'WL00001', '2020-07-25', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(26, 'WL00001', '2020-07-26', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(27, 'WL00001', '2020-07-27', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(28, 'WL00001', '2020-07-28', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(29, 'WL00001', '2020-07-29', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(30, 'WL00001', '2020-07-30', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:01'),
(31, 'WL00001', '2020-08-01', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:49'),
(32, 'WL00001', '2020-08-02', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:49'),
(33, 'WL00001', '2020-08-03', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:49'),
(34, 'WL00001', '2020-08-04', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:49'),
(35, 'WL00001', '2020-08-05', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:49'),
(36, 'WL00001', '2020-08-06', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:49'),
(37, 'WL00001', '2020-08-07', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:49'),
(38, 'WL00001', '2020-08-08', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:49'),
(39, 'WL00001', '2020-08-09', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:49'),
(40, 'WL00001', '2020-08-10', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 2, NULL, '2020-08-18 08:30:49'),
(41, 'WL00001', '2020-08-11', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:49'),
(42, 'WL00001', '2020-08-12', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:49'),
(43, 'WL00001', '2020-08-13', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:49'),
(44, 'WL00001', '2020-08-14', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:49'),
(45, 'WL00001', '2020-08-15', '08:00:00', '17:00:00', '08:00:00', '17:00:00', 1, NULL, '2020-08-18 08:30:49');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_request`
--

CREATE TABLE `attendance_request` (
  `atendance_request_id` int(11) NOT NULL,
  `employee_request_id` int(11) NOT NULL,
  `employee_request_code` varchar(10) NOT NULL,
  `atendance_request_date` date NOT NULL,
  `atendance_request_check_in` time NOT NULL,
  `atendance_request_check_out` time NOT NULL,
  `atendance_request_note` text NOT NULL,
  `atendance_request_status` enum('1','2','3') NOT NULL DEFAULT '1' COMMENT '1="PENDING", 2="APPROVE", 3="REJECT"',
  `atendance_request_approval_by` varchar(10) NOT NULL,
  `atendance_request_approval_date` datetime NOT NULL,
  `atendance_request_approval_comment` text NOT NULL,
  `atendance_request_create_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_request`
--

INSERT INTO `attendance_request` (`atendance_request_id`, `employee_request_id`, `employee_request_code`, `atendance_request_date`, `atendance_request_check_in`, `atendance_request_check_out`, `atendance_request_note`, `atendance_request_status`, `atendance_request_approval_by`, `atendance_request_approval_date`, `atendance_request_approval_comment`, `atendance_request_create_date`) VALUES
(1, 2, 'WL00002', '2020-08-21', '08:00:00', '17:00:00', 'Hadir Boss', '1', '', '0000-00-00 00:00:00', '', '2020-08-23 11:16:06'),
(2, 2, 'WL00002', '2020-08-13', '06:00:00', '08:00:00', 'sad', '1', '', '0000-00-00 00:00:00', '', '2020-08-24 03:59:41'),
(3, 1, 'WL00001', '2020-09-02', '05:00:00', '06:00:00', 'asdsad', '1', '', '0000-00-00 00:00:00', '', '2020-09-23 15:59:17');

-- --------------------------------------------------------

--
-- Table structure for table `attendance_setting`
--

CREATE TABLE `attendance_setting` (
  `attendance_id` int(11) NOT NULL,
  `attendance_setting_date` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance_setting`
--

INSERT INTO `attendance_setting` (`attendance_id`, `attendance_setting_date`) VALUES
(1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `employee_code` varchar(10) NOT NULL,
  `employee_first_name` varchar(50) NOT NULL,
  `employee_last_name` varchar(50) DEFAULT NULL,
  `employee_email` varchar(255) DEFAULT NULL,
  `employee_password` varchar(100) NOT NULL,
  `employee_password_status` int(5) NOT NULL DEFAULT 1,
  `employee_address` text DEFAULT NULL,
  `employee_no_id_card` varchar(20) NOT NULL,
  `employee_place_of_birth` varchar(255) DEFAULT NULL,
  `employee_date_of_birth` date DEFAULT NULL,
  `employee_mobile_phone_number` varchar(15) DEFAULT NULL,
  `employee_home_phone_number` varchar(15) DEFAULT NULL,
  `employee_gender` varchar(255) DEFAULT NULL,
  `employee_marital_status` varchar(255) DEFAULT NULL,
  `employee_total_dependents` varchar(225) NOT NULL,
  `employee_religion` varchar(255) DEFAULT NULL,
  `employee_department_id` int(5) DEFAULT NULL,
  `employee_job_position` varchar(255) DEFAULT NULL,
  `employee_job_level` varchar(255) DEFAULT NULL,
  `employee_employment_status` varchar(255) DEFAULT NULL,
  `employee_join_start_date` date DEFAULT NULL,
  `employee_join_end_date` date NOT NULL,
  `employee_branch_name` varchar(255) DEFAULT NULL,
  `employee_blood_type` varchar(255) DEFAULT NULL,
  `employee_postal_code` varchar(255) DEFAULT NULL,
  `employee_approval` varchar(10) NOT NULL DEFAULT '0',
  `employee_approval_1_id` varchar(20) NOT NULL,
  `employee_approval_2_id` varchar(10) NOT NULL,
  `employee_approval_3_id` varchar(10) NOT NULL,
  `employee_time_off_balance` int(11) NOT NULL,
  `employee_foto_avatar` varchar(250) NOT NULL,
  `employee_create_date` datetime NOT NULL,
  `employee_update_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_code`, `employee_first_name`, `employee_last_name`, `employee_email`, `employee_password`, `employee_password_status`, `employee_address`, `employee_no_id_card`, `employee_place_of_birth`, `employee_date_of_birth`, `employee_mobile_phone_number`, `employee_home_phone_number`, `employee_gender`, `employee_marital_status`, `employee_total_dependents`, `employee_religion`, `employee_department_id`, `employee_job_position`, `employee_job_level`, `employee_employment_status`, `employee_join_start_date`, `employee_join_end_date`, `employee_branch_name`, `employee_blood_type`, `employee_postal_code`, `employee_approval`, `employee_approval_1_id`, `employee_approval_2_id`, `employee_approval_3_id`, `employee_time_off_balance`, `employee_foto_avatar`, `employee_create_date`, `employee_update_date`) VALUES
(1, 'WL00001', 'Salahudin', 'Salahudin', 'didinsalahudin@gmail.com', '$2y$10$Vo80q7aqxiSrG/K6xHDrEuqrSOHseA4UmvncZWJG4/oYRzQP9vSLa', 2, 'Jakarta', '123', 'Jakarta', '2020-08-21', '0342413223', '0123123', '1', '2', '1', '2', 2, '4', '3', '2', '2020-01-21', '0000-00-00', '1', 'O', '11130', '1', '', '', '', 1, 'assets/image/foto_profil/WL00001_20200821151156.png', '2020-08-23 10:40:56', '2020-08-21 20:11:56'),
(2, 'WL00002', 'Ateng', 'Goreng', 'ateng@gmail.com', '$2y$10$eE1aiBEv4qcw/ztx/s/HreGJSS8dEr6A0Avve9sCGzV7sdqmifrx.', 2, 'Jakarta', '123', 'Jakarta', '2020-08-23', '123', '123', '1', '1', '1', '2', 2, '3', '1', '2', '2020-08-23', '0000-00-00', '1', 'AB', '11130', '0', 'WL00001', '', '', 1, 'assets/image/foto_profil/WL00002_20200823022206.png', '2020-08-23 02:22:06', '2020-08-23 07:22:06');

-- --------------------------------------------------------

--
-- Table structure for table `employee_assets`
--

CREATE TABLE `employee_assets` (
  `employee_assets_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `employee_assets_name` varchar(255) DEFAULT NULL,
  `employee_assets_serial_number` varchar(255) DEFAULT NULL,
  `employee_assets_description` text DEFAULT NULL,
  `employee_assets_lend_date` datetime DEFAULT NULL,
  `employee_assets_returned_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_assets`
--

INSERT INTO `employee_assets` (`employee_assets_id`, `employee_id`, `employee_assets_name`, `employee_assets_serial_number`, `employee_assets_description`, `employee_assets_lend_date`, `employee_assets_returned_date`) VALUES
(1, 1, 'Laptop', 'fhsd7fsdf', 'Laptop', '2020-08-23 10:40:56', NULL),
(2, 2, 'Laptop', 'fhsd7fsdf', 'Laptop', '2020-08-23 02:22:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_education`
--

CREATE TABLE `employee_education` (
  `employee_education_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `employee_education_institution_name` varchar(255) DEFAULT NULL,
  `employee_education_majors` varchar(255) DEFAULT NULL,
  `employee_education_start_year` int(11) DEFAULT NULL,
  `employee_education_end_year` int(11) DEFAULT NULL,
  `employee_education_score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_education`
--

INSERT INTO `employee_education` (`employee_education_id`, `employee_id`, `employee_education_institution_name`, `employee_education_majors`, `employee_education_start_year`, `employee_education_end_year`, `employee_education_score`) VALUES
(1, 1, 'NURI', 'S1', 2016, 2020, 4),
(2, 2, 'NURI', 'S1', 2023, 2020, 3);

-- --------------------------------------------------------

--
-- Table structure for table `employee_emergency_contact`
--

CREATE TABLE `employee_emergency_contact` (
  `employee_emergency_contact_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `employee_emergency_contact_name` varchar(50) NOT NULL,
  `employee_emergency_contact_relationship` varchar(50) NOT NULL,
  `employee_emergency_contact_phone_number` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_emergency_contact`
--

INSERT INTO `employee_emergency_contact` (`employee_emergency_contact_id`, `employee_id`, `employee_emergency_contact_name`, `employee_emergency_contact_relationship`, `employee_emergency_contact_phone_number`) VALUES
(1, 1, 'Adis', 'Istri', '1212342323'),
(2, 2, 'asd', 'sad', '123');

-- --------------------------------------------------------

--
-- Table structure for table `employee_family`
--

CREATE TABLE `employee_family` (
  `employee_family_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `employee_family_name` varchar(255) DEFAULT NULL,
  `employee_family_relationship` varchar(255) DEFAULT NULL,
  `employee_family_age` varchar(10) DEFAULT NULL,
  `employee_family_gender` varchar(255) DEFAULT NULL,
  `employee_family_job` varchar(255) DEFAULT NULL,
  `employee_family_religion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_family`
--

INSERT INTO `employee_family` (`employee_family_id`, `employee_id`, `employee_family_name`, `employee_family_relationship`, `employee_family_age`, `employee_family_gender`, `employee_family_job`, `employee_family_religion`) VALUES
(1, 1, 'Adis', 'Istri', '23', '2', 'IRT', '2'),
(2, 2, 'asd', 'asd', '23', '1', 'IRT', '2');

-- --------------------------------------------------------

--
-- Table structure for table `employee_file`
--

CREATE TABLE `employee_file` (
  `employee_file_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `employee_file_name` varchar(255) DEFAULT NULL,
  `employee_file_description` text DEFAULT NULL,
  `employee_file_create_date` datetime DEFAULT NULL,
  `employee_file_file` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_file`
--

INSERT INTO `employee_file` (`employee_file_id`, `employee_id`, `employee_file_name`, `employee_file_description`, `employee_file_create_date`, `employee_file_file`) VALUES
(1, 1, 'Kontrak', 'Kontrak', '2020-08-23 10:40:56', 'assets/upload/employee_file/Salahudin_Kontrak_20200821151201.png'),
(2, 2, 'Kontrak', 'Kontrak', '2020-08-23 02:22:07', 'assets/upload/employee_file/Ateng_Kontrak_20200823022207.png'),
(3, 1, 'asd', 'as', '2020-08-23 10:40:56', 'assets/upload/employee_file/Salahudin_asd_20200823104056.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee_payroll`
--

CREATE TABLE `employee_payroll` (
  `employee_payroll_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `employee_payroll_bank_name` varchar(50) NOT NULL,
  `employee_payroll_bank_account` varchar(50) NOT NULL,
  `employee_payroll_bank_account_holder` varchar(50) NOT NULL,
  `employee_payroll_npwp` varchar(20) NOT NULL,
  `employee_payroll_bpjs_ketenagakerjaan` varchar(20) NOT NULL,
  `employee_payroll_bpjs_kesehatan` varchar(20) NOT NULL,
  `employee_payroll_basic_salary` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_payroll`
--

INSERT INTO `employee_payroll` (`employee_payroll_id`, `employee_id`, `employee_payroll_bank_name`, `employee_payroll_bank_account`, `employee_payroll_bank_account_holder`, `employee_payroll_npwp`, `employee_payroll_bpjs_ketenagakerjaan`, `employee_payroll_bpjs_kesehatan`, `employee_payroll_basic_salary`) VALUES
(1, 1, 'BCA', '123213', 'Saladin', '123', '123', '123', '12000000'),
(2, 2, 'BCA', '123', 'asd', '', '123', '123', '10000000');

-- --------------------------------------------------------

--
-- Table structure for table `employee_payroll_detail`
--

CREATE TABLE `employee_payroll_detail` (
  `employee_payroll_detail_id` int(11) NOT NULL,
  `employee_payroll_id` int(11) DEFAULT NULL,
  `employee_payroll_detail_component_id` int(11) DEFAULT NULL,
  `employee_payroll_detail_component_id_detail` int(11) NOT NULL,
  `employee_payroll_detail_name` varchar(255) DEFAULT NULL,
  `employee_payroll_detail_amount` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_payroll_detail`
--

INSERT INTO `employee_payroll_detail` (`employee_payroll_detail_id`, `employee_payroll_id`, `employee_payroll_detail_component_id`, `employee_payroll_detail_component_id_detail`, `employee_payroll_detail_name`, `employee_payroll_detail_amount`) VALUES
(1, 1, 1, 1, 'Tunjangan Jabatan', '2000000'),
(2, 1, 2, 3, 'PPH21', 'Termasuk'),
(3, 1, 2, 4, 'BPJS Kesehatan', 'Termasuk'),
(4, 1, 2, 5, 'BPJS JHT', 'Termasuk'),
(5, 1, 2, 6, 'BPJS JP', 'Termasuk'),
(6, 1, 2, 7, 'Kehadiran', 'Termasuk'),
(7, 1, 3, 9, 'BPJS Kesehatan', 'Termasuk'),
(8, 1, 3, 10, 'BPJS JHT', 'Termasuk'),
(9, 1, 3, 11, 'BPJS JP', 'Termasuk'),
(10, 2, 1, 1, 'Tunjangan Jabatan', '1000000'),
(11, 2, 1, 2, 'Tunjangan Lainnya', '2000000'),
(12, 2, 2, 3, 'PPH21', 'Termasuk'),
(13, 2, 2, 4, 'BPJS Kesehatan', 'Termasuk'),
(14, 2, 2, 5, 'BPJS JHT', 'Termasuk'),
(15, 2, 2, 6, 'BPJS JP', 'Termasuk'),
(16, 2, 2, 7, 'Kehadiran', 'Termasuk'),
(17, 2, 2, 8, 'Potongan Lainnya', '500000'),
(18, 2, 3, 9, 'BPJS Kesehatan', 'Termasuk'),
(19, 2, 3, 10, 'BPJS JHT', 'Termasuk'),
(20, 2, 3, 11, 'BPJS JP', 'Termasuk'),
(22, 1, 1, 2, 'Tunjangan Lainnya', '100000');

-- --------------------------------------------------------

--
-- Table structure for table `master_attendance`
--

CREATE TABLE `master_attendance` (
  `master_attendance_id` int(11) NOT NULL,
  `master_attendance_name` varchar(100) DEFAULT NULL,
  `master_attendance_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_attendance`
--

INSERT INTO `master_attendance` (`master_attendance_id`, `master_attendance_name`, `master_attendance_status`) VALUES
(1, 'Hadir', 1),
(2, 'Alpa', 1),
(3, 'Cuti', 1),
(4, 'Lainnya', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_department`
--

CREATE TABLE `master_department` (
  `master_department_id` int(11) NOT NULL,
  `master_department_name` varchar(100) NOT NULL,
  `master_department_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_department`
--

INSERT INTO `master_department` (`master_department_id`, `master_department_name`, `master_department_status`) VALUES
(2, 'Information Technology', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_job_level`
--

CREATE TABLE `master_job_level` (
  `master_job_level_id` int(11) NOT NULL,
  `master_job_level_name` varchar(100) NOT NULL,
  `master_job_level_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_job_level`
--

INSERT INTO `master_job_level` (`master_job_level_id`, `master_job_level_name`, `master_job_level_status`) VALUES
(1, 'Staff', 1),
(3, 'Middle Management', 1),
(4, 'Executive Management', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_job_position`
--

CREATE TABLE `master_job_position` (
  `master_job_position_id` int(11) NOT NULL,
  `master_department_id_hd` int(11) NOT NULL,
  `master_job_position_name` varchar(100) NOT NULL,
  `master_job_position_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_job_position`
--

INSERT INTO `master_job_position` (`master_job_position_id`, `master_department_id_hd`, `master_job_position_name`, `master_job_position_status`) VALUES
(3, 2, 'IT Support', 1),
(4, 2, 'Programer', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_payroll_component`
--

CREATE TABLE `master_payroll_component` (
  `master_payroll_component_id` int(11) NOT NULL,
  `master_payroll_component_name` varchar(100) NOT NULL,
  `master_payroll_component_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_payroll_component`
--

INSERT INTO `master_payroll_component` (`master_payroll_component_id`, `master_payroll_component_name`, `master_payroll_component_status`) VALUES
(1, 'Tunjangan', 1),
(2, 'Pengurangan', 1),
(3, 'Manfaat', 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_payroll_component_detail`
--

CREATE TABLE `master_payroll_component_detail` (
  `master_payroll_component_detail_id` int(11) NOT NULL,
  `payroll_component_master_id` int(11) NOT NULL,
  `master_payroll_component_detail_name` varchar(100) NOT NULL,
  `master_payroll_component_detail_status_mandatory` int(11) NOT NULL,
  `master_payroll_component_detail_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_payroll_component_detail`
--

INSERT INTO `master_payroll_component_detail` (`master_payroll_component_detail_id`, `payroll_component_master_id`, `master_payroll_component_detail_name`, `master_payroll_component_detail_status_mandatory`, `master_payroll_component_detail_status`) VALUES
(1, 1, 'Tunjangan Jabatan', 0, 1),
(2, 1, 'Tunjangan Lainnya', 0, 1),
(3, 2, 'PPH21', 1, 1),
(4, 2, 'BPJS Kesehatan', 1, 1),
(5, 2, 'BPJS JHT', 1, 1),
(6, 2, 'BPJS JP', 1, 1),
(7, 2, 'Kehadiran', 1, 1),
(8, 2, 'Potongan Lainnya', 0, 1),
(9, 3, 'BPJS Kesehatan', 1, 1),
(10, 3, 'BPJS JHT', 1, 1),
(11, 3, 'BPJS JP', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `master_time_off`
--

CREATE TABLE `master_time_off` (
  `master_time_off_id` int(11) NOT NULL,
  `master_time_off_name` varchar(100) DEFAULT NULL,
  `master_time_off_status` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_time_off`
--

INSERT INTO `master_time_off` (`master_time_off_id`, `master_time_off_name`, `master_time_off_status`) VALUES
(1, 'Cuti', 1),
(2, 'Izin', 1),
(3, 'Sakit', 1);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `employee_message_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `employee_message_id_sending` int(11) DEFAULT NULL,
  `employee_message_id_reciever` int(11) DEFAULT NULL,
  `employee_message_id_type` int(11) NOT NULL DEFAULT 0,
  `employee_message_type` int(11) DEFAULT NULL COMMENT '0="Message Biasa", 1="Time Off", 2="Attendance"',
  `employee_message_subject` text DEFAULT NULL,
  `employee_message_body` text DEFAULT NULL,
  `employee_message_status_read` tinyint(1) NOT NULL DEFAULT 0,
  `employee_message_create_date` datetime NOT NULL,
  `employee_message_update_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`employee_message_id`, `employee_id`, `employee_message_id_sending`, `employee_message_id_reciever`, `employee_message_id_type`, `employee_message_type`, `employee_message_subject`, `employee_message_body`, `employee_message_status_read`, `employee_message_create_date`, `employee_message_update_date`) VALUES
(1, NULL, 2, 1, 1, 1, 'REQUEST TIME OFF', '', 1, '2020-06-23 20:04:55', '0000-00-00 00:00:00'),
(2, NULL, 2, 1, 1, 1, 'REQUEST TIME OFF', '', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, NULL, 2, 1, 2, 1, 'REQUEST TIME OFF', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, NULL, 2, 3, 2, 1, 'REQUEST TIME OFF', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, NULL, 2, 1, 3, 1, 'REQUEST TIME OFF', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, NULL, 2, 3, 3, 1, 'REQUEST TIME OFF', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, NULL, 2, 1, 1, 1, 'REQUEST TIME OFF', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, NULL, 2, 3, 1, 1, 'REQUEST TIME OFF', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE `payroll` (
  `payroll_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `payroll_month` int(11) DEFAULT NULL,
  `payroll_year` int(11) DEFAULT NULL,
  `payroll_absen` int(11) NOT NULL,
  `payroll_basic_salary` int(11) DEFAULT NULL,
  `payroll_take_home_pay` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`payroll_id`, `employee_id`, `payroll_month`, `payroll_year`, `payroll_absen`, `payroll_basic_salary`, `payroll_take_home_pay`) VALUES
(1, 1, 8, 2020, 21, 12000000, 18967901),
(2, 2, 8, 2020, 0, 10000000, 2447485);

-- --------------------------------------------------------

--
-- Table structure for table `payroll_bonus`
--

CREATE TABLE `payroll_bonus` (
  `payroll_bonus_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `payroll_bonus_length_of_service` varchar(100) NOT NULL,
  `payroll_bonus_month` int(11) NOT NULL,
  `payroll_bonus_years` int(11) NOT NULL,
  `payroll_bonus_type` int(11) NOT NULL COMMENT '1=THR, 2=Bonus',
  `payroll_bonus_amount` int(11) NOT NULL,
  `payroll_bonus_status` int(11) NOT NULL DEFAULT 0 COMMENT '0=Belum Dibayar, 1=Sudah Dibayar',
  `payroll_bonus_createdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payroll_bonus`
--

INSERT INTO `payroll_bonus` (`payroll_bonus_id`, `employee_id`, `payroll_bonus_length_of_service`, `payroll_bonus_month`, `payroll_bonus_years`, `payroll_bonus_type`, `payroll_bonus_amount`, `payroll_bonus_status`, `payroll_bonus_createdate`) VALUES
(1, 1, '6', 8, 2020, 1, 6000000, 1, '2020-08-23 11:36:57'),
(2, 2, '0', 8, 2020, 1, 500000, 1, '2020-08-23 11:36:57');

-- --------------------------------------------------------

--
-- Table structure for table `payroll_detail`
--

CREATE TABLE `payroll_detail` (
  `payroll_detail_id` int(11) NOT NULL,
  `payroll_id` int(11) DEFAULT NULL,
  `payroll_detail_component_name` varchar(50) DEFAULT NULL,
  `payroll_detail_name` varchar(50) DEFAULT NULL,
  `payroll_detail_amount` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payroll_detail`
--

INSERT INTO `payroll_detail` (`payroll_detail_id`, `payroll_id`, `payroll_detail_component_name`, `payroll_detail_name`, `payroll_detail_amount`) VALUES
(1, 1, 'Tunjangan', 'THR', '6000000'),
(2, 1, 'Tunjangan', 'Tunjangan Jabatan', '2000000'),
(3, 1, 'Tunjangan', 'Tunjangan Lainnya', '0'),
(4, 1, 'Pengurangan', 'PPH21', '43644'),
(5, 1, 'Pengurangan', 'BPJS Kesehatan', '120000'),
(6, 1, 'Pengurangan', 'BPJS JHT', '282000'),
(7, 1, 'Pengurangan', 'BPJS JP', '141000'),
(8, 1, 'Pengurangan', 'Kehadiran', '545455'),
(9, 1, 'Manfaat', 'THR', '6000000'),
(10, 1, 'Manfaat', 'BPJS Kesehatan', '480000'),
(11, 1, 'Manfaat', 'BPJS JHT', '521700'),
(12, 1, 'Manfaat', 'BPJS JP', '282000'),
(13, 2, 'Tunjangan', 'THR', '500000'),
(14, 2, 'Tunjangan', 'Tunjangan Jabatan', '1000000'),
(15, 2, 'Tunjangan', 'Tunjangan Lainnya', '2000000'),
(16, 2, 'Pengurangan', 'PPH21', '42515'),
(17, 2, 'Pengurangan', 'BPJS Kesehatan', '120000'),
(18, 2, 'Pengurangan', 'BPJS JHT', '260000'),
(19, 2, 'Pengurangan', 'BPJS JP', '130000'),
(20, 2, 'Pengurangan', 'Kehadiran', '10000000'),
(21, 2, 'Pengurangan', 'Potongan Lainnya', '500000'),
(22, 2, 'Manfaat', 'THR', '500000'),
(23, 2, 'Manfaat', 'BPJS Kesehatan', '480000'),
(24, 2, 'Manfaat', 'BPJS JHT', '481000'),
(25, 2, 'Manfaat', 'BPJS JP', '260000');

-- --------------------------------------------------------

--
-- Table structure for table `payroll_setting`
--

CREATE TABLE `payroll_setting` (
  `payroll_setting_id` int(11) NOT NULL,
  `payroll_setting_date` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payroll_setting`
--

INSERT INTO `payroll_setting` (`payroll_setting_id`, `payroll_setting_date`) VALUES
(1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `temp_payroll`
--

CREATE TABLE `temp_payroll` (
  `temp_payroll_id` int(11) NOT NULL,
  `temp_employee_id` int(11) DEFAULT NULL,
  `temp_payroll_month` int(11) DEFAULT NULL,
  `temp_payroll_year` int(11) DEFAULT NULL,
  `temp_payroll_absen` int(11) NOT NULL,
  `temp_payroll_basic_salary` int(11) DEFAULT NULL,
  `temp_payroll_take_home_pay` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_payroll`
--

INSERT INTO `temp_payroll` (`temp_payroll_id`, `temp_employee_id`, `temp_payroll_month`, `temp_payroll_year`, `temp_payroll_absen`, `temp_payroll_basic_salary`, `temp_payroll_take_home_pay`) VALUES
(1, 1, 8, 2020, 21, 12000000, 18967901),
(2, 2, 8, 2020, 0, 10000000, 2447485);

-- --------------------------------------------------------

--
-- Table structure for table `temp_payroll_detail`
--

CREATE TABLE `temp_payroll_detail` (
  `temp_payroll_detail_id` int(11) NOT NULL,
  `temp_payroll_id` int(11) DEFAULT NULL,
  `temp_payroll_detail_component_name` varchar(50) DEFAULT NULL,
  `temp_payroll_detail_name` varchar(50) DEFAULT NULL,
  `temp_payroll_detail_amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_payroll_detail`
--

INSERT INTO `temp_payroll_detail` (`temp_payroll_detail_id`, `temp_payroll_id`, `temp_payroll_detail_component_name`, `temp_payroll_detail_name`, `temp_payroll_detail_amount`) VALUES
(1, 1, 'Tunjangan', 'THR', 6000000),
(2, 1, 'Tunjangan', 'Tunjangan Jabatan', 2000000),
(3, 1, 'Tunjangan', 'Tunjangan Lainnya', 0),
(4, 1, 'Pengurangan', 'PPH21', 43644),
(5, 1, 'Pengurangan', 'BPJS Kesehatan', 120000),
(6, 1, 'Pengurangan', 'BPJS JHT', 282000),
(7, 1, 'Pengurangan', 'BPJS JP', 141000),
(8, 1, 'Pengurangan', 'Kehadiran', 545455),
(9, 1, 'Manfaat', 'THR', 6000000),
(10, 1, 'Manfaat', 'BPJS Kesehatan', 480000),
(11, 1, 'Manfaat', 'BPJS JHT', 521700),
(12, 1, 'Manfaat', 'BPJS JP', 282000),
(13, 2, 'Tunjangan', 'THR', 500000),
(14, 2, 'Tunjangan', 'Tunjangan Jabatan', 1000000),
(15, 2, 'Tunjangan', 'Tunjangan Lainnya', 2000000),
(16, 2, 'Pengurangan', 'PPH21', 42515),
(17, 2, 'Pengurangan', 'BPJS Kesehatan', 120000),
(18, 2, 'Pengurangan', 'BPJS JHT', 260000),
(19, 2, 'Pengurangan', 'BPJS JP', 130000),
(20, 2, 'Pengurangan', 'Kehadiran', 10000000),
(21, 2, 'Pengurangan', 'Potongan Lainnya', 500000),
(22, 2, 'Manfaat', 'THR', 500000),
(23, 2, 'Manfaat', 'BPJS Kesehatan', 480000),
(24, 2, 'Manfaat', 'BPJS JHT', 481000),
(25, 2, 'Manfaat', 'BPJS JP', 260000);

-- --------------------------------------------------------

--
-- Table structure for table `time_off`
--

CREATE TABLE `time_off` (
  `time_off_id` int(11) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `employee_code` varchar(10) NOT NULL,
  `time_off_type_id` int(11) DEFAULT NULL,
  `time_off_start_date` date DEFAULT NULL,
  `time_off_end_date` date DEFAULT NULL,
  `time_off_leave_day` int(11) NOT NULL,
  `time_off_status` enum('1','2','3','') DEFAULT '1' COMMENT '1="PENDING", 2="APPROVE", 3="REJECT"',
  `time_off_reason` text NOT NULL,
  `time_off_approval_by` varchar(10) DEFAULT NULL,
  `time_off_approval_date` datetime NOT NULL,
  `time_off_approval_comment` varchar(100) NOT NULL,
  `time_off_file` text NOT NULL,
  `time_off_create_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `time_off`
--

INSERT INTO `time_off` (`time_off_id`, `employee_id`, `employee_code`, `time_off_type_id`, `time_off_start_date`, `time_off_end_date`, `time_off_leave_day`, `time_off_status`, `time_off_reason`, `time_off_approval_by`, `time_off_approval_date`, `time_off_approval_comment`, `time_off_file`, `time_off_create_date`) VALUES
(1, 1, 'WL00001', 1, '2020-09-01', '2020-09-01', 1, '1', 'asdasd', NULL, '0000-00-00 00:00:00', '', 'assets/upload/time_off_file/Salahudin_Cuti_20200923155900.png', '2020-09-23 15:59:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `attendance_request`
--
ALTER TABLE `attendance_request`
  ADD PRIMARY KEY (`atendance_request_id`);

--
-- Indexes for table `attendance_setting`
--
ALTER TABLE `attendance_setting`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `employee_assets`
--
ALTER TABLE `employee_assets`
  ADD PRIMARY KEY (`employee_assets_id`);

--
-- Indexes for table `employee_education`
--
ALTER TABLE `employee_education`
  ADD PRIMARY KEY (`employee_education_id`);

--
-- Indexes for table `employee_emergency_contact`
--
ALTER TABLE `employee_emergency_contact`
  ADD PRIMARY KEY (`employee_emergency_contact_id`);

--
-- Indexes for table `employee_family`
--
ALTER TABLE `employee_family`
  ADD PRIMARY KEY (`employee_family_id`);

--
-- Indexes for table `employee_file`
--
ALTER TABLE `employee_file`
  ADD PRIMARY KEY (`employee_file_id`);

--
-- Indexes for table `employee_payroll`
--
ALTER TABLE `employee_payroll`
  ADD PRIMARY KEY (`employee_payroll_id`);

--
-- Indexes for table `employee_payroll_detail`
--
ALTER TABLE `employee_payroll_detail`
  ADD PRIMARY KEY (`employee_payroll_detail_id`);

--
-- Indexes for table `master_attendance`
--
ALTER TABLE `master_attendance`
  ADD PRIMARY KEY (`master_attendance_id`);

--
-- Indexes for table `master_department`
--
ALTER TABLE `master_department`
  ADD PRIMARY KEY (`master_department_id`);

--
-- Indexes for table `master_job_level`
--
ALTER TABLE `master_job_level`
  ADD PRIMARY KEY (`master_job_level_id`);

--
-- Indexes for table `master_job_position`
--
ALTER TABLE `master_job_position`
  ADD PRIMARY KEY (`master_job_position_id`);

--
-- Indexes for table `master_payroll_component`
--
ALTER TABLE `master_payroll_component`
  ADD PRIMARY KEY (`master_payroll_component_id`);

--
-- Indexes for table `master_payroll_component_detail`
--
ALTER TABLE `master_payroll_component_detail`
  ADD PRIMARY KEY (`master_payroll_component_detail_id`);

--
-- Indexes for table `master_time_off`
--
ALTER TABLE `master_time_off`
  ADD PRIMARY KEY (`master_time_off_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`employee_message_id`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`payroll_id`);

--
-- Indexes for table `payroll_bonus`
--
ALTER TABLE `payroll_bonus`
  ADD PRIMARY KEY (`payroll_bonus_id`);

--
-- Indexes for table `payroll_detail`
--
ALTER TABLE `payroll_detail`
  ADD PRIMARY KEY (`payroll_detail_id`);

--
-- Indexes for table `payroll_setting`
--
ALTER TABLE `payroll_setting`
  ADD PRIMARY KEY (`payroll_setting_id`);

--
-- Indexes for table `temp_payroll`
--
ALTER TABLE `temp_payroll`
  ADD PRIMARY KEY (`temp_payroll_id`);

--
-- Indexes for table `temp_payroll_detail`
--
ALTER TABLE `temp_payroll_detail`
  ADD PRIMARY KEY (`temp_payroll_detail_id`);

--
-- Indexes for table `time_off`
--
ALTER TABLE `time_off`
  ADD PRIMARY KEY (`time_off_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `attendance_request`
--
ALTER TABLE `attendance_request`
  MODIFY `atendance_request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attendance_setting`
--
ALTER TABLE `attendance_setting`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_assets`
--
ALTER TABLE `employee_assets`
  MODIFY `employee_assets_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_education`
--
ALTER TABLE `employee_education`
  MODIFY `employee_education_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_emergency_contact`
--
ALTER TABLE `employee_emergency_contact`
  MODIFY `employee_emergency_contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_family`
--
ALTER TABLE `employee_family`
  MODIFY `employee_family_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_file`
--
ALTER TABLE `employee_file`
  MODIFY `employee_file_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee_payroll`
--
ALTER TABLE `employee_payroll`
  MODIFY `employee_payroll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_payroll_detail`
--
ALTER TABLE `employee_payroll_detail`
  MODIFY `employee_payroll_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `master_attendance`
--
ALTER TABLE `master_attendance`
  MODIFY `master_attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `master_department`
--
ALTER TABLE `master_department`
  MODIFY `master_department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `master_job_level`
--
ALTER TABLE `master_job_level`
  MODIFY `master_job_level_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `master_job_position`
--
ALTER TABLE `master_job_position`
  MODIFY `master_job_position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `master_payroll_component`
--
ALTER TABLE `master_payroll_component`
  MODIFY `master_payroll_component_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `master_payroll_component_detail`
--
ALTER TABLE `master_payroll_component_detail`
  MODIFY `master_payroll_component_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `master_time_off`
--
ALTER TABLE `master_time_off`
  MODIFY `master_time_off_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `employee_message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `payroll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payroll_bonus`
--
ALTER TABLE `payroll_bonus`
  MODIFY `payroll_bonus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payroll_detail`
--
ALTER TABLE `payroll_detail`
  MODIFY `payroll_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `payroll_setting`
--
ALTER TABLE `payroll_setting`
  MODIFY `payroll_setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `temp_payroll`
--
ALTER TABLE `temp_payroll`
  MODIFY `temp_payroll_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `temp_payroll_detail`
--
ALTER TABLE `temp_payroll_detail`
  MODIFY `temp_payroll_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `time_off`
--
ALTER TABLE `time_off`
  MODIFY `time_off_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
