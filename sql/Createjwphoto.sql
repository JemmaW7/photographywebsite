

--
Use u986890855_jwphoto;
Show tables;
-- --------------------------------------------------------

--
-- Table structure for table
--
DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `pid` smallint NOT NULL AUTO_INCREMENT,
  `pname` char(50) DEFAULT NULL,
  `price` tinyint DEFAULT NULL,
  `photo` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB;

--
-- Dumping data for table `cars`
--

INSERT INTO `product` ( `pname`, `price`, `photo`) VALUES
('Private Workshop', 90, '/media/shopimg/privatews.jpg'),
('Online Private Workshop', 49, '/media/shopimg/onlineprivatews.jpg'),
('1hr Public Workshop', 15, '/media/shopimg/1hrpublicws.jpg'),
('Big Print', 299, '/media/shopimg/bigprint.jpg'),
('Medium Print', 65, '/media/shopimg/mediumprint.jpg'),
('Small Print', 25, '/media/shopimg/smallprint.jpg'),
('Simple retouch', 10, '/media/shopimg/simpleretouch.jpg'),
('Advanced Editing', 70, '/media/shopimg/advancedediting.jpg');

-- --------------------------------------------------------

--
-- Table structure for table 
--

DROP TABLE IF EXISTS `booking`;
set auto_increment_increment=1; -- autoincrement step size	
CREATE TABLE IF NOT EXISTS `booking` (
  `bid` smallint NOT NULL AUTO_INCREMENT,
  `cname` char(16) DEFAULT NULL,
  `cno` int DEFAULT NULL,
  `cemail` varchar(100) NOT NULL,
  `type` ENUM ('Pets','Event', 'Photoshoot') Not Null,
  `notes` TEXT,
  PRIMARY KEY (`bid`)
)ENGINE=InnoDB auto_increment=111;

--
-- Dumping data for table 
--

INSERT INTO `booking` (`cname`, `cno`, `cemail`, `type`,`notes`) VALUES
('MELANIE DEARFIELD', 893518888, 'dearfieldm@gmail.com', 'Pets','Day out at Beach'),
('MATTHEW MURPHY', 878912270, 'm.murphy@gmail.com', 'Event','Birthday. Call after 6pm.');

-- --------------------------------------------------------



COMMIT;

