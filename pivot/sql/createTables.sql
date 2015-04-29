SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


DELIMITER $$
$$

DELIMITER ;

CREATE TABLE IF NOT EXISTS Listing (
  ListingNum int(10) unsigned NOT NULL AUTO_INCREMENT,
  StaffNum int(10) unsigned NOT NULL,
  title varchar(100) NOT NULL,
  positionAvailable varchar(20) DEFAULT NULL,
  detailedDescription varchar(2000) NOT NULL,
  experienceType varchar(50) DEFAULT NULL,
  startDate varchar(100) NOT NULL,
  endDate varchar(100) NOT NULL,
  deadline varchar(100) NOT NULL,
  institution varchar(50) DEFAULT NULL,
  institutionType varchar(50) DEFAULT NULL,
  url varchar(100) DEFAULT NULL,
  locationCity varchar(50) NOT NULL,
  locationState varchar(15) NOT NULL,
  gpaRequire varchar(10) DEFAULT NULL,
  gradeRequire varchar(10) DEFAULT NULL,
  paid varchar(10) NOT NULL,
  hoursPerWeek varchar(100) DEFAULT NULL,
  howToApply varchar(10) NOT NULL,
  additionalDoc varchar(100) DEFAULT NULL,
  keywords varchar(150) DEFAULT NULL,
  specialReq varchar(50) DEFAULT NULL,
  approved tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (ListingNum),
  KEY StaffNum (StaffNum)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=361 ;

CREATE TABLE IF NOT EXISTS Registration (
  RegistrNum int(10) unsigned NOT NULL AUTO_INCREMENT,
  StudentNum int(10) unsigned NOT NULL,
  ListingNum int(10) unsigned NOT NULL,
  RegistrDate date NOT NULL,
  Approved tinyint(1) DEFAULT '0',
  PRIMARY KEY (RegistrNum),
  KEY StudentNum (StudentNum),
  KEY ListingNum (ListingNum)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS Staff (
  UserNum int(10) unsigned NOT NULL,
  department varchar(32) DEFAULT NULL,
  title varchar(32) DEFAULT NULL,
  professionalType varchar(30) DEFAULT NULL,
  PRIMARY KEY (UserNum)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS Student (
  UserNum int(10) unsigned NOT NULL,
  gpa decimal(3,2) DEFAULT NULL,
  gradeLevel varchar(20) DEFAULT NULL,
  major varchar(32) DEFAULT NULL,
  PRIMARY KEY (UserNum)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `User` (
  UserNum int(10) unsigned NOT NULL AUTO_INCREMENT,
  fname varchar(32) NOT NULL,
  lname varchar(32) NOT NULL,
  mname varchar(32) DEFAULT NULL,
  address varchar(50) DEFAULT NULL,
  city varchar(32) DEFAULT NULL,
  state varchar(15) DEFAULT NULL,
  zip decimal(10,0) DEFAULT NULL,
  institution varchar(32) DEFAULT NULL,
  fieldOfStudy varchar(32) DEFAULT NULL,
  email varchar(100) NOT NULL,
  DOB date NOT NULL,
  photo varchar(32) DEFAULT NULL,
  role varchar(10) NOT NULL DEFAULT 'student',
  username varchar(20) NOT NULL,
  hashedpass varchar(100) NOT NULL,
  verified tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (UserNum),
  UNIQUE KEY username (username)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=109 ;

CREATE TABLE IF NOT EXISTS Verify (
  UserNum int(10) unsigned NOT NULL,
  verification bigint(1) unsigned NOT NULL,
  PRIMARY KEY (UserNum)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


ALTER TABLE Listing
  ADD CONSTRAINT Listing_ibfk_1 FOREIGN KEY (StaffNum) REFERENCES Staff (UserNum);

ALTER TABLE Registration
  ADD CONSTRAINT Registration_ibfk_1 FOREIGN KEY (StudentNum) REFERENCES Student (UserNum),
  ADD CONSTRAINT Registration_ibfk_2 FOREIGN KEY (ListingNum) REFERENCES Listing (ListingNum);

ALTER TABLE Staff
  ADD CONSTRAINT Staff_ibfk_1 FOREIGN KEY (UserNum) REFERENCES `User` (UserNum);

ALTER TABLE Student
  ADD CONSTRAINT Student_ibfk_1 FOREIGN KEY (UserNum) REFERENCES `User` (UserNum);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
