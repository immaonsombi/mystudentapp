<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: black;
        }

        * {
            box-sizing: padding-box;
        }

        /* Add padding to containers */
        .container {
            padding: 5px;
            background-color: white;
        }

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 10%;
            padding: 5px;
            margin: 5px 22px 10px 0;
            display: inline-block;
            border: none;
            background: #f1f1f1;
        }

        input[type=text]:focus, input[type=password]:focus {
            background-color: #ddd;
            outline: none;
        }

        /* Overwrite default styles of hr */
        hr {
            border: 1px solid #f1f1f1;
            margin-bottom: 25px;
            margin-right: 25px;
        }

        /* Set a style for the submit button */
        .registerbtn {
            background-color: #4CAF50;
            color: white;
            padding: 16px 20px;
            margin: 8px ;
            border: none;
            cursor: pointer;
            width: 15%;
            opacity: 0.9;
        }

        .registerbtn:hover {
            opacity: 1;
        }

        /* Add a blue text color to links */
        a {
            color: dodgerblue;
        }

        /* Set a grey background color and center the text of the "sign in" section */
        .signin {
            background-color: #f1f1f1;
            text-align: center;
        }
    </style>
</head>
<body>

<form action="{{action('StudentController@store')}}"  method="post">

    {{csrf_field()}}
    <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to Register</p>
        <hr>
        <div class="form-group col-md-9">
            <label for="student_number">Student Number</label>
            <input type="number" class="form-control" name="student_number">
        </div>
        <br>


        <div class="row">
            <div class="col-md-9"></div>
            <div class="form-group col-md-9">
                <label for="full_name">Full Name:</label>
                <input type="text" class="form-control" name="full_name">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-9"></div>
            <div class="form-group col-md-9">
                <label for="date_of_birth">Date of Birth:</label>
                <input type="date" class="form-control" name="date_of_birth">
            </div>
        </div>
        <div class="row">
            <div class="col-md-9"></div>
            <div class="form-group col-md-9">
                <label for="address">Address:</label>
                <input type="text" class="form-control" name="address">
            </div>
        </div>

        <button type="submit" class="registerbtn">Register</button>
    </div>

    </form>

</body>
</html>
