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

        <title>myZou SECURITY Request Login</title>
        <div class="title">
            <h1>myZou SECURITY Request</h1>
            <br>
            <h2>University of Missouri - Columbia</h2>
        </div>
        <hr>
    </head>
    
    <body>
        <div align="center">
            <table>
                <tr>
                    <td>
                        <h3 class="title"> Login
                            <br>
                            <small>
                                Existing user login
                            </small>
                        </h3>
                    </td>
                    <td>
                        <h3 class="title"> Register
                            <br>
                            <small>
                                New user registration
                            </small>
                        </h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <form name ="login" action="" method="POST">
                            Pawprint: <input id="pawprint" class="form-control" type='text' name='pawprint'/> <br /><br />
                            Password: <input id="password" class="form-control" type='password' name='password'/><br /><br />
                            <input id="submit_login" class="btn btn-default" type='submit' name='submit_login' value='Login' /><br /><br />
                        </form>
                    </td>
                    <td>
                        <form name="registration" action="" method="POST">
                            <label for="firstName">First Name: </label>
                            <input id="firstName" class="form-control" type="text" name="firstName"></input><br />
                            <label for="lastName">Last Name: </label>
                            <input id="lastName" class="form-control" type="text" name="lastName"></input><br />
                            <label for="empID">Employee ID: </label>
                            <input id="empID" class="form-control" type="text" name="empID"></input><br />
                            <label for="pawprint">Enter Pawprint: </label>
                            <input id="pawprint" class="form-control" type="text" name="pawprint"></input><br />
                            <label for="title">Title: </label>
                            <input id="title" class="form-control" type="text" name="title"></input><br />
                            <label for="phone">Phone#: </label>
                            <input id="phone" class="form-control" type="text" name="phone"></input><br />
                            <label for="ferpa">FERPA Score: </label>
                            <input id="ferpa" class="form-control" type="text" name="ferpa"></input><br />
                            <label for="campusAddress">Campus Address: </label>
                            <input id="campusAddress" class="form-control" type="text" name="campusAddress"></input><br />
                            <label for="academicOrg">Academic Organization: </label>
                            <input id="campusAddress" class="form-control" type="text" name="campusAddress"></input><br />
                            <label for="education">Education</label>
                            <select id="education" class="form-control" name="education">
                            	<option value="ugrad">Under Grad</option>
                            	<option value="grad">Graduate</option>
                            	<option value="med">Medical</option>
                            	<option value="vetMed">Vet Medical</option>
                            	<option value="law">Law</option>
                            </select><br/>
                            <label for="createPassword">Create Password: </label>
                            <input id="createPassword" class="form-control" type="text" name="createPassword"></input><br />
                            <label for="retypePassword">Retype Password: </label>
                            <input id="retypePassword" class="form-control" type="text" name="retypePassword"></input><br />
                            <input id="submit_registration" class="btn btn-default" type='submit' name='submit_registration' value='Register' /><br /><br />
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>