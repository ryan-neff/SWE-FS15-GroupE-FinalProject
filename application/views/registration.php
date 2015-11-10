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
                color= black;
            }

            .title {
                align: center;
                text-align: center;
                width: 100%;
            }
        </style>

        <title>myZou SECURITY Request Registration</title>
        <div class="title">
            <h1>myZou SECURITY Request Registration</h1>
            <br>
            <h2>University of Missouri - Columbia</h2>
        </div>
        <hr/>
    </head>
    
    <body>
        <form name="registration" action="" method="POST">
            <label for="firstName">First Name: </label>
            <input id="firstName" class="form-control" type="text" name="firstName"></input><br />
            <label for="lastName">Last Name: </label>
            <input id="lastName" class="form-control" type="text" name="lastName"></input><br />
            <label for="userName">Create Username: </label>
            <input id="userName" class="form-control" type="text" name="userName"></input><br />
            <label for="createPassword">Create Password: </label>
            <input id="createPassword" class="form-control" type="text" name="createPassword"></input><br />
            <label for="retypePassword">Retype Password: </label>
            <input id="retypePassword" class="form-control" type="text" name="retypePassword"></input><br />
        </form>
    </body>
</html>