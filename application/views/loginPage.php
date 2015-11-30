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
            .error{

                color:#ff3333;
                font-weight: oblique;
                font-size:20px;
    	    }
            #loginForm{
                position: relative;
                top: -300px;
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
                        <?php echo form_open('index.php/user/check_login','id="loginForm"');?>
                            <!-- add error messages -->
                            <?php echo form_error('loginUsername'); ?>
                            <label for="loginUsername">Pawprint/SSO:  </label>
                            <input id="login_username" class="form-control" type='text' name='loginUsername' value="<?php echo set_value('loginUsername'); ?>"/>

                            <!-- add error messages -->
                            <?php echo form_error('loginPassword'); ?>
                            <label for="loginPassword">Password:  </label>
                            <input id="login_password" class="form-control" type="password" name='loginPassword' />

                            <input id="submit_login" class="btn btn-default" type='submit' name='submit_login' value='Login' />  
                        </form>
                    </td>
                
                    <td>
                        <?php echo form_open('index.php/user/new_user_registration'); ?>
                            <label for="title">Title: </label>
                            <?php echo form_error('title'); ?>
                            <input id="title" class="form-control" type="text" name="title" value="<?php echo set_value('title'); ?>"></input>
                            
                            <label for="firstName">First Name: </label>
                            <?php echo form_error('firstName'); ?>
                            <input id="firstName" class="form-control" type="text" name="firstName" value="<?php echo set_value('firstName'); ?>"></input> 


                            <label for="lastName">Last Name: </label>
                            <?php echo form_error('lastName'); ?>
                            <input id="lastName" class="form-control" type="text" name="lastName" value="<?php echo set_value('lastName'); ?>"></input> 

                            <label for="email">Email: </label>
                            <?php echo form_error('email'); ?>
                            <input id="email" class="form-control" type="text" name="email" value="<?php echo set_value('email'); ?>"></input> 


                            <label for="phone">Phone </label>
                            <?php echo form_error('phone'); ?>
                            <input id="phone" class="form-control" type="text" name="phone" value="<?php echo set_value('phone'); ?>"></input> 
                    
                        
                            <label for="empID">University ID: </label>
                            <?php echo form_error('empID'); ?>
                            <input id="empID" class="form-control" type="text" name="empID" value="<?php echo set_value('empID'); ?>"></input> 

                            <label for="pawprint">Enter Pawprint: </label>
                            <?php echo form_error('pawprint'); ?>
                            <input id="pawprint" class="form-control" type="text" name="pawprint" value="<?php echo set_value('pawprint'); ?>"></input>

                            <label for="ferpa">FERPA Score: </label>
                            <?php echo form_error('ferpa'); ?>
                            <input id="ferpa" class="form-control" type="text" name="ferpa" value="<?php echo set_value('ferpa'); ?>"></input>
							What is ferpa? Click the link to take the quiz.<a href="http://myzoutraining.missouri.edu/ferpareq.php">
                            <label for="campusAddress">Campus Address: </label>
                            <?php echo form_error('campusAddress'); ?>
                            <input id="campusAddress" class="form-control" type="text" name="campusAddress" value="<?php echo set_value('campusAddress'); ?>"></input> 



                            <label for="academicOrg">Academic Organization: </label>
                            <?php echo form_error('academicOrg'); ?>
                            <input id="academicOrg" class="form-control" type="text" name="academicOrg" value="<?php echo set_value('academicOrg'); ?>"></input> 


                            <label for="education">Education</label>
                            <?php echo form_error('education'); ?>
                            <select id="education" class="form-control" name="education">
                            	<option value="false" selected>SELECT AN EDUCATION</option>
                                <option value="ugrd">Under Grad</option>
                            	<option value="grad">Graduate</option>
                            	<option value="med">Medical</option>
                            	<option value="vetMed">Vet Medical</option>
                            	<option value="law">Law</option>
                            </select>

                    
                            <label for="createPassword">Create Password: </label>
                             <?php echo form_error('createPassword'); ?>
                            <input id="createPassword" class="form-control" type="password" name="createPassword"></input> 

                            <label for="confirmPassword">Confirm Password: </label>
                             <?php echo form_error('confirmPassword'); ?>
                            <input id="confirmPassword" class="form-control" type="password" name="confirmPassword"></input> 

                            <input id="submit_registration" class="btn btn-default" type='submit' name='submit_registration' value='Register' />  
                            
                        </form>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>