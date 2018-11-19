-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2018 at 03:37 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assfilm`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--
CREATE DATABASE `assfilm`;
USE `assfilm`; 
CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Phim thuyết minh'),
(2, 'Phim hài hước'),
(3, 'Phim chiến tranh'),
(4, 'Phim âm nhạc'),
(5, 'Phim thiếu nhi'),
(6, 'Phim hoạt hình'),
(7, 'Phim thần thoại'),
(8, 'Phim TV Show'),
(9, 'Phim hành động'),
(10, 'Phim phiêu lưu'),
(11, 'Phim viễn tưởng'),
(12, 'Phim bí mật điện ảnh'),
(13, 'Phim Võ Thuật '),
(14, 'Phim Kinh Dị'),
(15, 'Phim Hài Việt'),
(16, 'Phim Cổ Trang'),
(17, 'Phim Tâm Lý'),
(18, 'Phim Hình Sự'),
(19, 'Phim Khoa học Tài liệu');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `content` varchar(255) CHARACTER SET utf8 NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `episode`
--

CREATE TABLE `episode` (
  `id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL,
  `link` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `ID` int(5) NOT NULL,
  `name` varchar(100) NOT NULL,
  `name2` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `director` varchar(100) NOT NULL,
  `actor` varchar(100) NOT NULL,
  `category` int(2) NOT NULL,
  `nation_id` int(100) NOT NULL,
  `year` int(4) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `duration` int(5) NOT NULL,
  `num_view` int(11) NOT NULL,
  `author` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`ID`, `name`, `name2`, `status`, `director`, `actor`, `category`, `nation_id`, `year`, `image`, `description`, `duration`, `num_view`, `author`) VALUES
(1, 'Ghét thì yêu thôi', 'VTV3(2017)', 'Tập 28/28 HD Thuyết Minh', 'Đỗ Thanh Hải', 'Vân Dung, MSUT Chí Trung, Phương Anh, Đình Tú', 17, 2, 2018, '', 'Phim Ghét Thì Yêu Thôi sẽ đem đến cho khán giả những tràng cười thú vị thông qua lời thoại dí dỏm, lối diễn hài tự nhiên của các diễn viên và cả những tình huống dở khóc dở cười xảy ra giữa các cặp đôi oan gia. Phim Ghet Thi Yeu Thoi Tap 8 xoay quanh mối tình đầy ắp những rắc rối, tranh cãi giữa hai bạn trẻ vốn coi nhau là \"kẻ thù không đội trời chung\". đôi bạn trẻ Kim (Phương Anh) và Du (Đình Tú). Cuộc tình của họ khởi đầu như một \"cơn ác mộng\" và cả hai coi nhau như là cái gai trong mắt. Tuy nhiên, sau một sự cố bất ngờ, Kim và Du dần dần hiểu nhau hơn và tình cảm đến một cách tự nhiên.', 45, 0, 'ko xác định'),
(2, 'KHÁCH SẠN HUYỀN BÍ 3: KỲ NGHỈ MA CÀ RỒNG', 'Hotel Transylvania 3: Summer Vacation(2018)', 'HD Vietsub + Thuyết Minh', 'Genndy Tartakovsky', 'Steve Buscemi, Selena Gomez, Adam Sandler, Kevin James, Andy Samberg', 6, 1, 2015, 'https://phim3s.pw/phim-le/khach-san-huyen-bi-3-ky-nghi-ma-ca-rong_11298/xem-phim/', 'Phim Khách Sạn Huyền Bí 3: Kỳ Nghỉ Ma Cà Rồng lần này sẽ là “cuộc chơi lớn” với một phen tiệc tùng sang chảnh hết nấc của gia đình Dracula. Đã quá “ngán” với cường độ làm việc chăm chỉ 365 ngày không nghỉ, bá tước Dracula quyết định đòi “đình công”. Để khai sáng cho người cha trăm tuổi chưa bao giờ bước ra khỏi “lũy tre làng”, vợ chồng nhà Jonathan – Mavis lập một kế hoạch xả hơi táo bạo: Thuê đứt một du thuyền du lịch hạng sang để đưa tất thảy bộ xậu quái vật già trẻ lớn bé làm một chuyến ra khơi nhớ đời.', 99, 0, 'Nguyễn Văn Đạt');

-- --------------------------------------------------------

--
-- Table structure for table `nation`
--

CREATE TABLE `nation` (
  `nation_id` int(11) NOT NULL,
  `nation_name` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nation`
--

INSERT INTO `nation` (`nation_id`, `nation_name`) VALUES
(1, 'Mỹ'),
(2, 'Việt Nam'),
(3, 'Pháp'),
(4, 'Nhật Bản'),
(5, 'Hàn Quốc'),
(6, 'Anh'),
(7, 'Trung Quốc'),
(8, 'Ấn Độ'),
(9, 'Hồng Kông '),
(10, 'Thái Lan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(5) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `usertype` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `username`, `password`, `email`, `birthday`, `sex`, `usertype`) VALUES
(1, 'Van', '1234', 'ngthibichvan@gmail.com', '2018-11-13', 'female', 99),
(4, 'quang', '1234', 'quangvo33@gmail.com', '2018-11-04', 'male', 99),
(5, 'trinh', '1234', 'chinhchinh@gmail.com', '2018-11-04', 'female', 20),
(6, 'thien', '1234', 'thienle4444@gmail.com', '2018-11-05', 'male', 20),
(7, 'user', '1234', 'u@gmail.com', '0000-00-00', 'male', 10);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `type` int(2) NOT NULL,
  `typename` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`type`, `typename`) VALUES
(10, 'Guest'),
(20, 'Member'),
(99, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `film_id` (`film_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`id`,`film_id`),
  ADD KEY `film_id` (`film_id`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `nation_id` (`nation_id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `nation`
--
ALTER TABLE `nation`
  ADD PRIMARY KEY (`nation_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_ibfk_1` (`usertype`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nation`
--
ALTER TABLE `nation`
  MODIFY `nation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `film` (`ID`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`ID`);

--
-- Constraints for table `episode`
--
ALTER TABLE `episode`
  ADD CONSTRAINT `episode_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `film` (`ID`);

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_ibfk_1` FOREIGN KEY (`nation_id`) REFERENCES `nation` (`nation_id`),
  ADD CONSTRAINT `film_ibfk_2` FOREIGN KEY (`category`) REFERENCES `category` (`id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`usertype`) REFERENCES `usertype` (`type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
