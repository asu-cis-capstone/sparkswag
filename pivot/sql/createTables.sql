DROP TABLE IF EXISTS `Listing`;
DROP TABLE IF EXISTS `Staff`;
DROP TABLE IF EXISTS `Student`;
DROP TABLE IF EXISTS `User`;

CREATE TABLE `User` (
  `UserNum` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(32) NOT NULL,
  `lname` varchar(32) NOT NULL,
  `mname` varchar(32) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `city` varchar(32) DEFAULT NULL,
  `state` varchar(15) DEFAULT NULL,
  `zip` decimal(10,0) DEFAULT NULL,
  `institution` varchar(32) DEFAULT NULL,
  `fieldOfStudy` varchar(32) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `photo` varchar(32) DEFAULT NULL,
  `role` varchar(10) NOT NULL DEFAULT 'student',
  `username` varchar(20) NOT NULL UNIQUE,
  `hashedpass` varchar(100) NOT NULL,
  PRIMARY KEY (`UserNum`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

CREATE TABLE `Staff` (
  `UserNum` int(10) unsigned NOT NULL,
  `department` varchar(32) DEFAULT NULL,
  `staffCV` blob,
  `title` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`UserNum`),
  CONSTRAINT `Staff_ibfk_1` FOREIGN KEY (`UserNum`) REFERENCES `User` (`UserNum`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

CREATE TABLE `Listing` (
  `ListingNum` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `StaffNum` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `positionAvailable` int(11) DEFAULT NULL,
  `detailedDescription` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `discipline` varchar(50) DEFAULT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL,
  `deadline` date NOT NULL,
  `institution` varchar(50) DEFAULT NULL,
  `institutionType` varchar(50) DEFAULT NULL,
  `logo` varchar(32) DEFAULT NULL,
  `opportunityHomepage` varchar(50) DEFAULT NULL,
  `locationCity` varchar(50) NOT NULL,
  `locationState` varchar(2) NOT NULL,
  `gpaRequire` decimal(3,2) DEFAULT NULL,
  `gradeRequire` varchar(10) DEFAULT NULL,
  `paid` tinyint(1) NOT NULL,
  PRIMARY KEY (`ListingNum`),
  KEY `StaffNum` (`StaffNum`),
  CONSTRAINT `Listing_ibfk_1` FOREIGN KEY (`StaffNum`) REFERENCES `Staff` (`UserNum`)
) ENGINE=InnoDB AUTO_INCREMENT=1  DEFAULT CHARSET=utf8;



CREATE TABLE `Student` (
  `UserNum` int(10) unsigned NOT NULL,
  `gpa` decimal(3,2) DEFAULT NULL,
  `gradeLevel` varchar(10) DEFAULT NULL,
  `major` varchar(32) DEFAULT NULL,
  `studentResm` blob NOT NULL,
  PRIMARY KEY (`UserNum`),
  CONSTRAINT `Student_ibfk_1` FOREIGN KEY (`UserNum`) REFERENCES `User` (`UserNum`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;


