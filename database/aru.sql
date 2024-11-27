






SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";














CREATE TABLE `table_admin` (
  `id` int(20) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `file` varchar(567) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




INSERT INTO `table_admin` (`id`, `name`, `email`, `username`, `password`, `file`) VALUES
(1, 'bruce m', 'bm@gmail.com', 'admin', '1234', ''),


CREATE TABLE `vacancies` ( `id` int(70) NOT NULL, `vacancy_title` varchar(200) NOT NULL, `vacancy_detail` varchar(5000) NOT NULL, `document` VARCHAR(255) NOT  NULL, `file` varchar(150) NOT NULL, `date` date NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=latin1;




CREATE TABLE `news` (
  `id` int(70) NOT NULL,
  `news_title` varchar(200) NOT NULL,
  `news_detail` varchar(5000) NOT NULL,
  `file` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--



