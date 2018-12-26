-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2018 at 04:40 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(30) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `publication_status` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `publication_status`) VALUES
(1, 'Ruhul Amin', 'ruhul11bd@gmail.com', '935d380154ff70e426aa5779756d7cfa', 1),
(3, 'Md.Imran Raj', 'raj11bd@gmail.com', '935d380154ff70e426aa5779756d7cfa', 1),
(4, 'Md. Tanveer ahmed', 'tanveer@gmail.com', '83b4ef5ae4bb360c96628aecda974200', 0),
(5, 'Uzzal', 'raj11bd@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fm_client`
--

CREATE TABLE `fm_client` (
  `client_id` int(30) NOT NULL,
  `client_name` varchar(50) NOT NULL,
  `client_image` varchar(50) NOT NULL,
  `client_desc` text NOT NULL,
  `publication_status` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fm_client`
--

INSERT INTO `fm_client` (`client_id`, `client_name`, `client_image`, `client_desc`, `publication_status`) VALUES
(2, 'Ajkerhut.com', 'images/clients/uRueW6tt.jpg', 'dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere consequat consequat. Aenean ullamcorper pharetra libero sed suscipit. Fusce sit amet gravida neque. Cras nisi sem, eleifend at adipiscing ornare, dictum eu risus. Praesent non erat enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo..ras nisi sem, eleifend at adipiscing ornare, dictum eu risus. Praesent non erat enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed', 1),
(3, 'Delta hospital', 'images/clients/delta.jpg', 'dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere ', 1),
(4, 'Mohona television', 'images/clients/mohona.jpg', 'dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere ', 1),
(5, 'RS softwer Ltd', 'images/clients/logo@2x.png', 'dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere ', 1),
(6, 'Soft bd Ltd', 'images/clients/Soft-bd.jpg', 'dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere ', 1),
(7, 'Computer sourch bd', 'images/clients/computer_source_logo.jpg', 'dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fm_logo`
--

CREATE TABLE `fm_logo` (
  `logo_id` int(30) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `publication_status` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fm_project`
--

CREATE TABLE `fm_project` (
  `project_id` int(30) NOT NULL,
  `project_name` varchar(50) NOT NULL,
  `project_image` varchar(50) NOT NULL,
  `project_desc` text NOT NULL,
  `publication_status` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fm_project`
--

INSERT INTO `fm_project` (`project_id`, `project_name`, `project_image`, `project_desc`, `publication_status`) VALUES
(2, 'Ajkerhut.com  online shopping mall', 'images/projects/ajkerhut.PNG', 'http://ajkerhut.com/ dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere \r\ndui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere \r\ndui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere ', 1),
(3, 'Internal decoration Delta hospital ', 'images/projects/images.jpg', 'http://ajkerhut.com/ dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere\r\n\r\n\r\n', 1),
(4, 'Server configaration ', 'images/projects/server_01.jpg', 'http://ajkerhut.com/ dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere\r\n\r\n\r\n', 1),
(5, 'LAN connection and decoration', 'images/projects/750px-LAN-connection-speed.png', 'http://ajkerhut.com/ dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere\r\n\r\n\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fm_service`
--

CREATE TABLE `fm_service` (
  `service_id` int(30) NOT NULL,
  `service_icon` varchar(50) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `service_image` varchar(50) NOT NULL,
  `service_desc` text NOT NULL,
  `publication_status` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fm_service`
--

INSERT INTO `fm_service` (`service_id`, `service_icon`, `service_name`, `service_image`, `service_desc`, `publication_status`) VALUES
(1, 'icon-shopping-cart', 'Online Shopping mall', 'images/services/online.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere consequat consequat. Aenean ullamcorper pharetra libero sed suscipit. Fusce sit amet gravida neque. Cras nisi sem, eleifend at adipiscing ornare, dictum eu risus. Praesent non erat enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo..ras nisi sem, eleifend at adipiscing ornare, dictum eu risus. Praesent non erat enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed', 1),
(2, 'icon-camera', 'CCTV supply & instalation', 'images/services/cctv.jpg', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere consequat consequat. Aenean ullamcorper pharetra libero sed suscipit. Fusce sit amet gravida neque. Cras nisi sem, eleifend at adipiscing ornare, dictum eu risus. Praesent non erat enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo..ras nisi sem, eleifend at adipiscing ornare, dictum eu risus. Praesent non erat enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lo', 1),
(3, 'icon-leaf', 'PBX supply & instalation', 'images/services/pbx.jpg', 'rem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere consequat consequat. Aenean ullamcorper pharetra libero sed suscipit. Fusce sit amet gravida neque. Cras nisi sem, eleifend at adipiscing ornare, dictum eu risus. Praesent non erat enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo..ras nisi sem, eleifend at adipiscing ornare, dictum eu risus. Praesent non erat enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lore', 1),
(4, 'icon-fire', 'Fire suppression system supply & instalation', 'images/services/fire.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere consequat consequat. Aenean ullamcorper pharetra libero sed suscipit. Fusce sit amet gravida neque. Cras nisi sem, eleifend at adipiscing ornare, dictum eu risus. Praesent non erat enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo..ras nisi sem, eleifend at adipiscing ornare, dictum eu risus. Praesent non erat enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida', 1),
(5, 'icon-signal', 'Office Network setup instalation & Maintenance', 'images/services/networking.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere consequat consequat. Aenean ullamcorper pharetra libero sed suscipit. Fusce sit amet gravida neque. Cras nisi sem, eleifend at adipiscing ornare, dictum eu risus. Praesent non erat enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo..ras nisi sem, eleifend at adipiscing ornare, dictum eu risus. Praesent non erat enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed', 1),
(6, 'icon-building', 'We also take tender & subcontract', 'images/services/tender.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere consequat consequat. Aenean ullamcorper pharetra libero sed suscipit. Fusce sit amet gravida neque. Cras nisi sem, eleifend at adipiscing ornare, dictum eu risus. Praesent non erat enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo..ras nisi sem, eleifend at adipiscing ornare, dictum eu risus. Praesent non erat enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed', 1),
(7, 'icon-laptop', 'Computer & Accessories Sell', 'images/services/Computer_acc.jpg', 'orem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere consequat consequat. Aenean ullamcorper pharetra libero sed suscipit. Fusce sit amet gravida neque. Cras nisi sem, eleifend at adipiscing ornare, dictum eu risus. Praesent non erat enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo..ras nisi sem, eleifend at adipiscing ornare, dictum eu risus. Praesent non erat enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravid', 1),
(8, 'general foundicon-website', 'Web design & Development', 'images/services/web-design.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere consequat consequat. Aenean ullamcorper pharetra libero sed suscipit. Fusce sit amet gravida neque. Cras nisi sem, eleifend at adipiscing ornare, dictum eu risus. Praesent non erat enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo..ras nisi sem, eleifend at adipiscing ornare, dictum eu risus. Praesent non erat enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fm_welcome`
--

CREATE TABLE `fm_welcome` (
  `welcome_id` int(30) NOT NULL,
  `welcome_title` varchar(200) NOT NULL,
  `welcome_desc` text NOT NULL,
  `welcome_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fm_welcome`
--

INSERT INTO `fm_welcome` (`welcome_id`, `welcome_title`, `welcome_desc`, `welcome_image`) VALUES
(1, 'Ruhul amin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo. Morbi semper rhoncus lacus, vitae accumsan nibh hendrerit semper. Suspendisse quis nisl mauris, eget varius leo. Vestibulum auctor lectus vel tellus semper molestie tempus nibh tincidunt. Nunc posuere consequat consequat. Aenean ullamcorper pharetra libero sed suscipit. Fusce sit amet gravida neque. Cras nisi sem, eleifend at adipiscing ornare, dictum eu risus. Praesent non erat enim. \r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed elementum massa commodo..ras nisi sem, eleifend at adipiscing ornare, dictum eu risus. Praesent non erat enim. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ac tortor elit, non hendrerit felis. Nam adipiscing gravida magna, ac pretium neque volutpat a. Integer gravida lorem lorem. Nunc tempor, eros in sagittis iaculis, ligula mi semper neque, ut mattis dui nulla at quam. Suspendisse eleifend nulla blandit lorem venenatis sed', 'images/logo/logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `slider_image`
--

CREATE TABLE `slider_image` (
  `slider_id` int(30) NOT NULL,
  `image_name` varchar(50) NOT NULL,
  `slogan` varchar(200) NOT NULL,
  `publication_status` tinyint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider_image`
--

INSERT INTO `slider_image` (`slider_id`, `image_name`, `slogan`, `publication_status`) VALUES
(11, 'images/slider/slide11.jpg', 'Nice management', 1),
(12, 'images/slider/slide2.jpg', 'FM corporation', 1),
(13, 'images/slider/slide3.jpg', 'best documentary', 1),
(14, 'images/slider/management.jpg', 'My name is khan', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fm_client`
--
ALTER TABLE `fm_client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `fm_logo`
--
ALTER TABLE `fm_logo`
  ADD PRIMARY KEY (`logo_id`);

--
-- Indexes for table `fm_project`
--
ALTER TABLE `fm_project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `fm_service`
--
ALTER TABLE `fm_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `fm_welcome`
--
ALTER TABLE `fm_welcome`
  ADD PRIMARY KEY (`welcome_id`);

--
-- Indexes for table `slider_image`
--
ALTER TABLE `slider_image`
  ADD PRIMARY KEY (`slider_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fm_client`
--
ALTER TABLE `fm_client`
  MODIFY `client_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fm_logo`
--
ALTER TABLE `fm_logo`
  MODIFY `logo_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fm_project`
--
ALTER TABLE `fm_project`
  MODIFY `project_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fm_service`
--
ALTER TABLE `fm_service`
  MODIFY `service_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `fm_welcome`
--
ALTER TABLE `fm_welcome`
  MODIFY `welcome_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider_image`
--
ALTER TABLE `slider_image`
  MODIFY `slider_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
