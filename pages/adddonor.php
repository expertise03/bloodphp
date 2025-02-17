<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BDMS</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="../icofont/icofont.min.css">

    <style>
        /* Overall body */
        body {
            background-color: #f4f6f9;
            font-family: 'Arial', sans-serif;
            padding-top: 40px;
        }

        #wrapper {
            padding: 40px;
        }

        .page-header {
            color: #3498db;
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .panel-default {
            border: none;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .panel-heading {
            background-color: #3498db;
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-align: center;
            padding: 15px 0;
            border-radius: 5px 5px 0 0;
        }

        .form-group label {
            font-size: 16px;
            font-weight: 600;
            color: #34495e;
        }

        .form-control {
            border-radius: 5px;
            padding: 12px;
            font-size: 16px;
            border: 1px solid #ccc;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 0 8px rgba(52, 152, 219, 0.6);
        }

        .btn-success {
            background-color: #3498db;
            border-color: #3498db;
            color: #fff;
            font-size: 18px;
            padding: 12px 30px;
            border-radius: 30px;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .btn-success:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }

        footer {
            background-color: #2c3e50;
            bottom: 0;
            left: 0;
            right: 0;
            height: 40px;
            text-align: center;
            color: #ccc;
            padding-top: 10px;
        }

        footer p {
            margin: 0;
            font-size: 14px;
        }

        .panel-body {
            padding: 30px;
        }

        .row {
            margin-bottom: 20px;
        }

        .checkbox label {
            font-size: 14px;
        }

        .help-block {
            font-size: 14px;
            color: #888;
        }

        .form-control {
            margin-bottom: 10px;
        }

        /* Specific style for form controls like email, number etc */
        input[type="email"], input[type="number"], input[type="date"], input[type="password"], input[type="text"] {
            width: 100%;
            margin-bottom: 10px;
        }
    </style>

</head>

<body>

    <div id="wrapper">
        <?php include 'includes/nav.php'?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Add Donor's Detail</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Please fill up the form below:
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <form role="form" action="added.php" method="post">
                                            <div class="form-group">
                                                <label>Enter Full Name</label>
                                                <input class="form-control" name="name" type="text" placeholder="Example:Harry Den" required>
                                            </div>
                                            <div class="form-group">
                                                <label>Enter Guardian's Name</label>
                                                <input class="form-control" placeholder="Guardian's Name" name="guardiansname" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Gender [ M/F ]</label>
                                                <input class="form-control" placeholder="M or F" name="gender" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Enter D.O.B</label>
                                                <input class="form-control" type="date" name="dob" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Enter Weight</label>
                                                <input class="form-control" type="number" placeholder="Enter Weight" name="weight" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Enter Blood Group</label>
                                                <input class="form-control" placeholder="Eg: B+" name="bloodgroup" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Enter Email Id</label>
                                                <input class="form-control" type="email" placeholder="Enter Email Id" name="email" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Enter Address</label>
                                                <input class="form-control" type="text" placeholder="Enter Address Here" name="address" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Enter Contact Number</label>
                                                <input class="form-control" type="number" placeholder="Contact Number" name="contact" required>
                                            </div>

                                            <div class="form-group">
                                                <label>Enter Username</label>
                                                <input class="form-control" placeholder="Enter Here" name="username" required>
                                                <p class="help-block">In order to create donor's account.</p>
                                                <p class="help-block">Example: harry20</p>
                                            </div>

                                            <div class="form-group">
                                                <label>Enter Password</label>
                                                <input class="form-control" name="password" type="password" id="myInput" required>
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" onclick="myFunction()">Show Password
                                                    </label>
                                                </div>
                                            </div>

                                            <button type="submit" class="btn btn-success">Submit Form</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /.panel-body -->
                        </div>
                        <!-- /.panel -->
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->

    <script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

   

    <style>
        footer {
            background-color: #424558;
            bottom: 0;
            left: 0;
            right: 0;
            height: 35px;
            text-align: center;
            color: #CCC;
        }

        footer p {
            padding: 10.5px;
            margin: 0px;
            line-height: 100%;
        }

        /* Overall body */
body {
    background-color: #f4f6f9;
    font-family: 'Arial', sans-serif;
    padding-top: 40px;
}

#wrapper {
    padding: 40px;
}

.page-header {
    color: #3498db;
    font-size: 36px;
    font-weight: bold;
    margin-bottom: 30px;
}

.panel-default {
    border: none;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    background-color: #fff;
}

.panel-heading {
    background-color: #3498db;
    color: white;
    font-size: 24px;
    font-weight: bold;
    text-align: center;
    padding: 15px 0;
    border-radius: 5px 5px 0 0;
}

.form-group label {
    font-size: 16px;
    font-weight: 600;
    color: #34495e;
}

/* Ensure form controls are the same size */
.form-control {
    border-radius: 5px;
    padding: 12px 15px;  /* uniform padding */
    font-size: 16px;
    border: 1px solid #ccc;
    width: 100%;  /* Full width */
    box-sizing: border-box; /* Prevents padding from affecting width */
    transition: all 0.3s ease;
}

/* Focus state for input fields */
.form-control:focus {
    border-color: #3498db;
    box-shadow: 0 0 8px rgba(52, 152, 219, 0.6);
}

/* Button style */
.btn-success {
    background-color: #3498db;
    border-color: #3498db;
    color: #fff;
    font-size: 18px;
    padding: 12px 30px;
    border-radius: 30px;
    transition: background-color 0.3s ease, border-color 0.3s ease;
}

.btn-success:hover {
    background-color: #2980b9;
    border-color: #2980b9;
}

/* Footer style */
footer {
    background-color: #2c3e50;
    bottom: 0;
    left: 0;
    right: 0;
    height: 40px;
    text-align: center;
    color: #ccc;
    padding-top: 10px;
}

footer p {
    margin: 0;
    font-size: 14px;
}

.panel-body {
    padding: 30px;
}

.row {
    margin-bottom: 20px;
}

.checkbox label {
    font-size: 14px;
}

.help-block {
    font-size: 14px;
    color: #888;
}

    </style>

</body>

</html>
