Create Table Staff (
	StaffNum 	int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	fname 		varchar(32) NOT NULL,
	lname		varchar(32) NOT NULL,
	mname		varchar(32) NULL,
	address		varchar(32) NULL,
	city		varchar(32) NULL,
	state 		varchar(15)	NULL,
	zip			numeric NULL,
	field		varchar(32) NULL,
	department	varchar(32) NULL,
	institution varchar(32) NULL
	
);

Create Table Student (
	StudentNum 	int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	fname 		varchar(32) NOT NULL,
	lname		varchar(32) NOT NULL,
	mname		varchar(32) NULL,
	address		varchar(32) NULL,
	city		varchar(32) NULL,
	state 		varchar(15)	NULL,
	zip			numeric		NULL,
	major		varchar(32) NULL

);

Create Table registration (
	RegistrNum	int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	StudentNum	int UNSIGNED NOT NULL,
	ListingNum	int UNSIGNED NOT NULL,
	RegistrDate	date NOT NULL,
	FOREIGN KEY (StudentNum) REFERENCES Student(StudentNum),
	FOREIGN KEY (ListingNum) REFERENCES Listing(ListingNum)
);

Create Table Listing (
	ListingNum 	int UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	StaffNum 	int UNSIGNED NOT NULL,
	RegistrNum	int UNSIGNED NOT NULL,
	headline 	varchar(255) NOT NULL,
	detailedDescription varchar(255) NOT NULL,
	category  	varchar(100) NOT NULL,
	FOREIGN KEY (StaffNum) REFERENCES Staff(StaffNum)
);

