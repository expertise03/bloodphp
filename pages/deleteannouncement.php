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

    <!-- Additional Icon Fonts -->
    <link rel="stylesheet" href="../icofont/icofont.min.css">

    <!-- Custom Styles -->
    <style>
        /* Header Styling */
        .page-header {
            font-size: 28px;
            font-weight: bold;
            color: #007BFF;
        }

        /* Table Styling */
        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }

        .table th {
            background-color: #f8f9fa;
        }

        .table-hover tbody tr:hover {
            background-color: #f1f1f1;
        }

        /* Button Styling */
        .delete-btn {
            color: red;
            font-size: 18px;
            cursor: pointer;
        }

        .delete-btn:hover {
            color: #dc3545;
            text-decoration: none;
        }

        /* Panel Header Styling */
        .panel-heading {
            background-color: #007BFF;
            color: white;
            font-weight: bold;
        }

        /* Footer Styling */
        footer {
            background-color: #424558;
            text-align: center;
            color: #CCC;
            padding: 10px;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        footer p {
            margin: 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .table-responsive {
                margin-top: 20px;
            }
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
                        <h1 class="page-header">Delete Announcement Detail</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Total Records of Announcement Made
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
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>";

                                            while ($row = mysqli_fetch_array($result)) {
                                                echo "
                                                <tbody>
                                                    <tr>
                                                        <td>{$row['announcement']}</td>
                                                        <td>{$row['bloodneed']}</td>
                                                        <td>{$row['dat']}</td>
                                                        <td>{$row['organizer']}</td>
                                                        <td>{$row['requirements']}</td>
                                                        <td><a href='deletedannounce.php?id={$row['id']}' class='delete-btn'><i class='fa fa-trash'></i></a></td>
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
