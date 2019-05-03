CREATE TABLE user(
	id int(10) NOT NULL auto_increment, 
	username varchar(10) unique, 
	password varchar(40), 
	type char(1), 
	primary key(id)
);

CREATE TABLE APPLICANT(
	User_id CHAR(10) NOT NULL,
	First_name VARCHAR(15) NOT NULL,
	Last_name VARCHAR(15) NOT NULL,
	Gender CHAR,
	Phone_no CHAR(10) NOT NULL,
	Email_addr VARCHAR(30) NOT NULL,
	Address TEXT,
	Education_background TEXT,
	PRIMARY KEY (User_id)
);


CREATE TABLE QUALIFICATION(
	Qualification_id INT(10) NOT NULL auto_increment,
	User_id CHAR(10),
	Skills_ql TEXT,
	Project TEXT,
	Work_experience TEXT,
	PRIMARY KEY (Qualification_id, User_id),
	FOREIGN KEY (User_id)
		REFERENCES APPLICANT(User_id)
		ON UPDATE CASCADE ON DELETE CASCADE
);


CREATE TABLE COMPANY(
	Company_id CHAR(10) NOT NULL,
	Name VARCHAR(15) NOT NULL,
	Scale INT,
	PRIMARY KEY (Company_id)
);


CREATE TABLE JOB(
	
	Job_id INT(10) NOT NULL auto_increment,
	Company_id CHAR(10) NOT NULL,
	Position VARCHAR(30) NOT NULL,
	Property VARCHAR(10) NOT NULL,
	Category VARCHAR(20),
	Application_deadline DATE NOT NULL,
	Location VARCHAR(20),

	Skills_rq TEXT,
	Description TEXT,
	-- Description TEXT,
	Minimal_education TEXT,

	PRIMARY KEY (Job_id),
	FOREIGN KEY (Company_id)
		REFERENCES COMPANY(Company_id)
		ON UPDATE CASCADE ON DELETE CASCADE
);


-- CREATE TABLE REQUIREMENT(
-- 	Requirement_id INT(10) NOT NULL auto_increment,
-- 	Job_id CHAR(10) NOT NULL,
-- 	Skills_rq TEXT,
-- 	Work_experience TEXT,
-- 	-- Description TEXT,
-- 	Minimal_education TEXT,
-- 	PRIMARY KEY (Requirement_id, Job_id),
-- 	FOREIGN KEY REQUIREMENT(Job_id)
-- 		REFERENCES JOB(Job_id)
-- 		ON UPDATE CASCADE ON DELETE CASCADE
-- );

CREATE TABLE COMPANY_LOCATION(
	Company_id CHAR(10) NOT NULL,
	Comp_location VARCHAR(20) NOT NULL,
	PRIMARY KEY (Company_id, Comp_location),
	FOREIGN KEY (Company_id)
		REFERENCES COMPANY(Company_id)
		ON UPDATE CASCADE ON DELETE CASCADE
);

