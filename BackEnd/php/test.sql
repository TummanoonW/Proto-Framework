-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 05, 2019 at 07:12 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`` PROCEDURE `AddGeometryColumn` (`catalog` VARCHAR(64), `t_schema` VARCHAR(64), `t_name` VARCHAR(64), `geometry_column` VARCHAR(64), `t_srid` INT)  begin
  set @qwe= concat('ALTER TABLE ', t_schema, '.', t_name, ' ADD ', geometry_column,' GEOMETRY REF_SYSTEM_ID=', t_srid); PREPARE ls from @qwe; execute ls; deallocate prepare ls; end$$

CREATE DEFINER=`` PROCEDURE `DropGeometryColumn` (`catalog` VARCHAR(64), `t_schema` VARCHAR(64), `t_name` VARCHAR(64), `geometry_column` VARCHAR(64))  begin
  set @qwe= concat('ALTER TABLE ', t_schema, '.', t_name, ' DROP ', geometry_column); PREPARE ls from @qwe; execute ls; deallocate prepare ls; end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `ID` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `password_hash` varchar(32) COLLATE utf8_bin NOT NULL,
  `username` varchar(20) COLLATE utf8_bin NOT NULL,
  `profile_pic` text COLLATE utf8_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`ID`, `email`, `password_hash`, `username`, `profile_pic`) VALUES
(1, 'barnista@gmail.com', '8e3b4f8d1345f6d108d5b18b3c7e60db', 'Barnista', NULL),
(2, 'fealucus@gmail.com', 'fcd115697f7a0de8204c43bbfa52b0bc', 'Fealucus', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `USERS`
--

CREATE TABLE `USERS` (
  `user_id` int(11) NOT NULL,
  `password` varchar(8) DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `address` varchar(400) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `tel` varchar(10) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `picture` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `USERS`
--

INSERT INTO `USERS` (`user_id`, `password`, `name`, `address`, `tel`, `email`, `picture`) VALUES
(2, 'barnista', 'ธรรมนูญ วันชะเอม', '94/1 หมู่ 4 ต.ท่าไม้ อ.กระทุ่มแบน จ.สมุทรสาคร', '0958186242', 'barnista@gmail.com', 'https://i0.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?resize=256%2C256&quality=100&ssl=1'),
(3, 'ratchano', 'รัชชานนท์ เสวกคเชกนัน', '111/152 ???????? ??????', '0869712937', NULL, 'https://i.dailymail.co.uk/i/pix/2011/03/28/article-1370802-0B5FFB8100000578-115_468x622.jpg'),
(4, 'piyathan', 'ปิยพันธ์ ไพบูลย์', '768/1 ??? 11 ?. ????68', '0953909853', '20551@dusitharam.ac.th', 'https://d9np3dj86nsu2.cloudfront.net/thumb/0c771449acaecb388c58d8805d966f61/350_403'),
(5, 'sommai11', 'สมหมาย กองวิสัยสุข', 'ชุดสยบไพรี 6/1', NULL, NULL, 'http://trialation.com/farmer-watch/hero.jpg'),
(6, 'somkid22', 'สมคิด จาตุศรีพิทักษ์', ' ปริญญาตรีเศรษฐศาสตร์การคลัง และเศรษฐศาสตร์ระหว่างประเทศ มหาวิทยาลัยธรรมศาสตร์ และต่อปริญญาโท MBA สาขาบริหารการเงิน สถาบันบัณฑิตพัฒนบริหารศาสตร์ และ ปริญญาเอก สาขาบริหารธุรกิจ เน้นการจัดการด้านการตลาด ที่ มหาวิทยาลัยนอร์ทเวสเทิร์น สหรัฐอเมริกา', NULL, NULL, 'https://upload.wikimedia.org/wikipedia/commons/3/39/SomkidJat2006.JPG'),
(9, NULL, 'พระมหาสมปอง ตาลปุตฺโต', 'วัดสร้อยทอง', NULL, NULL, 'http://3.bp.blogspot.com/-9ngg-taA3w0/VbY_fw8tgMI/AAAAAAAAAcU/sW4VQx6_JQQ/s640/Somporng.jpg'),
(10, NULL, 'สมศักดิ์ เจียมธีรสกุล', 'สถานะลี้ภัย', NULL, NULL, 'https://upload.wikimedia.org/wikipedia/th/9/9a/Somsak_Jiam.jpg'),
(11, NULL, 'ธรรมนูญ เทียนเงิน', '(28 มิถุนายน พ.ศ. 2456 - พ.ศ. 2532) ผู้ว่าราชการกรุงเทพมหานคร ที่มาจากการเลือกตั้งเป็นคนแรก ', NULL, NULL, 'https://upload.wikimedia.org/wikipedia/th/e/e0/%E0%B8%98%E0%B8%A3%E0%B8%A3%E0%B8%A1%E0%B8%99%E0%B8%B9%E0%B8%8D_%E0%B9%80%E0%B8%97%E0%B8%B5%E0%B8%A2%E0%B8%99%E0%B9%80%E0%B8%87%E0%B8%B4%E0%B8%991.gif'),
(12, NULL, 'ประยุทธ์ จันทร์โอชา', 'สำนักนายกรัฐมนตรี แบะ ราบ 11', NULL, 'prayuth@prayutchan-o-cha.com', 'https://pbs.twimg.com/profile_images/1084270206938099712/qR9TdPQD_400x400.jpg'),
(13, NULL, 'ประยุทธ์ จันไทย', NULL, NULL, NULL, 'https://scontent.fbkk22-1.fna.fbcdn.net/v/t31.0-8/21415040_103081593767867_954689054613856447_o.jpg?_nc_cat=101&_nc_eui2=AeEMIsC_0Sm0oorkTTtqxQZyFasvvZ-ajrJ7eV-YS__Sn9Do0iEeJW96QDkHoG2oM973JCCJYRta4PTvrnTkDUz5g2ZXXy97eDSrCNDwU8ZoxQ&_nc_ht=scontent.fbkk22-1.fna&oh=9d703b90763a4900d5965c7052967a31&oe=5CF620FA'),
(14, NULL, 'ประยุทธ์ รอดเพ็ชร์', NULL, NULL, NULL, 'https://scontent.fbkk22-2.fna.fbcdn.net/v/t1.0-9/11898606_1612693432338836_4177285121267655083_n.jpg?_nc_cat=106&_nc_eui2=AeHeVEAg4n7Waecy-7ZBVjI7vMBcmzB2DMITj_kTEKuJS8w0mQlMpxi5zomMXz2VIgQ6J-RKtE_V6Psy_wDQeMLDGhHDccSeurNPEFg9NcNVNA&_nc_ht=scontent.fbkk22-2.fna&oh=ee756b616fe0abfa7f2fc6c80dab8d61&oe=5CE33493'),
(15, NULL, 'ธรรมนูญ นุตรพิบูลมงคล', 'โอตาคุ bnk', NULL, NULL, 'https://scontent.fbkk22-1.fna.fbcdn.net/v/t1.0-9/49580988_10217833016515243_7435962585637191680_o.jpg?_nc_cat=101&_nc_eui2=AeE7uT-kEZmoxawbtQmbrMYveGm22PTajf4hp3C9n_BNXmuRJ-50oI-510bRM-y6L9Ewx7NgeZH0fNRJM9x3P-EYHvGIRwj4UysdEomcw838WA&_nc_ht=scontent.fbkk22-1.fna&oh=3c6ac293a9eb8e478fb80fd5eb9a836f&oe=5CDFFD9A'),
(16, NULL, 'อำนวย จันทร์โอชา', NULL, NULL, NULL, 'https://scontent.fbkk22-2.fna.fbcdn.net/v/t1.0-9/43544661_105853407064033_4583513000060649472_n.jpg?_nc_cat=102&_nc_eui2=AeHIN6xyNt8XmMK6dIlS6R-1IBXdifMv-WtDF6zVoUu_u8GH_Rx6NSfQwF27IU6b_YzycpzT1AExrz8mwOw-VCyLb_AL4SR2X0tW4pZHpA7XGw&_nc_ht=scontent.fbkk22-2.fna&oh=874d36cf2cb20462ebc2233326df9887&oe=5CEE6CA0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `USERS`
--
ALTER TABLE `USERS`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
