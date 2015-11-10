<!DOCTYPE html>
<html>
<<<<<<< HEAD
<head>
<title>MyZou Security Request Form</title>
</head>
<body>
	<div align="center">
	<div id="login">
	Please Login<br />
<form method="POST">
	Username: <input type='text' name='username'/> <br /><br />
	Password: <input type='password' name='password'/><br /><br />
	<input type='submit' name='submit' value='Submit' /><br /><br />
</form>
	</div>
	</div>
</body>
=======
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
                color= black;
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
        <hr/>
    </head>
    
    <body>
        <div align="center">
            <div id="login">
                Please Login<br />
                <form method="POST">
                    Username: <input class="form-control" type='text' name='username'/> <br /><br />
                    Password: <input class="form-control" type='password' name='password'/><br /><br />
                    <input class="btn btn-default" type='submit' name='submit' value='Submit' /><br /><br />
                </form>
            </div>
        </div>
    </body>
    
>>>>>>> master
 <?php 
         


       echo form_open('user');

 ?>
</html>