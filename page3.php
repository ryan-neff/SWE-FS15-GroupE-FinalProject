<!DOCTYPE html>
<html>
<style>
	table {
		width: 850px;
		float: left;
		border: 2px solid black;
		padding: 15px;
	}
	
	
	#title {
		align: center;
		text-align: center;
		width: 850px;
	}
	.rowBorder {
		border-bottom: 2px solid black;
	}
	#regFont {
		
		font-size: 15px;
	}
	#checkBoxFont {
		font-size: 15px;
	}
	#tdBorder {
		border: 2px solid black;
	}
	h2 {
		font-size: 25px;
	}
	#authorize {
		border: 2px solid black;
		font-size: 20px;
		text-align: right;
	}
</style>
<head><title>myZouSecurity</title>
	<div id = "title">
		<div width="850px">
		<h1>myZou SECURITY Request Form</h1>
		</div>
		<hr width="850px" size="3" color="black" />
	
</head>
<body>
	<form>
	<div align="center">
		<p align="left">Select all appropriate access.</p>
			<table rules="rows">
				<tbody>
				<tr>
				<td colspan="3"><h2><u>Admissions Access</u></h2></td>
				<td /><td />
				</tr>
				<tr>
					<td id="regFont" colspan="3"><p>Check which test(s) access is to be granted</p></td>
					<td id="regFont" colspan="2"><input type="checkbox" name="tests" value="all"><b>Access to All Test Scores</b></td>
				</tr>
				<tr>
					<td id="regFont"><input type="checkbox" name="tests" value="act">ACT</td>
					<td id="regFont"><input type="checkbox" name="tests" value="sat">SAT</td>
					<td id="regFont"><input type="checkbox" name="tests" value="gre">GRE</td>
					<td id="regFont"><input type="checkbox" name="tests" value="gmat">GMAT</td>
					<td id="regFont"><input type="checkbox" name="tests" value="tofel">TOFEL</td>
				</tr>
				<tr>
					<td id="regFont"><input type="checkbox" name="tests" value="ielts">IELTS</td>
					<td id="regFont"><input type="checkbox" name="tests" value="lsat">LSAT</td>
					<td id="regFont"><input type="checkbox" name="tests" value="mcat">MCAT</td>
					<td id="regFont"><input type="checkbox" name="tests" value="ap">AP</td>
					<td id="regFont"><input type="checkbox" name="tests" value="clep">CLEP</td>
				</tr>
				<tr>
					<td id="regFont"><input type="checkbox" name="tests" value="ged">GED</td>
					<td id="regFont"><input type="checkbox" name="tests" value="millers">MILLERS</td>
					<td id="regFont"><input type="checkbox" name="tests" value="prax">PRAX</td>
					<td id="regFont"><input type="checkbox" name="tests" value="pla-mu">PLA-MU</td>
					<td id="regFont"><input type="checkbox" name="tests" value="base">BASE</td>
				</tr>
				</tbody>
			</table>
			<table rules="rows">
				<tbody>
					<tr>
						<td colspan="4"><h2><u>Student Financials (Cashiers) Access</u></h2></td>
					</tr>
					<tr>
						<td width="650px" id="tdBorder" colspan="2"></td>
						<td id="tdBorder" align="center" colspan="2">Access Type</td>
					</tr>
					<tr>
						<td id="tdBorder"><u>Role</u></td>
						<td id="tdBorder"><u>Role Description</u></td>
						<td id="tdBorder">View</td>
						<td id="tdBorder">Update</td>
					</tr>
					<tr>
						<td id="tdBorder">SF General Inquiry</td>
						<td id="tdBorder">For staff outside of the Cashiers Office</td>
						<td id="tdBorder" align="center"><input type="checkbox" name="sfGeneral" value="true"></td>
						<td id="tdBorder"></td>
					</tr>
					<tr>
						<td id="tdBorder">SF Cash Group Post</td>
						<td id="tdBorder">Also known as "Cost Centers" (for areas that want to apply charges)</td>
						<td id="tdBorder" align="center"><input type="checkbox" name="sfCash" value="true"></td>
						<td id="tdBorder" align="center"><input type="checkbox" name="updateCash" value="true"></td>
					</tr>
				</tbody>
			</table>
			<!--Student Financial Aid Access Table-->
			<table rules="rows">
				<tbody>
					<tr>
						<td colspan="4"><h2><u>Student Financials Aid Access</u></h2></td>
					</tr>
					<tr>
						<td width="650px" id="tdBorder" colspan="2"></td>
						<td id="tdBorder" align="center" colspan="2">Access Type</td>
					</tr>
					<tr>
						<td id="tdBorder"><u>Role</u></td>
						<td id="tdBorder"><u>Role Description</u></td>
						<td id="tdBorder">View</td>
						<td id="tdBorder">Update</td>
					</tr>
					<tr>
						<td id="tdBorder">FA Cash</td>
						<td id="tdBorder">View a student's financial aid awards and budget</td>
						<td id="tdBorder" align="center"><input type="checkbox" name="faCash" value="true"></td>
						<td id="tdBorder"></td>
					</tr>
					<tr>
						<td id="tdBorder">SF Cash Group Post</td>
						<td id="tdBorder">Also known as "Cost Centers" (for areas that want to apply charges)</td>
						<td id="tdBorder" align="center"><input type="checkbox" name="faNon" value="true"></td>
						<td id="tdBorder"></td>
					</tr>
				</tbody>
			</table>
			<table rules="rows">
				<tbody>
					<tr>
						<td id="tdBorder"><h2>Authorization</h2></td>
						<td id="tdBorder">Return to:	Student Information Systems 130 Jesse Hall</td>
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
			<table rules="rows">
				<tbody>
					<tr>
						<td id="tdBorder" colspan="6"><h2><u>Reserved Access</u></h2></td>
					</tr>
					<tr>
						<td id="tdBorder" align="right">Role</td>
						<td id="tdBorder">View</td>
						<td id="tdBorder">Update</td>
						<td id="tdBorder" align="right">Role</td>
						<td id="tdBorder">View</td>
						<td id="tdBorder">Update</td>
					</tr>
					<tr>
						<td id="tdBorder" align="right">Immunization view</td>
						<td id="tdBorder"><input type="checkbox" name="reserved" value="immunizationView" align="center"></input></td>
						<td id="tdBorder"><input type="checkbox" name="reserved" value="immunizationUpdate" align="center"></input></td>
						<td id="tdBorder" align="right">Accommodate (Student Health)</td>
						<td id="tdBorder"></td>
						<td id="tdBorder"><input type="checkbox" name="reserved" value="accomodateUpdate" align="center"></input></td>
					</tr>
					<tr>
						<td id="tdBorder" align="right">Transfer Credit Admission</td>
						<td id="tdBorder"><input type="checkbox" name="reserved" value="transferView" align="center"></input></td>
						<td id="tdBorder"><input type="checkbox" name="reserved" value="transferUpdate" align="center"></input></td>
						<td id="tdBorder" align="right">Support Staff (Registrar's Office)</td>
						<td id="tdBorder"><input type="checkbox" name="reserved" value="supportView" align="center"></input></td>
						<td id="tdBorder"><input type="checkbox" name="reserved" value="supportUpdate" align="center"></input></td>
					</tr>
					<tr>
						<td id="tdBorder" align="right">Relationships</td>
						<td id="tdBorder"><input type="checkbox" name="reserved" value="relationshipView" align="center"></input></td>
						<td id="tdBorder"><input type="checkbox" name="reserved" value="relationshipUpdate" align="center"></input></td>
						<td id="tdBorder" align="right">Advance Standing Report</td>
						<td id="tdBorder"><input type="checkbox" name="reserved" value="advanceView" align="center"></input></td>
						<td id="tdBorder"><input type="checkbox" name="reserved" value="advanceUpdate" align="center"></input></td>
					</tr>
					<tr>
						<td id="tdBorder" align="right">Student Groups</td>
						<td id="tdBorder"></td>
						<td id="tdBorder"><input type="checkbox" name="reserved" value="studentUpdate" align="center"></input></td>
						<td id="tdBorder" align="right"></td>
						<td id="tdBorder"></td>
						<td id="tdBorder"></td>
					</tr>
				</tbody>
			</table>
	</div>
	</div>
	</form>
</body>
</html>