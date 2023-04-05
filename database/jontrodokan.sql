-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 08:16 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jontrodokan`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `bolg_title` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `project_details` varchar(255) NOT NULL,
  `components` varchar(255) NOT NULL,
  `publish_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lab_items`
--

CREATE TABLE `lab_items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `order_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `seller_id` varchar(255) NOT NULL,
  `cus_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(1, 1, 'Christmas Greetings - XXL Chatbot', 'shayanta shopnil', '2023-04-04', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ex magna, interdum quis diam non, viverra egestas neque. Praesent elementum quis urna non facilisis. Nullam placerat pretium dui, sit amet fringilla felis sodales vitae. In ex orci, dapibus dapibus venenatis lobortis, euismod lacinia felis. Duis nec sem id velit fermentum ornare id et ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed molestie, metus non rutrum bibendum, lorem leo rutrum lectus, pharetra facilisis augue dui id augue. Vivamus viverra semper odio, a ultrices diam sagittis sit amet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Maecenas pulvinar congue enim, non fringilla velit eleifend sed. Pellentesque gravida egestas sollicitudin. Phasellus in placerat velit. Nullam malesuada lacinia ex a fermentum. Sed nisl dui, vestibulum ut fermentum at, semper eget leo. Vestibulum faucibus, nisl quis rutrum porttitor, velit nisi ullamcorper nibh, varius cursus dolor justo eu sem. Donec molestie accumsan ipsum, et aliquet magna.\r\n\r\nNulla imperdiet tempor massa quis condimentum. Aliquam volutpat eros eu ligula facilisis lobortis. Nullam eget ornare elit. Nunc id nisi mattis, fermentum ante sit amet, dapibus massa. Aenean blandit ligula sit amet pulvinar venenatis. Ut eu massa et lectus rhoncus elementum. Cras finibus imperdiet vulputate. Morbi eu tempus mi, eget vestibulum ligula. Fusce a sapien et lectus cursus mollis.\r\n\r\nDonec vitae nulla interdum, maximus arcu a, eleifend tortor. Nullam sed malesuada mauris. Mauris aliquet tristique elit, ac maximus leo ultrices non. Vivamus risus velit, pellentesque eu dictum non, placerat id nunc. Suspendisse tristique et turpis sit amet ullamcorper. Mauris rutrum sagittis nunc, in scelerisque nisi malesuada a. Aenean dictum nulla porta ex condimentum eleifend. Nunc feugiat auctor risus sit amet feugiat. Sed scelerisque arcu nunc, ullamcorper luctus est maximus in. Cras porta interdum condimentum. Aenean bibendum purus eros, vitae ultrices nisl convallis et. Phasellus sodales eget libero eget condimentum. Etiam ac est egestas, pharetra erat ac, accumsan sapien. Duis suscipit ut sapien quis convallis.', 'arduino, shayan', 0, 'draft'),
(2, 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'niggy', '2023-04-03', '', 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce id egestas libero, a sollicitudin erat. Nulla ac tortor vitae nunc venenatis lacinia quis vel justo. Sed cursus molestie ornare. Donec risus erat, volutpat ullamcorper faucibus ut, convallis vel ante. Nam sed pretium odio, vel elementum ipsum. Donec laoreet turpis vel est pellentesque, eget eleifend neque dapibus.\r\n\r\nPellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aenean tortor lacus, ornare ut risus accumsan, finibus aliquam sem. Aliquam tristique euismod justo, in blandit diam. Mauris id urna vitae velit iaculis posuere. Etiam sit amet metus urna. Vestibulum convallis eget nunc sit amet vehicula. Aliquam sed ipsum massa. Etiam id lorem sapien. Ut ut faucibus libero. Cras nec mauris mattis, pellentesque elit at, iaculis urna. Aliquam consectetur quam finibus lorem ultricies viverra. Donec ac finibus lacus, ut luctus enim.\r\n\r\nMorbi sed libero rhoncus, euismod orci ac, congue urna. Nam lacinia, ipsum et posuere efficitur, odio quam gravida metus, vel aliquet odio tortor at lacus. Vivamus hendrerit felis id velit feugiat, eget semper nulla fringilla. Sed laoreet faucibus leo, at convallis nulla fringilla sit amet. Donec lorem tortor, cursus sed mi varius, dictum aliquam dolor. Aliquam porttitor odio ac felis viverra elementum. Aliquam ut sem et orci consectetur tempus. Morbi semper tempus vestibulum. Etiam tincidunt placerat ligula, et auctor lectus facilisis ac. Curabitur in justo justo. Sed in luctus quam.', 'niggy, hello', 2, 'draft');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`cat_id`, `cat_title`) VALUES
(1, 'arduino'),
(2, 'esp8266'),
(5, 'robotics'),
(8, 'raspberry'),
(9, 'micro controller'),
(10, 'test'),
(11, 'test2');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `price` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recycling`
--

CREATE TABLE `recycling` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lab_items`
--
ALTER TABLE `lab_items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recycling`
--
ALTER TABLE `recycling`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
