DELIMITER $$
Create Procedure Add_User(
    IN firstname varchar(32),
	IN lastname varchar(32),
	IN midname varchar(32),
	IN userN varchar(20),
	IN addr varchar(50),
	IN locCity varchar(32),
	IN locState varchar(15),
	IN locZip decimal(10,0),
	IN institut varchar(32),
	IN FOS varchar(32),
	IN emailaddress varchar(100),
	IN dateOfBirth	date,
	IN pic blob,
	IN type varchar(10),
	IN pass varchar(100),
	IN staffDepartment varchar(32),
	IN CV	blob,
	IN staffTitle		varchar(32),
	IN gradeAverage		decimal(3,2),
	IN level	varchar(10),
	IN study		varchar(32),
	IN studentResume	blob
)

Begin
Insert Into User(fname, lname, mname, address, city, state, zip, institution, fieldOfStudy, email, DOB, photo, role, username, hashedpass)
Values (firstname, lastname, midname, addr, locCity, locState, locZip, institut, FOS, emailaddress, dateOfBirth, pic, type, userN, pass);
IF (type = 'Researcher') /*Insert into staff if role is researcher*/
Then Begin
Insert Into Staff (UserNum, department, staffCV, title)
Select UserNum From User, staffDepartment, CV, staffTitle Where email = emailaddress;
End;
Else If(type = 'Student') /*Insert into student if role is student*/
Then Begin
Insert Into Student
Select UserNum From User, gradeAverage, level, study, studentResume Where email = emailaddress;
END;
ElSE BEGIN
END;
END IF;
END $$
DELIMITER ;