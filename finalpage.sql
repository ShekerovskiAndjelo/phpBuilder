-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 07:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalpage`
--

-- --------------------------------------------------------

--
-- Table structure for table `website_data`
--

CREATE TABLE `website_data` (
  `id` int(11) NOT NULL,
  `cover_image` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_subtitle` varchar(255) NOT NULL,
  `company_description` text NOT NULL,
  `telephone_number` varchar(20) NOT NULL,
  `location` varchar(255) NOT NULL,
  `category` varchar(20) NOT NULL,
  `product1_url` varchar(255) NOT NULL,
  `product1_description` text NOT NULL,
  `product2_url` varchar(255) NOT NULL,
  `product2_description` text NOT NULL,
  `product3_url` varchar(255) NOT NULL,
  `product3_description` text NOT NULL,
  `contact_description` text NOT NULL,
  `linkedin_url` varchar(255) NOT NULL,
  `facebook_url` varchar(255) NOT NULL,
  `twitter_url` varchar(255) NOT NULL,
  `instagram_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `website_data`
--

INSERT INTO `website_data` (`id`, `cover_image`, `page_title`, `page_subtitle`, `company_description`, `telephone_number`, `location`, `category`, `product1_url`, `product1_description`, `product2_url`, `product2_description`, `product3_url`, `product3_description`, `contact_description`, `linkedin_url`, `facebook_url`, `twitter_url`, `instagram_url`) VALUES
(1, 'uploads/oskar-kadaksoo-1ukY0AG4pIA-unsplash.jpg', 'Test title', 'test subtitle', 'test desc', '1234', 'test location', 'services', 'uploads/pexels-celeo-sun-15976900.jpg', 'test desc 1', 'uploads/pexels-matheus-viana-3354641.jpg', 'test desc 2', 'uploads/ilya-pavlov-OqtafYT5kTw-unsplash.jpg', 'test desc 3', 'contact desc', 'https://www.linkedin.com/', 'https://www.linkedin.com/', 'https://www.linkedin.com/', 'https://www.linkedin.com/'),
(2, 'uploads/oskar-kadaksoo-1ukY0AG4pIA-unsplash.jpg', 'Test title', 'test subtitle', 'test desc', '1234', 'test location', 'services', 'uploads/pexels-celeo-sun-15976900.jpg', 'test desc 1', 'uploads/pexels-matheus-viana-3354641.jpg', 'test desc 2', 'uploads/ilya-pavlov-OqtafYT5kTw-unsplash.jpg', 'test desc 3', 'contact desc', 'https://www.linkedin.com/', 'https://www.linkedin.com/', 'https://www.linkedin.com/', 'https://www.linkedin.com/'),
(3, 'uploads/oskar-kadaksoo-1ukY0AG4pIA-unsplash.jpg', 'Test title', 'test subtitle', 'test desc', '1234', 'test location', 'services', 'uploads/pexels-celeo-sun-15976900.jpg', 'test desc 1', 'uploads/pexels-matheus-viana-3354641.jpg', 'test desc 2', 'uploads/ilya-pavlov-OqtafYT5kTw-unsplash.jpg', 'test desc 3', 'contact desc', 'https://www.linkedin.com/', 'https://www.linkedin.com/', 'https://www.linkedin.com/', 'https://www.linkedin.com/'),
(4, 'uploads/pexels-brett-sayles-13279393.jpg', 'First page', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio at in illum voluptatem optio quo atque sapiente molestias eius odit!', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis dolorum quod labore tempora ipsa impedit consectetur nam explicabo quos aliquam sapiente, illo provident nesciunt sit suscipit eaque iure enim, libero recusandae, veniam quas veritatis. Quae provident ducimus id adipisci amet.\r\n', '123123123', 'Macedonia', 'products', 'uploads/pexels-takeshi-arai-16321378.jpg', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio at in illum voluptatem optio quo atque sapiente molestias eius odit!', 'uploads/pexels-damir-16432792.jpg', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio at in illum voluptatem optio quo atque sapiente molestias eius odit!', 'uploads/pexels-yavuz-koşar-9091291.jpg', '    Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio at in illum voluptatem optio quo atque sapiente molestias eius odit!', '    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas suscipit repellat quidem maxime, dolorem quisquam totam quo excepturi sint amet numquam reprehenderit ab, non molestiae unde exercitationem, laudantium labore hic itaque fugiat aliquam nesciunt eveniet debitis asperiores. Doloribus blanditiis nulla atque, velit ducimus numquam illo magni accusantium voluptatum vitae cupiditate eum recusandae quia vel a quam, earum ea deleniti delectus quisquam fugit neque! Assumenda earum aliquid recusandae molestiae quaerat, esse consequatur omnis architecto neque veritatis delectus ullam necessitatibus sint optio culpa in blanditiis. Ad quasi harum fuga quis quo laboriosam voluptas, ipsa, voluptatem dolor omnis dolores eius neque blanditiis commodi.\r\n', 'https://www.linkedin.com/', 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://www.instagram.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `website_data`
--
ALTER TABLE `website_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `website_data`
--
ALTER TABLE `website_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
