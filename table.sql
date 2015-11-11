DROP TABLE IF EXISTS user;
DROP TABLE IF EXISTS authentication;
DROP TABLE IF EXISTS request;
DROP SCHEMA IF EXISTS securityRequests;
CREATE SCHEMA securityRequests;
/*SET search_path = securityRequests;*/


CREATE TABLE user (
	pawPrintSSO varchar(26) PRIMARY KEY, #this size may change depending on whether or not it needs to be more than 6 chars
	EmpID integer(8),
	fullName varchar(50),
	title varchar(10),
	phoneNumber integer(10),
	email varchar(50),
	FERPAscore float(5,2),
	campusAddress varchar(100),
	academicOrg varchar(32),
	isStudentWorker boolean, DEFAULT FALSE,
	isUGRD boolean DEFAULT false,
	isGRAD boolean DEFAULT FALSE,
	isMED boolean DEFAULT FALSE,
	isVETMED boolean DEFAULT FALSE,
	isLAW boolean DEFAULT FALSE
);

INSERT INTO user VALUES ('abc123', 12345678, 'Testy McTesterson', 'Professor', 5735551234, 'testyM@missouri.edu', 89.624, '132 test st', 'Education', DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT);
INSERT INTO user VALUES ('def456', 87654321, 'new kid', 'student', 3823332828, 'nbk123@mail.missouri.edu', 100, '59 main st', 'Engineering', TRUE, TRUE, DEFAULT, DEFAULT, DEFAULT, DEFAULT);

#this table holds the authentication data for our system
CREATE TABLE authentication (
	pawPrintSSO varchar(26) REFERENCES securityRequests.user(pawPrintSSO),
	hashedSalt varchar(40) NOT NULL,
	hashedPassword varchar(40) NOT NULL,
	PRIMARY KEY (pawPrintSSO) 
);

INSERT INTO authentication VALUES 
('abc123', 'b295d117135a9763da282e7dae73a5ca7d3e5b11', 'd411466b66bd3688d13f7000612a3e1eb0e6bdfe'), #salt is the sha1 version of "salt" and the password is "password". It has been combined with the hashed salt into "b295d117135a9763da282e7dae73a5ca7d3e5b11password" and then hashed again into "d411466b66bd3688d13f7000612a3e1eb0e6bdfe"
('def456', 'a415ab5cc17c8c093c015ccdb7e552aee7911aa4', '9d033ea2b2a4387561e2ffdfd6bfe64ab90a4e83'); # the password is test1234


CREATE TABLE request (
	submittedBy varchar(26) REFERENCES securityRequests.user(pawPrintSSO),
	dateSubmitted TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	isNew boolean DEFAULT TRUE,
	isCopy boolean DEFAULT FALSE,
	isValidFERPA boolean DEFAULT FALSE,
	accessDesc varchar(256),
	#all of these are specific access vars
	basicInq boolean DEFAULT FALSE, #basic inquey view access
	advancedInqView boolean DEFAULT FALSE, #advanced inquery view access
	advancedInqUpdate boolean DEFAULT FALSE, #advanced inquery update access
	3CsView boolean DEFAULT FALSE, #Checklists, Comments, and Communications view access
	3CsUpdate boolean DEFAULT FALSE, #Checklists, Comments, and Communications update access
	advisorUpdate boolean DEFAULT FALSE, #add an advisor to a student
	deptSOCUpdate boolean DEFAULT FALSE, #Scheduling courses, assigning faculty to course, generating permission numbers
	serviceIndicatorsView boolean DEFAULT FALSE, #view access to service indicators 
	serviceIndicatorsUpdate boolean DEFAULT FALSE, #update Administrative users with proper security can assign or remove service indicators from a student's record
	studentGroupsView boolean DEFAULT FALSE, #view groups a student is associated with
	studentGroupsUpdate boolean DEFAULT FALSE, #update groups a student is associated with (actually under reserved access)
	studyList boolean DEFAULT FALSE, #view a students class schedule
	registrarEnrollView boolean DEFAULT FALSE, #view access to Registrar Enrollment
	registrarEnrollUpdate boolean DEFAULT FALSE, #Adding and dropping a course utilizing Enrollment Request
	advisorStudCent boolean DEFAULT FALSE, #view access to students study list, advisor, program/plan, demographic data, and email address
	classPermView boolean DEFAULT FALSE, #view class permission numbers which have been created for a course
	classPermUpdate boolean DEFAULT FALSE, #creating general or student specific class permission numbers
	classRoster boolean DEFAULT FALSE, #view students enrolled, dropped, or withdrawn from a course 
	blockEnrollView boolean DEFAULT FALSE, #view block enrollments
	blockEnrollUpdate boolean DEFAULT FALSE, #add or drop a course utilizing enrollment request
	reportManager boolean DEFAULT FALSE, #assists in running various reports
	selfServiceAdvisor boolean DEFAULT FALSE, #View Advisee photo, addresses, service indicators, emergency contacts, telephone numbers, grades, class schedule, enrollment appointment, print academic advising profile (even though desc says view the box on the form is update)
	fiscalOfficer boolean DEFAULT FALSE, #view enrollment summary, term statistics and UM term statistics
	academicAdvisingProfile boolean DEFAULT FALSE, #allows printing of the academic advising profile (also update box)
	#these are for viewing specific test scores
	viewACT boolean DEFAULT FALSE,
	viewSAT boolean DEFAULT FALSE,
	viewGRE boolean DEFAULT FALSE,
	viewGMAT boolean DEFAULT FALSE,
	viewTOFEL boolean DEFAULT FALSE,
	viewIELTS boolean DEFAULT FALSE,
	viewLSAT boolean DEFAULT FALSE,
	viewMCAT boolean DEFAULT FALSE,
	viewAP boolean DEFAULT FALSE,
	viewCLEP boolean DEFAULT FALSE,
	viewGED boolean DEFAULT FALSE,
	viewMILLERS boolean DEFAULT FALSE,
	viewPRAX boolean DEFAULT FALSE,
	viewPLAMU boolean DEFAULT FALSE,
	viewBASE boolean DEFAULT FALSE,
	# these are for Student Financials (Cashiers) Access
	SFGenInq boolean DEFAULT FALSE, #for staff outside of the cashiers office (view access)
	SFCashGrpPostView boolean DEFAULT FALSE, #view access to the Cash Group Post (areas that want to apply charges)
	SFCashGrpPostUpdate boolean DEFAULT FALSE, #update access to the Cash Group Post (areas that want to apply charges)
	# These are for Financial Aid Access
	FACash boolean DEFAULT FALSE, #view a student's financial aid awards and budget
	FANonFinancialAidStaff boolean DEFAULT FALSE, #for areas that want to apply charges
	# Reserved Access
	immunizationViewView boolean DEFAULT FALSE, #view immunizations  
	immunizationViewUpdate boolean DEFAULT FALSE, #update immunizations
	transferCredAdmissionView boolean DEFAULT FALSE, #view Transfer Credit Admission
	transferCredAdmissionUpdate boolean DEFAULT FALSE, #update Transfer Credit Admission
	relationshipsView boolean DEFAULT FALSE, #view relationships
	relationshipsUpdate boolean DEFAULT FALSE, #update relationships
	accommodateUpdate boolean DEFAULT FALSE, #update accommodate (studnet health)
	supportStaffView boolean DEFAULT FALSE, #view support staff
	supportStaffUpdate boolean DEFAULT FALSE, #update support staff (Registrar's office)
	advanceStandingReportView boolean DEFAULT FALSE, #view advance standing report
	advanceStandingReportUpdate boolean DEFAULT FALSE, #update advance standing report
	PRIMARY KEY(submittedBy, dateSubmitted)
);

INSERT INTO request VALUES
('abc123', DEFAULT, DEFAULT, DEFAULT, DEFAULT, 'Description here', DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT, DEFAULT);
