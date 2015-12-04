<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
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
                color: black;
            }

            .title {
                align: center;
                text-align: center;
                width: 100%;
            }
        </style>
<div class="form-group">
		<table class="student-border">
			<tbody>
				<thead>
					<h3><u>Authorization</u></h3>
					<p>Return to:	Student Information Systems 130 Jesse Hall</p>
				</thead>
				<tr>
					<td colspan="2">By signing, I understand any access given me is for University purposes as part of my job responsibilities. I am
						responsible for exercising due care to protect this information from unauthorized discloser by safeguarding my
						password(s) and ensuring the data I obtain is disseminated only through approved University channels.
						Unauthorized access and use/dissemination of data, are serious offenses, which may be subjected to disciplinary
						action.
					</td>
				<tr>
					<td>*Employee Name (Print):</td>
				</tr>
				<tr>
					<td>*Employee ID:</td>
				</tr>	
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
	
	 <input type="button" class="btn btn-default" value="Print" onclick="window.print()" />
	<a href="home"><input id="home" class="btn btn-default" type='button' name='home' value='Home Page' /></a>

</html>
