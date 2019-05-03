SET GLOBAL local_infile = 1;

-- LOAD DATA LOCAL INFILE '/Users/katherine/Desktop/DB/Project/p1m3/LOAD/user.csv'
-- INTO TABLE USER
-- FIELDS TERMINATED BY ',' 
-- ENCLOSED BY '"' 
-- LINES TERMINATED BY '\r\n'
-- IGNORE 1 LINES(id, username, password, type);


-- LOAD DATA LOCAL INFILE '/Users/katherine/Desktop/DB/Project/p1m3/LOAD/Applicant.csv'
-- INTO TABLE APPLICANT
-- FIELDS TERMINATED BY ',' 
-- ENCLOSED BY '"' 
-- LINES TERMINATED BY '\r\n'
-- IGNORE 1 LINES(User_id, First_name, Last_name, Gender, Phone_no, Email_addr, Address, Education_background);

LOAD DATA LOCAL INFILE '/Users/katherine/Desktop/DB/Sites/LOAD-new/Qualification.csv'
INTO TABLE QUALIFICATION
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' 
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES(Qualification_id, User_id, Skills_ql, Project, Work_experience);

-- LOAD DATA LOCAL INFILE '/Users/katherine/Desktop/DB/Project/p1m3/LOAD/Company.csv'
-- INTO TABLE COMPANY
-- FIELDS TERMINATED BY ',' 
-- ENCLOSED BY '"' 
-- LINES TERMINATED BY '\r\n'
-- IGNORE 1 LINES(Company_id, Name, Scale);

LOAD DATA LOCAL INFILE '/Users/katherine/Desktop/DB/Sites/LOAD-new/Job.csv'
INTO TABLE JOB
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"' 
LINES TERMINATED BY '\r\n'
IGNORE 1 LINES(Job_id, Company_id, Position, Property, Category, Application_deadline, Location, Skills_rq, Description, Minimal_education);

-- LOAD DATA LOCAL INFILE '/Users/katherine/Desktop/DB/Project/p1m3/Requirement.csv'
-- INTO TABLE REQUIREMENT
-- FIELDS TERMINATED BY ',' 
-- ENCLOSED BY '"' 
-- LINES TERMINATED BY '\r\n'
-- IGNORE 1 LINES(Requirement_id, Job_id, Skills_rq, Work_experience, Minimal_education);

-- LOAD DATA LOCAL INFILE '/Users/katherine/Desktop/DB/Project/p1m3/LOAD/Company_location.csv'
-- INTO TABLE COMPANY_LOCATION
-- FIELDS TERMINATED BY ',' 
-- ENCLOSED BY '"' 
-- LINES TERMINATED BY '\r\n'
-- IGNORE 1 LINES(Company_id, Comp_location);