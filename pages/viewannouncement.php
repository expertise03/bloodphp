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
            background-color: #f4f7fa;
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

        .table {
            width: 100%;
            margin-bottom: 30px;
            background-color: #fff;
            border-radius: 5px;
        }

        .table th,
        .table td {
            text-align: center;
            padding: 15px;
            vertical-align: middle;
        }

        .table-bordered {
            border: 1px solid #ddd;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #f9f9f9;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
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

            .table th, .table td {
                font-size: 14px;
            }
        }
    </style>

</head>

<body>

    <div id="wrapper">

        <?php include 'includes/nav.php' ?>

        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Announcement Detail</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Total Records of Announcements Made
                            </div>

                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <?php
                                        include "dbconnect.php";

                                        $qry = "SELECT * FROM announce";
                                        $result = mysqli_query($conn, $qry);

                                        echo "
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Blood Needed</th>
                                                <th>Announcement Date</th>
                                                <th>Organizer</th>
                                                <th>Requirements</th>
                                            </tr>
                                        </thead>";

                                        while ($row = mysqli_fetch_array($result)) {
                                            echo "<tbody>
                                            <tr>
                                                <td>".$row['announcement']."</td>
                                                <td>".$row['bloodneed']."</td>
                                                <td>".$row['dat']."</td>
                                                <td>".$row['organizer']."</td>
                                                <td>".$row['requirements']."</td>
                                            </tr>
                                            </tbody>";
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

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
