-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 13, 2018 at 02:48 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_ml`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(45) DEFAULT NULL,
  `description` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`) VALUES
(1, 'Humanoid', 'Category for humanoid models'),
(2, 'Flora', 'Category for fauna models'),
(3, 'Fauna', 'Category for fauna models'),
(4, 'Construct', 'Category for general models');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `model_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `favorite_user`
--

CREATE TABLE `favorite_user` (
  `users_id` int(11) NOT NULL,
  `favorites_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` int(11) NOT NULL,
  `title` varchar(225) DEFAULT NULL,
  `description` varchar(225) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `artist` varchar(225) DEFAULT NULL,
  `price` int(45) DEFAULT NULL,
  `age` varchar(45) DEFAULT NULL,
  `upvotes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `title`, `description`, `image`, `category_id`, `artist`, `price`, `age`, `upvotes`) VALUES
(1, 'Model1', 'This is a placeholder model', 'https://thumbs.dreamstime.com/b/wood-model-leaning-wood-12622160.jpg', 1, 'Admin', 5, 'New', 1),
(2, 'Model2', 'Dummy model 2', 'http://mahogonymodels.com/scf100.jpg', 4, 'Admin', 10, 'Old', 2),
(3, 'Model3', 'Dummy model 3', 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/interior_spreads/9781682980286/incredibuilds-star-wars-tie-fighter-3d-wood-model-9781682980286.in01.jpg', 4, 'Admin', 20, 'New', 3),
(31, 'Cover', 'Cover Model', 'https://images.unsplash.com/photo-1504532105049-367430c38ba7?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=fc4d1d388c6158e94b2b2e23a43a4496&auto=format&fit=crop&w=1350&q=80', 1, 'giuseppe rumerio', 100, 'unknown age', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(225) DEFAULT NULL,
  `lastname` int(225) DEFAULT NULL,
  `password` varchar(225) DEFAULT NULL,
  `email` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_favorites_models1_idx` (`model_id`);

--
-- Indexes for table `favorite_user`
--
ALTER TABLE `favorite_user`
  ADD PRIMARY KEY (`users_id`,`favorites_id`),
  ADD KEY `fk_users_has_favorites_favorites1_idx` (`favorites_id`),
  ADD KEY `fk_users_has_favorites_users1_idx` (`users_id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_models_categories_idx` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favorites`
--
ALTER TABLE `favorites`
  ADD CONSTRAINT `fk_favorites_models1` FOREIGN KEY (`model_id`) REFERENCES `models` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `favorite_user`
--
ALTER TABLE `favorite_user`
  ADD CONSTRAINT `fk_users_has_favorites_favorites1` FOREIGN KEY (`favorites_id`) REFERENCES `favorites` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_has_favorites_users1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `models`
--
ALTER TABLE `models`
  ADD CONSTRAINT `fk_models_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
