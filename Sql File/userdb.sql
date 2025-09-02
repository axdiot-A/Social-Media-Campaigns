-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2024 at 06:27 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `reply` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `fname`, `lname`, `email`, `phone`, `message`, `reply`) VALUES
(2, 'Mg', 'Mg', 'Mg12@gmail.com', '23274', 'I want to participate', 'Good To hear ..'),
(3, 'Aye', 'Aye', 'Aye12@gmail.com', '0394238', 'hii', 'Hello Madam'),
(4, 'Naing', 'Naing', 'Naing12@gmail.com', '09238423', 'question please', 'yeah feel to ask'),
(5, 'Soe', 'Soe', 'Soe12@gmail.com', '094823521', 'Hello, your page is full of knowledge.', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `opnion`
--

CREATE TABLE `opnion` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `opnion`
--

INSERT INTO `opnion` (`id`, `fname`, `lname`, `email`, `message`) VALUES
(1, 'Zaw', 'Zaw', 'Zaw12@gmail.com', 'As a parent, I must need to control our kids effectively to use in social media'),
(2, 'Naing', 'Naing', 'Naing12@gmail.com', 'Don’t keep your fears to yourself. If you are worried about your safety or something that has happened to you online, urgently speak to an adult you trust. You can call 116 to the Human Rights Defender of Armenia. Learn more here. \r\n'),
(3, 'Linn', 'Linn', 'Linn12@gmail.com', 'Keep personal information professional and limited. Keep your privacy settings on. ...\r\nPractice safe browsing. ...\r\nMake sure your internet connection is secure. ...\r\nBe careful what you download. ...\r\nChoose strong passwords. ...\r\nMake online purchases from secure sites. ...\r\nBe careful what you post.'),
(4, 'Hla', 'Hla1', 'Hla112@gmail.com', 'Explain age limits and age-appropriate sites.\r\nTalk to other parents and the school.\r\nAgree to ground rules.\r\nBe calm and reassuring.\r\nTalk about what is fake and what is real.\r\nUse storybooks to start conversations.');

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(11) NOT NULL,
  `Header` varchar(100) DEFAULT NULL,
  `Name` varchar(100) DEFAULT NULL,
  `Facts` text DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `remark` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `Header`, `Name`, `Facts`, `role`, `remark`) VALUES
(15, 'The latest techniques to stay safe on Facebook', 'Facebook', 'Security is built into every Facebook product and we offer several security features, such as login alerts and two-factor authentication, to help you add an extra layer of protection to your account. You can also review and update your security settings at any time.', 'admin', '../images/Social/F1.jpg'),
(16, 'The latest techniques to stay safe on Twitter', 'Twitter', 'There are two ways to activate Safety Mode. The first is opportunity to activate this feature is from the proactive prompt that X sends when we detect that several posts you\'re receiving appear to create unwanted attention or engagement. The second way to activate Safety Mode is from your Privacy and Safety settings.', 'admin', '../images/Social/F2.jpg'),
(17, 'The latest techniques to stay safe on Instagram', 'Instagram', 'Pick a strong and unique password that you haven\'t used for other accounts. Use a combination of at least six numbers, letters and special characters and try to avoid repetition. Change your password regularly, especially if you see a message from Instagram asking you to do so.', 'admin', '../images/Social/F3.jpg'),
(18, 'The latest techniques to stay safe on Telegram', 'Telegram', 'For maximum security while using Telegram, take the following measures: Always use Secret Chats to ensure messages are end-to-end encrypted. Turn off the People Nearby feature to protect your location. Use a VPN to shield your IP address.', 'admin', '../images/Social/F4.jpg'),
(19, 'The latest techniques to stay safe on TikTok', 'TikTok', 'Go to Settings and Privacy, then Privacy. Look for Activity Status and switch it off so your status on TikTok is private. If you\'re posting only to friends, you can ensure your account is private and approve those who can follow you. Go to Settings and Privacy, then Privacy on TikTok', 'admin', '../images/Social/F5.jpg'),
(20, 'The latest techniques to stay safe on Youtube', 'Youtube', 'We do not sell your personal information to anyone. We use the information we collect to customize our services for you, including providing recommendations, personalizing search results, and serving relevant ads for you.', 'admin', '../images/Social/F6.jpg'),
(21, 'The latest techniques to stay safe on WhatsApp', 'WhatsApp', 'You can choose who can see your profile photo, control who can see your last seen and online, and manage read receipts. Add more privacy to your chats. You can use this section to limit access to your messages and media. Here, you can manage your default message timer and your end-to-end encrypted backups.', 'admin', '../images/Social/F7.jpg'),
(22, 'The latest techniques to stay safe on Messenger', 'Messenger', 'Don\'t share personal information like your address or financial information. You can control your privacy on Messenger by choosing who can see your Active Status, choosing your Story audience, using end-to-end encryption and more. Learn how to control your privacy on Messenger.', 'admin', '../images/Social/F8.jpg'),
(23, 'The latest techniques to stay safe on SnapChat', 'SnapChat', 'Snapchat is generally secure, with measures in place to protect user data and privacy. However, it\'s important to be aware of potential security risks, such as data leaks and account hijacking, which can still occur. Is Snapchat 100% safe? Snapchat isn\'t 100% safe, as no online platform can guarantee absolute security.', 'admin', '../images/Social/F9.jpg'),
(24, 'The latest techniques to stay safe on WeChat', 'WeChat', 'WeChat does use encryption to protect messages in transit. However, unlike apps with end-to-end encryption, WeChat\'s messages may be accessible on its servers, raising questions about privacy. Use a strong password: Make sure that your WeChat password is strong and unique, and avoid using the same password for multiple accounts. Consider using a password manager to generate and store strong passwords. ', 'admin', '../images/Social/F10.jpg'),
(25, 'The latest techniques to stay safe on Pinterest', 'Pinterest', 'Turn on two-factor authentication. Connect your account to Google or Facebook. Make sure your email address is up to date. Create a password for Pinterest that you don\'t use anywhere else.', 'admin', '../images/Social/F11.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `remark` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `phone`, `gender`, `country`, `username`, `password`, `role`, `remark`) VALUES
(12, 'Admin', 'Admin', 'Admin@info.com', '0934345657', NULL, 'Myanmar', 'Administrator', '$2y$10$ZpfWhLuw8Yu6QKqMNPR7rOPi6McRNmT6DOM303KiaUqy9OkVLgLfS', 'admin', NULL),
(13, 'Htoo', 'Htoo', 'Htooo12@gmail.com', '0987423342', 'Male', 'Philippines', 'Htoo12', '$2y$10$SYW6px/5BUIO/DSEDwVnSOiOTdjadIw.vPN7rY1Mc0fRklX1MjOo.', 'user', '../images/profile/profile_picture.jpg'),
(15, 'Kaung', 'Kaung', 'Kaung12@gmail.com', '098847652', 'Male', 'Germany', 'Kaung12', '$2y$10$EdRUU011EZ8gj5pNm96jd.aEAhY5Wa.tISzEcTg9w269qxORtCham', 'user', '../images/profile/236832.png'),
(17, 'Lu', 'Lu', 'Lu12@gmail.com', '093757623', 'Female', 'China', 'Lu12', '$2y$10$BqvFTKrsPcCB0nUwIYjjXewA14oEJqw5NO3/Kf.Qvi6wF4zUuNvJC', 'user', '../images/profile/images.png'),
(18, 'Myint', 'Myint', 'Myint12@gmail.com', '0987423764', 'Male', 'South Africa', 'Myint12', '$2y$10$dZcDbfBG3B31vjge7JVRYO9OQfosVlK3YcMHoljQK7vTfTOGLQ8la', 'user', '../images/profile/images (1).png'),
(19, 'Tun', 'Tun', 'Tun12@gmail.com', '0987472323', 'Male', 'Finland', 'Tun12', '$2y$10$AfLe2YjaqxlFEANtY3joC..B9Qm60QsJK1A6cxzeMxsVDuVKMgshy', 'user', '../images/profile/images (2).png'),
(20, 'Ma', 'Ma2', 'Ma212@gmail.com', '098472385', 'Female', 'Algeria', 'Ma112', '$2y$10$sygYKDvw4yBNT5YIpIjrZ.v/5ygOl51O2n/FmtF0C4Uq1HuvlHNq.', 'user', '../images/profile/4990722.png'),
(21, 'Kyaw', 'Tun', 'KyawTun12@gmail.com', '09472374623', 'Male', 'Armenia', 'KyawTun12', '$2y$10$DO7pqD/vX9GZgNX9zuUzpOmyMLFRDq1LIp8QomHKmhiNr0ZcCE.ue', 'user', '../images/profile/profile_picture.jpg'),
(22, 'Soe', 'Soe', 'Soe12@gmail.com', '0987381273', 'Male', 'Bulgaria', 'Soe12', '$2y$10$QoG.JG/J8vkM39g.xSFxwOBjI9zlXobktMa0SBcavlQV4aav55qPO', 'user', '../images/profile/3135715.png'),
(23, 'Min', 'Min1', 'Min112@gmail.com', '094782394238', 'Male', 'Denmark', 'Min12', '$2y$10$vvkO00sldSmR/.IKGy5aMOX3iibA.ob3KKKMHUw6FKOaIbaPonbKe', 'user', '../images/profile/236832.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opnion`
--
ALTER TABLE `opnion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `opnion`
--
ALTER TABLE `opnion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
