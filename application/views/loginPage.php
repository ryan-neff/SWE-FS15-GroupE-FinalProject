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

                        <?php echo form_open('index.php/user/check_login');?>
                            <!-- add error messages -->
                            <?php echo form_error('loginUsername'); ?>
                            Pawprint/SSO: <input id="login_username" class="form-control" type='text' name='loginUsername'/> <br /><br />
                            
                            <!-- add error messages -->
                            <?php echo form_error('loginPassword'); ?>
                            Password: <input id="login_password" class="form-control" type='password' name='loginPassword'/><br /><br />

                            <input id="submit_login" class="btn btn-default" type='submit' name='submit_login' value='Login' /><br /><br />
                        </form>
                    </td>
                    <td>
                        <?php echo form_open('index.php/user/new_user_registration'); ?>
                        
                            <label for="firstName">First Name: </label>
                             <?php echo form_error('firstName'); ?>
                            <input id="firstName" class="form-control" type="text" name="firstName"></input><br />
                            
                            <label for="lastName">Last Name: </label>
                             <?php echo form_error('lastName'); ?>
                            <input id="lastName" class="form-control" type="text" name="lastName"></input><br />
                             
                             <label for="email">Email: </label>
                             <?php echo form_error('email'); ?>
                             <input id="email" class="form-control" type="text" name="email"></input><br />
                             
                            <label for="empID">Employee ID: </label>
                            <input id="empID" class="form-control" type="text" name="empID"></input><br />
                            
                            <label for="pawprint">Enter Pawprint: </label>
                            <?php echo form_error('pawprint'); ?>
                            <input id="pawprint" class="form-control" type="text" name="pawprint"></input><br />
                            
                            <label for="title">Title: </label>
                            <?php echo form_error('title'); ?>
                            <input id="title" class="form-control" type="text" name="title"></input><br />
                            
                            <label for="phone">Phone </label>
                            <?php echo form_error('phone'); ?>
                            <input id="phone" class="form-control" type="text" name="phone"></input><br />
                            
                            <label for="ferpa">FERPA Score: </label>
                            <?php echo form_error('ferpa'); ?>
                            <input id="ferpa" class="form-control" type="text" name="ferpa"></input><br />
                            
                            <label for="campusAddress">Campus Address: </label>
                            <?php echo form_error('campusAddress'); ?>
                            <input id="campusAddress" class="form-control" type="text" name="campusAddress"></input><br />
                            
                            <label for="academicOrg">Academic Organization: </label>
                            <?php echo form_error('academicOrg'); ?>
                            <input id="academicOrg" class="form-control" type="text" name="academicOrg"></input><br />
                            
                            <label for="education">Education</label>
                            <?php echo form_error('education'); ?>
                            <select id="education" class="form-control" name="education">
                            	<option value="false" selected>SELECT AN EDUCATION</option>
                                <option value="ugrd">Under Grad</option>
                            	<option value="grad">Graduate</option>
                            	<option value="med">Medical</option>
                            	<option value="vetMed">Vet Medical</option>
                            	<option value="law">Law</option>
                            </select><br/>
                            
                            <label for="createPassword">Create Password: </label>
                             <?php echo form_error('createPassword'); ?>
                            <input id="createPassword" class="form-control" type="text" name="createPassword"></input><br />

                            <label for="confirmPassword">Confirm Password: </label>
                             <?php echo form_error('confirmPassword'); ?>
                            <input id="confirmPassword" class="form-control" type="text" name="confirmPassword"></input><br />
                            
                            <input id="submit_registration" class="btn btn-default" type='submit' name='submit_registration' value='Register' /><br /><br />
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>