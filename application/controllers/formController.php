<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class FormController extends CI_Controller {

	public function __construct() {
    	parent::__construct();
        $this->load->model('UserModel');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation'); //form validation library
    }
	
	function index() {	
		
		$this->load->view('myZouSecurityRequestForm');
	}

	function submitRequest() {
		
		/* -------------------------------------------------
	   		Each required user submisson field has a validation rule
	   	-----------------------------------------------*/
		$this->form_validation->set_rules('username', 'Username', 'required|alpha|min_length[4]|max_length[50]');
		$this->form_validation->set_rules('pawprint', 'Pawprint', 'required|apha_numeric|exact_length[6]');
		$this->form_validation->set_rules('title', 'Title', 'required|alpha|max_length[10]');
		$this->form_validation->set_rules('emp_ID', 'Employee Id', 'required|integer|exact_length[8]');
		$this->form_validation->set_rules('org', 'Academic Org', 'required|max_length[32]');
		$this->form_validation->set_rules('address', 'Campus Address', 'required|max_length[100]');
		$this->form_validation->set_rules('phone', 'Phone Number', 'required|exact_length[10]');
		$this->form_validation->set_rules('request', 'Type of Request', 'required');		
		$this->form_validation->set_rules('ferpa', 'FERPA Score', 'required|decimal|max_length[6]|less_than[100.01]');		
		$this->form_validation->set_rules('access', 'Access Description', 'required|max_length[256]');
		
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		/* -------------------------------------------------
		   form validation: run() returns TRUE, iff, all 
		   validation rules have been applied successfully 
		   -----------------------------------------------*/
		   
		if ($this->form_validation->run() == FALSE){
			$this->load->view('myZouSecurityRequestForm');
		}
		else{
			
			/* -------------------------------------------------
			   gather user submission data from name attribute
			$fullName = $this->input->post('username');
			$pawPrintSSO = $this->input->post('pawprint');
			$title = $this->input->post('title');
			$EmpID = $this->input->post('emp_ID');
			$academicOrg = $this->input->post('org');
			$campusAddress = $this->input->post('address');
			$phoneNumber = $this->input->post('phone');
			---------------------------------------------------*/	
			
			if($this->input->post('ugrd') == true)
				$isUGRD = 1;
			else
				$isUGRD = 0;
			if($this->input->post('grad') == true)
				$isGRAD = 1;
			else
				$isGRAD = 0;
			if($this->input->post('med') == true)
				$isMED = 1;
			else
				$isMED = 0;
			if($this->input->post('vetMed') == true)
				$isVETMED = 1;
			else
				$isVETMED = 0;
			if($this->input->post('law') == true)
				$isLAW = 1;
			else
				$isLAW = 0;

			if($this->input->post('request') == "new") {
				$isNew = 1;
				$isCopy = 0;
			}
			else {
				$isNew = 0;
				$isCopy = 1;
			}
			
			$ferpaScore = $this->input->post('ferpa');
			if($ferpaScore > 85)
				$isValidFERPA = 1;
			else
				$isValidFERPA = 0;
			
			$isStudentWorker = $this->input->post('student_worker');	

			$accessDesc = $this->input->post('access');
			
			if($this->input->post('basic_inquiry') == "true")
				$basicInq = 1;
			else
				$basicInq = 0;
			
			if($this->input->post('adv_inquiry_view') == "true")
				$advancedInqView = 1;
			else
				$advancedInqView = 0;
			
			if($this->input->post('adv_inquiry_update') == "true")
				$advancedInqUpdate = 1;
			else
				$advancedInqUpdate = 0;
			
			if($this->input->post('3Cs_view') == "true")
				$threeCsView = 1;
			else
				$threeCsView = 0;
			
			if($this->input->post('3Cs_update') == "true")
				$threeCsUpdate = 1;
			else
				$threeCsUpdate = 0;
			
			if($this->input->post('advisor_update_update') == "true")
				$advisorUpdate = 1;
			else
				$advisorUpdate = 0;
			
			if($this->input->post('dept_SOC_update') == "true")
				$deptSOCUpdate = 1;
			else
				$deptSOCUpdate = 0;
			
			if($this->input->post('service_ind_view') == "true")
				$serviceIndicatorsView = 1;
			else
				$serviceIndicatorsView = 0;
			
			if($this->input->post('service_ind_update') == "true")
				$serviceIndicatorsUpdate = 1;
			else
				$serviceIndicatorsUpdate = 0;
			
			if($this->input->post('student_group_view') == "true")
				$studentGroupsView = 1;
			else
				$studentGroupsView = 0;
			
			if($this->input->post('study_list_view') == "true")
				$studyList = 1;
			else
				$studyList = 0;
			
			if($this->input->post('reg_enroll_view') == "true")
				$registrarEnrollView = 1;
			else
				$registrarEnrollView = 0;
			
			if($this->input->post('reg_enroll_update') == "true")
				$registrarEnrollUpdate = 1;
			else
				$registrarEnrollUpdate = 0;
			
			if($this->input->post('adv_center_view') == "true")
				$advisorStudCent = 1;
			else
				$advisorStudCent = 0;
			
			if($this->input->post('class_permission_view') == "true")
				$classPermView = 1;
			else
				$classPermView = 0;
			
			if($this->input->post('class_permission_update') == "true")
				$classPermUpdate = 1;
			else
				$classPermUpdate = 0;
			
			if($this->input->post('class_roster_view') == "true")
				$classRoster = 1;
			else
				$classRoster = 0;
			
			if($this->input->post('block_enroll_view') == "true")
				$blockEnrollView = 1;
			else
				$blockEnrollView = 0;
			
			if($this->input->post('block_enroll_update') == "true")
				$blockEnrollUpdate = 1;
			else
				$blockEnrollUpdate = 0;
			
			if($this->input->post('report_mgr_view') == "true")
				$reportManager = 1;
			else
				$reportManager = 0;
			
			if($this->input->post('self_serv_update') == "true")
				$selfServiceAdvisor = 1;
			else
				$selfServiceAdvisor = 0;
			
			if($this->input->post('fisc_off_view') == "true")
				$fiscalOfficer = 1;
			else
				$fiscalOfficer = 0;
			
			if($this->input->post('ac_adv_profile_update') == "true")
				$academicAdvisingProfile = 1;
			else
				$academicAdvisingProfile = 0;
		

			/*view test scores*/
			/*all test scores */


			if($this->input->post('all_tests') == "true") 
			{
				$viewACT=1;
				$viewSAT=1;
				$viewGRE=1;
				$viewGMAT=1;
				$viewTOFEL=1;
				$viewIELTS=1;
				$viewLSAT=1;
				$viewMCAT=1;
				$viewAP=1;
				$viewCLEP=1;
				$viewGED=1;
				$viewMILLERS=1;
				$viewPRAX=1;
				$viewPLAMU=1;
				$viewBASE=1;
			}
			
			else 
			{
				if($this->input->post('act')=="true")
					$viewACT = 1;
				else
					$viewACT=0;
				
				if($this->input->post('sat')=="true")
					$viewSAT = 1;
				else
					$viewSAT=0;
				
				if($this->input->post('gre')=="true")
					$viewGRE = 1;
				else
					$viewGRE=0;
				
				if($this->input->post('gmat')=="true")
					$viewGMAT = 1;
				else
					$viewGMAT=0;
				
				if($this->input->post('tofel')=="true")
					$viewTOFEL = 1;
				else
					$viewTOFEL=0;
				
				if($this->input->post('ielts')=="true")
					$viewIELTS = 1;
				else
					$viewIELTS=0;
				
				if($this->input->post('lsat')=="true")
					$viewLSAT = 1;
				else
					$viewLSAT=0;
				
				if($this->input->post('mcat')=="true")
					$viewMCAT = 1;
				else
					$viewMCAT=0;
				
				if($this->input->post('ap')=="true")
					$viewAP = 1;
				else
					$viewAP=0;
				
				if($this->input->post('clep')=="true")
					$viewCLEP = 1;
				else
					$viewCLEP=0;
				
				if($this->input->post('ged')=="true")
					$viewGED = 1;
				else
					$viewGED=0;
				
				if($this->input->post('millers')=="true")
					$viewMILLERS = 1;
				else
					$viewMILLERS=0;
				
				if($this->input->post('prax')=="true")
					$viewPRAX = 1;
				else
					$viewPRAX=0;
				
				if($this->input->post('plamu')=="true")
					$viewPLAMU = 1;
				else
					$viewPLAMU=0;
				
				if($this->input->post('base')=="true")
					$viewBASE = 1;
				else
					$viewBASE=0;
			}
		
			/*student financials (cashiers)*/

			if($this->input->post('sf_general_inq')=="true")
				$SFGenInq = 1;
			else
				$SFGenInq=0;
			
			if($this->input->post('sf_cash_grp_view')=="true")
				$SFCashGrpPostView = 1;
			else
				$SFCashGrpPostView=0;
			
			if($this->input->post('sf_cash_grp_update')=="true")
				$SFCashGrpPostUpdate = 1;
			else
				$SFCashGrpPostUpdate=0;
			
			if($this->input->post('fa_cash_view')=="true")
				$FACash = 1;
			else
				$FACash=0;
			
			if($this->input->post('fa_non_fin_aid_staff')=="true")
				$FANonFinancialAidStaff = 1;
			else
				$FANonFinancialAidStaff=0;
			
			/*reserved access:*/


			if($this->input->post('immunization_view_view')=="true")
				$immunizationViewView = 1;
			else
				$immunizationViewView=0;
			
			if($this->input->post('immunization_view_update')=="true")
				$immunizationViewUpdate = 1;
			else
				$immunizationViewUpdate=0;
			
			if($this->input->post('transfer_view')=="true")
				$transferCredAdmissionView = 1;
			else
				$transferCredAdmissionView=0;
			
			if($this->input->post('transfer_update')=="true")
				$transferCredAdmissionUpdate = 1;
			else
				$transferCredAdmissionUpdate=0;
			
			if($this->input->post('relationship_view')=="true")
				$relationshipsView = 1;
			else
				$relationshipsView=0;
			
			if($this->input->post('relationship_update')=="true")
				$relationshipsUpdate = 1;
			else
				$relationshipsUpdate=0;
			
			if($this->input->post('accommodate_update')=="true")
				$accommodateUpdate = 1;
			else
				$accommodateUpdate=0;
			
			if($this->input->post('support_staff_view')=="true")
				$supportStaffView = 1;
			else
				$supportStaffView=0;
			
			if($this->input->post('support_staff_update')=="true")
				$supportStaffUpdate = 1;
			else
				$supportStaffUpdate=0;
			
			if($this->input->post('advance_standing_view')=="true")
				$advanceStandingReportView = 1;
			else
				$advanceStandingReportView=0;
			
			if($this->input->post('advance_standing_update')=="true")
				$advanceStandingReportUpdate = 1;
			else
				$advanceStandingReportUpdate=0;

			if($this->input->post('student_group_update') == "true")
				$studentGroupsUpdate = 1;
			else
				$studentGroupsUpdate = 0;
		

			$now = srftime("%F,%T");
			$request_data = array(
				'submittedBy' => $pawprint,
				//%F = Year-month-day %T = hour:min:sec
				'dateSubmitted' => $now,
				'isNew' => $isNew,
				'isCopy' => $isCopy,
				'isValidFERPA' => $isValidFERPA,
				'isStudentWorker' => $isStudentWorker,
				'accessDesc' => $accessDesc,
				'basicInq' => $basicInq,
				'advancedInqView' => $advancedInqView,
				'advancedInqUpdate' => $advancedInqUpdate,
				'3CsView' => $threeCsView,
				'3CsUpdate' => $threeCsUpdate,
				'advisorUpdate' => $advisorUpdate,
				'deptSOCUpdate' => $deptSOCUpdate,
				'serviceIndicatorsView' => $serviceIndicatorsView,
				'serviceIndicatorsUpdate' => $serviceIndicatorsUpdate,
				'studentGroupsView' => $studentGroupsView,
				'studentGroupsUpdate' => $studentGroupsUpdate,
				'studyList' => $studyList,
				'registrarEnrollView' => $registrarEnrollView,
				'registrarEnrollUpdate' => $registerEnrollUpdate,
				'advisorStudCent' => $advisorStudCent,
				'classPermView' => $classPermView,
				'classPermUpdate' => $classPermUpdate,
				'classRoster' => $classRoster,
				'blockEnrollView' => $blockEnrollView,
				'blockEnrollUpdate' => $blockEnrollUpdate,
				'reportManager' => $reportManager,
				'selfServiceAdvisor' => $selfServiceAdvisor,
				'fiscalOfficer' => $fiscalOfficer,
				'academicAdvisingProfile' => $academicAdvisingProfile,
				'viewACT' => $viewACT,
				'viewSAT' => $viewSAT,
				'viewGRE' => $viewGRE,
				'viewTOFEL' => $viewTOFEL,
				'viewIELTS' => $viewIELTS,
				'viewLSAT' => $viewLSAT,
				'viewMCAT' => $viewMCAT,
				'viewAP' => $viewAP,
				'viewCLEP' => $viewCLEP,
				'viewGED' => $viewGED,
				'viewMILLERS' => $viewMILLERS,
				'viewPRAX' => $viewPRAX,
				'viewPLAMU' => $viewPLAMU,
				'viewBASE' => $viewBASE,
				'SFGenInq' => $SFGenInq,
				'SFCashGrpPostView' => $SFCashGrpPostView,
				'SFCashGrpPostUpdate' => $SFCashGrpPostUpdate,
				'FACash' => $FACash,
				'FANonFinancialAidStaff' => $FANonFinancialAidStaff,
				'immunizationViewView' => $immunizationViewView,
				'immunizationViewUpdate' => $immunizationViewUpdate,
				'transferCredAdmissionView' => $transferCredAdmissionView,
				'transferCredAdmissionUpdate' => $transferCredAdmissionUpdate,
				'relationshipsView' => $relationshipsView,
				'relationshipsUpdate' => $relationshipsUpdate,
				'accommodateUpdate' => $accommodateUpdate,
				'supportStaffView' => $supportStaffView,
				'advanceStandingReportView' => $advanceStandingReportView,
				'advanceStandingReportUpdate' => $advanceStandingReportUpdate
			);
			
			$insertRequest = $this->UserModel->insert_request($request_data);

			//test if request insert was successful
			if ($insertRequest == TRUE) 
   					$this->load->view('receiptPage');
          	else
   					$this->load->view('myZouSecurityRequestForm', $request_data);
		}	
	}
}