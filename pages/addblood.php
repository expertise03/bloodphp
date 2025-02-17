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
            /* background-color: #e3f2fd;  */
            font-family: 'Arial', sans-serif;
            padding-top: 20px;
        }

        #wrapper {
            padding: 20px;
        }

        .page-header {
            color: #1e88e5; /* Blue color for header text */
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 30px;
        }

        .panel-default {
            border: none;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }

        .panel-heading {
            background-color: #1e88e5; /* Dark blue header */
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
            color: #1e88e5; /* Blue color for labels */
        }

        .form-control {
            border-radius: 5px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #1e88e5; /* Blue border for inputs */
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .form-control:focus {
            border-color: #1565c0; /* Darker blue on focus */
            box-shadow: 0 0 8px rgba(21, 101, 192, 0.6);
        }

        .btn-success {
            background-color: #1e88e5; /* Blue button */
            border-color: #1e88e5;
            color: #fff;
            font-size: 18px;
            padding: 10px 30px;
            border-radius: 30px;
            transition: background-color 0.3s ease, border-color 0.3s ease;
        }

        .btn-success:hover {
            background-color: #1565c0; /* Darker blue button on hover */
            border-color: #1565c0;
        }

        footer {
            background-color: #1e88e5; /* Blue footer */
            bottom: 0;
            left: 0;
            right: 0;
            height: 40px;
            text-align: center;
            color: #fff;
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
    </style>

</head>

<body>

    <div id="wrapper">

        <?php include 'includes/nav.php'?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Blood Details</h1>
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
                                    <form role="form" action="addedblood.php" method="post">
                                     
                                        <div class="form-group">
                                            <label>Enter Full Name</label>
                                            <input class="form-control" type="text" placeholder="Harry Den" name="name" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Gender [ M/F ]</label>
                                            <input class="form-control" placeholder="M or F" name="gender" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Date of birth</label>
                                            <input class="form-control" type="date" name="dob" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Weight</label>
                                            <input class="form-control" placeholder="Weight" type="number" name="weight" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Blood Group</label>
                                            <input class="form-control" placeholder="Eg: B+" name="bloodgroup" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Address</label>
                                            <input class="form-control" placeholder="Address" type="text" name="address" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Enter Contact Number</label>
                                            <input class="form-control" placeholder="Contact Number" type="number" name="contact" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Blood Quantity</label>
                                            <input class="form-control" placeholder="Blood Quantity" type="number" name="bloodqty" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Collection Date</label>
                                            <input class="form-control" type="date" name="collection" required>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-success">Submit Form</button>
                
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>



</html>
