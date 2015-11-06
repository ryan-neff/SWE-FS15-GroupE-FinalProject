<!DOCTYPE html>
<html>
<style>
	table {
		width: 100%;
		float: left;
		border-collapse: collapse;
		padding: 15px;
	}
	
	tr {
		padding-bottom: 1em;
	}
	
	td {
		padding: 15px;
	}
	
	hr {
		width: 90%;
		size: 3; 
		color= black;
	}
	
	.title {
		align: center;
		text-align: center;
		width: 100%;
	}
</style>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
	<title>myZouSecurity</title>
	<div class="title">
		<h1>myZou SECURITY Request Form</h1>
		<br>
		<h2>University of Missouri - Columbia</h2>
	</div>
	<hr/>
</head>
<body>
	<form action="action_page.php" >
		<div align="center">
		
	<!-- Page 1 -->
	
	<div class="form-group">
		<table id="user_info_table">
			<tbody>
				<tr>
					<td>	
						<label for="username">*Username (Full legal name):</label>
					</td>
					<td>
						<input type="text" class="form-control" id="username" placeholder="Username">
					</td>
					<td>
						<label for="pawprint">*Pawprint/SSO:</label>
					</td>
					<td>
						<input type="text" class="form-control" id="pawprint" placeholder="Pawprint">
					</td>
				</tr>
				<tr>
					<td>	
						<label for="title">*Title:</label>
					</td>
					<td>
						<input type="text" class="form-control" id="title" placeholder="Title">
					</td>
					<td>
						<label for="emp_ID">*Employee ID:</label>
					</td>
					<td>
						<input type="text" class="form-control" id="emp_ID" placeholder="Employee ID">
					</td>
				</tr>
				<tr>
					<td>	
						<label for="org">*Academic Organization:</label>
					</td>
					<td>
						<input type="text" class="form-control" id="org" placeholder="Organization">
					</td>
					<td>
						<label for="address">*Campus Address:</label>
					</td>
					<td>
						<input type="text" class="form-control" id="address" placeholder="Campus address">
					</td>
				</tr>
				<tr>
					<td>	
						
					</td>
					<td>
						
					</td>
					<td>
						<label for="address">*Phone number:</label>
					</td>
					<td>
						<input type="phone" class="form-control" id="phone" placeholder="999-99-9999">
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<hr/>
	
	<div class="form-group">	
		<table id="request_table">
			<tbody>
				<tr>
					<td>
						<label>Type of request:</label>
					</td>
					<td>
						New &nbsp;
						<input type="radio" class="form-control" id="new_req" name="request">
					</td>
					<td>
						Additional &nbsp;
						<input type="radio" class="form-control" id="add_req" name="request">
					</td>
				</tr>
				
				<tr>
					<td>
						<label for="staff">Copy security of Current/Former Staff Member</label>
					</td>
					<td>
						Current Staff Member &nbsp;
						<input class="form-control" type="radio" id="current_staff" name="staff">
					</td>
					<td>
						Former Staff Member &nbsp;
						<input class="form-control" type="radio" id="former_staff" name="staff">
					</td>
				</tr>
				
				<tr>
					<td>
						<label for="name">Name:</label>
					</td>
					<td colspan="2">
						<input class="form-control" type="text" name="name2">
					</td>
				</tr>
				
				<tr>
					<td>
						<label for="position">Position:</label>
					</td>
					<td colspan="2">
						<input type="text" class="form-control" id="position" name="position">
					</td>
				</tr>
				<tr>
					<td >
						<label for="SSO">PawPrint/SSO:</label>
					</td>
					<td colspan="2">
						<input type="text" id="SSO" class="form-control" name="SSO">
					</td>
				</tr>
				<tr>
					<td >
						<label for="empID">Employee ID (if available):</label>
					</td>
					<td colspan="2">
						<input class="form-control" type="text" id="empID" name="empID">
					</td>
				</tr>
				<tr>
					<td>
						<label for="student_worker">Check if Student Worker:</label>
					</td>
					<td colspan="2">
						<input class="form-control" id="student_worker" type="checkbox">
					</td>
				</tr>
			</tbody>
		</table>
	</div>
		
	<hr/>
		
	<div class="form-group">	
		<table id="ferpa_table">
			<tbody>
				<tr>
					<td>A passing score of 85% on the FERPA quiz is required before access to student data is approved.<br>
    					To request access to the FERPA tutorial and access the FERPA quiz can be done at <a href="http://myzoutraining.missouri.edu/ferpareq.php"> myZou Training </a>.
    				</td>
    				<td>
    					FERPA SCORE: <input class="form-control" type="text" name="ferpa">
    				</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<hr/>
		
	<div class="form-group">	
		<table id="access_needed_table">
			<tbody>
				<tr>
					<td>
						<label>*Please describe the type of access needed (i.e. view student name, address, rosters etc.). Please be specific.</label>
					</td>
				</tr>
				<tr>
					<td>
						<textarea id= "access_needed" class="form-control" rows="4"></textarea>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<hr/>	
	
	<div class="form-group">	
		<table id="career_table">
			<tbody>
				<tr>
					<td>
						<label>*Select the Academic Career(s). Please check all that apply.</label>
					</td>
					<td>
						UGRD
						<input type="checkbox" class="form-control" id="ugrd" name="career">
					</td>
					<td>
						GRAD
						<input type="checkbox" class="form-control" id="grad" name="career">
					</td>
					<td>
						MED
						<input type="checkbox" class="form-control" id="med" name="career">
					</td>
					<td>
						VET MED
						<input type="checkbox" class="form-control" id="vet med" name="career">
					</td>
					<td>
						LAW
						<input type="checkbox" class="form-control" id="law" name="career">
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<hr/>
		
	<!-- Page 2 -->
	
	<p align="left">Select all appropriate access. Access to Admissions, Student Financials, and Financial Aid will be forwarded to the appropriate department.</p>
	
	<div class="form-group">	
		<table>
			<thead>
				<h3>Student Records Access</h3>
			</thead>
			<tbody>
				<tr>
					<th colspan="2">
					
					</th>
					<th colspan="2">
						Access Type
					</th>
				</tr>
				<tr>
					<th>
						Role
					</th>
					<th>
						Role Description
					</th>
					<th>
						View
					</th>
					<th>
						Update
					</th>
				</tr>
				<tr>
					<td>
						Basic Inquiry
					</td>
					<td>
						Access to basic bio demo and student data: names, address, FERPA directory data, photos, term info,
						<br>
						degree information, programs, honors and awards, service indicators (holds) and previous schools.
					</td>
					<td>
						<input type="checkbox" class="form-control" id="basic_inquiry_view" name="basic_inquiry_view">
					</td>
					<td>
					
					</td>
				</tr>
				<tr>
					<td>
						Advanced Inquiry
					</td>
					<td>
						Includes Basic Inquiry access. Additionally includes relations with institution, citizenship, 
						<br>
						visa, decedant data, student enrollment, gpa, term history, 3C's, advisors, student groups.
					</td>
					<td>
						<input type="checkbox" class="form-control" id="adv_inquiry_view" name="adv_inquiry_view">
					</td>
					<td>
						<input type="checkbox" class="form-control" id="adv_inquiry_update" name="adv_inquiry_update">
					</td>
				</tr>
				<tr>
					<td>
						3Cs
					</td>
					<td>
						Checklists, Comments, Communications
					</td>
					<td>
						<input type="checkbox" class="form-control" id="3Cs_view" name="3Cs_view">
					</td>
					<td>
						<input type="checkbox" class="form-control" id="3Cs_update" name="3Cs_update">
					</td>
				</tr>
				<tr>
					<td>
						Advisor Update
					</td>
					<td>
						Adding an advisor to a student's record
					</td>
					<td>
						
					</td>
					<td>
						<input type="checkbox" class="form-control" id="advisor_update_update" name="advisor_update_update">
					</td>
				</tr>
				<tr>
					<td>
						Department SOC Update
					</td>
					<td>
						Scheduling courses, assigning faculty to course, generating permission numbers
					</td>
					<td>
						
					</td>
					<td>
						<input type="checkbox" class="form-control" id="dept_SOC_update" name="dept_SOC_update">
					</td>
				</tr>
				<tr>
					<td>
						Service Indicators (Holds)
					</td>
					<td>
						Administrative users with proper security can assign or remove service indicators 
						<br>
						from a student's record
					</td>
					<td>
						<input type="checkbox" class="form-control" id="service_ind_view" name="service_ind_view">
					</td>
					<td>
						<input type="checkbox" class="form-control" id="service_ind_update" name="service_ind_update">
					</td>
				</tr>
				<tr>
					<td>
						Student Group View
					</td>
					<td>
						View groups a student is associated with
					</td>
					<td>
						<input type="checkbox" class="form-control" id="student_group_view" name="student_group_view">
					</td>
					<td>
						
					</td>
				</tr>
				<tr>
					<td>
						View Study List
					</td>
					<td>
						View a student's class schedule
					</td>
					<td>
						<input type="checkbox" class="form-control" id="study_list_view" name="study_list_view">
					</td>
					<td>
						
					</td>
				</tr>
				<tr>
					<td>
						Registrar Enrollment
					</td>
					<td>
						Adding and dropping a course utilizing Enrollment Request
					</td>
					<td>
						<input type="checkbox" class="form-control" id="reg_enroll_view" name="reg_enroll_view">
					</td>
					<td>
						<input type="checkbox" class="form-control" id="reg_enroll_update" name="reg_enroll_update">
					</td>
				</tr>
				<tr>
					<td>
						Advisor Student Center
					</td>
					<td>
						Access to students study list, advisor, program/plan, demographic data, e-mail address
					</td>
					<td>
						<input type="checkbox" class="form-control" id="adv_center_view" name="adv_center_view">
					</td>
					<td>
					
					</td>
				</tr>
				<tr>
					<td>
						Class Permission
					</td>
					<td>
						Creating general or student specific class permission numbers
					</td>
					<td>
						
					</td>
					<td>
						<input type="checkbox" class="form-control" id="class_permission_update" name="class_permission_update">
					</td>
				</tr>
				<tr>
					<td>
						Class Permission View
					</td>
					<td>
						View class permission numbers which have been created for a course
					</td>
					<td>
						<input type="checkbox" class="form-control" id="class_permission_view" name="class_permission_view">
					</td>
					<td>
						
					</td>
				</tr>
				<tr>
					<td>
						Class Roster
					</td>
					<td>
						View students enrolled, dropped or withdrawn in a course
					</td>
					<td>
						<input type="checkbox" class="form-control" id="class_roster_view" name="class_roster_view">
					</td>
					<td>
						
					</td>
				</tr>
				<tr>
					<td>
						Block Enrollments
					</td>
					<td>
						Adding and dropping a course utilizing Enrollment Request
					</td>
					<td>
						<input type="checkbox" class="form-control" id="block_enroll_view" name="block_enroll_view">
					</td>
					<td>
						<input type="checkbox" class="form-control" id="block_enroll_update" name="block_enroll_update">
					</td>
				</tr>
				<tr>
					<td>
						Report Manager
					</td>
					<td>
						Assists in running various reports
					</td>
					<td>
						<input type="checkbox" class="form-control" id="report_mgr_view" name="report_mgr_view">
					</td>
					<td>
					
					</td>
				</tr>
				<tr>
					<td>
						Self Service Advisor
					</td>
					<td>
						View Advisee photo, addresses, service indicators, emergency contacts, telephone numbers,
						<br>
						grades, class schedule, enrollment appointment, print academic advising profile
					</td>
					<td>
						
					</td>
					<td>
						<input type="checkbox" class="form-control" id="self_serv_update" name="self_serv_update">
					</td>
				</tr>
				<tr>
					<td>
						Fiscal Officer
					</td>
					<td>
						View enrollment summary, term statistics, and UM term statistics
					</td>
					<td>
						<input type="checkbox" class="form-control" id="fisc_off_view" name="fisc_off_view">
					</td>
					<td>
						
					</td>
				</tr>
				<tr>
					<td>
						Academic Advising Profile
					</td>
					<td>
						Allows printing of the Academic Advising Profile
					</td>
					<td>
						
					</td>
					<td>
						<input type="checkbox" class="form-control" id="ac_adv_profile_update" name="ac_adv_profile_update">
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<hr/>
	
	<!-- Page 3 -->
	
	<p align="left">Select all appropriate access.</p>
	
	<div class="form-group">		
		<table>
			<thead>
				<h3>Admissions Access</h3>
			</thead>
			<tbody>
				<tr>
					<th   colspan="3">Check which test(s) access is to be granted</th>
					<th   colspan="2"><input type="checkbox" name="tests" value="all">Access to All Test Scores</th>
				</tr>
				<tr>
					<td><input type="checkbox" name="tests" value="act">ACT</td>
					<td><input type="checkbox" name="tests" value="sat">SAT</td>
					<td><input type="checkbox" name="tests" value="gre">GRE</td>
					<td><input type="checkbox" name="tests" value="gmat">GMAT</td>
					<td><input type="checkbox" name="tests" value="tofel">TOFEL</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="tests" value="ielts">IELTS</td>
					<td><input type="checkbox" name="tests" value="lsat">LSAT</td>
					<td><input type="checkbox" name="tests" value="mcat">MCAT</td>
					<td><input type="checkbox" name="tests" value="ap">AP</td>
					<td><input type="checkbox" name="tests" value="clep">CLEP</td>
				</tr>
				<tr>
					<td><input type="checkbox" name="tests" value="ged">GED</td>
					<td><input type="checkbox" name="tests" value="millers">MILLERS</td>
					<td><input type="checkbox" name="tests" value="prax">PRAX</td>
					<td><input type="checkbox" name="tests" value="pla-mu">PLA-MU</td>
					<td><input type="checkbox" name="tests" value="base">BASE</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<hr/>	
	
	<div class="form-group">
		<table>
			<thead>
				<h3>Student Financials (Cashiers) Access</h3>
			<thead>
			<tbody>
				<tr>
					<th colspan="2">
					
					</th>
					<th colspan="2">
						Access Type
					</th>
				</tr>
				<tr>
					<th>
						Role
					</th>
					<th>
						Role Description
					</th>
					<th>
						View
					</th>
					<th>
						Update
					</th>
				</tr>
				<tr>
					<td>
						SF General Inquiry
					</td>
					<td>
						For staff outside of the Cashiers Office
					</td>
					<td>
						<input type="checkbox" class="form-control" name="sfGeneral" value="true">
					</td>
					<td>
					
					</td>
				</tr>
				<tr>
					<td>
						SF Cash Group Post
					</td>
					<td>
						Also known as "Cost Centers" (for areas that want to apply charges)
					</td>
					<td>
						<input type="checkbox" class="form-control" name="sfCash" value="true"></td>
					<td>
						<input type="checkbox" class="form-control" name="updateCash" value="true">
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<hr/>
	
	<div class="form-group">
		<table>
			<thead>
				<h3>Student Financials Aid Access</h3>
			<thead>
			<tbody>
				<tr>
					<th colspan="2">
					
					</th>
					<th colspan="2">
						Access Type
					</th>
				</tr>
				<tr>
					<th>
						Role
					</th>
					<th>
						Role Description
					</th>
					<th>
						View
					</th>
					<th>
						Update
					</th>
				</tr>
				<tr>
					<td>
						FA Cash
					</td>
					<td>
						View a student's financial aid awards and budget
					</td>
					<td>
						<input type="checkbox" name="faCash" value="true">
					</td>
					<td>
					
					</td>
				</tr>
				<tr>
					<td>
						SF Cash Group Post
					</td>
					<td>
						Also known as "Cost Centers" (for areas that want to apply charges)
					</td>
					<td>
						<input type="checkbox" name="faNon" value="true">
					</td>
					<td>
					
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<hr/>
	
	<!-- still needs formatting-->
	<div class="form-group">
		<table>
			<tbody>
				<tr>
					<td><h3>Authorization</h3></td>
					<td>Return to:	Student Information Systems 130 Jesse Hall</td>
				</tr>
				<tr>
					<td colspan="2">By signing, I understand any access given me is for University purposes as part of my job responsibilities. I am
						responsible for exercising due care to protect this information from unauthorized discloser by safeguarding my
						password(s) and ensuring the data I obtain is disseminated only through approved University channels.
						Unauthorized access and use/dissemination of data, are serious offenses, which may be subjected to disciplinary
						action.
					</td>
				<tr>
					<td id="authorize">*Employee Signature:</td>
					<td width="475"></td>
				</tr>
				<tr>
					<td id="authorize">*Department Head (or designee) Signature:</td>
					<td width="475"></td>
				</tr>
				<tr>
					<td id="authorize">*Dean's (or designee) Signature:</td>
					<td width="475"></td>
				</tr>
			</tbody>
		</table>
	</div>	
	
	<hr/>
	
	<!-- still needs formatting-->
	<div class="form-group">
		<table>
			<thead>
					<h3>Reserved Access</h3>
			<thead>
			<tbody>
				<tr>
					<th>Role</th>
					<th>View</th>
					<th>Update</th>
					<th>Role</th>
					<th>View</th>
					<th>Update</th>
				</tr>
				<tr>
					<td>Immunization view</td>
					<td><input type="checkbox" name="reserved" value="immunizationView"></input></td>
					<td><input type="checkbox" name="reserved" value="immunizationUpdate"></input></td>
					<td>Accommodate (Student Health)</td>
					<td></td>
					<td><input type="checkbox" name="reserved" value="accomodateUpdate"></input></td>
				</tr>
				<tr>
					<td>Transfer Credit Admission</td>
					<td><input type="checkbox" name="reserved" value="transferView"></input></td>
					<td><input type="checkbox" name="reserved" value="transferUpdate"></input></td>
					<td>Support Staff (Registrar's Office)</td>
					<td><input type="checkbox" name="reserved" value="supportView"></input></td>
					<td><input type="checkbox" name="reserved" value="supportUpdate"></input></td>
				</tr>
				<tr>
					<td>Relationships</td>
					<td><input type="checkbox" name="reserved" value="relationshipView"></input></td>
					<td><input type="checkbox" name="reserved" value="relationshipUpdate"></input></td>
					<td>Advance Standing Report</td>
					<td><input type="checkbox" name="reserved" value="advanceView"></input></td>
					<td><input type="checkbox" name="reserved" value="advanceUpdate"></input></td>
				</tr>
				<tr>
					<td>Student Groups</td>
					<td></td>
					<td><input type="checkbox" name="reserved" value="studentUpdate"></input></td>
					<td></td>
					<td></td>
					<td></td>
				</tr>
			</tbody>
		</table>
	</div>		
	
	<hr/>
	
		<input type="button" class="btn btn-default" value ="Submit" name="Submit">
	
	</div>
	</form>
</body>
</html>