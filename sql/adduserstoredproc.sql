Create Procedure Add_User
````@fname varchar(32),
	@lname varchar(32),
	@mname varchar(32),
	@userName varchar(20),
	@address varchar(50),
	@city varchar(32),
	@state varchar(15),
	@zip decimal(10,0),
	@institution varchar(32),
	@fieldOfStudy varchar(32),
	@email varchar(100),
	@DOB	date,
	@photo blob,
	@role varchar(10),
	@hashedpass varchar(100),
	@department varchar(32),
	@staffCV	blob,
	@title		varchar(32),
	@gpa		decimal(3,2),
	@gradeLevel	varchar(10),
	@major		varchar(32),
	@studentResm	blob
As
	Insert Into User(fname, lname, mname, address, city, state, zip, institution, fieldOfStudy, email, DOB, photo, role, username, hashedpass)
		Values (@fname, @lname, @mname, @address, @city, @state, @zip, @institution, @fieldOfStudy, @email, @DOB, @photo, @role, @userName, @hashedpass)
IF (@role = 'Researcher') /*Insert into staff if role is researcher*/
Begin
	Insert Into Staff
		Values((Select UserNum From User Where email = @email), @department, @staffCV, @title)
End

Else If(@role = 'Student') /*Insert into student if role is student*/
Begin
	Insert Into Student
		Values((Select UserNum From User Where email = @email), @gpa, @gradeLevel, @major, @studentResm)
End