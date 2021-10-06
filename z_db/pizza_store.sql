-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2021 at 07:03 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizza_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `emails`
--

CREATE TABLE `emails` (
  `id` int(11) NOT NULL,
  `email` varchar(150) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `emails`
--

INSERT INTO `emails` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'ahmedssss@hotmail.com', '2020-12-19 01:56:05', '2021-01-06 13:08:17'),
(2, 'ali@gmail.com', '2020-12-22 04:56:05', NULL),
(3, 'smsm@yahoo.com', '2020-12-25 01:56:05', NULL),
(4, 'samira@hotmail.com', '2020-12-25 06:56:05', NULL),
(5, 'said@gmail.com', '2020-12-28 01:56:05', NULL),
(6, 'bahir@gmail.com', '2020-12-29 01:56:05', NULL),
(7, 'shahir@yahoo.com', '2020-12-30 01:56:05', NULL),
(13, 'coco@gmail.com', '2021-01-02 00:49:51', NULL),
(14, 'soso@gmail.com', '2021-01-02 00:50:22', NULL),
(15, 'youssef1@gmail.com', '2021-01-06 12:44:49', '2021-01-06 12:44:49'),
(16, 'youssef@gmail.com', '2021-01-06 12:46:33', '2021-01-06 12:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `menu_id` int(255) NOT NULL,
  `menu_name` varchar(150) NOT NULL,
  `price` int(20) NOT NULL,
  `img` varchar(40) CHARACTER SET utf8 DEFAULT NULL,
  `info` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `item_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`menu_id`, `menu_name`, `price`, `img`, `info`, `item_status`) VALUES
(1, 'American Pizza', 130, 'american_pizza.jpg', 'Turn up the heat with juicy Beef, sliced Onions, Tomatoes and spicy Red Chilies.', 1),
(2, 'Veg Pizza', 95, 'veg_pizza.jpg', 'Mushrooms, Green peppers, Fresh Tomatoes, Onions, and Black Olives Loaded on a tomato', 0),
(3, 'Chicken Pizza', 120, 'chicken_pizza.jpg', 'The ultimate mix of Chicken together with Mushrooms, Red Onions, Green Peppers,', 1),
(4, 'Pepperroni Pizza', 150, 'pepperroni_pizza.jpg', 'One of our all time specialties. A meaty feast of Pepperoni, Mushroom , Black Olives, ', 1),
(5, 'Veg Burger', 50, 'veg_burger.jpg', 'Gourmet Vegan Mushroom Burger', 0),
(6, 'Chicken Burger', 80, 'chicken_burger.jpg', ' A tower-like burger comprised of 9 levels, topped by a warm & toasted Sesame.', 1),
(7, 'Power Burger', 70, 'power_burger.jpg', ' Description: Our MUSHROOM \'N\'  features Swiss cheese on two flame-grilled beef patties, Twice the velvety goodness. ', 1),
(8, 'Sandwich Burger', 45, 'sandwich_burger.jpg', 'Our famous combination of Beef Pepperoni, Fresh Tomatoes, Lettuce, Mayonnaise and ', 1),
(9, 'Gulab Jamun', 45, 'gulab_jamun.jpg', 'Buttery soft freshly made bread sticks sprinkled with a cinnamon-sugar blend. With sugar sweet vanilla icing', 1),
(10, 'Chocholate Moose', 60, 'chocholate_moose.jpg', ' Cool and creamy, our made-to-order chocolate Sundae is prepared with our velvety Vanilla Soft Serve and finished with a delicious choclet swirl. ', 1),
(11, 'Naugat Moose', 60, 'naugat_moose.jpg', 'Cool and creamy, our made-to-order Caramel Sundae is prepared with our velvety Vanilla Soft Serve and finished with a delicious caramel swirl. ', 1),
(12, 'Belgium Waffle', 45, 'belgium_waffle.jpg', 'Buttery soft freshly made bread sticks sprinkled with a cinnamon-sugar blend. With sugar sweet vanilla icing topped with pineapple', 1),
(13, 'Ice Tea', 35, 'ice_tea.jpg', ' Try our Classic Mojito with the mint and lemon flavour ', 0),
(14, 'Salad', 45, 'salad_bar.jpg', ' Our King Chicken Salad is a wonderful medley of romaine lettuce, juicy tomatoes, home-style Parmesan croutons. ', 1),
(15, 'Fire Wings', 60, 'firewings.jpg', 'Served with our special BBQ sauce (Spicy Hot)', 1),
(16, 'Cappuccino', 41, 'cappuccino.jpg', 'Medio Size. Nice Taste ', 1),
(17, 'Chicken Fillet', 80, 'chicken_fillet.jpg', 'It’s simple. A juicy white chicken breast encased in our special crispy coating with cool mustard mayo sauce, fresh tomatoes and onions. ', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emails`
--
ALTER TABLE `emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emails`
--
ALTER TABLE `emails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
