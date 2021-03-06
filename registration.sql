-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 27, 2020 at 06:05 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `role` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `User_Name`, `First_Name`, `Last_Name`, `Email`, `Password`, `role`) VALUES
(2, 'MrDuise1', 'Michael', 'Duisenberg', 'mrduise@gmail.com', 'choochoo', 'admin'),
(3, 'MrDuise12', 'Michael', 'Duisenberg', 'mrduise@gmail.com', 'choochoo1', ''),
(4, 'MrDuise12', 'Michael', 'Duisenberg', 'mrduise@gmail.com', '1234', ''),
(5, 'MrDuise12', 'Michael', 'Duisenberg', 'mrduise@gmail.com', '4567', ''),
(6, 'MrDuise12', 'Michael', 'Duisenberg', 'mrduise@gmail.com', '45646546', ''),
(9, 'MrDuise5896', 'Michael', 'Duisenberg', 'mrduise@gmail.com', 'sdfsdfs', ''),
(10, '', '', '', '', '', ''),
(11, 'dfasdf', 'Michael', 'Duisenberg', 'mrduise@gmail.com', 'dfasdfasdf', ''),
(12, 'fasdfasdfafd', 'Michael', 'Duisenberg', 'mrduise@gmail.com', 'dsafasdfasdfasfasfdasf', ''),
(13, 'MrDuise58967thy', 'Michael', 'Duisenberg', 'mrduise@gmail.com', 'dfasdfasfdfa', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_comments`
--

CREATE TABLE `user_comments` (
  `id` int(11) NOT NULL,
  `comments` text,
  `Ratings` varchar(5) NOT NULL,
  `user_posts_ID` int(11) NOT NULL,
  `users_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_comments`
--

INSERT INTO `user_comments` (`id`, `comments`, `Ratings`, `user_posts_ID`, `users_ID`) VALUES
(1, 'this is a test comment', '', 16, 2),
(2, 'Thats a crazy story dude!!!', '', 16, 2),
(3, 'Dude that sounds crazy scary. Glad u made it out alive!! #blessed', '', 16, 3),
(4, 'cool story bro', '3', 3, 2),
(5, 'dfsdfsdfs', '', 1, 2),
(6, 'super!!', '3', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_posts`
--

CREATE TABLE `user_posts` (
  `ID` int(11) NOT NULL,
  `Blog_Title` varchar(45) DEFAULT NULL,
  `Blog_Entry` text,
  `users_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_posts`
--

INSERT INTO `user_posts` (`ID`, `Blog_Title`, `Blog_Entry`, `users_ID`) VALUES
(1, 'Test Blog', 'This is a test blog. Entering this on phpMyAdmin website to to test if I can view this. ', 2),
(3, 'First Post', 'this is my first test post using the website form', 2),
(4, 'testing different user MrDuise12', 'this is a test to see if the user id is being added from different users. This users id is \"3\". ', 3),
(5, 'second test', 'this is a second test', 3),
(7, 'dsfsdfs', 'sdfsdfsdfsdfsf', 3),
(8, 'test 4', 'test 4sdfsdfsd', 3),
(9, 'test 4', 'test 4sdfsdfsd', 3),
(10, 'super test', 'super duper test', 3),
(11, 'background color test', 'testing the color of the response background', 2),
(12, 'super super', 'this is a test to check if loading everything into an array is actually working', 2),
(13, 'lalalala', 'hello everybody', 2),
(14, 'test test test', 'dfasdfasdfasdf', 2),
(15, 'test test test', 'dfsdfsdfsdfsdfsdfsdfsdsfhg  gf g ', 2),
(16, 'First Horror Story', 'I was driving home one night, when out of nowhere this truck comes blasting down the road at 50 miles an hour, almost t-boning me. I pulled off to the side of the road and stayed there for what felt like an hour, I was so scared.', 2),
(17, 'Driving Horror', 'Driving alone at night after watching 3 horror movies in a row is not a good idea. You start seeing some crazy shit!!', 2),
(18, 'rain', 'this is not fun', 2),
(19, 'Late Night driving', 'ever drive late at night and suddenly you have headlights just blinding you from the other side of the road?! Thats just the worst!!', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_comments`
--
ALTER TABLE `user_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_User_Comments_user_posts1_idx` (`user_posts_ID`),
  ADD KEY `fk_User_Comments_users1_idx` (`users_ID`);

--
-- Indexes for table `user_posts`
--
ALTER TABLE `user_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_user_posts_users_idx` (`users_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_comments`
--
ALTER TABLE `user_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_posts`
--
ALTER TABLE `user_posts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_comments`
--
ALTER TABLE `user_comments`
  ADD CONSTRAINT `fk_User_Comments_user_posts1` FOREIGN KEY (`user_posts_ID`) REFERENCES `user_posts` (`ID`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_User_Comments_users1` FOREIGN KEY (`users_ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `user_posts`
--
ALTER TABLE `user_posts`
  ADD CONSTRAINT `fk_user_posts_users` FOREIGN KEY (`users_ID`) REFERENCES `users` (`ID`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
