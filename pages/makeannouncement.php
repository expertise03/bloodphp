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
            background-color: #f4f6f9;
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
        }

        .panel-heading {
            background-color: #3498db;
            color: white;
            font-size: 24px;
            font-weight: bold;
            padding: 20px;
            border-radius: 5px 5px 0 0;
        }

        .panel-body {
            padding: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            height: 45px;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            border: 1px solid #ddd;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 0 8px rgba(52, 152, 219, 0.6);
        }

        .btn-success {
            background-color: #28a745;
            color: white;
            font-size: 16px;
            padding: 12px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-success:hover {
            background-color: #218838;
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

        @media (max-width: 768px) {
            .page-header {
                font-size: 28px;
            }

            .form-control {
                font-size: 14px;
            }

            .btn-success {
                width: 100%;
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
                    <h1 class="page-header">Make Announcement</h1>
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
                                    <form role="form" action="announce.php" method="post">

                                        <div class="form-group">
                                            <label>Enter Announcement Title</label>
                                            <input class="form-control" type="text" placeholder="Announcement Title" name="announcement" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Blood Needed (Type)</label>
                                            <input class="form-control" type="text" placeholder="example: B+" name="bloodneed" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Date and Time</label>
                                            <input class="form-control" type="date" name="dat" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Organized by</label>
                                            <input class="form-control" placeholder="Enter Organizer's Name" type="text" name="organizer" required>
                                        </div>

                                        <div class="form-group">
                                            <label>Requirements</label>
                                            <textarea class="form-control" rows="4" type="text" name="requirements" required></textarea>
                                        </div>

                                        <button type="submit" class="btn-success btn btn-default">Submit</button>

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
