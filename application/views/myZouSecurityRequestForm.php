<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        
        $(document).ready(function(){
            $('#all_tests').click(function () {

                if ($(this).is(':checked')) {
                    $('#act,#sat,#gre,#gmat,#tofel,#ielts,#lsat,#mcat,#ap,#clep,#ged,#millers,#prax,#plamu,#base').prop('checked', true);

                } else {
                    $('#act,#sat,#gre,#gmat,#tofel,#ielts,#lsat,#mcat,#ap,#clep,#ged,#millers,#prax,#plamu,#base').prop('checked', false);
                }

            });

            $('#act,#sat,#gre,#gmat,#tofel,#ielts,#lsat,#mcat,#ap,#clep,#ged,#millers,#prax,#plamu,#base').click(function () {

                if ($(this).is(':checked')) {
                    } else {
                        $('#all_tests').prop('checked', false);
                }

            });
        });
        
    </script>
    <style>
	   div.container {
            margin: 0;
            background: yellow;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%);
        }

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
            color: black;
        }

        .title {
            align: center;
            text-align: center;
            width: 100%;
        }

        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
            -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
            -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
            transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
        }

        .btn {
            display: inline-block;
            padding: 6px 12px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }

        .btn-default {
            color: #333;
            background-color: #fff;
            border-color: #ccc;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .table-border {
            align: center;
            border-top: solid black;
            border-bottom: solid black;
        }

        .student-border {
            border: solid black;
        }

        .bottom-border {
            border-bottom: dotted grey;
            border-width: 2px;
        }
    	.error{

    		color:#ff3333;
    		font-weight: oblique;
    		font-size:20px;
    	}
        input[type=checkbox]{
            padding:12px;
            width:30px;
        }
    </style>
	<title>myZou SECURITY Request Form</title>
	<div class="title">
		<h1>myZou SECURITY Request Form</h1>
		<h2>University of Missouri - Columbia</h2>

	</div>
</head>

<body style="border: double black; border-width: 5px; padding: 5px; align: center;">

	<input type="button" class="btn btn-default" value="Home" name="Home" />
	
	<?php echo form_open('index.php/formController/submitRequest'); ?>
	<!-- Page 1 -->
	
	<div class="form-group">
		<table align="right" class="table-border">
			<tbody>
				<tr>
					<td>	
						<label for="username">*Username (Full legal name):</label>
					</td>
					<td id="form-control">
						<?php echo form_error('username'); ?>
						<input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>" size="50" placeholder="Username" >
					</td>
					<td>
						<label for="pawprint">*Pawprint/SSO:</label>
					</td>
					<td>
						<?php echo form_error('pawprint'); ?>
						<input type="text" class="form-control" id="pawprint" name="pawprint" value="<?php echo set_value('pawprint'); ?>" size="6" placeholder="Pawprint">
					</td>
				</tr>
				<tr>
					<td>	
						<label for="title">*Title:</label>
					</td>
					<td id="form-control">
						<?php echo form_error('title'); ?>
						<input type="text" class="form-control" id="title" name="title" value="<?php echo set_value('title'); ?>" size="10" placeholder="Title">
					</td>
					<td>
						<label for="emp_ID">*Employee ID:</label>
					</td>
					<td>
						<?php echo form_error('emp_ID'); ?>
						<input type="text" class="form-control" id="emp_ID" name="emp_ID" value="<?php echo set_value('emp_ID'); ?>" size="8" placeholder="Employee ID">
					</td>
				</tr>
				<tr>
					<td>	
						<label for="org">*Academic Organization:</label>
					</td>
					<td id="form-control">
						<?php echo form_error('org'); ?>
						<input type="text" class="form-control" id="org" name="org" value="<?php echo set_value('org'); ?>" size="32" placeholder="Organization">
					</td>
					<td>
						<label for="address">*Campus Address:</label>
					</td>
					<td>
						<?php echo form_error('address'); ?>
						<input type="text" class="form-control" id="address" name="address" value="<?php echo set_value('address'); ?>" size="100" placeholder="Campus address">
					</td>
				</tr>
				<tr>
					<td>	
						
					</td>
					<td id="form-control">
						
					</td>
					<td>
						<label for="phone">*Phone number:</label>
					</td>
					<td>
						<?php echo form_error('phone'); ?>
						<input type="phone" class="form-control" id="phone" name="phone" value="<?php echo set_value('phone'); ?>" placeholder="7738769999" />
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	
	<div class="form-group">	
		<table class="table-border">
			<tbody>
				<tr style="border-bottom: ridge;">
					<td>
						<?php echo form_error('request'); ?>
						<label>Type of request:</label>
					</td>
					<td>
						New &nbsp;
						<input type="radio" class="form-control" id="new_req" value="new" name="request" <?php echo set_radio('request', 'new'); ?> />
					</td>
					<td>
						Additional &nbsp;
						<input type="radio" class="form-control" id="add_req" value="add" name="request" <?php echo set_radio('request', 'add'); ?> />
					</td>
				</tr>
				
				<tr style="border-bottom: ridge;">
					<td>
						<?php echo form_error('staff'); ?>
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
				
				<tr style="border-bottom: ridge;">
					<td>
						<label for="name">Name:</label>
					</td>
					<td colspan="2">
						<input class="form-control" type="text" name="name2">
					</td>
				</tr>
				
				<tr style="border-bottom: ridge;">
					<td>
						<label for="position">Position:</label>
					</td>
					<td colspan="2">
						<input type="text" class="form-control" id="position" name="position">
					</td>
				</tr>
				<tr style="border-bottom: ridge;">
					<td >
						<label for="SSO">PawPrint/SSO:</label>
					</td>
					<td colspan="2">
						<input type="text" id="SSO" class="form-control" name="SSO">
					</td>
				</tr>
				<tr style="border-bottom: ridge;">
					<td >
						<label for="empID">Employee ID (if available):</label>
					</td>
					<td colspan="2">
						<input class="form-control" type="text" id="empID" name="empID">
					</td>
				</tr>
				<tr style="border-bottom: ridge;">
					<td>
						<label for="student_worker">Check if Student Worker:</label>
					</td>
					<td colspan="2">
						<input class="form-control" id="student_worker" name="student_worker" value="true" type="checkbox" <?php echo set_checkbox('student_worker', 'true'); ?> />
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
					<td>
						<?php echo form_error('ferpa'); ?>
						A passing score of 85% on the FERPA quiz is required before access to student data is approved.<br>
    					To request access to the FERPA tutorial and access the FERPA quiz can be done at <a href="http://myzoutraining.missouri.edu/ferpareq.php"> myZou Training </a>.
    				</td>
    				<td>
    					FERPA SCORE: <input class="form-control" type="text" name="ferpa" value="<?php echo set_value('ferpa'); ?>" />
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
						<?php echo form_error('access'); ?>
						<label><u>*Please describe the type of access needed (i.e. view student name, address, rosters etc.). Please be specific.</u></label>
					</td>
				</tr>
				<tr>
					<td>
						<textarea id="access_needed" name="access" class="form-control" rows="4" value=""><?php echo set_value('access'); ?></textarea>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<hr/>	
	
	<div class="form-group">	
		<table id="career_table">
			<tbody>
				<tr style="border: ridge;">
					<td>
						<label><u>*Select the Academic Career(s). Please check all that apply.</u></label>
					</td>
					<td>
						UGRD
						<input type="checkbox" class="form-control" id="ugrd" name="ugrd" value="true" <?php echo set_checkbox('ugrd', 'true'); ?> />
					</td>
					<td>
						GRAD
						<input type="checkbox" class="form-control" id="grad" name="grad" value="true" <?php echo set_checkbox('grad', 'true'); ?> />
					</td>
					<td>
						MED
						<input type="checkbox" class="form-control" id="med" name="med" value="true" <?php echo set_checkbox('med', 'true');?> />
					</td>
					<td>
						VET MED
						<input type="checkbox" class="form-control" id="vetMed" name="vetMed" value="true" <?php echo set_checkbox('vetMed', 'true');?> />
					</td>
					<td>
						LAW
						<input type="checkbox" class="form-control" id="law" name="law" value="true" <?php echo set_checkbox('law', 'true');?> />
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<hr/>
		
	<!-- Page 2 -->
	
	<p align="left"><u>Select all appropriate access. Access to Admissions, Student Financials, and Financial Aid will be forwarded to the appropriate department.</u></p>
	
	<div class="form-group">	
		<table class="student-border">
			<thead>
				<h3><u>Student Records Access</u></h3>
			</thead>
			<tbody>
				<tr>
					<th colspan="2">
					
					</th>
					<th colspan="2">
						Access Type
					</th>
				</tr>
				<tr style="border-bottom: solid black;">
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
				<tr class="bottom-border">
					<td>
						Basic Inquiry
					</td>
					<td>
						Access to basic bio demo and student data: names, address, FERPA directory data, photos, term info,
						<br>
						degree information, programs, honors and awards, service indicators (holds) and previous schools.
					</td>
					<td>
						<input type="checkbox" class="form-control" id="basic_inquiry_view" name="basic_inquiry" value="true" <?php echo set_checkbox('basic_inquiry', 'true');?> />
					</td>
					<td>
					
					</td>
				</tr>
				<tr class="bottom-border">
					<td>
						Advanced Inquiry
					</td>
					<td>
						Includes Basic Inquiry access. Additionally includes relations with institution, citizenship, 
						<br>
						visa, decedant data, student enrollment, gpa, term history, 3C's, advisors, student groups.
					</td>
					<td>
						<input type="checkbox" class="form-control" id="adv_inquiry_view" name="adv_inquiry_view" value="true" <?php echo set_checkbox('adv_inquiry_view', 'true');?> />
					</td>
					<td>
						<input type="checkbox" class="form-control" id="adv_inquiry_update" name="adv_inquiry_update" value="true" <?php echo set_checkbox('adv_inquiry_update', 'true');?> />
					</td>
				</tr>
				<tr class="bottom-border">
					<td>
						3Cs
					</td>
					<td>
						Checklists, Comments, Communications
					</td>
					<td>
						<input type="checkbox" class="form-control" id="3Cs_view" name="3Cs_view" value="true" <?php echo set_checkbox('3Cs_view', 'true');?> />
					</td>
					<td>
						<input type="checkbox" class="form-control" id="3Cs_update" name="3Cs_update" value="true" <?php echo set_checkbox('3Cs_update', 'true');?> />
					</td>
				</tr>
				<tr class="bottom-border">
					<td>
						Advisor Update
					</td>
					<td>
						Adding an advisor to a student's record
					</td>
					<td>
						
					</td>
					<td>
						<input type="checkbox" class="form-control" id="advisor_update_update" name="advisor_update_update" value="true" <?php echo set_checkbox('advisor_update_update', 'true');?> />
					</td>
				</tr>
				<tr class="bottom-border">
					<td>
						Department SOC Update
					</td>
					<td>
						Scheduling courses, assigning faculty to course, generating permission numbers
					</td>
					<td>
						
					</td>
					<td>
						<input type="checkbox" class="form-control" id="dept_SOC_update" name="dept_SOC_update" value="true" <?php echo set_checkbox('dept_SOC_update', 'true');?> />
					</td>
				</tr>
				<tr class="bottom-border">
					<td>
						Service Indicators (Holds)
					</td>
					<td>
						Administrative users with proper security can assign or remove service indicators 
						<br>
						from a student's record
					</td>
					<td>
						<input type="checkbox" class="form-control" id="service_ind_view" name="service_ind_view" value="true" <?php echo set_checkbox('service_ind_view', 'true');?> />
					</td>
					<td>
						<input type="checkbox" class="form-control" id="service_ind_update" name="service_ind_update" value="true" <?php echo set_checkbox('service_ind_update', 'true');?> />
					</td>
				</tr>
				<tr class="bottom-border">
					<td>
						Student Group View
					</td>
					<td>
						View groups a student is associated with
					</td>
					<td>
						<input type="checkbox" class="form-control" id="student_group_view" name="student_group_view" value="true" <?php echo set_checkbox('student_group_view', 'true');?> />
					</td>
					<td>
						
					</td>
				</tr>
				<tr class="bottom-border">
					<td>
						View Study List
					</td>
					<td>
						View a student's class schedule
					</td>
					<td>
						<input type="checkbox" class="form-control" id="study_list_view" name="study_list_view" value="true" <?php echo set_checkbox('study_list_view', 'true');?> />
					</td>
					<td>
						
					</td>
				</tr>
				<tr class="bottom-border">
					<td>
						Registrar Enrollment
					</td>
					<td>
						Adding and dropping a course utilizing Enrollment Request
					</td>
					<td>
						<input type="checkbox" class="form-control" id="reg_enroll_view" name="reg_enroll_view" value="true" <?php echo set_checkbox('reg_enroll_view', 'true');?> />
					</td>
					<td>
						<input type="checkbox" class="form-control" id="reg_enroll_update" name="reg_enroll_update" value="true" <?php echo set_checkbox('reg_enroll_update', 'true');?> />
					</td>
				</tr>
				<tr class="bottom-border">
					<td>
						Advisor Student Center
					</td>
					<td>
						Access to students study list, advisor, program/plan, demographic data, e-mail address
					</td>
					<td>
						<input type="checkbox" class="form-control" id="adv_center_view" name="adv_center_view" value="true" <?php echo set_checkbox('adv_center_view', 'true');?> />
					</td>
					<td>
					
					</td>
				</tr>
				<tr class="bottom-border">
					<td>
						Class Permission
					</td>
					<td>
						Creating general or student specific class permission numbers
					</td>
					<td>
						
					</td>
					<td>
						<input type="checkbox" class="form-control" id="class_permission_update" name="class_permission_update" value="true" <?php echo set_checkbox('class_permission_update', 'true');?> />
					</td>
				</tr>
				<tr class="bottom-border">
					<td>
						Class Permission View
					</td>
					<td>
						View class permission numbers which have been created for a course
					</td>
					<td>
						<input type="checkbox" class="form-control" id="class_permission_view" name="class_permission_view" value="true" <?php echo set_checkbox('class_permission_view', 'true');?> />
					</td>
					<td>
						
					</td>
				</tr>
				<tr class="bottom-border">
					<td>
						Class Roster
					</td>
					<td>
						View students enrolled, dropped or withdrawn in a course
					</td>
					<td>
						<input type="checkbox" class="form-control" id="class_roster_view" name="class_roster_view" value="true" <?php echo set_checkbox('class_roster_view', 'true');?> />
					</td>
					<td>
						
					</td>
				</tr>
				<tr class="bottom-border">
					<td>
						Block Enrollments
					</td>
					<td>
						Adding and dropping a course utilizing Enrollment Request
					</td>
					<td>
						<input type="checkbox" class="form-control" id="block_enroll_view" name="block_enroll_view" value="true" <?php echo set_checkbox('block_enroll_view', 'true');?> />
					</td>
					<td>
						<input type="checkbox" class="form-control" id="block_enroll_update" name="block_enroll_update" value="true" <?php echo set_checkbox('block_enroll_update', 'true');?> />
					</td>
				</tr>
				<tr class="bottom-border">
					<td>
						Report Manager
					</td>
					<td>
						Assists in running various reports
					</td>
					<td>
						<input type="checkbox" class="form-control" id="report_mgr_view" name="report_mgr_view" value="true" <?php echo set_checkbox('report_mgr_view', 'true');?> />
					</td>
					<td>
					
					</td>
				</tr>
				<tr class="bottom-border">
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
						<input type="checkbox" class="form-control" id="self_serv_update" name="self_serv_update" value="true" <?php echo set_checkbox('self_serv_update', 'true');?> />
					</td>
				</tr>
				<tr class="bottom-border">
					<td>
						Fiscal Officer
					</td>
					<td>
						View enrollment summary, term statistics, and UM term statistics
					</td>
					<td>
						<input type="checkbox" class="form-control" id="fisc_off_view" name="fisc_off_view" value="true" <?php echo set_checkbox('fisc_off_view', 'true');?> />
					</td>
					<td>
						
					</td>
				</tr>
				<tr class="bottom-border">
					<td>
						Academic Advising Profile
					</td>
					<td>
						Allows printing of the Academic Advising Profile
					</td>
					<td>
						
					</td>
					<td>
						<input type="checkbox" class="form-control" id="ac_adv_profile_update" name="ac_adv_profile_update" value="true" <?php echo set_checkbox('ac_adv_profile_update', 'true');?> />
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<br />
	<hr />
	
	<!--Student Test Scores-->
	
	<p align="left"><u>Select all appropriate access.</u></p>
	
	<div class="form-group">		
		<table class="student-border">
			<thead>
				<h3><u>Admissions Access</u></h3>
			</thead>
			<tbody>
				<tr>
					<th colspan="3">
                        Check which test(s) access is to be granted
                    </th>
					<th colspan="2">
                        <input id="all_tests" type="checkbox" name="all_tests" value="true" class="form-control" <?php echo set_checkbox('all_tests', 'true');?>>Access to All Test Scores
                    </th>
				</tr>
				<tr style="border: ridge;">
					<td><input id="act" type="checkbox" name="act" value="true" class="form-control" <?php echo set_checkbox('act', 'true');?>>ACT</td>
					<td><input id="sat" type="checkbox" name="sat" value="true" class="form-control" <?php echo set_checkbox('sat', 'true');?>>SAT</td>
					<td><input id="gre" type="checkbox" name="gre" value="true" class="form-control" <?php echo set_checkbox('gre', 'true');?>>GRE</td>
					<td><input id="gmat" type="checkbox" name="gmat" value="true" class="form-control" <?php echo set_checkbox('gmat', 'true');?>>GMAT</td>
					<td><input id="tofel" type="checkbox" name="tofel" value="true" class="form-control" <?php echo set_checkbox('tofel', 'true');?>>TOFEL</td>
				</tr>
				<tr style="border: ridge;">
					<td><input id="ielts" type="checkbox" name="ielts" value="true" class="form-control" <?php echo set_checkbox('ielts', 'true');?>>IELTS</td>
					<td><input id="lsat" type="checkbox" name="lsat" value="true" class="form-control" <?php echo set_checkbox('lsat', 'true');?>>LSAT</td>
					<td><input id="mcat" type="checkbox" name="mcat" value="true" class="form-control" <?php echo set_checkbox('mcat', 'true');?>>MCAT</td>
					<td><input id="ap" type="checkbox" name="ap" value="true" class="form-control" <?php echo set_checkbox('ap', 'true');?>>AP</td>
					<td><input id="clep" type="checkbox" name="clep" value="true" class="form-control" <?php echo set_checkbox('clep', 'true');?>>CLEP</td>
				</tr>
				<tr style="border: ridge;">
					<td><input id="ged" type="checkbox" name="ged" value="true" class="form-control" <?php echo set_checkbox('ged', 'true');?>>GED</td>
					<td><input id="millers" type="checkbox" name="millers" value="true" class="form-control" <?php echo set_checkbox('millers', 'true');?>>MILLERS</td>
					<td><input id="prax" type="checkbox" name="prax" value="true" class="form-control" <?php echo set_checkbox('prax', 'true');?>>PRAX</td>
					<td><input id="plamu" type="checkbox" name="plamu" value="true" class="form-control" <?php echo set_checkbox('plamu', 'true');?>>PLA-MU</td>
					<td><input id="base" type="checkbox" name="base" value="true" class="form-control" <?php echo set_checkbox('base', 'true');?>>BASE</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<hr/>	
	
	<div class="form-group">
		<table class="student-border">
			<thead>
				<h3><u>Student Financials (Cashiers) Access</u></h3>
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
				<tr style="border: ridge;">
					<td>
						SF General Inquiry
					</td>
					<td>
						For staff outside of the Cashiers Office
					</td>
					<td>
						<input id="sf_general_inq" type="checkbox" class="form-control" name="sf_general_inq" value="true" <?php echo set_checkbox('sf_general_inq', 'true');?> />
					</td>
					<td>
					
					</td>
				</tr>
				<tr style="border: ridge;">
					<td>
						SF Cash Group Post
					</td>
					<td>
						Also known as "Cost Centers" (for areas that want to apply charges)
					</td>
					<td>
						<input id="sf_cash_grp_view" type="checkbox" class="form-control" name="sf_cash_grp_view" value="true" <?php echo set_checkbox('sf_cash_grp_view', 'true');?> />
                    </td>
					<td>
						<input id="sf_cash_grp_update" type="checkbox" class="form-control" name="sf_cash_grp_update" value="true" <?php echo set_checkbox('sf_cash_grp_update', 'true');?> />
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<hr/>
	
	<div class="form-group">
		<table class="student-border">
			<thead>
				<h3><u>Student Financials Aid Access</u></h3>
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
				<tr style="border: ridge;">
					<td>
						FA Cash
					</td>
					<td>
						View a student's financial aid awards and budget
					</td>
					<td>
						<input id="fa_cash_view" type="checkbox" name="fa_cash_view" value="true" class="form-control" <?php echo set_checkbox('fa_cash_view', 'true');?> />
					</td>
					<td>
					
					</td>
				</tr>
				<tr style="border: ridge;">
					<td>
						SF Cash Group Post
					</td>
					<td>
						Also known as "Cost Centers" (for areas that want to apply charges)
					</td>
					<td>
						<input id="fa_non_fin_aid_staff" type="checkbox" name="fa_non_fin_aid_staff" value="true" class="form-control" <?php echo set_checkbox('fa_non_fin_aid_staff', 'true');?> />
					</td>
					<td>
					
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	
	<hr/>
	
	<hr/>
	
	<!-- still needs formatting-->
	<div class="form-group">
		<table class="student-border">
			<thead>
					<h3><u>Reserved Access</u></h3>
			<thead>
			<tbody>
				<tr>
					<th>
                        Role
                    </th>
					<th>
                        View
                    </th>
					<th>
                        Update
                    </th>
					<th>
                        Role
                    </th>
					<th>
                        View
                    </th>
					<th>
                        Update
                    </th>
				</tr>
				<tr style="border: ridge;">
					<td>Immunization view</td>
					<td>
                        <input class="form-control" id="immunization_view_view" type="checkbox" name="immunization_view_view" value="true" <?php echo set_checkbox('immunization_view_view', 'true');?> />
                    </td>
					<td>
                        <input class="form-control" id="immunization_view_update" type="checkbox" name="immunization_view_update" value="true" <?php echo set_checkbox('immunization_view_update', 'true');?> />
                    </td>
					<td>
                        Accommodate (Student Health)
                    </td>
					<td>
        
                    </td>
					<td>
                        <input class="form-control" id="accomodate_update" type="checkbox" name="accomodate_update" value="true" <?php echo set_checkbox('accomodate_update', 'true');?> />
                    </td>
				</tr>
				<tr style="border: ridge;">
					<td>
                        Transfer Credit Admission
                    </td>
					<td>
                        <input class="form-control" id="transfer_view" type="checkbox" name="transfer_view" value="true" <?php echo set_checkbox('transfer_view', 'true');?> />
                    </td>
					<td>
                        <input class="form-control" id="transfer_update" type="checkbox" name="transfer_update" value="true" <?php echo set_checkbox('transfer_update', 'true');?> />
                    </td>
					<td>
                        Support Staff (Registrar's Office)
                    </td>
					<td>
                        <input class="form-control" id="support_staff_view" type="checkbox" name="support_staff_view" value="true" <?php echo set_checkbox('support_staff_view', 'true');?> />
                    </td>
					<td>
                        <input class="form-control" id="support_staff_update" type="checkbox" name="support_staff_update" value="true" <?php echo set_checkbox('support_staff_update', 'true');?> />
                    </td>
				</tr>
				<tr style="border: ridge;">
					<td>
                        Relationships
                    </td>
					<td>
                        <input class="form-control" id="relationship_view" type="checkbox" name="relationship_view" value="true" <?php echo set_checkbox('relationship_view', 'true');?> />
                    </td>
					<td>
                        <input class="form-control" id="relationship_update" type="checkbox" name="relationship_update" value="true" <?php echo set_checkbox('relationship_update', 'true');?> />
                    </td>
					<td>
                        Advance Standing Report
                    </td>
					<td>
                        <input class="form-control" id="advance_standing_view" type="checkbox" name="advance_standing_view" value="true" <?php echo set_checkbox('advance_standing_view', 'true');?> />
                    </td>
					<td>
                        <input class="form-control" id="advance_standing_update" type="checkbox" name="advance_standing_update" value="true" <?php echo set_checkbox('advance_standing_update', 'true');?> />
                    </td>
				</tr>
				<tr style="border: ridge;">
					<td>
                        Student Groups
                    </td>
					<td>
                    
                    </td>
					<td>
                        <input class="form-control" id="student_group_update" type="checkbox" name="student_group_update" value="true" <?php echo set_checkbox('student_group_update', 'true');?> />
                    </td>
					<td>

                    </td>
					<td>

                    </td>
					<td>

                    </td>
				</tr>
			</tbody>
		</table>
	</div>		
	
	<hr/>
	<div align="center">
	<input id="Submit" type="Submit" class="btn btn-default" value ="Submit" name="Submit">
	
	</form>

    <form>
        <p><b>Before submitting this form, please print the Authorization Slip and take it to get the proper signature's of authorization. Return the slip to Student Information Services at 130 Jesse Hall.</b></p><br />
        
         <input type="button" class="btn btn-default" value="Print Form" onclick="window.print()" />
        <a href="printAuthorization" target="_blank"><input id="authorization_slip" class="btn btn-default" type='button' name='authorization' value='Print Authorization Slip' /></a>
      </form>
    </div>
</body>
</html>
