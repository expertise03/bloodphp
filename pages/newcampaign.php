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
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        #wrapper {
            padding: 30px;
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
            margin-bottom: 30px;
        }

        .panel-heading {
            background-color: #3498db;
            color: white;
            font-size: 24px;
            font-weight: bold;
            padding: 15px;
            border-radius: 5px 5px 0 0;
        }

        .panel-body {
            padding: 30px;
        }

        .form-group label {
            font-size: 16px;
            font-weight: bold;
        }

        .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
            padding: 15px;
            margin-bottom: 15px;
        }

        .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 0 5px rgba(52, 152, 219, 0.5);
        }

        .btn-success {
            background-color: #27ae60;
            border-radius: 5px;
            font-size: 16px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }

        .btn-success:hover {
            background-color: #2ecc71;
            color: white;
        }

        footer {
            background-color: #424558;
            color: #ccc;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        footer p {
            margin: 0;
            line-height: 100%;
        }

        /* Responsiveness */
        @media (max-width: 768px) {
            .page-header {
                font-size: 28px;
            }

            .form-control {
                font-size: 14px;
            }

            .btn-success {
                font-size: 14px;
                padding: 8px 16px;
            }
        }

    </style>

</head>

<body>

    <div id="wrapper">

        <?php include 'includes/nav.php' ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Start New Campaign</h1>
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
                                <div class="col-lg-6 col-md-8 col-sm-10 mx-auto">
                                    <form role="form" action="addedcampaign.php" method="post">
                                     
                                        <div class="form-group">
                                            <label>Campaign Name</label>
                                            <input class="form-control" type="text" placeholder="Enter Campaign's Name" name="cname" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Organizer Name</label>
                                            <input class="form-control" type="text" placeholder="Enter Organizer's Name" name="oname" required>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Contact Number</label>
                                            <input class="form-control" placeholder="9876543210" type="number" name="phn" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Campaign Date</label>
                                            <input class="form-control" type="date" name="cdate" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="form-control" type="text" rows="4" name="descp" required></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-success" style="border-radius: 0%;">Post</button>

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
