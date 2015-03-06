Create Table User (
	UserNum		int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	fname 		varchar(32) NOT NULL,
	lname		varchar(32) NOT NULL,
	mname		varchar(32) NULL,	
	address		varchar(50) NULL,
	city		varchar(32) NULL,
	state 		varchar(15) NULL,
	zip			numeric NULL,
	institution varchar(32) NULL,
	fieldOfStudy varchar(32) NULL,
	email		varchar(100) NOT NULL,
	DOB			DATE NOT NULL,
	photo 		BLOB NULL
	
)
Create Table Staff (
	UserNum 	int UNSIGNED PRIMARY KEY,
	department	varchar(32) NULL,
	staffCV		BLOB NOT NULL,
	title		varchar(32) NULL,
	FOREIGN KEY (UserNum) REFERENCES User(UserNum)
);

Create Table Student (
	UserNum 	int UNSIGNED PRIMARY KEY,
	gpa         decimal (3,2) NULL,
	gradeLevel	varchar(10) NULL,
	major		varchar(32) NULL,
	studentResm	BLOB NOT NULL,
	FOREIGN KEY (UserNum) REFERENCES User(UserNum)
);

Create Table Listing (
	ListingNum 	int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	StaffNum 	int UNSIGNED NOT NULL,
	RegistrNum	int UNSIGNED NOT NULL,
	headline 	varchar(255) NOT NULL,
	detailedDescription varchar(255) NOT NULL,
	category  	varchar(100) NOT NULL,
	startDate	date NOT NULL,
	endDate		date NOT NULL,
	deadline	date NOT NULL,
	locationCity	varchar(50) NOT NULL,
	locationState	varchar(2) NOT NULL,
	gpaRequire	decimal(3, 2) NULL,
	gradeRequire	varchar(10) NULL,
	paid		varchar(3) NOT NULL,
	FOREIGN KEY (StaffNum) REFERENCES Staff(UserNum)
);

Create Table registration (
	RegistrNum	int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	StudentNum	int UNSIGNED NOT NULL,
	ListingNum	int UNSIGNED NOT NULL,
	RegistrDate	date NOT NULL,
	FOREIGN KEY (StudentNum) REFERENCES Student(UserNum),
	FOREIGN KEY (ListingNum) REFERENCES Listing(ListingNum)
);
